<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DatHangRequest extends Request
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
            'txtCustomerName' => 'required',
            'txtPhone'   => 'required',
            'txtAddressLine'   => 'required'
        ];
    }
    public function messages () {
        return [
            'txtCustomerName.required'    => 'Vui lòng nhập tên.',
            'txtPhone.required'      => 'Vui lòng nhập điện thoại.',
            'txtAddressLine.required'      => 'Vui lòng nhập địa chỉ.',
            // 'fImages.image'         => 'This File is Not Image'
        ];
    }
}
