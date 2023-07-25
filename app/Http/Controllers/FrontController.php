<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContentPage;
use App\Models\ContentTag;
use App\Models\ContentCategory;
use Illuminate\Support\Facades\View;

class FrontController extends Controller
{
    public function blogList(){
        try{
            $blogs = ContentPage::orderBy('id', 'ASC')->with(['media'])->with('categories')->with('tags')->paginate(4);
            $recentBlogs = ContentPage::orderBy('id', 'DESC')->with(['media'])->limit(3)->get();
            $tags = ContentTag::with('tagPages')->get();
            $categories = ContentCategory::with('contentPage')->withCount('contentPage')->get();
            return view('frontend.blog.index', compact('blogs', 'recentBlogs', 'tags', 'categories'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function blogFilter($filter){
        try{
            $blogs =  ContentPage::whereHas('categories', function($query) use ($filter){
                $query->where('slug','=',$filter);
            })
             ->orWhereHas('tags', function($query) use ($filter){
                $query->where('slug', '=',$filter);
             })
            ->with('categories')->with(['media'])->paginate(4);
            $recentBlogs = ContentPage::orderBy('id', 'DESC')->with(['media'])->paginate(3);
            $tags = ContentTag::with('tagPages')->get();
            $categories = ContentCategory::with('contentPage')->withCount('contentPage')->get();
            return view('frontend.blog.index', compact('blogs', 'recentBlogs', 'tags', 'categories'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function blogSingle($blog_single){
        try{
            $blogSingle = ContentPage::with(['media'])->with('categories')->where('slug', $blog_single)->first();
            return view('frontend.blog.show', compact('blogSingle'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
