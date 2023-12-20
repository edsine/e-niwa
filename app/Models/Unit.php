<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public $table = 'units';

    public $fillable = [
        'unit_name',
        'department_id'
    ];

    protected $casts = [
        'unit_name' => 'string'
    ];

    public static array $rules = [
        'unit_name' => 'required',
        'department_id' => 'required'
    ];

    public function department(){
        return $this->belongsTo(Department::class);
    }
    
    public function user(){
        return $this->hasMany(User::class);
    }
    public function unit_head(){
        return $this->hasOne(UnitHead::class);
    }
}
