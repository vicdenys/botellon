<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'menuFile' => ['required', 'mimes:pdf', 'max:5120'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'menuFile.required' => 'u moet een bestand selecteren',
            'menuFile.mimes' => 'u moet een bestand selecteren met .pdf formaat',
            'menuFile.max' => 'uw bestand moet kleiner zijn dan 5MB',
        ];
    }
}
