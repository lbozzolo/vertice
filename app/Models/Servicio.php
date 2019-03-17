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

    public function mainImage()
    {
        return $this->images()->where('main', 1)->first();
    }

    public function mainImageOrNext()
    {
        $images = $this->images;
        return ($this->images()->where('main', 1)->first())? $this->images()->where('main', 1)->first() : $images->first();
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
