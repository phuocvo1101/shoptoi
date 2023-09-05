<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class NewsRequest extends Request
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
            'txtName'   => 'required',
            'fImages'   => 'required|image'
        ];
    }
    public function messages () {
        return [
            'txtName.required'      => 'Vui lòng nhập tiêu đề',
            'fImages.required'      => 'Bạn chưa chọn hình ảnh',
            'fImages.image'         => 'File này không phải là hình ảnh'
        ];
    }
}
