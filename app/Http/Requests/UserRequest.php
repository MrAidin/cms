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
            'name' => 'required',
            'email' => 'required|email',
            'roles' => 'required',
            'status' => 'required',
            'password' => 'required|min:6',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'لطفا نام و نام خانوادگی خود را وارد کنید.',
            'email.required'=>'لطفا ایمیل  خود را وارد کنید.',
            'email.email'=>' ایمیل شما معتبر نیست.',
            'roles.required'=>'لطفا یک نقش انتخاب کنید.',
            'status.required'=>'لطفا وضعیت را انتخاب کنید.',
            'password.required'=>'لطفا رمز عبور خود را وارد کنید.',
            'password.min'=>' رمز عبور شما باید بیش از 6 کاراکتر باشد.',
        ];
    }
}
