<?php

namespace App\Http\Requests;

use App\Models\Book;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreBookRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('book_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
                'unique:books',
            ],
            'category_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
