<?php

namespace Nobre\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Nobre\Models\Media;

class CreateMediaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return Media::$rules;
    }
}
