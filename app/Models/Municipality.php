<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    protected $fillable = ['name', 'department_id'];
    use HasFactory;

    public function departaments(){
        return $this->belongsTo(Departaments::class);
    }
    public function students(){
        return $this->hasMany(Student::class);
    }
}
