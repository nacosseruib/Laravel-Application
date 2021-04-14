<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{

    //Check if user is uthorized to make this perticular request.
    public function authorize()
    {
        return true;
    }


    //validate rules that will be use for the request
    public function rules()
    {
        return [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|unique:user|max:255',
            'password' => 'required|min:8|max:255',
            'address' => 'required'
        ];
    }

    //validate registration fields
    public function register()
    {
        return [
            'first_name.required' => 'Name is required',
            'last_name.required' => 'Name is required',
            'email.unique' => 'Email already exists',
            'password.required' => 'Password is required',
            'address.required'  => 'Address is required',
        ];
    }

}//endclass


