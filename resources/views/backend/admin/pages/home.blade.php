@extends('backend.admin.master')

@section('content')
  <div class="container">
     <h1 class="text-center w-100 py-4">Welcome To the Dashboard</h1>
  </div>

@if (auth()->user()->role === "admin")

  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card">
            <img src="{{url ('frontend/assets/img/company.jpg') }}" class="card-img-top" alt="..." style="height:300px; width: 100% !important">
            <div class="card-body text-center">
                <a href="{{ route('show.company.profile') }}"> <button type="submit" class="btn btn-primary">Company Details</button></a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card">
            <img src="{{url ('frontend/assets/img/candidate-details.jpg') }}" class="card-img-top" alt="..." style="height:300px; width: 100% !important">
            <div class="card-body text-center">

                <a href="{{ route('show.candidate.profile') }}"> <button type="submit" class="btn btn-primary">Candidate Details</button></a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="{{url ('frontend/assets/img/employer-details.jpg') }}" class="card-img-top" alt="..." style="height:300px; width: 100% !important">
            <div class="card-body text-center">
                <a href="{{ route('show.employer.profile') }}"> <button type="submit" class="btn btn-primary">Employer Details</button></a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="{{url ('frontend/assets/img/posted-job-details.jpg') }}" class="card-img-top" alt="..." style="height:300px; width: 100% !important">
            <div class="card-body text-center">
                <a href="{{ route('post.job.show') }}"> <button type="submit" class="btn btn-primary">Posted Jobs</button></a>
            </div>
        </div>
    </div>




    <div class="col">
        <div class="card">
            <img src="{{url ('frontend/assets/img/job-apply.jpg') }}" class="card-img-top" alt="..." style="height:300px; width: 100% !important">
            <div class="card-body text-center">
                <a href="{{ route('job.apply') }}"> <button type="submit" class="btn btn-primary">Job Apply Details</button></a>
            </div>
        </div>
    </div>


    <div class="col">
        <div class="card">
            <img src="{{url ('frontend/assets/img/posted-jobs.png') }}" class="card-img-top" alt="..." style="height:300px; width: 100% !important">
            <div class="card-body text-center">
                <a href="{{ route('admin.posted.job.report') }}"> <button type="submit" class="btn btn-primary">Posted Job Report Details</button></a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="{{url ('frontend/assets/img/job-application-report.png') }}" class="card-img-top" alt="" style="height:300px; width: 100% !important">
            <div class="card-body text-center">
                <a href="{{ route('admin.job.application.report') }}"> <button type="submit" class="btn btn-primary">Job Application Report Details</button></a>
            </div>
        </div>
    </div>

</div>
</div>

@else
<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">


    <div class="col">
        <div class="card">
            <img src="{{url ('frontend/assets/img/job-apply.jpg') }}" class="card-img-top" alt="..." style="height:300px; width: 100% !important">
            <div class="card-body text-center">
                <a href="{{ route('job.apply') }}"> <button type="submit" class="btn btn-primary">Job Apply Details</button></a>
            </div>
        </div>
    </div>




</div>
</div>
@endif



    @endsection
