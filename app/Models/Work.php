<?php

namespace Nobre\Models;

use Eloquent as Model;
use Nobre\Models\Image as Image;

class Work extends Model
{
    public $table = 'works';

    public $fillable = [
        'title',
        'body',
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

    public function imagesThumb()
    {
        return $this->morphMany(Image::class, 'imageable')->where('thumbnail_id', null);
    }

    public function imagesBig()
    {
        return $this->morphMany(Image::class, 'imageable')->where('thumbnail_id', '!=', null);
    }

}
