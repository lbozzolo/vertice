<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Categoriable;

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
            'name_contact' => 'required|max:255',
            'lastname_contact' => 'required|max:255',
            'email_contact' => 'required|email',
            //'verify_contact' => 'required|in:4',
        ];
    }

    public function messages()
    {
        return [
            'name_contact.required' => 'El campo Nombre es obligatorio',
            'name_contact.max' => 'El campo Nombre no puede exceder los 255 caracteres',

            'lastname_contact.required' => 'El campo Apellido es obligatorio',
            'lastname_contact.max' => 'El campo Apellido no puede exceder los 255 caracteres',

            'email_contact.required' => 'El campo Email es obligatorio',
            'email_contact.email' => 'El campo Email debe tener un formato correcto',

            //'verify_contact.required' => 'El campo "¿Es usted Humano?" debe ser completado',
            //'verify_contact.in' => 'El campo "¿Es usted Humano?" debe ser completado correctamente',
        ];
    }
}
