<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class funcionario extends Model
{
    protected $fillable = [
        'numero',
        'nome',
        'funcao',
    ];
    use HasFactory;
}
