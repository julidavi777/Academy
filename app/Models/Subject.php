<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['name', 'hourly_intensity'];
    use HasFactory;

    protected function courses(){
        $this->belongsToMany(Course::class, 'course_subject'); 
    }
}
