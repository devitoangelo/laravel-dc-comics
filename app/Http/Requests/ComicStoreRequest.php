<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicStoreRequest extends FormRequest
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

            'title' => 'required|min:3|max:50',
            'thumb' => 'required|max:255',
            'Series' => 'nullable|max:50',
            'price' => 'nullable|max:20',
            'sale_date' => 'nullable|max:50',
            'description' => 'nullable|max:500',
            
        ];
    }
}
