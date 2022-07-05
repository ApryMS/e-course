<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiswaRequest extends FormRequest
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
            'name'=> 'sometimes|string|max:100',
            'email'=> 'required|email|unique:siswas,email|max:30',
            'wa_number'=> 'sometimes|string|max:30',
            'no_ortu'=> 'sometimes|string|max:30',
            'from_school'=> 'sometimes|string|max:50',
            'province'=> 'required',
            'regency'=> 'required',
            'payment_method_id'=> 'required',
            'product_id'=> 'required',
        ];
    }
}
