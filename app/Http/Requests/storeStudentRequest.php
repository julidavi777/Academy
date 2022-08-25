<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'document_type' => 'required',
            'document_number' => 'required|integer',
            'identify_document' => 'required|mimes:pdf',
            'expedition_date' => 'required:nullable|date',
            'id_exped_muni' => 'required',
            'exped_dept' => 'required',
            'exped_land' => 'required',
            'names' => 'required|max:45',
            'last_name1' => 'required|max:45',
            'last_name2' => 'string|max:45',
            'gender' => 'required',
            'birth_date' => 'required:nullable|date',
            'id_birth_country' => 'required',
            'id_birth_department' => 'required',
            'id_birth_municipality' => 'required',
            'stratum' => 'required',
            
        ];
    }
}
