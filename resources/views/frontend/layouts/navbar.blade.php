<!-- NAVBAR
    ================================================== -->
    <header class="navbar navbar-expand-xl navbar-light">
        <div class="container ">

            <!-- Brand -->
            <a class="navbar-brand ms-0" href="/">
                <img src="{{ asset('img/logo.png')}}" class="navbar-brand-img" alt="...">
            </a>

            <!-- Vertical Menu -->
            <ul class="navbar-nav navbar-vertical ms-xl-4 d-none d-xl-flex">
                <li class="nav-item dropdown">
                    <a class="nav-link pb-4 mb-n4 px-0 pt-0" id="navbarVerticalMenu" data-bs-toggle="dropdown" href="{{ route('frontend.blog-list') }}" aria-haspopup="true" aria-expanded="false">
                        <div class="bg-dark rounded-pill py-3 px-5 d-flex align-items-center">
                            <div class="me-3 ms-1 d-flex text-white">
                                <!-- Icon -->
                                <svg width="25" height="17" viewBox="0 0 25 17" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="25" height="1" fill="currentColor"></rect>
                                    <rect y="8" width="15" height="1" fill="currentColor"></rect>
                                    <rect y="16" width="20" height="1" fill="currentColor"></rect>
                                </svg>

                            </div>
                            <span class="text-white fw-medium me-1">Blogs</span>
                        </div>
                    </a>

                </li>
            </ul>

            <!-- Collapse -->
            <div class="collapse navbar-collapse z-index-lg" id="navbarCollapse">

                <!-- Toggler -->
                <button class="navbar-toggler outline-0 text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- Icon -->
                    <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.142135 2.00015L1.55635 0.585938L15.6985 14.7281L14.2843 16.1423L0.142135 2.00015Z" fill="currentColor"></path>
                        <path d="M14.1421 1.0001L15.5563 2.41431L1.41421 16.5564L0 15.1422L14.1421 1.0001Z" fill="currentColor"></path>
                    </svg>

                </button>

                <!-- Navigation -->
                
            </div>

           
            

            <!-- Toggler -->
            <button class="navbar-toggler ms-4 ms-md-5 shadow-none bg-teal text-white icon-xs p-0 outline-0 h-40p w-40p d-flex d-xl-none place-flex-center" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <!-- Icon -->
                <svg width="25" height="17" viewBox="0 0 25 17" xmlns="http://www.w3.org/2000/svg">
                    <rect width="25" height="1" fill="currentColor"></rect>
                    <rect y="8" width="15" height="1" fill="currentColor"></rect>
                    <rect y="16" width="20" height="1" fill="currentColor"></rect>
                </svg>

            </button>
        </div>
    </header>

