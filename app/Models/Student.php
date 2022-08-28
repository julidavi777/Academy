<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'document_type', 'document_number', 'identify_document', 'expedition_date', 'id_exped_muni', 'names', 'last_name1', 'last_name2', 'gender', 'birth_date', 'stratum', 'id_course', 'id_birth_muni', ''];

    public function municipalitiesBirth(){
        return $this->belongsTo(Municipality::class);
    }

    public function courses(){
        return $this->belongsTo(Course::class);
    }
}
