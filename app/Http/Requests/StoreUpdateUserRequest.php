<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUserRequest extends FormRequest
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

        $rules = [
            'name' => 'required|string|min:3|max:255',
            'email' => [
                'required',
                'string',
                'email',
                'min:3',
                'max:255',
                'unique:users',
            ],
            'password' => 'required|string|min:6|max:16',
        ];

        if($this->method() == 'PATCH'){
            $rules['name'] = 'nullable|string|min:3|max:255';
            $rules['password'] = 'nullable|string|min:6|max:16';
            $rules['email'] = 'nullable|string|email|min:3|max:255|unique:users,email,{$this->id},id';
            // Rule::unique('users')->ignore($this->id);
        }

        return $rules;


    }
}
