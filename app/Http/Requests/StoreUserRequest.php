<?php

namespace App\Http\Requests;


class StoreUserRequest extends ApiRequest
{
    public function rules(): array
    {
        return [
            'name'     => 'required|string|min:3|max:200',
            'email'    => 'required|unique:users,email|string|max:250',
            'phone'    => 'required|numeric',
            'password' => 'required|string|min:8|max:15',
            'gender'   => 'required|in:male,female' 
        ];
    }
}
