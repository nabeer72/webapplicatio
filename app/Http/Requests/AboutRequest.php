<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'                      => 'required|string|max:200',
            'description'                => 'required|string|max:300',
            'completeproject'            => 'nullable|string|max:200',
            'statifiedclients'           => 'nullable|string|max:200',
            'yearofexcellence'           => 'nullable|string|max:200',
            'image'                      => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }
}
