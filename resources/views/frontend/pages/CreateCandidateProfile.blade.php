@extends('frontend.master')

@section('content')
<div class="categories-area pt-80 grey-bg pb-50">
    <div class="container">


{{-- message --}}
@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif



{{-- validation --}}
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif



<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
<link href="{{url('fonts,_icomoon,_style.css+css,_owl.carousel.min.css+css,_bootstrap.min.css+css,_style.css.pagespeed.cc.WuwWHFx2BT.css')}}" rel="stylesheet">


</head>
<body>
<div class="content">
<div class="container">
<div class="row">
<div class="col-md-6 order-md-2 " style="margin-top: 100px">
<img src="{{url('/frontend/assets/img/undraw_remotely_2j6y.svg')}}" alt="Image" class="img-fluid" data-pagespeed-url-hash="3023428066" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
</div>
<div class="col-md-6 contents">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="mb-4">
<h3 class="text-center w-100 py-4">Create Your
  <div>
     <strong>Candidate</strong> Profile</h3>
    </div>
</div>


             <form action="{{ route('store.candidate.profile') }}" method="POST" class="row g-3" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-md-12">
                    <input hidden value="Candidate" name="role" type="text" class="form-control" >
                    <label for="inputEmail4" class="form-label">Candidate Name</label>
                    <input name="name" type="text" class="form-control" id="inputEmail4">
                  </div>

                <div class="form-group col-md-6">
                  <label for="inputEmail4" class="form-label">*Email</label>
                  <input name="email" type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4" class="form-label">*Password</label>
                  <input name="password" type="password" class="form-control" id="inputPassword4">
                </div>

                <div class="form-group col-12">
                  <label for="inputMobileNumber" class="form-label">*Mobile Number</label>
                  <input name="mobile" type="number" class="form-control" id="inputMobileNumber" placeholder="">
                </div>
          <div class="form-group col-12">
                    <label for="inputAddress" class="form-label">Candidate Address</label>
                    <input name="address" type="text" class="form-control" id="inputAddress" placeholder="">
                  </div>

                  <div class="form-group col-4">
                    <label for="iamge">Image</label>
                    <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
                  </div>


                  <div class="form-group col-4">
                    <label for="exampleFormControlFile1">*Upload CV</label>
                    <input name="cv" type="file" class="form-control-file" id="exampleFormControlFile2">
                  </div>

                  <div class="form-group col-4" class="form-label">Gender</label>

                    <div class=" form-group col-6 dropdown mt-1">
                      <select name="gender" class="btn btn dropdown" id="dropdownMenu2" data-toggle="dropdown" placeholder="Select Company Type">

                        <option>Male</option>
                        <option>Female</option>
                        <option>Something Else</option>

                      </select>
                    </div>
                </div>





                <div class="text-center w-100 py-4">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

              </div>
</div>
</div>
</div>
</div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js+bootstrap.min.js+main.js.pagespeed.jc.AM7zHOnWML.js"></script><script>eval(mod_pagespeed_VdtoRqoRj6);</script>
<script>eval(mod_pagespeed_buaBZmHuVG);</script>
<script>eval(mod_pagespeed__iE4DxA2EC);</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6ce277db8a296ebf","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>

        </div>

    </div>
</div>
</div>
@endsection
