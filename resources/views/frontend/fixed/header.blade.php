<header class="header-transparent">
    <div id="sticky-header" class="main-menu-area menu-01 header-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">

                </div>
                <div class="col-xl-10 col-lg-10 col-md-6 col-sm-6 col-6">
                    <div class="header-right d-flex justify-content-end justify-content-lg-between align-items-center">
                        <div class="main-menu d-none d-lg-block">
                            <nav id="mobile-menu">
                                <ul>
                                    <li>  <a href="{{ route('website') }}">Home</a></li>
                                    <li><a href="job-grid.html">Jobs <i class="far fa-angle-down"></i></a>
                                        <ul class="sub-menu text-left">
                                            <li><a href="{{ route('post.job') }}">Post Jobs</a></li>

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
                                @if (auth()->user())
                                <a href="{{ route('user.logout') }}" class="h-btn h-btn-green">{{ auth()->user()->name }} | Logout</a>
                                @else
                                <a class="h-btn d-lg-none d-xl-inline-block" href="{{ route('signin.form') }}"><i class="far fa-user-circle"></i> Sign In</a>
                                @endif
                                <a class="h-btn h-btn-green" data-toggle="modal" data-target="#login"><i class="far fa-lock-alt"></i> Log In</a>
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


<!-- Login Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('login.form') }}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">User Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="">Enter User Email:</label>
                        <input name="email" type="email" class="form-control" placeholder="Enter user email">
                    </div>
                    <div class="form-group">
                        <label for="">Enter User Password:</label>
                        <input name="password" type="password" class="form-control" placeholder="Enter user password">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
        </form>
    </div>
</div>
