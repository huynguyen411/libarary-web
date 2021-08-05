<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use App\Models\Book;
class BorrowingBookRequest extends FormRequest
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
            'book_id' => 'required|integer|min:1',
            'from_date' => 'required|date',
            'promissory_date' => 'required|date|after_or_equal:from_date',
            'borrower_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            
            'book_id.required' => __('Chưa nhập sách mượn.'),
            'from_date.required' => __('Chưa nhập ngày mượn.'),
            'from_date.date' => __('Kiểu dữ liệu phải là datetime.'),
            'to_date.date' => __('Kiểu dữ liệu phải là datetime.'),
            'to_date.after_or_equal' => __('Ngày trả không được nhỏ hơn ngày mượn.'),
            'promissory_date.required' => __('Chưa nhập ngày hẹn trả.'),
            'promissory_date.date' => __('Kiểu dữ liệu phải là datetime.'),
            'promissory_date.after_or_equal' => __('Ngày hẹn trả không được nhỏ hơn ngày mượn.'),
        ];
    }
}