<?php

namespace App\Http\Requests;

use App\Models\CourseCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCourseCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('course_category_create');
    }

    public function rules()
    {
        return [
            'category_name' => [
                'string',
                'required',
                'unique:course_categories',
            ],
        ];
    }
}
