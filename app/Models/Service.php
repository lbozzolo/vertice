<?php

namespace Vertice\Models;

use Vertice\Models\Entity as Entity;

class Service extends Entity
{
    public $table = 'services';

    public $fillable = [
        'name',
        'description'
    ];

    protected $casts = [
        'name' => 'string',
        'description' => 'string'
    ];

    public static $rules = [
        'name' => 'required'
    ];

}
