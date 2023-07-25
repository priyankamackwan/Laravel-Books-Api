@section('meta_tags')
<title>TechedHub Solution</title>
<meta name="keywords" content="TechedHub Courses tutorials">
<meta name="description" content="Techudhub gives you the best learning classes in one place. Get a constantly updating feed of knowledge. We are continuing just for you..">
@endsection


@extends('frontend.layouts.app')
@section('content')
<div class="container mb-6 mb-xl-8 z-index-2 border-top">
</div>

<div class="container py-8 pt-lg-2">
        <div class="row">
            <div class="col-xl-8 mx-auto">
                <h1 class="text-capitalize">{{$blogSingle->title}}</h1>

                <p class="me-xl-12">{{$blogSingle->excerpt}}</p>

                <div class="d-md-flex align-items-center">
                <div class=" rounded-circle d-inline-block mb-4 mb-md-0 me-4">
                    <div class="p-1">
                        <i class="fas fa-calendar"></i>
                    </div>
                </div>

                    <div class="mb-4 mb-md-0">
                        <span class="font-size-sm">{{date('F d,Y',strtotime($blogSingle->created_at))}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=" mb-7 col-lg-7 col-md-10 col-sm-12 container sk-thumbnail img-ratio-7 align-items-center">
        <img src="{{ ($blogSingle->featured_image) ? $blogSingle->featured_image->getUrl() : asset('images/noimage.png') }}" alt="..." class="img-fluid" width="auto" height="auto" >
    </div>

    <div class="container">
        <div class="row mb-8 mb-md-12">
            <div class="col-xl-8 mx-auto">
                <h3 class="">Description</h3>
                <p class="mb-6 line-height-md"> {!!$blogSingle->page_text !!}</p>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection