<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'name',
        'last_name',
        'college_degree',
        'age',
        'contract_date',
        'image',
        'identify_document',
        'course-id'
    ];

    use HasFactory;

    public function subjects(){
        return $this->belongsTo(Subject::class);
    }

    public function courses(){
        return $this->belongsTo(Course::class);
    }
}
