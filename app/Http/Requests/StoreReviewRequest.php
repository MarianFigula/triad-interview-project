<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReviewRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'project_description' => 'required|string',
            'agreed' => 'accepted',
            'file' => 'required|file|mimes:pdf,jpg,jpeg,png,doc,docx|max:10240',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'name' => trim($this->name),
            'email' => trim($this->email),
            'project_description' => trim($this->project_description),
        ]);
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Please enter your name.',
            'email.required' => 'Email is required.',
            'email.email' => 'Please provide a valid email address.',
            'project_description.required' => 'Please provide a project description.',
            'agreed.accepted' => 'You must agree to the terms.',
            'file.required' => 'Please upload a file.',
            'file.mimes' => 'The file must be a PDF, JPG, JPEG, PNG, DOC, or DOCX.',
            'file.max' => 'The file size must not exceed 10 MB.',
        ];
    }

}
