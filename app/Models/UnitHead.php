<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UnitHead extends Model
{
    public $table = 'unit_heads';

    public $fillable = [
       'unit_id',
       'user_id' 
    ];

    protected $casts = [
        
    ];

    public static array $rules = [
        'unit_id'=>'required',
        'user_id'=>'required'
    ];

    public function unit(){
        return $this->belongsTo(Unit::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
