<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public $table = 'departments';

    public $fillable = [
        'name',
        'description'
    ];

    protected $casts = [
        'name' => 'string',
        'description' => 'string'
    ];

    public static array $rules = [
        'name' => 'required',
        'description' => 'required'
    ];

    public function unit(){
        return $this->hasMany(Unit::class);
    }

    public function departmenthead(){
        return $this->hasOne(Departmenthead::class);
    }
}
