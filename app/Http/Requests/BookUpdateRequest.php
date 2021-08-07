<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;
use App\Rules\CheckIdBook;
use App\Rules\CheckIdType;
use App\Rules\CheckIdCountry;



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
            'type_id' => [new CheckIdType],
            'name_book' => 'max:100',
            'author' => 'max:100',
            'translator' => 'max:100',
            'publisher' => 'max:100',
            'publication_date' => 'date',
            'price' => 'gt:0',
            'country_id' => [new CheckIdCountry],
            'isbn' => 'max:20',
            'book_image' => 'image|mimes:jpeg,png|max:2048',
            'review' => 'max:1000'
        ];
    }

    public function messages()
    {
        return [
            'name_book.max' => "tên sách nên dài tối đa :max ký tự",
            'publication_date.date' => __('Kiểu dữ liệu phải là datetime.'),
            'price.gt' => __('Giá sách phải lớn hơn 0.'),
            'author.max' => "Tên tác giả dài tối đa :max ký tự",
            'translator.max' => "Tên dịch giả dài tối đa :max ký tự",
            'author.max' => "Tên tác giả dài tối đa :max ký tự",
            'publisher.max' => "Tên nhà xuất bản dài tối đa :max ký tự",
            'review.max' => "Giới thiệu sách dài tối đa :max ký tự",


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
