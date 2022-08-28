<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'country_id'];

    public function countries(){
        return $this->belongTo(Country::class);
    }

    public function municipalities(){
        return $this->hasMany(Municipality::class);
    }
}
