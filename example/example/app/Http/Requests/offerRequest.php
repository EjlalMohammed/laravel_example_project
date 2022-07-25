<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class offerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    public function rules()
    {
        return [
            'name'=> 'required',
            'price'=>'required|numeric'

    ];
    }
    public function messages()
    {
        return [
            'name.required' => 'name is required ',
            'price.numeric' => 'most be number'
        ];
    }
}
