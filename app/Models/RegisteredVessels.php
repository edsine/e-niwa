<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegisteredVessels extends Model
{
    public $table = 'registered_vessels';

    public $fillable = [
        'user_id',
        'vessel_name',
        'registration_date'
    ];

    protected $casts = [
        'vessel_name' => 'string',
        'registration_date' => 'datetime'
    ];

    public static array $rules = [
        'user_id' => 'required',
        'vessel_name' => 'required|string|max:100',
        'registration_date' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
