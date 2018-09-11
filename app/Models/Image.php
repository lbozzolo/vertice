<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Image
 * @package App\Models
 * @version September 3, 2018, 10:53 pm UTC
 *
 * @property string path
 * @property string title
 * @property integer imageable_id
 * @property string imageable_type
 * @property integer main
 */
class Image extends Model
{
    use SoftDeletes;

    public $table = 'images';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'path',
        'title',
        'imageable_id',
        'imageable_type',
        'main'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'path' => 'string',
        'title' => 'string',
        'imageable_id' => 'integer',
        'imageable_type' => 'string',
        'main' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function getTitleAttribute()
    {
        return ($this->attributes['title'])? $this->attributes['title'] : 'Imagen de muestra';
    }

    public function imageable()
    {
        return $this->morphTo();
    }

    
}
