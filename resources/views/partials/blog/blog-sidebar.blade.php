
<div class="@@classList">
    

    <div class="border rounded mb-6 p-5 py-md-6 ps-md-6 pe-md-4">
        <h4 class="mb-5">Category</h4>
        <div class="nav flex-column nav-vertical">
            <?php $cat = []; ?>
            @foreach($categories as $category)
                <a href="{{route('frontend.blog-filter',[$category->slug]) }}" class="nav-link py-2">{{$category->name}} ({{$category->content_page_count}})</a>   
            @endforeach
        </div>
    </div>

    <div class="border rounded mb-6 p-5 py-md-6 ps-md-6 pe-md-4">
        <h4 class="mb-5">Recent Posts</h4>
        <ul class="list-unstyled mb-0">
        @foreach($recentBlogs as $recentBlog)
            <li class="media mb-6 d-flex">
                <a href="{{($recentBlog->featured_image) ? $recentBlog->featured_image->geturl() : '' }}" class="mw-70p d-block me-5">
                    <img src="{{($recentBlog->featured_image) ? $recentBlog->featured_image->geturl('preview') : '' }}" alt="..." class="avatar-img rounded-lg h-70p w-70p o-f-c">
                </a>
                <div class="media-body flex-shrink-1">
                    <a href="{{ route('frontend.blog-single',[$recentBlog->title])}}" class="d-block">
                        <h6 class="line-clamp-2 mb-1 fw-normal">{{$recentBlog->title}}</h6>
                    </a>
                    <span>{{ date('F d,Y', strtotime($recentBlog->created_at)) }}</span>
                </div>
            </li>
        @endforeach
        </ul>
    </div>

    <div class="border rounded mb-6 p-5 py-md-6 ps-md-6 pe-md-4">
        <h4 class="mb-5">Tags</h4>
        @foreach($tags as $tag)
            <a href="{{route('frontend.blog-filter',[$tag->slug]) }}" class="btn btn-sm btn-light text-gray-800 px-5 fw-normal me-1 mb-2">{{$tag->name}}</a>
        @endforeach
    </div>
</div>
