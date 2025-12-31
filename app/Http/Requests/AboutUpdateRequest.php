<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutUpdateRequest extends FormRequest
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
            'title'                      => 'string|max:200',
            'description'                => 'string|max:300',
            'completeproject'            => 'integer|max:200',
            'statifiedclients'           => 'string|max:200',
            'yearofexcellence'           => 'string|max:200',
            'image'                      => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }
}
