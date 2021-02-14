<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'name' => 'required|min:5|max:100',
            'short_description' => 'required|max:255',
            'long_description' => 'required',
            'body' => 'required',
        ];

        if ($this->getMethod() == 'POST') {
            $rules['slug'] = 'required|unique:posts|regex:/^[a-zA-Z0-9-_]+$/';
        } else {
            $rules['slug'] = 'required|regex:/^[a-zA-Z0-9-_]+$/';
        }

        return $rules;
    }
}
