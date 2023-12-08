<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    public $table = 'applications';

    public $fillable = [
        'user_id',
        'area_office',
        'company_name',
        'business_nature',
        'application_status'
    ];

    protected $casts = [
        'area_office' => 'string',
        'company_name' => 'string',
        'business_nature' => 'string'
    ];

    public static array $rules = [
        'user_id' => 'required',
        'area_office' => 'required|string|max:100',
        'company_name' => 'required|string|max:100',
        'business_nature' => 'nullable|string|max:100',
        'application_status' => 'required'
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
