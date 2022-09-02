<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGovernorateRequest extends FormRequest
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
            'name' => 'required|unique:governorates|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The Governorate Name is required',
            'name.unique' => 'The Governorate Name is Existed Please Enter Another Name',
        ];
    }
}
