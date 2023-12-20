<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public $table = 'departments';

    public $fillable = [
        'department_unit',
        'description',
        'branch_id'
    ];

    protected $casts = [
        'department_unit' => 'string',
        'description' => 'string'
    ];

    public static array $rules = [
        'department_unit' => 'required',
        'description' => 'required'
    ];

    public function unit(){
        return $this->hasMany(Unit::class);
    }

    public function departmenthead(){
        return $this->hasOne(Departmenthead::class);
    }
}
