<?php

namespace App\Http\Requests;

use ErrorException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class StoreStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        try {
            $student = $this->student;

            $student['cpf'] = str_replace(['.', '-'], '', $student['cpf']);
            $student['phone_number'] = str_replace(['(', ')', ' ', '-'], '', $student['phone_number']);
            
            $address = $this->address;
            
            $address['cep'] = str_replace('-', '', $address['cep']);
            
            $guardians = $this->guardians;
            
            for ($i = 0; $i <= 1; $i++)
               $guardians[$i]['cpf'] = str_replace(['.', '-'], '', $guardians[$i]['cpf']);
        } catch (ErrorException $e) {
            throw ValidationException::withMessages(['missing_key' => 'Missing key.']);
        }

        $this->merge([
            'student'=> $student,
            'address'=> $address,
            'guardians'=> $guardians,
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'student' => 'required|array|size:8',
            'student.full_name' => 'required|string',
            'student.cpf' => 'nullable|string|size:11',
            'student.birth_date' => 'nullable|date',
            'student.email' => 'required|email',
            'student.gender' => ['nullable', Rule::in(['M', 'F'])],
            'student.enrollment_date' => 'nullable|date',
            'student.phone_number' => 'nullable|string|size:11',
            'student.is_paying' => 'required|boolean',

            'address' => 'nullable|array|size:6',
            'address.cep' => 'nullable|string|size:8',
            'address.uf' => 'nullable|string', 
            'address.cidade' => 'nullable|string',
            'address.bairro' => 'nullable|string',
            'address.rua' => 'nullable|string',
            'address.numero' => 'nullable|string',
            
            'guardians' => 'nullable|array|size:2',
            'guardians.*' => 'array|size:3',
            'guardians.*.full_name' => 'nullable|string',
            'guardians.*.cpf' => 'nullable|string|size:11',
            'guardians.*.affiliation' => 'nullable|string',
        ];
    }
}
