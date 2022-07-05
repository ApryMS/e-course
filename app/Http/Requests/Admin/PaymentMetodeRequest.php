<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PaymentMetodeRequest extends FormRequest
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
            'name_bank'=> 'sometimes|string|max:30',
            'no_rek'=> 'sometimes|string|max:30',
            'status'=> 'sometimes|string|max:10',
            'photo'=>'sometimes|image|mimes:png,jpg,jpeg|max:2048',
        ];
    }
}
