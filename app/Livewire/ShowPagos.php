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
use Illuminate\Contracts\View\View;

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
                TextColumn::make('codigo_participante')->label('Código de Participante'),
                TextColumn::make('nombre')->label('Nombre'),
                TextColumn::make('apellido')->label('Apellido'),    
                TextColumn::make('email')->label('Correo Electrónico'),
                TextColumn::make('telefono')->label('Teléfono'),
                TextColumn::make('pago.estado')->label('Estado de Pago'),
                TextColumn::make('pago.fecha_pago')->label('Fecha de Pago'),
                TextColumn::make('pago.monto')->label('Monto'),
                ImageColumn::make('pago.comprobante')->label('Comprobante de Pago')->disk('comprobantes'),
            ]);
    }

    
}
