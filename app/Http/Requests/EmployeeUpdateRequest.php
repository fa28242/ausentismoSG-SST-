<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeUpdateRequest extends FormRequest
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
            'name' => 'required',
            'lastname' => 'required',
            'identif_type_id' => 'required',
            'identif_number' => 'required',
            'salary' => 'required',
            'position' => 'required',
            'work_area' => 'required',
            'eps_id' => 'required',
            'arl_id' => 'required',
            'afp_id' => 'required',
        ];
    }
    
    public function messages()
   {
        return
        [
            'name.required' => 'Debe ingresar los nombres completos',
            'lastname.required' => 'Debe ingresar los apellidos completos',
            'identif_type_id.required' => 'Debe ingresar un número de identificación',
            'identif_number.required' => 'Debe ingresar un número de identificación',
            'salary.required' => 'Debe ingresar el salario',
            'position.required' => 'Debe ingresar el cargo',
            'work_area.required' => 'Debe ingresar el área de trabajo',
            'eps_id.required' => 'Debe ingresar la Eps',
            'arl_id.required' => 'Debe ingresar la Arl',
            'afp_id.required' => 'Debe ingresar la Afp',
        ];
   } 
}
