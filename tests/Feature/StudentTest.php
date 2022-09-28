<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StudentTest extends TestCase
{
    use RefreshDatabase;

    public function test_save_student(){
        $response = $this->post('students', [
            'document_type' => 'CC',
            'document_number' => '1088316346',
            'identify_document' => 'doc.pdf',
            'id_exped_muni' => '9',
            'expedition_date' => '2012-03-27',
            'names' => 'Rafael',
            'last_name1' => 'Arenas',
            'last_name2' => 'Restrepo',
            'gender' => 'M',
            'birth_date' => '1994-03-26',
            'id_birth_muni' => '7',
            'stratum' => '2',
            'id_course' => '1'

        ]);

        $response->assertJsonStructure([
            "document_type",
            "document_number",
            "identify_document",
            "id_exped_muni",
            "expedition_date",
            "names",
            "last_name1",
            "last_name2",
            "gender",
            "birth_date",
            "id_birth_muni",
            "stratum",
            "id_course"

            ])
        ->assertJson(['name'=>'Gloria'])
        ->assertStatus(201);

        $this->assertDatabaseHas('students', [
            'document_type' => 'CC',
            'document_number' => '1088316346',
            'identify_document' => 'doc.pdf',
            'id_exped_muni' => '9',
            'expedition_date' => '2012-03-27',
            'names' => 'Rafael',
            'last_name1' => 'Arenas',
            'last_name2' => 'Restrepo',
            'gender' => 'M',
            'birth_date' => '1994-03-26',
            'id_birth_muni' => '7',
            'stratum' => '2',
            'id_course' => '1'
        ]);
    }
}
