<?php

namespace App\Http\Requests;

use App\Models\Category;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'title'=> ['required', 'string', 'max:255'],
            'slug'=> ['nullable', 'alpha_dash:ascii', Rule::unique(Category::class)->ignore($this->id)],
        ];
    }
}
