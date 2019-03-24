<?php

namespace Amghi\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Medico extends Authenticatable
{
    public $table = 'medicos';

    public $fillable = [
        'matricula',
        'clave'
    ];

}
