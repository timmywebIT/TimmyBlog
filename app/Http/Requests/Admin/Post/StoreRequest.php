<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|string',
            'content' => 'required|string',
            'main_image' => 'nullable|file|image|mimes:jpg,jpeg,png',
            'category_id' => 'nullable|exists:categories,id',
            'tag_ids' => 'nullable|array',
           'tag_ids.*' => 'integer|exists:tags,id',
        ];
    }

}
