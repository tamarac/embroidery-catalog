<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMaterial extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id'          => 'required|integer|exists:materials,id',
            'name'        => 'required|string|min:3|max:100',
            'description' => 'required|min:10',
            'price'       => 'nullable|double',
        ];
    }
}
