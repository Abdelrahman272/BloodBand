<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCityRequest extends FormRequest
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
            'name' => 'required|unique:cities|max:255',
            'governorate_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The City is required',
            'name.unique' => 'The City is unique',
            'governorate_id.required' => 'Please Select The Governorate',
        ];
    }
}
