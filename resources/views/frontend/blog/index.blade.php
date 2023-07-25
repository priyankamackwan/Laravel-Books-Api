@section('meta_tags')
<title>TechedHub Solution</title>
<meta name="keywords" content="TechedHub Courses tutorials">
<meta name="description" content="Techudhub gives you the best learning classes in one place. Get a constantly updating feed of knowledge. We are continuing just for you..">
@endsection


@extends('frontend.layouts.app')
@section('content')
<div class="container mb-6 mb-xl-8 z-index-2 border-top ">
</div>

<!-- BLOG LIST V1
    ================================================== -->
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-lg-8 col-xl-9 mb-5 mb-md-0">
            @if(count($blogs) > 0)
            @foreach($blogs as $blog)
                <!-- Blog Post -->
                <div class="row mb-6 align-items-center">
                    <div class="col-lg-6 col-xl-5 mb-6 mb-lg-0">
                        <a href="{{ route('frontend.blog-single',[str_replace(' ', '-',$blog->title)])}}" class="d-block sk-thumbnail img-ratio-4 rounded lift">
                            <img src="{{ $blog->featured_image->getUrl() ? $blog->featured_image->getUrl() : asset('images/noimage.png') }}" alt="..." class="rounded img-fluid">
                        </a>
                    </div>

                    <div class="col-lg-6 col-xl-7">
                        <a href="{{ route('frontend.blog-single',[str_replace(' ', '-',$blog->title)])}}" class="d-inline-block">
                            <h5 class="text-blue">
                                <?php $c = 0; ?>
                            @foreach($blog->categories as $key => $category)
                                @if($c>0)
                                    {{' | '.$category->name}}
                                @else
                                    {{$category->name}}
                                @endif
                                <?php $c++; ?>
                            @endforeach
                            </h5>
                        </a>

                        <a href="{{ route('frontend.blog-single',[$blog->slug])}}" class="d-block me-xl-12">
                            <h3 class="">{{$blog->title}}</h3>
                        </a>

                        <p class="line-clamp-3 mb-6 mb-xl-8 me-xl-6">{{$blog->excerpt}}</p>

                        <div class="d-md-flex align-items-center">
                            <div class=" rounded-circle d-inline-block mb-4 mb-md-0 me-4">
                                <div class="p-1">
                                <i class="fas fa-calendar"></i>
                                </div>
                            </div>

                            <div class="mb-4 mb-md-0">
                                <span class="font-size-sm">{{date('F d,Y',strtotime($blog->created_at))}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @else
            <section class="py-6 search-item-error" >
            <div class="container text-center py-xl-4">
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <h4 class="text-capitalize">No records found</h4>
                </div>
            </div>
        </div>
        </section><br>
        @endif
            <div class="pagination-class container">{{ ($blogs->links()) ? $blogs->links() : '' }}</div>
            </div>

            <div class="col-md-5 col-lg-4 col-xl-3">
                <!-- BLOG SIDEBAR
                ================================================== -->
                @include("partials/blog/blog-sidebar")
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection