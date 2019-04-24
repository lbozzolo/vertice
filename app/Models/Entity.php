<?php

namespace Vertice\Models;

use Eloquent as Model;
use Vertice\Models\Image as Image;

class Entity extends Model
{

    public function getFechaCreadoAttribute()
    {
        return date_format($this->attributes('created_at'),"d/m/Y");
    }

    public function getFechaEditadoAttribute()
    {
        return date_format($this->attributes('updated_at'),"d/m/Y");
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
