<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg,PNG,JPG|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The Title is required',
            'name.unique' => 'The Title is Existed Please Enter Another Name',
            'body.required' => 'The Body is required',
        ];
    }
}
