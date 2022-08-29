<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name'
    ];

    //Relación uno a muchos
    public function departments(){
        return $this->hasMany(Department::class);
    }
}
