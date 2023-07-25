<?php

namespace App\Http\Requests;

use App\Models\Book;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateBookRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('book_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
                'unique:books,title,' . request()->route('book')->id,
            ],
            'category_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
