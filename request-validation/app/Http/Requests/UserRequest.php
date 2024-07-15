<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class UserRequest extends FormRequest
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
        return [

            'name' => 'required',
            'city' => 'required',
            'age' => 'required|numeric|min:18',
            'email' => 'required|email',
            'password' => 'required|alpha_num|min:6'
        ];
    }

    // public function messages()
    // {
    //     return [
    //         "name.required" => ':attribute is Required !',
    //         "email.required" => 'email is Required !',
    //         "age.required" => 'age is Required !',
    //         "password.required" => 'password is Required !',
    //         "city.required" => 'city is Required !'
    //     ];
    // }

    public function attributes()
    {
        return [
            'name' => 'Name',
            'city' => 'City',
            'age' => 'Age',
            'email' => 'Email',
            'password' => 'Password'
        ];
    }

    // protected function prepareForValidation(): void
    // {
    //     $this->merge([
    //         'name' => strtoupper($this->name),
    //         'name' => str::slug($this->name)
    //     ]);
    // }

    protected $stopOnFirstFailure = true;
}
