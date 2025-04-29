<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
            'nickname'          => 'required|string|min:3|max:255',
            'state'             => 'required|string|max:255',
            'city'              => 'required|string|max:255',
            'street'            => 'required|string|max:255',
            'neighborhood'      => 'required|string|max:255',
            'cep'               => 'required|string|size:9',
            'number'            => 'required|integer|min:1',
            'complement'        => 'nullable|string|max:255',
            'observation'       => 'nullable|string|max:1000',
            'is_main_address'   => 'required|boolean',
        ];
    }
}
