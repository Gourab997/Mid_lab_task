<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalesRequest extends FormRequest
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
            'Custome_name' => 'required|alpha|min:3|max:30 ',
            'phone' => 'required | min:11 | max:15 |numeric',
            'address' => 'required | min:3 | max:50 |alpha_num',
            'product_id'    => 'required | min:10 | max:50 |email',
            'product_name'     => 'required | min:3 | max:20',
            'unit_price'    => 'required |before_or_not_equal:0' ,
            'quantity'    => 'required |before_or_not_equal:0 |max:20',
            'total_price'    => 'required ' ,

        ];
    }
}
