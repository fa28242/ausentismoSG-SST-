<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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

   
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
            
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Debe indicar un nombre',
            'email.required' => 'Debe indicar un email correcto',
           
        ];
    }
}
