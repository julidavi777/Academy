<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TeacherTest extends TestCase
{
    use RefreshDatabase;

    public function test_save_teacher(){
        $response = $this->post('teachers', [
            'name' => 'Gloria ',
            'last_name' => 'Arenas',
            'college_degree' => 'Licenciada en Artes',
            'age' => 63,
            'contract_date' => '2020-06-15',
            'image' => 'public/teachers/img.png',
            'identify_document' => 'doc.pdf',
            'course_id' => ''

        ]);

        $response->assertJsonStructure([
            "name",
            "last_name",
            "college_degree",
            "age",
            "contract_date",
            "image",
            "identify_document",
            "course_id"
            ])
        ->assertJson(['name'=>'Gloria'])
        ->assertStatus(201);

        $this->assertDatabaseHas('teachers', [
            'name' => 'Gloria ',
            'last_name' => 'Arenas',
            'college_degree' => 'Licenciada en Artes',
            'age' => 63,
            'contract_date' => '2020-06-15',
            'image' => 'img.png',
            'identify_document' => 'doc.pdf',
            'course_id' => ''
        ]);
    }
}
