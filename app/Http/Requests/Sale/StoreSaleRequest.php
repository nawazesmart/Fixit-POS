<?php

namespace App\Http\Requests\Sale;

use Illuminate\Foundation\Http\FormRequest;

class StoreSaleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
//            'customer' => 'required',
//            'xdate' => 'required',
//            'invoice' => 'required',
//            'xwh' => 'required',
//            'zid' => 'required',


        ];
    }
}
