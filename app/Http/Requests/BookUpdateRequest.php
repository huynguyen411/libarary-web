<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;

class BookUpdateRequest extends FormRequest
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
            'type_id' => 'integer|min:1|max:1000',
            'name_book' => 'max:100',
            'author' => 'max:100',
            'translator' => 'max:100',
            'publisher' => 'max:100',
            'publication_date' => 'date',
            'price' => 'gt:0',
            'country_id' => 'integer|min:1|max:195',
            'isbn' => 'max:20',
            'book_image' => 'image|mimes:jpeg,png|max:2048',
            'review' => 'max:1000'
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

    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();

        throw new HttpResponseException(response()->json([
            'errors' => $errors
        ], Response::HTTP_UNPROCESSABLE_ENTITY));
    }
}
