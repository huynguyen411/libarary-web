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
        $users = User::select('user_id')->get();
        $books = Book::select('book_id')->get();
        return [
            'borrower_id' => 'required',
            'book_id' => 'required',
            'from_date' => 'required|date',
            'to_date' => 'nullable|date|after_or_equal:from_date',
            'promissory_date' => 'required|date|after_or_equal:from_date',
        ];
    }

    public function messages()
    {
        return [
            'borrower_id.required' => __('Chưa nhập người mượn.'),
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