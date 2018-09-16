<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Color
 * @package App\Models
 * @version September 3, 2018, 10:45 pm UTC
 *
 * @property string name
 */
class Color extends Model
{

    public $table = 'colors';
    public $timestamps = false;

    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    public function insumos()
    {
        return $this->belongsToMany('App\Models\Insumos', 'colors_insumos');
    }

    
}
