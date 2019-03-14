<?php

namespace Amghi\Models;

use Eloquent as Model;

class Servicio extends Model
{
    public $table = 'servicios';

    public $fillable = [
        'title',
        'body',
        'active'
    ];

    protected $casts = [
        'title' => 'string',
        'body' => 'string'
    ];

    public static $rules = [
        'title' => 'required',
        'body' => 'required'
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

    public function getTitleMayusAttribute()
    {
        return strtoupper($this->title);
    }

}
