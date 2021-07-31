<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'role_id' => 'required',
            'name' => 'required',
            'address' => 'required',
            'email' => 'required',            
        ];
    }

    public function messages()
    {
        return [
            'role_id.required' => __('Chưa nhập thể loại.'),
            'name.required' => __('Chưa nhập tên người dùng.'),
            'address.required' => __('Chưa nhập địa chỉ.'),
            'email.required' => __('Chưa nhập email.'),            
        ];
    }
}