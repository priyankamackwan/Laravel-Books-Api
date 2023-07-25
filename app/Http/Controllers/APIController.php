<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseCategory;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Book;

class APIController extends Controller
{
    public function index(){
        $courses = Course::orderBy('id', 'desc')->get();
        $base_url = env('APP_URL');

        $data = [];
        foreach($courses as $course){

            $lession = Lesson::where('course_id', $course->id)->get();

            foreach($lession as $less){
                $html = '<url><loc>'.$base_url.$course->slug.'/'.$less->slug.'</loc><lastmod>2022-07-21T13:28:52+00:00</lastmod><priority>1.00</priority></url>';

                array_push($data , $html);

            }




        }
        dd($data);
    }

    public function bookListing(){
        try {

            $books = Book::select('id','title', 'category_id')
                            ->orderBy('id','desc')
                            ->with('category')
                            ->get();



            if(isset($books) && !empty($books)){

                return view('frontend.books.responce', compact('books'));

                return response()->json([
                    'status' => true,
                    'message' => 'Data get successfully.',
                    "data" => $books
                ], 200);

            }else{

                return response()->json([
                    'status' => false,
                    'message' => 'Data Not Found!',
                    "data" => null
                ], 200);
            }

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'data' => null,
                'message' => self::CATCH_ERROR_MSG //$e->getMessage()
            ], 500);
        }
    }
}
