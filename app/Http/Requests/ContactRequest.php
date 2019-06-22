<?php

namespace Vertice\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'max:255',
            'message' => 'required|max:1000'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo Nombre es obligatorio',
            'name.max' => 'El campo Nombre no puede exceder los 255 caracteres',

            'email.required' => 'El campo Email es obligatorio',
            'email.email' => 'El campo Email debe tener un formato correcto',

            'phone.max' => 'El campo Teléfono no puede exceder los 255 caracteres',

            'message.required' => 'El campo Mensaje es obligatorio',
            'message.max' => 'El campo Mensaje no puede exceder los 1000 caracteres',
        ];
    }
}
