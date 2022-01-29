@extends('frontend.master')

@section('content')
<div class="categories-area pt-50 grey-bg pb-50">
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
<br>
<br>
<br>
<section class="section about-section gray-bg" id="about">
<div class="row" style="margin-top: 10px;margin-bottom: 10px; margin-left: 141px;">
    <div class="col-sm-4"style="margin-left: 50px" >
        <div class="card">
          <div class="card-body">
            <h5 class="card-title" style="text-align:center;">Register as Company</h5>
            <div>
                <br>
           <img src="{{url ('frontend/assets/img/company.jpg') }}"  style="height: 200px; width: 100%;" alt="">
           <br>
           <br>
           <br>
           <div class="text-center w-100 py-4">
             <a href="{{ route('create.company.profile') }}"> <button type="submit" class="btn btn-primary">Click Here</button></a>
            </div>
        </div>
      </div>
    </div>
</div>

    <div class="col-sm-4"style="margin-left: 50px" >
      <div class="card">
        <div class="card-body">
          <h5 class="card-title" style="text-align:center;">Register as Candidate</h5>
          <div>
              <br>
         <img src="{{url ('frontend/assets/img/candidate.jpg') }}" style="height: 200px;" alt="">
         <br>
         <br>
         <br>

         <div class="text-center w-100 py-4">
           <a href="{{ route('create.candidate.profile') }}"> <button type="submit" class="btn btn-primary">Click Here</button></a>
          </div>



      </div>
    </div>
  </div>
</section>

<style>
    .section {
    padding: 10px 0;
    position: relative;
}

.gray-bg {
    background-color:aquamarine;
}
</style>

        {{-- <div class="row mt-5">
             <h1 class="text-center w-100 py-4" style="color:rgb(114, 49, 100)">Register As a Candidate</h1>
             <form action="{{ route('signin.store') }}" method="POST" class="row g-3" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-md-12">
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
        </div> --}}

    </div>
</div>

@endsection
