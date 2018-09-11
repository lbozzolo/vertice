<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Categoriable
 * @package App\Models
 * @version September 3, 2018, 11:01 pm UTC
 *
 * @property integer categoriable_id
 * @property integer categoriable_type
 * @property integer categoria_id
 */
class Categoriable extends Model
{
    use SoftDeletes;

    public $table = 'categoriables';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'categoriable_id',
        'categoriable_type',
        'categoria_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'categoriable_id' => 'integer',
        'categoriable_type' => 'integer',
        'categoria_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
