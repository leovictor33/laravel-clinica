<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'data_nascimento',
        'endereco',
    ];

    protected $casts = [
        'data_nascimento' => 'date',
    ];
}
