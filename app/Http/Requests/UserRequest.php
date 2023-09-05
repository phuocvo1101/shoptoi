<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
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
            'txtUser'   => 'required|unique:users,username',
            'txtPass'   => 'required',
            'txtRePass' => 'required|same:txtPass',
            'txtEmail'  => 'required'
        ];
    }
    public function messages()
    {
        return [
            'txtUser.required' => "Please Enter Username",
            'txtUser.unique'    => "User is Exists",
            'txtPass.required'    => "Please Enter Password",
            'txtRePass.required' => "Please Enter Re-Password",
            'txtRePass.same' => "Two Password Don\'t Match",
            'txtEmail.required' => "Please Enter Email"
        ];
       
    }
}
