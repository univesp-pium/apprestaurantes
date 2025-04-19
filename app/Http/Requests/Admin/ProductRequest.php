<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'category_id'   => 'required|exists:categories,id',
            'unity_id'      => 'required|exists:units,id',
            'title'         => 'required|string|min:3|max:255',
            'description'   => 'nullable|string',
            'price'         => 'required|numeric',
            'quantity'      => 'required|integer',
            'discount'      => 'nullable|numeric',
            'is_addicional' => 'nullable|boolean',
            'active'        => 'nullable|boolean',
        ];
    }

    // names
    public function attributes(): array
    {
        return [
            'category_id'   => 'categoria',
            'unity_id'      => 'unidade',
            'title'         => 'título',
            'description'   => 'descrição',
            'price'         => 'preço',
            'quantity'      => 'quantidade',
            'discount'      => 'desconto',
            'is_addicional' => 'adicional',
            'active'        => 'ativo',
        ];
    }
}
