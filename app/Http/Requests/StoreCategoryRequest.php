<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:categories|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The Category Name is required',
            'name.unique' => 'The Category Name is Existed Please Enter Another Name',
        ];
    }
}
