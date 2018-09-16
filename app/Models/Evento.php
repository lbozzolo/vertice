<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Evento
 * @package App\Models
 * @version September 3, 2018, 10:43 pm UTC
 *
 * @property string title
 * @property string body
 */
class Evento extends Model
{
    use SoftDeletes;

    public $table = 'eventos';
    

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

    
}
