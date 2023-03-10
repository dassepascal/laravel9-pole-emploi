<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PosteRequest extends FormRequest
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
            'title'=>'required|max:100',
            'description'=>'required|max:255',
            'experience_id'=>'required|max:50',
            'diplome_id'=>'requied|max:50',
            'enterprise_id'=>'required',
        ];
    }
}
