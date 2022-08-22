<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['document_type', 'document_number', 'identify_document', 'document_issuing_country', 'issuing_department', 'issuing_municipality', 'name', 'first_last_name', 'second_last_name', 'gender', 'birth_date', 'birth_country', 'birth_department', 'birth_municipality', 'stratum'];
    use HasFactory;
}
