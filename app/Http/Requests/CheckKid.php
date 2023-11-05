<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckKid extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules= [
            'name'=>'required|max:255',
            'date_of_birth' => 'required|date',
            'father_id'=>'required|exists:fathers,id'
        ];
//        if (preg_match('~^https:\/\/3ce8-197-43-52-146\.ngrok-free\.app\/api$~', $this->url()) || preg_match('~^{{url}}/kids/update/\d+$~', $this->url())) {
//            $rules= [
//                'name'=>'sometimes|max:255',
//                'date_of_birth' => 'sometimes|date',
//                'father_id'=>'sometimes|exists:fathers,id'
//            ];
//        }
        return $rules;
    }
}
