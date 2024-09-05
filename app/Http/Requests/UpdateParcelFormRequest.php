<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateParcelFormRequest extends FormRequest
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
            'tracking_id' => ['nullable', 'int'],
            'sender_name' => ['nullable', 'string'],
            'sender_address' => ['nullable', 'string'],
            'sender_contact' => ['nullable', 'string'],
            'reci_name' => ['nullable', 'string'],
            'reci_address' => ['nullable', 'string'],
            'reci_contact' => ['nullable', 'string'],
            'tracking_id' => ['nullable', 'string'],
            'status' => ['nullable', 'string'],
            'dep_date' => ['nullable', 'string'],
            'pickup_date' => ['nullable', 'string'],
            'exp_date' => ['nullable', 'string'],
            'carrier_no' => ['nullable', 'string'],
            'branch_pro' => ['nullable', 'string'],
            'pickup_branch' => ['nullable', 'string'],
            'total_price' => ['nullable', 'string'],
            'image' => ['nullable','array'],
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
            'price' => ['nullable', 'string']
        ];
    }
}
