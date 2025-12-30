<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarouselUpdateRequest extends FormRequest
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
            'title'             => 'string |max:100',
            'subtitle'          => 'string |max:100',
            'description'       => 'string |max:300',
            'subdescription'    => 'string |max:300',
            'videolink'         => 'string |max:300',
            'image'             => 'image  |mimes:png,jpeg,jpg',
        ];
    }
}
