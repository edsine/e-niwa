<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    public $table = 'staff';

    public $fillable = [
        
        'street',
        'state',
        'lga',
        'applicant_class',
        'application_type',
        'office_close_by',
        'city',
        'country',
        'alternate_phone_number',
        'is_first_time_dues_paid',

        'user_id',
        'ranking_id',
        'department_id',
        'branch_id',
        'dash_type',
        'gender',
        'staff_id',
        'region',
        'phone',
        'profile_picture',
        'status',
        'alternative_email',
        'created_by',
        'date_approved',
        'approved_by',
        'security_key',
        'date_modified',
        'modified_by',
        'office_position',
        'position',
        'about_me',
        'total_received_email',
        'total_sent_email',
        'total_draft_email',
        'total_event',
        'my_groups',
        'designation_id',
        'account_holder_name',
        'account_number',
        'bank_name',
        'bank_identifier_code',
        'branch_location',
        'dob',
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
