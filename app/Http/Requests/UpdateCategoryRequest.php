<?php

namespace Vertice\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Vertice\Models\Category;

class UpdateCategoryRequest extends FormRequest
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
