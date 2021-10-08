<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupStoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'firstName' => 'required|min:2|max:50',
            'lastName' => 'required|min:2|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8|max:255',
            'selected_plan' => 'required|integer',
            'price' => 'required',
            'payment_period' => 'required|integer',
            'total_of_rooms' => 'required|integer',
            'total_to_pay' => 'required',
            'file' => 'sometimes'
        ];
    }
}
