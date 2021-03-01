<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'username' => 'required | unique:users |bail',
            'password' => 'required | min:8 | max:20 |alpha_num',
            'fullname' => 'required | min:3 | max:30 |alpha',
            'email'    => 'required | min:10 | max:50 |email',
            'city'     => 'required | min:3 | max:20',
            'phone'    => 'required | min:11 | max:15' 
        ];
    }

    public function messages()
    {
        return[
'username.required' => 'cannot empty'
        ];
    }
}
