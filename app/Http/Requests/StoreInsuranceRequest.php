<?php

namespace App\Http\Requests;

use App\Models\Insurance;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreInsuranceRequest extends ApiRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:250',
            'type'  => ['bail', 'required', Rule::in([ //TODO: to verify when integration all insurance type work or  not
                Insurance::VEHICLE_INSURANCE,
                Insurance::PROPERTY_INSURANCE,
                Insurance::BUSINESS_INSURANCE,
                Insurance::OTHER_INSURANCE
            ])],
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif',

        ];
    }
}
