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
                </div>

                <div class="text-center w-100 py-4">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>

    </div>
</div>

@endsection
