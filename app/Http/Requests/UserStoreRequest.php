<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'لطفا نام کامل خود را وارد کنید.',
            'email.required' => 'لطفا ایمیل خود را وارد کنید',
            'email.unique' => 'ایمیل نمیتواند تکراری باشد',
            'password.required' => 'لطفا رمز عبور خود را وارد کنید',
            'password.min' => 'رمز عبور باید حداقل ۶ کاراکتر باشد.',
        ];
    }
}
