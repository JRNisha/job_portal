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
             <h1 class="text-center w-100 py-4" style="color:slateblue">Application Form</h1>
             <form action="{{ route('store.job.application',$post->id) }}" method="POST" class="row g-3" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-md-12">
                    <label for="inputEmail4" class="form-label">Candidate Name</label>
                    <input readonly name="name" type="text"  value="{{auth()->user()->name}}" class="form-control" id="inputEmail4">
                  </div>

                <div class="form-group col-md-12">
                  <label for="inputEmail4" class="form-label">*Email</label>
                  <input readonly name="email" type="email" value="{{auth()->user()->email}}" class="form-control" id="inputEmail4">
                </div>
      

                <div class="form-group col-12">
                    <label for="inputMobileNumber" class="form-label">*Mobile Number</label>
                    <input readonly name="mobile" type="number"  value="{{auth()->user()->mobile}}" class="form-control" id="inputMobileNumber">
                  </div>

                <div class="form-group col-12">
                    <label for="inputAddress" class="form-label">Candidate Address</label>
                    <input readonly  name="address" type="text" value="{{auth()->user()->address}}" class="form-control" id="inputAddress">
                  </div>


                  <!-- <div class="form-group col-12">
                    <label for="inputnegotiable" class="form-label">Negotiable Salary</label>
                    <input name="negotiable" type="text" class="form-control" id="inputnegotiable">
                  </div> -->
                  <!-- <div class="form-group col-12">
                    <label for="inputuser_id" class="form-label">User_id</label>
                    <input name="user_id" type="text" class="form-control" id="inputuser_id">
                  </div>

                  <div class="form-group col-12">
                    <label for="inputposted_Job_Id" class="form-label">Posted_Job_Id</label>
                    <input name="posted_Job_Id" type="text" class="form-control" id="inputposted_Job_Id">
                  </div>

                  <div class="form-group col-12">
                    <label for="inputdate" class="form-label">Date</label>
                    <input name="date" type="text" class="form-control" id="inputdate">
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
                    </div> -->
                </div>





                <div class="text-center w-100 py-4">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>

    </div>
</div>

@endsection
