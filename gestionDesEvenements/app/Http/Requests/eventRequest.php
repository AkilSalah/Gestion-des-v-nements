<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class eventRequest extends FormRequest
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
            'categorie_edit' => 'required',
            'image_edit' => 'required', 
            'title_edit' => 'required',
            'description_edit' =>'required',
            'date_edit' =>'required',
            'lieu_edit' =>'required',
            'nbPlaces_edit' =>'required',
            'acceptation' =>'required',
            
        ];
        
    }
}
