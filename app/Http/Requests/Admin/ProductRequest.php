<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        return [
            'title'=> 'sometimes|string|max:255',
            'status_product'=> 'sometimes|string|max:15',
            'discount'=> 'nullable|integer',
            'price'=> 'nullable|numeric',
            'grand_price'=> 'nullable|numeric',
            'thumbnail'=>'sometimes|image|mimes:png,jpg,jpeg|max:2048',
        ];
    }
}
