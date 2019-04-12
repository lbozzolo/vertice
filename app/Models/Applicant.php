<?php

namespace Ramiroquai\Models;

use Ramiroquai\Models\Entity as Entity;

class Applicant extends Entity
{
    public $table = 'applicants';

    public $fillable = [
        'name',
        'lastname',
        'email',
        'phone',
        'country',
        'province',
        'position',
        'company',
        'area',
        'text',
    ];

    protected $casts = [
        'name' => 'string',
        'lastname' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'country' => 'integer',
        'province' => 'integer',
        'position' => 'string',
        'company' => 'string',
        'area' => 'string',
        'text' => 'string',
    ];

    public static $rules = [
        'name' => 'required',
        'lastname' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'country' => 'required',
    ];

    public function getFullNameAttribute()
    {
        return $this->name.' '.$this->lastname;
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'applicants_categories');
    }

}