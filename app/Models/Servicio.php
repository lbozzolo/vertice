<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Servicio
 * @package App\Models
 * @version September 3, 2018, 10:39 pm UTC
 *
 * @property string title
 * @property string body
 */
class Servicio extends Model
{
    use SoftDeletes;

    public $table = 'servicios';
    

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
        
    ];

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    
}
