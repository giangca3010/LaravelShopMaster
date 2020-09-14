<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ProductAddRequest extends FormRequest
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
            'name' => 'required|unique:products|max:255|min:10',
            'price' => 'required',
            'category_id' => 'required',
            'content' => 'required'

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'name.max' => 'Tên quá dài',
            'name.min' => 'Tên quá ngắn',
            'name.unique' => 'Tên không được phép trùng',
            'category_id.required' => 'Danh mục không được để trống',
            'content.required' => 'Nội không được để trống',
            'price.required' => 'Vui lòng nhập giá sản phẩm',
        ];
    }
}
