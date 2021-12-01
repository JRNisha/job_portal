@extends('frontend.master')

@section('content')
<div class="categories-area pt-80 grey-bg pb-50">
    <div class="container">
        <div class="row mt-5">
             <h1 class="text-center w-100 py-4" >Create Candidate Profile</h1>
             <form class="row g-3">
                <div class="form-group col-md-12">
                    <label for="inputEmail4" class="form-label">Candidate Name</label>
                    <input type="email" class="form-control" id="inputEmail4">
                  </div>

                <div class="form-group col-md-6">
                  <label for="inputEmail4" class="form-label">*Email</label>
                  <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4" class="form-label">*Password</label>
                  <input type="password" class="form-control" id="inputPassword4">
                </div>

                <div class="form-group col-12">
                  <label for="inputMobileNumber" class="form-label">*Mobile Number</label>
                  <input type="text" class="form-control" id="inputMobileNumber" placeholder="">
                </div>
                <div class="form-group col-12">
                    <label for="inputAddress" class="form-label">Candidate Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="">
                  </div>
                  <div class="form-group col-12">
                    <label for="exampleFormControlFile1">*Upload CV</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                  </div>




                <div class="form-group col-12">
                  <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
              </form>
        </div>

    </div>
</div>

@endsection
