<header class="header-transparent">
    <div id="sticky-header" class="main-menu-area menu-01 header-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
                    {{-- <div class="logo">
                        <a href="index.html"><img src="{{ url('frontend/assets/img/logo/logo.png') }}" alt="" /></a>
                    </div> --}}
                    {{-- <div class="logo-black">
                        <a href="index.html"><img src="{{ url('frontend/assets/img/logo/logo-black.png') }}" alt="" /></a>
                    </div> --}}
                </div>
                <div class="col-xl-10 col-lg-10 col-md-6 col-sm-6 col-6">
                    <div class="header-right d-flex justify-content-end justify-content-lg-between align-items-center">
                        <div class="main-menu d-none d-lg-block">
                            <nav id="mobile-menu">
                                <ul>
                                    {{-- <li class="active"><a href="index.html">home <i class="far fa-angle-down"></i></a>
                                        <ul class="sub-menu text-left">
                                            <li><a href="index.html">home 1</a></li>
                                            <li><a href="index-2.html">home 2</a></li>
                                        </ul>
                                    </li> --}}
                                    <li><a href="job-grid.html">Jobs <i class="far fa-angle-down"></i></a>
                                        <ul class="sub-menu text-left">
                                            <li><a href="job-grid.html">Job Categories</a></li>
                                            {{-- <li><a href="job-sidebar.html">Job Sidebar</a></li>
                                            <li><a href="job-grid-2-col.html">Job Grid 2 Col</a></li>
                                            <li><a href="job-grid-sidebar.html">Job Grid Sidebar</a></li>
                                            <li><a href="job-grid-map.html">Job Grid Map</a></li> --}}
                                            <li><a href="job-details.html">job Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="candidate-grid.html">Candidates <i class="far fa-angle-down"></i></a>
                                        <ul class="sub-menu text-left">
                                            <li><a href="{{ route('create.candidate.profile') }}">Create candidate profile</a>
                                                <li><a href="">Browse Jobs</a>
                                                    <li><a href="">Apply for Jobs</a>
                                            {{-- <li><a href="candidate-grid.html">Candidate Details</a> --}}
                                        </ul>
                                    </li>
                                    <li><a href="employer-list.html">Employers <i class="far fa-angle-down"></i></a>
                                        <ul class="sub-menu text-left">
                                            <li><a href="{{ route('create.employer.profile') }}">Create Employer Profile</a>
                                                <li><a href="">Browse Candidates</a>
                                                    <li><a href="">Post a job</a>
                                            {{-- <li><a href="employer-details.html">Employer Details</a> --}}
                                        </ul>
                                    </li>
                                    {{-- <li><a href="#">Pages <i class="far fa-angle-down"></i></a>
                                        <ul class="sub-menu text-left">
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="faq.html">Faq</a></li>
                                            <li><a href="pricing.html">Pricing</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="blog-standard.html">Blog List</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="register.html">Register</a></li>
                                        </ul>
                                    </li> --}}
                                    <li><a href="">Companies <i class="far fa-angle-down"></i></a>

                                        <ul class="sub-menu text-left">
                                            <li><a href="{{ route('create.company.profile') }}">Create Company Profile</a>


                                                    <li><a href="">Company Details</a>
                                            <li><a href="">Company Details</a>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-btn d-none d-lg-block">
                            <div class="hedder-button">
                                <a class="h-btn d-lg-none d-xl-inline-block" href="{{ route('signin.form') }}"><i class="far fa-user-circle"></i> Sign In</a>
                                <a class="h-btn h-btn-green" href="{{ route('login.form') }}"><i class="far fa-lock-alt"></i> Log In</a>
                            </div>
                        </div>
                        <div class="sidebar__menu d-lg-none">
                            <div class="sidebar-toggle-btn" id="sidebar-toggle">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
