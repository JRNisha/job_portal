@extends('frontend.master')
 @section('content')


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
                    <a class="b-btn" href="{{ route('browse.jobs') }}">Browse All Jobs <i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
@if($postJobShow)
            @foreach ($postJobShow as $postedJob)
            <div class="col-xl-4 col-lg-6 col-md-12 mb-30">
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
                            <h4><a href="job-details.html">{{  $postedJob->company }}</a></h4>
                            <span><i class="far fa-map-marker-alt"></i> 205 Main Road, New York</span>
                        </div>
                    </div>

                

                    <div class="job-content">
                        <h4><a href="job-details.html">{{  $postedJob->title }}</a></h4>
                        <p>Quis autem vel eum reprehenderit
                        voluptate velitquam molestiae</p>
                        <div class="job-salary">
                            <span><i class="fal fa-usd-circle"></i> {{  $postedJob->salary }}</span>
                            <a href="job-details.html">Job Details <i class="far fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>



            @endforeach
            @endif
        </div>

    </div>
</div>
<!-- job-area-end -->

@endsection
