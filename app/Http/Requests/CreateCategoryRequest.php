<?php

namespace Nobre\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Nobre\Models\Category;

class CreateCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return Category::$rules;
    }
}
