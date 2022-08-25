<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name', 'description', 'duration', 'imagen'];
    use HasFactory;
    public function students(){
        return $this->hasMany(Student::class); 
    }
    public function subjets(){
        return $this->belongsToMany(subjet::class, 'course_suject'); 
    }

    
}
