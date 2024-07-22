<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingFormRequest extends FormRequest
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
            'website_name' => ['nullable', 'string'],
            'website_url' => ['nullable', 'string'],
            'page_title' => ['nullable', 'max:255', 'string'],
            'meta_keywords' => ['nullable', 'max:500', 'string'],
            'meta_description' => ['nullable', 'max:500', 'string'],
            'address' => ['nullable', 'string'],
            'phone' => ['nullable', 'string'],
            'email' => ['nullable', 'email:filter', 'max:255', 'string'],
            'logo' => ['nullable', 'mimes:jpg,png,jpeg,PNG,JPG,JPEG'],
            'favicon' => ['nullable', 'mimes:jpg,png,jpeg,PNG,JPG,JPEG']
        ];
    }
}
