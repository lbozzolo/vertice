<?php

namespace Vertice\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Vertice\Models\Service;

class UpdateServiceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return Service::$rules;
    }
}
