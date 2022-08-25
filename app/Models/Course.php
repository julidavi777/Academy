<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name', 'description', 'duration', 'image'];
    use HasFactory;

    //Relación uno a muchos
    public function subjects(){
        return $this->hasMany(Subject::class);
    }

}
