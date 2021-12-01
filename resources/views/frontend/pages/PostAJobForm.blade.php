@extends('frontend.master')
@section('content')


<div class='container'>
    <form action="#" class="p-5 bg-white">



        <div class="row form-group">
          <div class="col-md-12 mb-3 mb-md-0">
            <label class="font-weight-bold" for="fullname">Job Title</label>
            <input type="text" id="fullname" class="form-control" placeholder="eg. Full Stack Frontend">
          </div>
        </div>

        <div class="row form-group mb-5">
          <div class="col-md-12 mb-3 mb-md-0">
            <label class="font-weight-bold" for="fullname">Company</label>
            <input type="text" id="fullname" class="form-control" placeholder="eg. Facebook, Inc.">
          </div>
        </div>


        <div class="row form-group">
          <div class="col-md-12"><h3>Job Type</h3></div>
          <div class="col-md-12 mb-3 mb-md-0">
            <label for="option-job-type-1">
              <input type="radio" id="option-job-type-1" name="job-type"> Full Time
            </label>
          </div>
          <div class="col-md-12 mb-3 mb-md-0">
            <label for="option-job-type-2">
              <input type="radio" id="option-job-type-2" name="job-type"> Part Time
            </label>
          </div>

          <div class="col-md-12 mb-3 mb-md-0">
            <label for="option-job-type-3">
              <input type="radio" id="option-job-type-3" name="job-type"> Freelance
          </div>
          <div class="col-md-12 mb-3 mb-md-0">
            <label for="option-job-type-4">
              <input type="radio" id="option-job-type-4" name="job-type"> Internship
            </label>
          </div>
          <div class="col-md-12 mb-3 mb-md-0">
            <label for="option-job-type-4">
              <input type="radio" id="option-job-type-4" name="job-type"> Termporary
            </label>
          </div>

        </div>

        <div class="row form-group mb-4">
          <div class="col-md-12"><h3>Location</h3></div>
          <div class="col-md-12 mb-3 mb-md-0">
            <input type="text" class="form-control" placeholder="New York City">
          </div>
        </div>

        <div class="row form-group">
          <div class="col-md-12"><h3>Job Description</h3></div>
          <div class="col-md-12 mb-3 mb-md-0">
            <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
          </div>
        </div>

        <div class="row form-group">
          <div class="col-md-12">
            <input type="submit" value="Post a Job" class="btn btn-primary  py-2 px-5">
          </div>
        </div>


      </form>
</div>


@endsection
