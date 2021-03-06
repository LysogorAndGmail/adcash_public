<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name'          => ['required', 'string', 'max:255'],
            'price'         => array('required', 'regex:/^\d*(\.\d{2})?$/')
        ];
    }
}