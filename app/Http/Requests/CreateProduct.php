<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProduct extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'type_id'       => 'required|exists:types|integer',
            'name'          => 'required|string|min:3|max:100',
            'description'   => 'required|min:10',
            'price'         => 'nullable|double',
            'cost_price'    => 'nullable|double',
        ];
    }
}
