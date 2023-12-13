<?php

namespace App\Http\Requests;

use App\Models\UserProfile;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserProfileRequest extends FormRequest
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
        $id = $this->route('user_profile');
        $rules = UserProfile::$rules;

        $rules['email'] = 'required|email|unique:users,email,' . $id;

        return $rules;
    }
}
