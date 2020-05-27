<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProduct extends FormRequest
{
    /**
     * Get the validation rules that apply to the request. The 'sometimes' rule is necessary in this context. 
     * Example, we may not send name field for update, and it works, but if we send name field with null, the validation required is trigger validation error.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id'            => 'required|exists:products,id|integer',
            'type_id'       => 'sometimes|required|exists:types,id|integer',
            'name'          => 'sometimes|required|string|min:3|max:100',
            'description'   => 'sometimes|required|min:10',
            'price'         => 'nullable|double',
            'cost_price'    => 'nullable|double'
        ];
    }
}
