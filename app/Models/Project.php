<?php

namespace Vertice\Models;

use Vertice\Models\Entity as Entity;

class Project extends Entity
{
//    public $table = 'projects';
//    public $image_croppie_width = 960;
//    public $image_croppie_height = 720;

    public $fillable = [
        'title',
        'description',
        'url',
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

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'categories_projects');
    }

}
