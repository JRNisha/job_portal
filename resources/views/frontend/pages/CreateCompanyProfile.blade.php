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
             <h1 class="text-center w-100 py-4" style="color:slateblue" >Create Company Profile</h1>
             <form action="{{ route('store.company.profile') }}" method="POST" class="row g-3">
                @csrf
                <div class="form-group col-md-12">
                    <label for="inputEmail4" class="form-label">Company Name</label>
                    <input name="name" type="email" class="form-control" id="inputEmail4">
                  </div>

                <div class="form-group col-md-6">
                  <label for="inputEmail4" class="form-label">*Email</label>
                  <input name="email" type="email" class="form-control" id="inputEmail4"placeholder="please fill up the field">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4" class="form-label">*Password</label>
                  <input name="password" type="password" class="form-control" id="inputPassword4" placeholder="please fill up the field">
                </div>


                <div class="form-group col-6" class="form-label">Company Type</label>

                    <div class=" form-group col-6 dropdown mt-3">
                      <select name="type" class="btn btn dropdown" id="dropdownMenu2" data-toggle="dropdown" placeholder="Select Company Type">

                        <option>Government</option>
                        <option>Private</option>
                        <option>Something Else</option>

                      </select>
                    </div>
                </div>

                <div class="form-group col-6 ">
                    <label for="inputAddress" class="form-label">Company Address</label>
                    <input name="address" type="text" class="form-control" id="inputAddress" placeholder="">
                  </div>


                {{-- <div class="form-group col-md-12">
                  <label for="inputCity" class="form-label">Company Location</label>
                  <input type="text" class="form-control" id="inputCity">
                </div> --}}




                <div class="text-center w-100 py-4">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>




              </form>
        </div>

    </div>
</div>

@endsection
