<?php

namespace Nobre\Models;

use Eloquent as Model;

/**
 * Class Category
 * @package Nobre\Models
 * @version September 3, 2018, 10:55 pm UTC
 *
 * @property string name
 * @property string slug
 */
class Media extends Model
{
    public $table = 'medias';

    public $fillable = ['type'];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = ['type' => 'enum'];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'type' => 'required'
    ];

    public function getFechaCreadoAttribute()
    {
        return date_format($this->created_at,"d/m/Y");
    }

    public function getFechaEditadoAttribute()
    {
        return date_format($this->updated_at,"d/m/Y");
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }


}
