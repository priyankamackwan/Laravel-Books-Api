@section('meta_tags')
<title>TechedHub Solution</title>
<meta name="keywords" content="TechedHub Web tutorials">
<meta name="description" content="Techudhub gives you the best learning classes in one place. Get a constantly updating feed of knowledge. We are continuing just for you..">
@endsection

@extends('frontend.layouts.app')
@section('content')
   
    

    
    <!-- FEATURED PRODUCT
    ================================================== -->
    <section class="py-9 pt-md-11 bg-white border-top border-bottom">
        <div class="container">
            

            <!-- Nav -->
            
            <nav class="nav justify-content-center mb-6 tab-nav">
                <a href="#" class="btn-sm btn-pill me-1 mb-1 text-tropaz fw-medium px-6 active" data-toggle="pill" data-filter="*" data-target="#courses">
                    All Categories
                </a>
               
            </nav>

            <!-- Items -->
            
            <div class="row row-cols-md-2 row-cols-lg-3 row-cols-xl-4" id="courses" data-isotope="{&quot;layoutMode&quot;: &quot;fitRows&quot;}" style="position: relative; height: 758.718px;">
              
            </div>
        </div>
    </section>


     <!-- ADVERTISEMENT 
    ================================================== -->
    <div class="container text-center py-xl-4" data-aos="fade-up">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2074345372388693"
     crossorigin="anonymous"></script>
    <!-- Between two pages every seound page -->
    <ins class="adsbygoogle"
        style="display:block"
        data-ad-client="ca-pub-2074345372388693"
        data-ad-slot="9824214003"
        data-ad-format="auto"
        data-full-width-responsive="true"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>

    <!-- CATEGORIES
    ================================================== -->
    <section class="py-5 py-md-11 bg-white">
        <div class="container">
            <div class="row align-items-end mb-md-7 mb-4" data-aos="fade-up">
                <div class="col-md mb-4 mb-md-0">
                    <h1 class="mb-1">Trending Categories</h1>
                    
                </div>
                <div class="col-md-auto">
                    <a href="{{ route('frontend.category-list') }}" class="d-flex align-items-center fw-medium">
                        Browse All
                        <div class="ms-2 d-flex">
                            <!-- Icon -->
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.7779 4.6098L3.32777 0.159755C3.22485 0.0567475 3.08745 0 2.94095 0C2.79445 0 2.65705 0.0567475 2.55412 0.159755L2.2264 0.487394C2.01315 0.700889 2.01315 1.04788 2.2264 1.26105L5.96328 4.99793L2.22225 8.73895C2.11933 8.84196 2.0625 8.97928 2.0625 9.1257C2.0625 9.27228 2.11933 9.4096 2.22225 9.51269L2.54998 9.84025C2.65298 9.94325 2.7903 10 2.9368 10C3.0833 10 3.2207 9.94325 3.32363 9.84025L7.7779 5.38614C7.88107 5.2828 7.93774 5.14484 7.93741 4.99817C7.93774 4.85094 7.88107 4.71305 7.7779 4.6098Z" fill="currentColor"></path>
                            </svg>

                        </div>
                    </a>
                </div>
                
            </div>

            <div class="row row-cols-2 row-cols-lg-3 row-cols-xl-4">
                
            </div>
        </div>
    </section>
   

    <!-- TESTIMONIAL
    ================================================== -->
    <section class="pt-5 pt-md-11 pb-9">
        <div class="container">
            <div class="text-center mb-2" data-aos="fade-up">
                <h1 class="mb-1">What our students have to say</h1>
                <p class="font-size-lg text-capitalize mb-0">Discover your perfect program in our courses.</p>
            </div>

            <div class="mx-n4" data-flickity='{"pageDots": true, "prevNextButtons": false, "cellAlign": "left", "wrapAround": true, "imagesLoaded": true}'>
                <div class="col-12 col-md-6 col-xl-4 py-md-7 py-3" data-aos="fade-up" data-aos-delay="50" style="padding-right:15px;padding-left:15px;">
                    <!-- Card -->
                    <div class="card border shadow p-6 lift-md">
                        <!-- Image -->
                        <div class="card-zoom">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-custom me-5">
                                    <img src="/img/avatars/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-0">Albert Cole</h5>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-0 pb-0">
                            <p class="mb-0 text-capitalize">“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-4 py-md-7 py-3" data-aos="fade-up" data-aos-delay="100" style="padding-right:15px;padding-left:15px;">
                    <!-- Card -->
                    <div class="card border shadow p-6 lift-md">
                        <!-- Image -->
                        <div class="card-zoom">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-custom me-5">
                                    <img src="/img/avatars/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-0">Alison Dawn</h5>
                                    <span>WordPress Developer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-0 pb-0">
                            <p class="mb-0 text-capitalize">“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-4 py-md-7 py-3" data-aos="fade-up" data-aos-delay="150" style="padding-right:15px;padding-left:15px;">
                    <!-- Card -->
                    <div class="card border shadow p-6 lift-md">
                        <!-- Image -->
                        <div class="card-zoom">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-custom me-5">
                                    <img src="/img/avatars/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-0">Daniel Parker</h5>
                                    <span>Front-end Developer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-0 pb-0">
                            <p class="mb-0 text-capitalize">“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-4 py-md-7 py-3" data-aos="fade-up" data-aos-delay="200" style="padding-right:15px;padding-left:15px;">
                    <!-- Card -->
                    <div class="card border shadow p-6 lift-md">
                        <!-- Image -->
                        <div class="card-zoom">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-custom me-5">
                                    <img src="/img/avatars/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-0">Albert Cole</h5>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-0 pb-0">
                            <p class="mb-0 text-capitalize">“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row w-xl-80 mx-xl-auto text-center">
                <div class="col-md-3 mb-6 mb-md-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">
                    <div class="h1"><span data-toggle="countup" data-from="0" data-to="749" data-aos="" data-aos-id="countup:in" class="aos-init aos-animate counted">749</span></div>
                    <p class="font-size-lg fw-medium mb-0">Creative Events</p>
                </div>

                <div class="col-md-3 mb-6 mb-md-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="h1"><span data-toggle="countup" data-from="0" data-to="853" data-aos="" data-aos-id="countup:in" class="aos-init aos-animate counted">853</span></div>
                    <p class="font-size-lg fw-medium mb-0">Skilled Tutors</p>
                </div>

                <div class="col-md-3 mb-6 mb-md-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="150">
                    <div class="h1"><span data-toggle="countup" data-from="0" data-to="28" data-aos="" data-aos-id="countup:in" class="aos-init aos-animate counted">28</span>k+</div>
                    <p class="font-size-lg fw-medium mb-0">Online Courses</p>
                </div>

                <div class="col-md-3 mb-6 mb-md-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="h1"><span data-toggle="countup" data-from="0" data-to="53" data-aos="" data-aos-id="countup:in" class="aos-init aos-animate counted">53</span>k+</div>
                    <p class="font-size-lg fw-medium mb-0">People Worldwide</p>
                </div>
            </div>
        </div>
    </section>
    <!-- LATEST Cources -->
    <section class="pt-5 pb-9 py-md-11">
        <div class="container ">
            <div class="row align-items-end mb-4 mb-md-7">
                <div class="col-md mb-4 mb-md-0">
                    <h1 class="mb-1">Latest Courses</h1>
                    <p class="font-size-lg mb-0 text-capitalize">Discover your perfect program in our courses.</p>
                </div>
                <div class="col-md-auto">
                    <a href="{{ route('frontend.course-list') }}" class="d-flex align-items-center fw-medium">
                        Browse All
                        <div class="ms-2 d-flex">
                            <!-- Icon -->
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.7779 4.6098L3.32777 0.159755C3.22485 0.0567475 3.08745 0 2.94095 0C2.79445 0 2.65705 0.0567475 2.55412 0.159755L2.2264 0.487394C2.01315 0.700889 2.01315 1.04788 2.2264 1.26105L5.96328 4.99793L2.22225 8.73895C2.11933 8.84196 2.0625 8.97928 2.0625 9.1257C2.0625 9.27228 2.11933 9.4096 2.22225 9.51269L2.54998 9.84025C2.65298 9.94325 2.7903 10 2.9368 10C3.0833 10 3.2207 9.94325 3.32363 9.84025L7.7779 5.38614C7.88107 5.2828 7.93774 5.14484 7.93741 4.99817C7.93774 4.85094 7.88107 4.71305 7.7779 4.6098Z" fill="currentColor"></path>
                            </svg>

                        </div>
                    </a>
                </div>
            </div>

            <div class="row row-cols-xl-2">
               
            </div>
        </div>
    </section>
    <!-- LaTest News -->
    <section class="bg-white py-5 py-md-11">
        <div class="container ">
            <div class="row align-items-end mb-4 mb-md-7 aos-init">
                <div class="col-md mb-4 mb-md-0">
                    <h1 class="mb-1">Latest News</h1>
                    <p class="font-size-lg mb-0 text-capitalize">Discover your perfect program in our courses.</p>
                </div>
                <div class="col-md-auto">
                    <a href="#" class="d-flex align-items-center fw-medium">
                        Browse All
                        <div class="ms-2 d-flex">
                            <!-- Icon -->
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.7779 4.6098L3.32777 0.159755C3.22485 0.0567475 3.08745 0 2.94095 0C2.79445 0 2.65705 0.0567475 2.55412 0.159755L2.2264 0.487394C2.01315 0.700889 2.01315 1.04788 2.2264 1.26105L5.96328 4.99793L2.22225 8.73895C2.11933 8.84196 2.0625 8.97928 2.0625 9.1257C2.0625 9.27228 2.11933 9.4096 2.22225 9.51269L2.54998 9.84025C2.65298 9.94325 2.7903 10 2.9368 10C3.0833 10 3.2207 9.94325 3.32363 9.84025L7.7779 5.38614C7.88107 5.2828 7.93774 5.14484 7.93741 4.99817C7.93774 4.85094 7.88107 4.71305 7.7779 4.6098Z" fill="currentColor"></path>
                            </svg>

                        </div>
                    </a>
                </div>
            </div>

            <div class="row row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
                <div class="col-md mb-5 mb-lg-0">
                    <!-- Card -->
                    <div class="card border shadow p-2 rounded-lg lift sk-fade">
                        <!-- Image -->
                        <div class="card-zoom position-relative">
                            <a href="./blog-single.html" class="card-img d-block sk-thumbnail img-ratio-3"><img class="rounded shadow-light-lg img-fluid" src="assets/img/post/post-1.jpg" alt="..."></a>

                            <a href="#" class="badge sk-fade-bottom badge-lg badge-purple badge-pill badge-float bottom-0 left-0 mb-4 ms-4 px-5 me-4">
                                <span class="text-white fw-normal font-size-sm">Figma</span>
                            </a>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-2 pb-0 pt-4">
                            <ul class="nav mx-n3 mb-3">
                                <li class="nav-item px-3">
                                    <a href="./blog-single.html" class="d-flex align-items-center text-gray-800">
                                        <div class="me-3 d-flex">
                                            <!-- Icon -->
                                            <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.8102 9.52183C13.313 9.08501 12.7102 8.70758 12.0181 8.40008C11.7223 8.2687 11.3761 8.40191 11.2447 8.69762C11.1134 8.99334 11.2466 9.33952 11.5423 9.47102C12.1258 9.73034 12.6287 10.0436 13.0367 10.4021C13.5396 10.8441 13.8281 11.484 13.8281 12.1582V13.2422C13.8281 13.5653 13.5653 13.8281 13.2422 13.8281H1.75781C1.43475 13.8281 1.17188 13.5653 1.17188 13.2422V12.1582C1.17188 11.484 1.46038 10.8441 1.96335 10.4021C2.55535 9.88186 4.2802 8.67188 7.5 8.67188C9.89079 8.67188 11.8359 6.72672 11.8359 4.33594C11.8359 1.94515 9.89079 0 7.5 0C5.10921 0 3.16406 1.94515 3.16406 4.33594C3.16406 5.7336 3.82896 6.97872 4.85893 7.77214C2.97432 8.18642 1.80199 8.98384 1.18984 9.52183C0.433731 10.1862 0 11.147 0 12.1582V13.2422C0 14.2115 0.788498 15 1.75781 15H13.2422C14.2115 15 15 14.2115 15 13.2422V12.1582C15 11.147 14.5663 10.1862 13.8102 9.52183ZM4.33594 4.33594C4.33594 2.59129 5.75535 1.17188 7.5 1.17188C9.24465 1.17188 10.6641 2.59129 10.6641 4.33594C10.6641 6.08059 9.24465 7.5 7.5 7.5C5.75535 7.5 4.33594 6.08059 4.33594 4.33594Z" fill="currentColor"></path>
                                            </svg>

                                        </div>
                                        <div class="font-size-sm">Jack Wilson</div>
                                    </a>
                                </li>
                                <li class="nav-item px-3">
                                    <a href="./blog-single.html" class="d-flex align-items-center text-gray-800">
                                        <div class="me-2 d-flex">
                                            <!-- Icon -->
                                            <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.0664 1.17188H11.7188V0.46875C11.7188 0.209883 11.5089 0 11.25 0C10.9911 0 10.7812 0.209883 10.7812 0.46875V1.17188H4.21875V0.46875C4.21875 0.209883 4.0089 0 3.75 0C3.4911 0 3.28125 0.209883 3.28125 0.46875V1.17188H1.93359C0.867393 1.17188 0 2.03927 0 3.10547V13.0664C0 14.1326 0.867393 15 1.93359 15H13.0664C14.1326 15 15 14.1326 15 13.0664V3.10547C15 2.03927 14.1326 1.17188 13.0664 1.17188ZM1.93359 2.10938H3.28125V2.57812C3.28125 2.83699 3.4911 3.04688 3.75 3.04688C4.0089 3.04688 4.21875 2.83699 4.21875 2.57812V2.10938H10.7812V2.57812C10.7812 2.83699 10.9911 3.04688 11.25 3.04688C11.5089 3.04688 11.7188 2.83699 11.7188 2.57812V2.10938H13.0664C13.6157 2.10938 14.0625 2.55621 14.0625 3.10547V4.21875H0.9375V3.10547C0.9375 2.55621 1.38434 2.10938 1.93359 2.10938ZM13.0664 14.0625H1.93359C1.38434 14.0625 0.9375 13.6157 0.9375 13.0664V5.15625H14.0625V13.0664C14.0625 13.6157 13.6157 14.0625 13.0664 14.0625Z" fill="currentColor"></path>
                                            </svg>

                                        </div>
                                        <div class="font-size-sm">06 April, 2020</div>
                                    </a>
                                </li>
                            </ul>

                            <!-- Heading -->
                            <a href="./blog-single.html" class="d-block"><h5 class="line-clamp-2 h-48 h-lg-52">The Best Destinations to Begin Your Round the World Trip</h5></a>
                        </div>
                    </div>
                </div>

                <div class="col-md mb-5 mb-lg-0">
                    <!-- Card -->
                    <div class="card border shadow p-2 rounded-lg lift sk-fade">
                        <!-- Image -->
                        <div class="card-zoom position-relative">
                            <a href="./blog-single.html" class="card-img d-block sk-thumbnail img-ratio-3"><img class="rounded shadow-light-lg img-fluid" src="assets/img/post/post-2.jpg" alt="..."></a>

                            <a href="#" class="badge sk-fade-bottom badge-lg badge-purple badge-pill badge-float bottom-0 left-0 mb-4 ms-4 px-5 me-4">
                                <span class="text-white fw-normal font-size-sm">Adobe XD</span>
                            </a>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-2 pb-0 pt-4">
                            <ul class="nav mx-n3 mb-3">
                                <li class="nav-item px-3">
                                    <a href="./blog-single.html" class="d-flex align-items-center text-gray-800">
                                        <div class="me-3 d-flex">
                                            <!-- Icon -->
                                            <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.8102 9.52183C13.313 9.08501 12.7102 8.70758 12.0181 8.40008C11.7223 8.2687 11.3761 8.40191 11.2447 8.69762C11.1134 8.99334 11.2466 9.33952 11.5423 9.47102C12.1258 9.73034 12.6287 10.0436 13.0367 10.4021C13.5396 10.8441 13.8281 11.484 13.8281 12.1582V13.2422C13.8281 13.5653 13.5653 13.8281 13.2422 13.8281H1.75781C1.43475 13.8281 1.17188 13.5653 1.17188 13.2422V12.1582C1.17188 11.484 1.46038 10.8441 1.96335 10.4021C2.55535 9.88186 4.2802 8.67188 7.5 8.67188C9.89079 8.67188 11.8359 6.72672 11.8359 4.33594C11.8359 1.94515 9.89079 0 7.5 0C5.10921 0 3.16406 1.94515 3.16406 4.33594C3.16406 5.7336 3.82896 6.97872 4.85893 7.77214C2.97432 8.18642 1.80199 8.98384 1.18984 9.52183C0.433731 10.1862 0 11.147 0 12.1582V13.2422C0 14.2115 0.788498 15 1.75781 15H13.2422C14.2115 15 15 14.2115 15 13.2422V12.1582C15 11.147 14.5663 10.1862 13.8102 9.52183ZM4.33594 4.33594C4.33594 2.59129 5.75535 1.17188 7.5 1.17188C9.24465 1.17188 10.6641 2.59129 10.6641 4.33594C10.6641 6.08059 9.24465 7.5 7.5 7.5C5.75535 7.5 4.33594 6.08059 4.33594 4.33594Z" fill="currentColor"></path>
                                            </svg>

                                        </div>
                                        <div class="font-size-sm">Jack Wilson</div>
                                    </a>
                                </li>
                                <li class="nav-item px-3">
                                    <a href="./blog-single.html" class="d-flex align-items-center text-gray-800">
                                        <div class="me-2 d-flex">
                                            <!-- Icon -->
                                            <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.0664 1.17188H11.7188V0.46875C11.7188 0.209883 11.5089 0 11.25 0C10.9911 0 10.7812 0.209883 10.7812 0.46875V1.17188H4.21875V0.46875C4.21875 0.209883 4.0089 0 3.75 0C3.4911 0 3.28125 0.209883 3.28125 0.46875V1.17188H1.93359C0.867393 1.17188 0 2.03927 0 3.10547V13.0664C0 14.1326 0.867393 15 1.93359 15H13.0664C14.1326 15 15 14.1326 15 13.0664V3.10547C15 2.03927 14.1326 1.17188 13.0664 1.17188ZM1.93359 2.10938H3.28125V2.57812C3.28125 2.83699 3.4911 3.04688 3.75 3.04688C4.0089 3.04688 4.21875 2.83699 4.21875 2.57812V2.10938H10.7812V2.57812C10.7812 2.83699 10.9911 3.04688 11.25 3.04688C11.5089 3.04688 11.7188 2.83699 11.7188 2.57812V2.10938H13.0664C13.6157 2.10938 14.0625 2.55621 14.0625 3.10547V4.21875H0.9375V3.10547C0.9375 2.55621 1.38434 2.10938 1.93359 2.10938ZM13.0664 14.0625H1.93359C1.38434 14.0625 0.9375 13.6157 0.9375 13.0664V5.15625H14.0625V13.0664C14.0625 13.6157 13.6157 14.0625 13.0664 14.0625Z" fill="currentColor"></path>
                                            </svg>

                                        </div>
                                        <div class="font-size-sm">06 April, 2020</div>
                                    </a>
                                </li>
                            </ul>

                            <!-- Heading -->
                            <a href="./blog-single.html" class="d-block"><h5 class="line-clamp-2 h-48 h-lg-52">An Indigenous Anatolian Syllabic Script From 3500 Years Ago</h5></a>
                        </div>
                    </div>
                </div>

                <div class="col-md mb-5 mb-lg-0">
                    <!-- Card -->
                    <div class="card border shadow p-2 rounded-lg lift sk-fade">
                        <!-- Image -->
                        <div class="card-zoom position-relative">
                            <a href="./blog-single.html" class="card-img d-block sk-thumbnail img-ratio-3"><img class="rounded shadow-light-lg img-fluid" src="assets/img/post/post-9.jpg" alt="..."></a>

                            <a href="./blog-single.html" class="badge badge-lg sk-fade-bottom badge-purple badge-pill badge-float bottom-0 left-0 mb-4 ms-4 px-5 me-4">
                                <span class="text-white fw-normal font-size-sm">Photoshop</span>
                            </a>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-2 pb-0 pt-4">
                            <ul class="nav mx-n3 mb-3">
                                <li class="nav-item px-3">
                                    <a href="./blog-single.html" class="d-flex align-items-center text-gray-800">
                                        <div class="me-3 d-flex">
                                            <!-- Icon -->
                                            <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.8102 9.52183C13.313 9.08501 12.7102 8.70758 12.0181 8.40008C11.7223 8.2687 11.3761 8.40191 11.2447 8.69762C11.1134 8.99334 11.2466 9.33952 11.5423 9.47102C12.1258 9.73034 12.6287 10.0436 13.0367 10.4021C13.5396 10.8441 13.8281 11.484 13.8281 12.1582V13.2422C13.8281 13.5653 13.5653 13.8281 13.2422 13.8281H1.75781C1.43475 13.8281 1.17188 13.5653 1.17188 13.2422V12.1582C1.17188 11.484 1.46038 10.8441 1.96335 10.4021C2.55535 9.88186 4.2802 8.67188 7.5 8.67188C9.89079 8.67188 11.8359 6.72672 11.8359 4.33594C11.8359 1.94515 9.89079 0 7.5 0C5.10921 0 3.16406 1.94515 3.16406 4.33594C3.16406 5.7336 3.82896 6.97872 4.85893 7.77214C2.97432 8.18642 1.80199 8.98384 1.18984 9.52183C0.433731 10.1862 0 11.147 0 12.1582V13.2422C0 14.2115 0.788498 15 1.75781 15H13.2422C14.2115 15 15 14.2115 15 13.2422V12.1582C15 11.147 14.5663 10.1862 13.8102 9.52183ZM4.33594 4.33594C4.33594 2.59129 5.75535 1.17188 7.5 1.17188C9.24465 1.17188 10.6641 2.59129 10.6641 4.33594C10.6641 6.08059 9.24465 7.5 7.5 7.5C5.75535 7.5 4.33594 6.08059 4.33594 4.33594Z" fill="currentColor"></path>
                                            </svg>

                                        </div>
                                        <div class="font-size-sm">Jack Wilson</div>
                                    </a>
                                </li>
                                <li class="nav-item px-3">
                                    <a href="./blog-single.html" class="d-flex align-items-center text-gray-800">
                                        <div class="me-2 d-flex">
                                            <!-- Icon -->
                                            <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.0664 1.17188H11.7188V0.46875C11.7188 0.209883 11.5089 0 11.25 0C10.9911 0 10.7812 0.209883 10.7812 0.46875V1.17188H4.21875V0.46875C4.21875 0.209883 4.0089 0 3.75 0C3.4911 0 3.28125 0.209883 3.28125 0.46875V1.17188H1.93359C0.867393 1.17188 0 2.03927 0 3.10547V13.0664C0 14.1326 0.867393 15 1.93359 15H13.0664C14.1326 15 15 14.1326 15 13.0664V3.10547C15 2.03927 14.1326 1.17188 13.0664 1.17188ZM1.93359 2.10938H3.28125V2.57812C3.28125 2.83699 3.4911 3.04688 3.75 3.04688C4.0089 3.04688 4.21875 2.83699 4.21875 2.57812V2.10938H10.7812V2.57812C10.7812 2.83699 10.9911 3.04688 11.25 3.04688C11.5089 3.04688 11.7188 2.83699 11.7188 2.57812V2.10938H13.0664C13.6157 2.10938 14.0625 2.55621 14.0625 3.10547V4.21875H0.9375V3.10547C0.9375 2.55621 1.38434 2.10938 1.93359 2.10938ZM13.0664 14.0625H1.93359C1.38434 14.0625 0.9375 13.6157 0.9375 13.0664V5.15625H14.0625V13.0664C14.0625 13.6157 13.6157 14.0625 13.0664 14.0625Z" fill="currentColor"></path>
                                            </svg>

                                        </div>
                                        <div class="font-size-sm">06 April, 2020</div>
                                    </a>
                                </li>
                            </ul>

                            <!-- Heading -->
                            <a href="./blog-single.html" class="d-block"><h5 class="line-clamp-2 h-48 h-lg-52">10 Best Countries to Visit for Beginner Travelers</h5></a>
                        </div>
                    </div>
                </div>

                <div class="col-md mb-5 mb-lg-0">
                    <!-- Card -->
                    <div class="card border shadow p-2 rounded-lg lift sk-fade">
                        <!-- Image -->
                        <div class="card-zoom position-relative">
                            <a href="./blog-single.html" class="card-img d-block sk-thumbnail img-ratio-3"><img class="rounded shadow-light-lg img-fluid" src="assets/img/post/post-3.jpg" alt="..."></a>

                            <a href="./blog-single.html" class="badge badge-lg sk-fade-bottom badge-purple badge-pill badge-float bottom-0 left-0 mb-4 ms-4 px-5 me-4">
                                <span class="text-white fw-normal font-size-sm">Photoshop</span>
                            </a>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-2 pb-0 pt-4">
                            <ul class="nav mx-n3 mb-3">
                                <li class="nav-item px-3">
                                    <a href="./blog-single.html" class="d-flex align-items-center text-gray-800">
                                        <div class="me-3 d-flex">
                                            <!-- Icon -->
                                            <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.8102 9.52183C13.313 9.08501 12.7102 8.70758 12.0181 8.40008C11.7223 8.2687 11.3761 8.40191 11.2447 8.69762C11.1134 8.99334 11.2466 9.33952 11.5423 9.47102C12.1258 9.73034 12.6287 10.0436 13.0367 10.4021C13.5396 10.8441 13.8281 11.484 13.8281 12.1582V13.2422C13.8281 13.5653 13.5653 13.8281 13.2422 13.8281H1.75781C1.43475 13.8281 1.17188 13.5653 1.17188 13.2422V12.1582C1.17188 11.484 1.46038 10.8441 1.96335 10.4021C2.55535 9.88186 4.2802 8.67188 7.5 8.67188C9.89079 8.67188 11.8359 6.72672 11.8359 4.33594C11.8359 1.94515 9.89079 0 7.5 0C5.10921 0 3.16406 1.94515 3.16406 4.33594C3.16406 5.7336 3.82896 6.97872 4.85893 7.77214C2.97432 8.18642 1.80199 8.98384 1.18984 9.52183C0.433731 10.1862 0 11.147 0 12.1582V13.2422C0 14.2115 0.788498 15 1.75781 15H13.2422C14.2115 15 15 14.2115 15 13.2422V12.1582C15 11.147 14.5663 10.1862 13.8102 9.52183ZM4.33594 4.33594C4.33594 2.59129 5.75535 1.17188 7.5 1.17188C9.24465 1.17188 10.6641 2.59129 10.6641 4.33594C10.6641 6.08059 9.24465 7.5 7.5 7.5C5.75535 7.5 4.33594 6.08059 4.33594 4.33594Z" fill="currentColor"></path>
                                            </svg>

                                        </div>
                                        <div class="font-size-sm">Jack Wilson</div>
                                    </a>
                                </li>
                                <li class="nav-item px-3">
                                    <a href="./blog-single.html" class="d-flex align-items-center text-gray-800">
                                        <div class="me-2 d-flex">
                                            <!-- Icon -->
                                            <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.0664 1.17188H11.7188V0.46875C11.7188 0.209883 11.5089 0 11.25 0C10.9911 0 10.7812 0.209883 10.7812 0.46875V1.17188H4.21875V0.46875C4.21875 0.209883 4.0089 0 3.75 0C3.4911 0 3.28125 0.209883 3.28125 0.46875V1.17188H1.93359C0.867393 1.17188 0 2.03927 0 3.10547V13.0664C0 14.1326 0.867393 15 1.93359 15H13.0664C14.1326 15 15 14.1326 15 13.0664V3.10547C15 2.03927 14.1326 1.17188 13.0664 1.17188ZM1.93359 2.10938H3.28125V2.57812C3.28125 2.83699 3.4911 3.04688 3.75 3.04688C4.0089 3.04688 4.21875 2.83699 4.21875 2.57812V2.10938H10.7812V2.57812C10.7812 2.83699 10.9911 3.04688 11.25 3.04688C11.5089 3.04688 11.7188 2.83699 11.7188 2.57812V2.10938H13.0664C13.6157 2.10938 14.0625 2.55621 14.0625 3.10547V4.21875H0.9375V3.10547C0.9375 2.55621 1.38434 2.10938 1.93359 2.10938ZM13.0664 14.0625H1.93359C1.38434 14.0625 0.9375 13.6157 0.9375 13.0664V5.15625H14.0625V13.0664C14.0625 13.6157 13.6157 14.0625 13.0664 14.0625Z" fill="currentColor"></path>
                                            </svg>

                                        </div>
                                        <div class="font-size-sm">06 April, 2020</div>
                                    </a>
                                </li>
                            </ul>

                            <!-- Heading -->
                            <a href="./blog-single.html" class="d-block"><h5 class="line-clamp-2 h-48 h-lg-52">10 Best Countries to Visit for Beginner Travelers</h5></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
@endsection