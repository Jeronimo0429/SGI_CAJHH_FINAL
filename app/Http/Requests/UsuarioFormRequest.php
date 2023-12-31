<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'documento_identidad' => 'required', 'nombres' => 'required',
        ];
    }

    public function messages()
    {
    return [
        'documento_identidad.required' => 'El documento es un campo requerido',
        'nombres.required' => 'El nombre debe ser un campo requerido',
       
    ];
    }
}
