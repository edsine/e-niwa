<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    public $table = 'user_profiles';

    public $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'other_name',
        'email',
        'phone_number',
        'street',
        'state',
        'lga',
        'applicant_class',
        'application_type',
        'office_close_by',
        'city',
        'country',
        'alternate_phone_number',
        'date_of_birth',
        'is_first_time_dues_paid'
    ];

    protected $casts = [
        'first_name' => 'string',
        'last_name' => 'string',
        'other_name' => 'string',
        'email' => 'string',
        'phone_number' => 'string',
        'street' => 'string',
        'state' => 'string',
        'lga' => 'string'
    ];

    public static array $rules = [
        'user_id' => 'required',
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'other_name' => 'nullable|string|max:255',
        'email' => 'required||unique:user_profiles,email|string|max:255',
        'phone_number' => 'required|string|max:255',
        'street' => 'required|string|max:255',
        'state' => 'required|string|max:255',
        'lga' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
