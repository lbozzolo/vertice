<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Eloquent as Model;

/**
 * Class Proyecto
 * @package App\Models
 * @version September 3, 2018, 10:41 pm UTC
 *
 * @property string title
 * @property string body
 */
class Proyecto extends Model
{
    use SoftDeletes;

    public $table = 'proyectos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'body'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'body' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'body' => 'required'
    ];

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function getImagesOrderedAttribute()
    {
        $images = $this->images()->get();
        $imagenes = $images->sortByDesc('main')->all();

        return $imagenes;
    }

    public function getMainImageAttribute()
    {
        $images = $this->images();
        return $images->where('main', 1)->first();
    }

    
}
