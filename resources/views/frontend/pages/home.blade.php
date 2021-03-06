@extends('frontend.master')
 @section('content')
 <main>
 <!-- hero-area start -->
 <section class="hero-area pos-rel">




    <div class="hero-shape d-none d-lg-block">
        <span class="circle"></span>
        <span class="circle circle-yellow"></span>
        <span class="shape-plus">+</span>
    </div>
    <div class="hero-slider">
        <div class="single-slider slider-height d-flex align-items-center align-items-xl-end"
            data-background="{{ url('frontend/assets/img/slider/01.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9 col-md-11">
                        <div class="hero-content pos-rel mt-125">
                            <div class="hero-dot-shape d-none d-lg-block">
                                <img src="{{url('/frontend/assets/img/shape/dot-shape.png')  }}" alt="">
                            </div>

                            <div class="text-center hero-slider-caption " style="text-align: center;">

                                <h2  data-animation="fadeInUp" data-delay=".7s"><span class="counter">{{$countJob}} </span>  Dream Jobs Available Now</h2>

                                <div class="job-hero-form">
                                    <form action="{{route('website')}}" method="get">
                                        <select name="category">

                                        @foreach ($postJobShow as $postjob)

                                        <option value="{{ $postjob->id }}">{{ $postjob->category }}</option>
                                        @endforeach

                                        </select>
                                        <div class="job-input">
                                            <input type="text" placeholder="Locations" name="location">
                                        </div>

                                       <a href=""> <button type="submit">Find Jobs <i class="far fa-arrow-right"></i></button></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- categories-area-start -->

<div class="categories-area pt-80 grey-bg pb-50">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                <div class="section-title text-center ml-50 mr-50 mb-45">
                    <h2>Popular Categories</h2>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-12 mb-30">
                <div class="categories-wrapper pos-rel">
                    <div class="categories-icon f-left">
                        <i class="fal fa-bezier-curve"></i>
                    </div>
                    <div class="categories-text">
                        <h4>Graphics Design</h4>
                        <span>{{  $countGraphicsDesignerJob }} Available Jobs</span>
                    </div>
                    <div class="cat-button">
                        <a href="{{route('job.catergory')}}"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 mb-30">
                <div class="categories-wrapper pos-rel">
                    <div class="categories-icon f-left">
                        <i class="fal fa-acorn"></i>
                    </div>
                    <div class="categories-text">
                        <h4>Bank Jobs</h4>
                        <span>{{  $countBankJob }} Available Jobs</span>
                    </div>
                    <div class="cat-button">
                    <a href="{{route('job.category.bank.jobs')}}"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 mb-30">
                <div class="categories-wrapper pos-rel">
                    <div class="categories-icon f-left">
                        <i class="fal fa-laptop-code"></i>
                    </div>
                    <div class="categories-text">
                        <h4>Web Development</h4>
                        <span>{{ $countWebJob }} Available Jobs</span>
                    </div>
                    <div class="cat-button">
                    <a href="{{route('job.category.WebDevelopment')}}"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 mb-30">
                <div class="categories-wrapper pos-rel">
                    <div class="categories-icon f-left">
                        <i class="fal fa-graduation-cap"></i>
                    </div>
                    <div class="categories-text">
                        <h4>Private Tutors</h4>
                        <span>{{  $countPrivateTutorJob }} Available Jobs</span>
                    </div>
                    <div class="cat-button">
                        <a href="{{route('job.category.private.tutor')}}"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 mb-30">
                <div class="categories-wrapper pos-rel">
                    <div class="categories-icon f-left">
                        <i class="fal fa-bullhorn"></i>
                    </div>
                    <div class="categories-text">
                        <h4>Digital Marketing</h4>
                        <span>{{  $countDigitalMarketingJob }} Available Jobs</span>
                    </div>
                    <div class="cat-button">
                    <a href="{{route('job.category.DigitalMarketing')}}"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 mb-30">
                <div class="categories-wrapper pos-rel">
                    <div class="categories-icon f-left">
                        <i class="fal fa-broadcast-tower"></i>
                    </div>
                    <div class="categories-text">
                        <h4>It/Web Consulting</h4>
                        <span>{{  $countItJob }} Available Jobs</span>
                    </div>
                    <div class="cat-button">
                        <a href="{{route('job.category.it')}}"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 mb-30">
                <div class="categories-wrapper pos-rel">
                    <div class="categories-icon f-left">
                        <i class="fal fa-briefcase-medical"></i>
                    </div>
                    <div class="categories-text">
                        <h4>Business Group</h4>
                        <span>{{ $countBusinessJob }} Available Jobs</span>
                    </div>
                    <div class="cat-button">
                        <a href="{{route('job.category.business.group')}}"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 mb-30">
                <div class="categories-wrapper pos-rel">
                    <div class="categories-icon f-left">
                        <i class="fal fa-broom"></i>
                    </div>
                    <div class="categories-text">
                        <h4>Cleaning Services</h4>
                        <span>{{  $countCleaningJob }} Available Jobs</span>
                    </div>
                    <div class="cat-button">
                    <a href="{{route('job.category.cleaning.services')}}"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 mb-30">
                <div class="categories-wrapper pos-rel">
                    <div class="categories-icon f-left">
                        <i class="fal fa-clinic-medical"></i>
                    </div>
                    <div class="categories-text">
                        <h4>Medical & Healths</h4>
                        <span>{{ $countMedicalJob }} Available Jobs</span>
                    </div>
                    <div class="cat-button">
                    <a href="{{route('job.category.medical')}}"><i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- categories-area-end -->

<!-- job-area-start -->
<div class="job-area pt-80 pb-50">
    <div class="container">
        <div class="row align-items-center mb-45">
            <div class="col-xl-5">
                <div class="section-title">
                    <h2>Recent Jobs Available</h2>




                </div>
            </div>
            <div class="col-xl-7">
                <div class="section-btn text-left text-md-right">
                    <a class="b-btn" href="{{route('find.jobs')}}">Browse All Jobs <i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach ($postJobShow as $postedJob)
            <div class="col-xl-4 col-lg-6 col-md-12 mb-30" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px">
                <div class="job-wrapper mb-30">
                    <div class="banck-icon">
                        <i class="flaticon-dashboard"></i>
                    </div>
                    <div class="job-tag mb-30">
                        <span class="tag-normal"> {{ $postedJob->type }}</span>
                        <span class="tag-urgent">urgent</span>
                    </div>
                    <div class="job-instructor-profile mb-30">
                        <div class="job-instructor-title">
                            <h4><a href="">{{  $postedJob->company->name }}</a></h4>
                            <h4 style="color: rgb(196, 92, 92);"Deadline><a href="">Dead Line : {{  $postedJob->deadline }}</a></h4>
                            <br>
                            <h5 ><a href="">Category : {{  $postedJob->category }}</a></h5>
                            <span><i class="far fa-map-marker-alt"></i> {{  $postedJob->location }}</span>
                        </div>
                    </div>
                    <div class="job-content">
                        <h4><a href="job-details.html">{{  $postedJob->title }}</a></h4>
                        <p>Apply to the job if you are interested</p>
                        <div class="job-salary">
                            <span> {{  $postedJob->salary }} Taka</span>
                            <a href="{{ route('job.details.show',$postedJob->id) }}">Job Details <i class="far fa-arrow-right"></i>
                            </a>
                        </div>
                        @if(auth()->user())
                        @if(auth()->user()->role == "Candidate")
                        <div>
                        <a href="{{route('job.application',$postedJob->id)}}"class="btn btn-primary">Apply</a>
                        </div>
                        @else
                        @endif
                        @endif
                    </div>
                </div>
            </div>


            @endforeach

        </div>

    </div>
</div>
<!-- job-area-end -->

<!-- counter-area start -->
<div class="counter-area bg-cover pt-80 pb-50" data-background="{{ url('frontend/assets/img/bg/fact.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-fact mb-30">
                    <i class="fal fa-gift-card"></i>
                    <div class="fact-text" >
                    <h2 >{{$countJob}} Available Jobs </h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-fact mb-30">
                <i class="fas fa-user-tie"></i>
                    <div class="fact-text">
                        <h2>{{$count}}<br> Employers </h2>

                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6" >
                <div class="single-fact mb-30">
                <i class="fas fa-users"></i>
                    <div class="fact-text">
                    <h2>{{$countCandidate}} Candidates</h2>
                    </div>
                </div>
            </div>



          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-fact mb-30">
                    <i class="fas fa-building"></i>
                    <div class="fact-text">
                    <h2>{{ $countCompany}} <br>Companies </h2>


                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
<!-- counter-area end -->



<!-- services area start -->
<section class="services__area pt-10 pb-10">
    <div class="container">
            @if(auth()->user())
            @if(auth()->user()->role == "company")
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="services__item grey-bg transition-3 text-center mb-30">
                    <div class="services__shape transition-3" data-background="{{ url('frontend/assets/img/shape/hexa.png') }}"></div>
                    <div class="services__icon mb-25">
                        <img src="{{ url('/frontend/assets/img/icon/services/icon-2.png') }}" alt="">
                    </div>
                    <div class="services__content">
                        <h2>Post Your Jobs</h2>
                        <a href="{{ route('post.job') }}" class="b-btn b-btn-green">Post Job <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @else
            @endif
            @endif

    </div>
</section>
<!-- services area end -->

<div class="cta-area pt-50 pb-20" data-background="{{ url('frontend/assets/img/bg/cta-bg.jpg') }}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="cta-text mb-30">
                    <h2>Started Your Career With <b>Job Portal</b></h2>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="cta-btn text-lg-right mb-30">
                    <a class="b-btn" href="{{ route('signin.form') }}">Get Started Now <i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- login register modal start -->
<!-- Modal -->
<div class="modal fade register__modal-area" id="registerModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-body">
            <div class="register__modal">
                <div class="register__nav">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="register-tab" data-toggle="pill" href="#register" role="tab" aria-controls="register" aria-selected="true"><i class="far fa-user-circle"></i>Register Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="login-tab" data-toggle="pill" href="#login" role="tab" aria-controls="login" aria-selected="false"><i class="fal fa-lock-open-alt"></i>Login Account</a>
                        </li>
                    </ul>
                </div>
                <div class="register__nav-content">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="register" role="tabpanel" aria-labelledby="register-tab">
                            <div class="register__form">
                                <form action="#">
                                    <div class="register__input">
                                        <input type="text" placeholder="Your First Name">
                                        <i class="far fa-user"></i>
                                    </div>
                                    <div class="register__input">
                                        <input type="text" placeholder="Your Last Name">
                                        <i class="far fa-user"></i>
                                    </div>
                                    <div class="register__input">
                                        <input type="email" placeholder="Your  Email Address">
                                        <i class="far fa-envelope-open"></i>
                                    </div>
                                    <div class="register__input">
                                        <input type="text" placeholder="Your  Phone Number">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <div class="register__input">
                                        <input type="password" placeholder="Password">
                                        <i class="far fa-lock-alt"></i>
                                    </div>
                                    <div class="register__input">
                                        <input type="password" placeholder="Confirm Password">
                                        <i class="far fa-lock-alt"></i>
                                    </div>
                                    <div class="register__mail">
                                        <p>Email Me Career-Related Job Portal Updates And Job Opportunities</p>
                                        <span>
                                            <input type="checkbox" checked>
                                            Yes
                                        </span>
                                        <span>
                                            <input type="checkbox">
                                            No
                                        </span>
                                    </div>
                                    <div class="register__btn mb-45">
                                        <button type="submit" class="b-btn b-btn-green w-100">Create Account <i class="far fa-arrow-right"></i></button>
                                    </div>
                                    <div class="register__or text-center">
                                        <div class="register__or-title mb-20">
                                            <h3>OR</h3>
                                        </div>
                                        <div class="register__option theme-social">
                                            <ul>
                                                <li>
                                                    <a href="#" class="fb">
                                                        <i class="fab fa-facebook-f"></i>
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="tw">
                                                        <i class="fab fa-twitter"></i>
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="gp">
                                                        <i class="fab fa-google-plus-g"></i>
                                                        <i class="fab fa-google-plus-g"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="login" role="tabpanel" aria-labelledby="login-tab">
                            <div class="register__form">
                                <form action="#">
                                    <div class="register__input">
                                        <input type="email" placeholder="Your  Email Address">
                                        <i class="far fa-envelope-open"></i>
                                    </div>
                                    <div class="register__input">
                                        <input type="text" placeholder="Your  Phone Number">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <div class="register__input">
                                        <input type="password" placeholder="Password">
                                        <i class="far fa-lock-alt"></i>
                                    </div>
                                    <div class="register__mail">
                                        <p>Email Me Career-Related Job Portal Updates And Job Opportunities</p>
                                        <span>
                                            <input type="checkbox" checked>
                                            Yes
                                        </span>
                                        <span>
                                            <input type="checkbox">
                                            No
                                        </span>
                                    </div>
                                    <div class="register__btn mb-45">
                                        <button type="submit" class="b-btn b-btn-green w-100">Create Account <i class="far fa-arrow-right"></i></button>
                                    </div>
                                    <div class="register__or text-center">
                                        <div class="register__or-title mb-20">
                                            <h3>OR</h3>
                                        </div>
                                        <div class="register__option theme-social">
                                            <ul>
                                                <li>
                                                    <a href="#" class="fb">
                                                        <i class="fab fa-facebook-f"></i>
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="tw">
                                                        <i class="fab fa-twitter"></i>
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="gp">
                                                        <i class="fab fa-google-plus-g"></i>
                                                        <i class="fab fa-google-plus-g"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<!-- login register modal end -->

</main>
@endsection
