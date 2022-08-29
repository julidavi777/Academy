<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'department_id'
    ];

    //Relación uno a muchos
    public function students(){
        return $this->hasMany(Student::class);
    }

    public function departments(){
        return $this->belongsTo(Department::class);
    }
}
