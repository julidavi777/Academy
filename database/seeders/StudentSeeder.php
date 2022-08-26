<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Student::create([
            'document_type' => 'cedula',
            'document_number' => '1088312276',
            'identify_document' => 'www.href.com',
            'expedition_date' => 25/05/2022,
            'exped_dept' => 'Risaralda',
            'exped_land' => 'Colombia',
            'names' => 'Maria Cecilia',
            'last_name1' => 'Buitrago',
            'last_name2' => 'Zapata',
            'gender' => 'm',
            'birth_date' => 12/15/1994,
            'stratum' => 3,

        ]);
    }
}
/*
        academy2::table('students')->insert([
            'document_type' => Str::random(10),
            'document_number' => Str::random(10),
            'identify_document' => Int::random(10),
            'expedition_date' => Date::random(10),
            'exped_dept' => Str::random(10),
            'exped_land' => Str::random(10),
            'names' => Str::random(10),
            'last_name1' => Str::random(10),
            'last_name2' => Str::random(10),
            'gender' => Str::random(1),
            'birth_date' => Date::random(1),
            'stratum' => Int::random(1),
            'gender' => Str::random(1),
 */
