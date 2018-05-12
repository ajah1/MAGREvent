<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioCreateRequest extends FormRequest
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
            
            'dni' => 'required|unique:users',
            'name' => 'required',
            'apellidos' => 'required',
            'email' => 'required',
            'edad' => 'required|integer|min:18|max:99',
            'direccion' => 'required',
            'tipo' => 'required',
            'username' => 'required',
            'password' => 'required',
        ];
    }
}
