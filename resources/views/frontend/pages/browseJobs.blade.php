@extends('frontend.master')
 @section('content')


 <div class="job-area pt-80 pb-50">
    <div class="container">
        <div class="row align-items-center mb-45">
            <div class="col-xl-5">
                <div class="section-title">
                    <h2 class="text-center w-100 py-4">Recent Jobs Available</h2>

                </div>
            </div>

        </div>
        <div class="row">




            <div class="col-xl-4 col-lg-6 col-md-12 mb-30">

                @foreach ( $postJobShow as $postedJob)

                <div class="job-wrapper mb-30">
                    <div class="banck-icon">
                        <i class="flaticon-job-search-3"></i>
                    </div>
                    <div class="job-tag mb-30">
                        <span class="tag-fea">{{  $postedJob->type }}</span>

                    </div>
                    <div class="job-instructor-profile mb-30">

                        <div class="job-instructor-title">
                            <h4><a href="job-details.html">{{  $postedJob->company }}</a></h4>
                            <span><i class="far fa-map-marker-alt"></i> {{  $postedJob->location }}</span>
                        </div>
                    </div>
                    <div class="job-content">
                        <h4><a href="job-details.html">{{  $postedJob->title }}</a></h4>

                        <div class="job-salary">
                            <span><i class="fal fa-usd-circle"></i> {{  $postedJob->salary }}</span>
                            <a href="{{ route('job.details.show',$postedJob->id) }}">Job Details <i class="far fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>

        </div>
    </div>
</div>
@endsection
