<?php

namespace Ramiroquai\Models;

use Eloquent as Model;
use Ramiroquai\Models\Image as Image;

class Event extends Model
{
    public $table = 'events';

    public $fillable = [
        'title',
        'description',
        'type',
        'active'
    ];

    protected $casts = [
        'title' => 'string',
        'body' => 'string',
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

    public function mainImage()
    {
        return $this->images()->where('main', 1)->first();
    }

    public function imagesThumb()
    {
        return $this->morphMany(Image::class, 'imageable')->where('thumbnail_id', null);
    }

    public function imagesBig()
    {
        return $this->morphMany(Image::class, 'imageable')->where('thumbnail_id', '!=', null);
    }

}
