<?php

namespace Ramiroquai\Models;

use Ramiroquai\Models\Entity as Entity;

class Event extends Entity
{
    public $table = 'events';
    public $image_croppie_width = 960;
    public $image_croppie_height = 720;

    public $fillable = [
        'title',
        'description',
        'type',
        'active'
    ];

    protected $casts = [
        'title' => 'string',
        'description' => 'string',
    ];

    public static $rules = [
        'title' => 'required',
        'description' => 'required'
    ];

}
