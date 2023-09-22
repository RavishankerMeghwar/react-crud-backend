<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuoteRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name'     => 'required|string|max:250',
            'last_name'      => 'nullable|string|max:250',
            'email'          => 'nullable|string|email|max:250',
            'phone'          => 'nullable|numeric',
            'dob'            => 'required|string|max:250',
            'address'        => 'required|string|max:500',
            'apt'            => 'required|string|max:250',
            'zip_code'       => 'required|string|max:250',
            'gender'         => 'required|string|max:250',
            'merital_status' => 'required|string|max:250',
            'ss_number'      => 'required|string|max:250',
            //quote details validation
            'details.*.title' => 'nullable|string|max:255',
            'details.*.id'    => 'nullable|string|max:255',
        ];
    }
}
