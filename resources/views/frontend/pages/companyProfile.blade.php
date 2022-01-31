@extends('frontend.master')

@section('content')

<div class="categories-area pt-80 grey-bg pb-50">

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Checkout example · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container">




  <div class="row" style="margin-bottom: 50px;">

    <div class="col-md-4 order-md-2 mb-4"style="margin-top:180px">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Jobs You Posted</span>
      </h4>


      <ul class="list-group mb-3">
          @if ($postJobShow != null)
          @foreach ($postJobShow as $key=>$postedJob)
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>

              <h5>Job Title : {{$postedJob->title }}</h5>
              <h5>Job Type : {{$postedJob->type }}</h5>
              <h5>Job Salary : {{$postedJob->salary }}</h5>
              <h5>Job Location : {{$postedJob->location }}</h5>
              <h5>Application Deadline : {{$postedJob->deadline }}</h5>

            </div>
            @endforeach
          @else
            <p>no data found.</p>
          @endif









    </div>
    <div class="col-md-8 order-md-1" style="margin-top: 100px;">
      {{-- <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="{{url('/uploads/candidate/'.auth()->user()->image)}}" alt="" width="300px" height="300px">

  </div> --}}
  <h4 class="mb-3">About Your Company</h4>
      <form action="{{ route('store.company.profile') }}" method="POST" class="row g-3" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-md-12">
                    <label for="inputEmail4" class="form-label">Company Name</label>
                    <input readonly name="name" type="text"  value="{{auth()->user()->name}}" class="form-control" id="inputEmail4">
                  </div>

                <div class="form-group col-md-6">
                  <label for="inputEmail4" class="form-label">*Email</label>
                  <input readonly name="email" type="email" value="{{auth()->user()->email}}" class="form-control" id="inputEmail4">
                </div>

                <div class="form-group col-4">
                    <label for="exampleFormControlFile1">Company Type</label>
                    <input readonly  name="company_type" type="text" value="{{auth()->user()->company_type}}" class="form-control" id="inputAddress">

                  </div>


          <div class="form-group col-12">
                    <label for="inputAddress" class="form-label">Company Address</label>
                    <input readonly  name="address" type="text" value="{{auth()->user()->address}}" class="form-control" id="inputAddress">
                  </div>



                </div>
      </form>





    </div>
    <div class="form-group col-12 ">
       <a href="{{ route('edit.company.profile',auth()->user()->id) }}"class="btn btn-primary">Update Your Profile</a>
      </div>
    </div>
  </div>


</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="form-validation.js"></script></body>
</html>

</div>



@endsection
