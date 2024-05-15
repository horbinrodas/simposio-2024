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
}
