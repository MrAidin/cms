<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostEditRequest extends FormRequest
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
    protected function prepareForValidation()
    {
        if ($this->input('slug')) {
            $this->merge(['slug' => make_slug($this->input('slug'))]);
        } else {
            $this->merge(['slug' => make_slug($this->input('title'))]);

        }
    }

    public function rules()
    {
        return [
            'title' => 'required|min:10',
            'slug' => Rule::unique('posts')->ignore(request()->post),
            'description' => 'required',
            'category' => 'required',
            'status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'لطفا عنوان مطلب را وارد کنید',
            'title.min' => 'عنوان مطلب شما باید بیش از ده کاراکتر باشد',
            'slug.unique' => 'این نام مستعار قبلا ثبت شده است',
            'description.required' => 'توضیحات مطلب را وارد کنید',
            'category.required' => 'لطفا دسته بندی این مطلب را انتخاب کنید',
            'status.required' => 'وضعیت مطلب نامشخص است',
        ];
    }
}
