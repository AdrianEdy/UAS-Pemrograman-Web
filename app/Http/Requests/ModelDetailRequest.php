<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModelDetailRequest extends FormRequest
{
    public function __construct()
    {
        $this->errorBag = 'description';
    }

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
            'en.description' => 'required|max:1000',
            'id.description' => 'required|max:1000',
            'catalog' => 'file|max:128000',
            'video' => 'required|max:50',
        ];
    }

    public function attributes()
    {
        return [
            'en.description' => 'english description',
            'id.description' => 'indonesia description',
        ];
    }
}
