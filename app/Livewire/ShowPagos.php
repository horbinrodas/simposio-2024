<?php

namespace App\Livewire;

use Faker\Provider\ar_EG\Text;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Livewire\Component;
use Filament\Tables\Table;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Actions\Action;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\Actions\Action as InfolistAction;
use Illuminate\Database\Eloquent\Builder;
use App\Mail\ConfirmacionPago;
use App\Mail\DatosAdicionales;
use Illuminate\Support\Facades\Mail;

class ShowPagos extends Component implements HasTable, HasForms
{
    use InteractsWithTable;
    use InteractsWithForms;
    public function render()
    {
        return view('livewire.show-pagos');
    }
 
    public function table(Table $table): Table
    {
        return $table
            ->query(\App\Models\Participante::query())
            ->columns([
                TextColumn::make('id')->label('id'),
                TextColumn::make('participacion.puntos')->label('Puntos'),
                TextColumn::make('nombre')->label('Nombre'),
                TextColumn::make('apellido')->label('Apellido'),    
                TextColumn::make('email')->label('Correo Electrónico'),
                TextColumn::make('telefono')->label('Teléfono'),
                TextColumn::make('pago.monto')->label('Monto'),
                TextColumn::make('pago.created_at')->label('Fecha de Creación')->sortable(),
                ImageColumn::make('umg.png')->label('Comprobante')->defaultImageUrl('images/umg.png'),
                TextColumn::make('pago.estado')->label('Estado de Pago'),
            ])
            ->filters([
                Filter::make('tiene_pago')
                    ->query(fn(Builder $query): Builder => $query->whereHas('pago')),
                Filter::make('no_tiene_pago')
                    ->query(fn(Builder $query): Builder => $query->whereDoesntHave('pago')),
                Filter::make('pagado')
                    ->query(fn(Builder $query): Builder => $query->whereHas('pago', fn(Builder $query) => $query->where('estado', 'pagado'))),
                Filter::make('recibido')
                    ->query(fn(Builder $query): Builder => $query->whereHas('pago', fn(Builder $query) => $query->where('estado', 'recibido'))),
                Filter::make('pendiente')
                    ->query(fn(Builder $query): Builder => $query->whereHas('pago', fn(Builder $query) => $query->where('estado', 'pendiente'))),
            ])
            ->actions([
                Action::make('Ver Detalle')
                ->infolist([
                    Section::make('Datos de Participante')
                        ->schema([
                            TextEntry::make('nombre')->label('Nombre'),
                            TextEntry::make('apellido')->label('Apellido'),    
                            TextEntry::make('email')->label('Correo Electrónico'),
                            TextEntry::make('telefono')->label('Teléfono'),
                        ])
                        ->columns(4),
                    Section::make('Datos de Pago')
                        ->schema([
                            TextEntry::make('pago.monto')->label('Monto'),
                            TextEntry::make('pago.fecha_pago')->label('Fecha de Pago'),
                            TextEntry::make('pago.created_at')->label('Fecha de Creación'),
                            TextEntry::make('pago.estado')->label('Estado de Pago'),
                            ImageEntry::make('umg.png')->label('Comprobante')->defaultImageUrl('images/umg.png'),
                        ])
                        ->columns(3),
                ]),
                Action::make('Validar Pago')
                    ->icon('heroicon-m-check-circle')
                    ->color('danger')
                    ->action(function (\App\Models\Participante $participante){
                        Mail::send(new ConfirmacionPago($participante));
                }),
                Action::make('Rechazar Pago')
                    ->icon('heroicon-m-x-circle')
                    ->color('danger')
                    ->action(function (\App\Models\Participante $participante){
                        Mail::send(new DatosAdicionales($participante));
                    }),
            ]);
        
    }
}
