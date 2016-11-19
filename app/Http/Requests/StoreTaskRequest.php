<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreTaskRequest extends Request
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
            'name' => 'alpha_num|required|max:255|unique:tasks',
            'priority' => 'required',
            'color' => 'regex:/#[a-fA-F0-9]{6}/'
        ];
    }

    /**
     * Define messages for each rule
     * @return array with messages for validation
     */
    public function messages(){
        return [
            'name.required' => 'Es ilogico tener un task sin el nombre :S',
            'name.unique'  => 'No pueden existir dos tasks iguales',
        ];
    }
}
