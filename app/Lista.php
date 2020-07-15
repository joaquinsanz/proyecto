<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    protected $fillable = [
        'name', 'descripcion', 'saldo'
    ];
    protected $casts = [
        'participantes' => 'array'
    ];
}