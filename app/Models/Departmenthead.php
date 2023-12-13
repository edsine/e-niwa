<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departmenthead extends Model
{
    public $table = 'departmentheads';

    public $fillable = [
        'user_id',
        'department_id'
    ];

    protected $casts = [
        
    ];

    public static array $rules = [
        'user_id' => 'required',
        'department_id' => 'required'
    ];

    public function department(){
        return $this->belongsTo(Department::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
