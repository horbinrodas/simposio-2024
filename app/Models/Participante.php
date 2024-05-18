<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Participante extends Model
{
    use HasFactory;

    protected static function booted()
    {
        static::creating(function ($participante) {
            $participante->codigo_participante = Str::uuid()->toString();
        });
    }

    public function pago()
    {
        return $this->hasOne(Pago::class, 'participante_id', 'id');
    }

    public function participacion()
    {
        return $this->hasOne(Participacion::class, 'participante_id', 'id');
    }

    use HasFactory;
    protected $fillable = ['nombre', 'apellido', 'carnet', 'email', 'telefono'];
}
