<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMovieRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
                'title' => 'required|string|max:100',
                'genre' => 'required|string|max:50',
                'director' => 'required|string|max:30',
                'year' => 'required|integer', 
                'storyline' => 'sometimes|max:1000'
        ];
    }
}
