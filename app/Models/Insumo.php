<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Insumo
 * @package App\Models
 * @version September 3, 2018, 10:44 pm UTC
 *
 * @property string name
 * @property string code
 */
class Insumo extends Model
{
    use SoftDeletes;

    public $table = 'insumos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'code'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'code' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|max:255',
        'code' => 'required',
        'colors' => 'min:1',
        'categorias' => 'min:1',
    ];

    public function getMainImageAttribute()
    {
        $images = $this->images();
        return $images->where('main', 1)->first();
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

    public function colors()
    {
        return $this->belongsToMany('App\Models\Color', 'colors_insumos');
    }

    public function categorias()
    {
        return $this->morphToMany('App\Models\Categoria', 'categoriable');
    }

    
}
