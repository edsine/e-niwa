<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public $table = 'payments';

    public $fillable = [
        'user_id',
        'payment_date',
        'transaction_reference',
        'service',
        'amount',
        'payment_status'
    ];

    protected $casts = [
        'payment_date' => 'datetime',
        'transaction_reference' => 'string',
        'service' => 'string',
        'amount' => 'decimal:2'
    ];

    public static array $rules = [
        'user_id' => 'required',
        'payment_date' => 'required',
        'transaction_reference' => 'required|string|max:100',
        'service' => 'required|string|max:100',
        'amount' => 'required|numeric',
        'payment_status' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
