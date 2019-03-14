<?php

namespace Amghi\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Noticia
 * @package Amghi\Models
 * @version September 3, 2018, 10:44 pm UTC
 *
 * @property string name
 * @property string code
 */
class Noticia extends Model
{
    use SoftDeletes;

    public $table = 'noticias';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title', 'body', 'active', 'highlight'
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
        'title' => 'required|max:255',
        'body' => 'required:1500'
    ];

    public function getFechaCreadoAttribute()
    {
        return date_format($this->created_at,"d/m/Y");
    }

    public function getFechaEditadoAttribute()
    {
        return date_format($this->updated_at,"d/m/Y");
    }

    public function mainImage()
    {
        return $this->images()->where('main', 1)->first();
    }

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

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class, 'categorias_noticias');
    }

    
}
