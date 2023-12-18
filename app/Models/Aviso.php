<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    protected $table = 'avisos';

    protected $fillable = [
        'nombre',
        'apellido',
        'numero',
        'dni',
    
    ];

}
