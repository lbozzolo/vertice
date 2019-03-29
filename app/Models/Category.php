<?php

namespace Nobre\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Category
 * @package Nobre\Models
 * @version September 3, 2018, 10:55 pm UTC
 *
 * @property string name
 * @property string slug
 */
class Category extends Model
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

    public function getFechaCreadoAttribute()
    {
        return date_format($this->created_at,"d/m/Y");
    }

    public function getFechaEditadoAttribute()
    {
        return date_format($this->updated_at,"d/m/Y");
    }

    public function applicants()
    {
        return $this->belongsToMany(Applicant::class, 'applicants_categories');
    }

    
}
