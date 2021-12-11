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

        <div class="row mt-5">
             <h1 class="text-center w-100 py-4" >Create Candidate Profile</h1>
             <form action="{{ route('store.candidate.profile') }}" method="POST" class="row g-3">
                @csrf
                <div class="form-group col-md-12">
                    <label for="inputEmail4" class="form-label">Candidate Name</label>
                    <input name="name" type="email" class="form-control" id="inputEmail4">
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
                  <input name="mobile" type="text" class="form-control" id="inputMobileNumber" placeholder="">
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

@endsection
