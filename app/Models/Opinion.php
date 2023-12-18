<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Opinion extends Model 
{

    protected $table = 'opiniones5';

    protected $fillable = [
        'nombre',
        'correo',
        'opinion',
        'valor'
    ];

}
