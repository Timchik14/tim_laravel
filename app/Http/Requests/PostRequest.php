<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\Post;

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
            'slug' => ['required', 'regex:/^[a-zA-Z0-9-_]+$/', 'unique:posts'],
        ];
        if ($this->route()->hasParameter('post')) {
            $idToIgnore = $this->route()->parameter('post')->id;
            $rules['slug'][2] = "unique:posts,slug,$idToIgnore";
        }

        return $rules;
    }
}
