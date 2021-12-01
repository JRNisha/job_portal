@extends('frontend.master')

@section('content')
<div class="categories-area pt-80 grey-bg pb-50">
    <div class="container">
        <div class="row mt-5">
             <h1 class="text-center w-100 py-4" >Create Company Profile</h1>
             <form class="row g-3">
                <div class="form-group col-md-12">
                    <label for="inputEmail4" class="form-label">Company Name</label>
                    <input type="email" class="form-control" id="inputEmail4">
                  </div>

                <div class="form-group col-md-6">
                  <label for="inputEmail4" class="form-label">*Email</label>
                  <input type="email" class="form-control" id="inputEmail4"placeholder="please fill up the field">
                </div>
                <div class="form-group col-md-12">
                  <label for="inputPassword4" class="form-label">*Password</label>
                  <input type="password" class="form-control" id="inputPassword4" placeholder="please fill up the field">
                </div>



                </div>
                <div class="form-group col-6">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="">
                  </div>
                <div class="form-group col-md-12">
                  <label for="inputCity" class="form-label">Company Location</label>
                  <input type="text" class="form-control" id="inputCity">
                </div>

                <div class="form-group col-12">
                    <label for="inputAddress2" class="form-label">Company Type</label>
                    <div class=" form-group col-12 dropdown">
                      <button class="btn btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Select from here
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item" type="button">Government</button>
                        <button class="dropdown-item" type="button">Private</button>
                        <button class="dropdown-item" type="button">Something else</button>
                      </div>
                    </div>


                <div class="form-group col-12">
                  <button type="submit" class="btn btn-primary">Sign in</button>
                </div>




              </form>
        </div>

    </div>
</div>

@endsection
