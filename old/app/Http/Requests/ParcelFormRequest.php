<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParcelFormRequest extends FormRequest
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
            'sender_name' => ['required', 'string'],
            'sender_address' => ['required', 'string'],
            'sender_contact' => ['nullable', 'string'],
            'reci_name' => ['required', 'string'],
            'reci_address' => ['required', 'string'],
            'reci_contact' => ['nullable', 'string'],
            'tracking_id' => ['required', 'string'],
            'status' => ['nullable', 'string'],
            'dep_date' => ['nullable', 'string'],
            'pickup_date' => ['nullable', 'string'],
            'exp_date' => ['nullable', 'string'],
            'carrier_no' => ['nullable', 'string'],
            'branch_pro' => ['required', 'string'],
            'pickup_branch' => ['required', 'string'],
            'total_price' => ['nullable', 'string'],
            'image' => ['nullable', 'mimes:jpg,png,jpeg,PNG,JPG,JPEG'],
            'updated_date' => ['nullable', 'string'],
            'updated_time' => ['nullable', 'string'],
            'cstatus' => ['nullable', 'string'],
            'location' => ['nullable', 'string'],
            'remark' => ['nullable', 'string'],
            'quantity' => ['nullable', 'string'],
            'type' => ['nullable', 'string'],
            'width' => ['nullable', 'string'],
            'height' => ['nullable', 'string'],
            'weight' => ['nullable', 'string'],
            'length' => ['nullable', 'string'],
            'description' => ['nullable', 'string'],
            'inputs.*.price' => ['nullable', 'string']

        ];
    }
}
