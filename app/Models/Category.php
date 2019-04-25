<?php

namespace Vertice\Models;

use Vertice\Models\Entity as Entity;

/**
 * Class Category
 * @package Vertice\Models
 * @version September 3, 2018, 10:55 pm UTC
 *
 * @property string name
 * @property string slug
 */
class Category extends Entity
{
    public $table = 'categories';

    public $fillable = [
        'name',
        'slug'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'slug' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'categories_projects');
    }

    
}
