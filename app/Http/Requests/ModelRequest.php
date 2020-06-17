<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModelRequest extends FormRequest
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
        $rules = [
            'image' => 'required|image|max:128000',
            'name'  => 'required|max:50|unique:models',
        ];

        if (request()->isMethod('patch')) {
            $rules['image'] = 'image';
            $rules['name']  = 'required|max:20';
        }

        return $rules;
    }
}
