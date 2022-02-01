@extends('frontend.master')
 @section('content')


 <!-- job-area-start -->
 <div class="job-area pt-80 pb-50">
    <div class="container">
        <div class="row align-items-center mb-45">
            <div class="col-lg-12" style="background: rgb(77, 77, 77);">
                <div class="section-title">
                    <h2 style="color: white; text-align: center; padding-top: 20px;">Recent Jobs Available</h2>
                </div>


                <div class="job-hero-form" style="width: 50%; margin: auto; margin-bottom: 100px; margin-top: 70px;">
                    <form action="{{route('find.jobs')}}" method="get">

                        <select name="category">

                         @foreach ($postJobShow as $postjob)

                        <option value="{{ $postjob->id }}">{{ $postjob->category }}</option>
                        @endforeach

                        </select>

                        <div class="job-input">
                            <input type="text" placeholder="Locations" name="location">
                            <button type="submit">Find Jobs <i class="far fa-arrow-right"></i></button>
                        </div>


                    </form>
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
                            <h4><a href="">Dead Line : {{  $postedJob->deadline }}</a></h4>
                            <h4><a href="">Category : {{  $postedJob->category }}</a></h4>
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
                        <div>
                        <a href="{{route('job.application',$postedJob->id)}}"class="btn btn-primary">Apply</a>

                        </div>
                    </div>
                </div>
            </div>



            @endforeach

        </div>

    </div>
</div>
<!-- job-area-end -->

@endsection
