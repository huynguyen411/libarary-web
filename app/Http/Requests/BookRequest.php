<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'type_id' => 'required|min:1|max:999',
            'name_book' => 'required',
            'author' => 'required',
            'publication_date' => 'nullable|date',
            'price' => 'gt:0',            
        ];
    }

    public function messages()
    {
        return [
            'type_id.required' => __('Chưa nhập thể loại.'),
            'type_id.min' => __('Thể loại sách không tồn tại.'),
            'type_id.max' => __('Thể loại sách không tồn tại.'),
            'name_book.required' => __('Chưa nhập tên sách.'),
            'author.required' => __('Chưa nhập tên tác giả.'),
            'publication_date.date' => __('Kiểu dữ liệu phải là datetime.'),
            'price.gt' => __('Giá sách phải lớn hơn 0.')
        ];
    }
}