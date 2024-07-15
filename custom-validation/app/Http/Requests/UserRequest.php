<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use App\Rules\Uppercase;

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
            'name' => ['required', new Uppercase],
            'email' => 'required|email'
        ];
    }

    public function messages()
    {
        return [
            "name.required" => ':attribute is Required!',
            "email.required" => 'Email is Required!'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Name',
            'email' => 'Email'
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'name' => Str::slug($this->name)
        ]);
    }

    protected $stopOnFirstFailure = true;
}
