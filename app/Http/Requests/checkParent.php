<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class checkParent extends FormRequest
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
        $rules=[
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'username' => 'required|min:6',
            'password' => 'required|min:8',
            'phone_number' => 'nullable|max:11',
            'location' => 'nullable|max:255'
        ];
//        if (preg_match('~^http://127\.0\.0\.1:8000/api/fathers/update/\d+$~', $this->url())) {
//            $rules = [
//                'name' => 'sometimes|string|max:255',
//                'email' => 'sometimes|email',
//                'username' => 'sometimes|min:6',
//                'password' => 'sometimes|min:8',
//                'phone_number' => 'nullable|max:11',
//                'location' => 'nullable|max:255'
//            ];
//        }
        return  $rules;

    }
}
