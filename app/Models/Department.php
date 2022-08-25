<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['name'];
    use HasFactory;

    public function municipality(){
        return $this->hasMany(Municipality::class);
    }
    public function country(){
        return $this->belongTo(country::class);
    }
}
