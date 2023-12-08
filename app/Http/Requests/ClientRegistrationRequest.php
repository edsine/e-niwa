<?php

namespace App\Http\Requests;

use App\Models\Application;
use Illuminate\Foundation\Http\FormRequest;

class ClientRegistrationRequest extends FormRequest
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
        $rules = [

            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|string|email|max:100',
            'password' => 'required|string|min:8|confirmed|max:255',
            'phone_number' => 'required|string|max:100',
            'street' => 'required|string|max:255',
            'state' => 'required|string|max:50',
            'lga' => 'required|string|max:50',
            'applicant_class' => 'required|string|max:50',
            'application_type' => 'required|string|max:50',
            'office_close_by' => 'required|string|max:50',
            'city' => 'required|string|max:50',
            'country' => 'required|string|max:50',
        ];

        return $rules;
    }
}
