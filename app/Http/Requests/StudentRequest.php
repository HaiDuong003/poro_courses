<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [];
        $method = $this->route()->getActionMethod();
        switch ($this->method()) {
            case 'POST':
                switch ($method) {
                    case 'add':
                        $rules = [
                            'name' => 'required',
                            'email' => 'required|unique:students',
                            'password' => 'required',
                            'avatar' => 'required'
                        ];
                        break;
                    default:
                        break;
                }
                break;
            default:
                break;
        }
        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.unique' => 'This email already exists',
            'password.required' => 'Password is required',
            'avatar.required' => 'Avatar is required'
        ];
    }
}
