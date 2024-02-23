<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'=>'required',
            'email'=>'required|email|unique:personnes',
            'password'=>'required|min:5|max:15|confirmed|regex:/^(?=.*[a-z])(?=.*[A-Z]).+$/',
            'bio'=>'required',
            'image'=>'image|mimes:png,jpg,jpeg,svg|max:10240',
        ];
    }
}
