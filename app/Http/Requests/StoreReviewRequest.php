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
            'name.required' => 'Zadaj svoje meno.',
            'email.required' => 'Pole Email je povinné.',
            'email.email' => 'Uveď platnú e-mailovú adresu.',
            'project_description.required' => 'Uveď opis projektu.',
            'agreed.accepted' => 'Musíte súhlasiť s podmienkami.',
            'file.required' => 'Nahrajte súbor.',
            'file.mimes' => 'Súbor musí byť vo formáte PDF, JPG, JPEG, PNG, DOC alebo DOCX.',
            'file.max' => 'Veľkosť súboru nesmie presiahnuť 10 MB.',
        ];
    }

}
