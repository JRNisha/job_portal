@extends('frontend.master')
@section('content')

<div class="categories-area pt-80 grey-bg pb-50">
<div class='container'>

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
<form action="{{route('post.job.store')}}" method="POST" class="p-5 bg-white">

    @csrf
   

        <div class="row form-group">

          <div class="col-md-12 mb-3 mb-md-0">
            <label class="font-weight-bold" for="fullname">Job Title</label>
            <input name="title" input type="text"  class="form-control" placeholder="eg. Full Stack Frontend">
          </div>
        </div>

        <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="fullname">Salary</label>
              <input name="salary" input type="integer"  class="form-control" placeholder="eg. BDT 20k">
            </div>
          </div>

        <div class="row form-group mb-5">
          <div class="col-md-12 mb-3 mb-md-0">
            <label class="font-weight-bold" for="fullname">Company</label>
            <input readonly name="name"  value="{{auth()->user()->name}}" input type="text"  class="form-control" placeholder="eg. Facebook, Inc.">
          </div>
        </div>
        <div class="row form-group mb-5">
          <div class="col-md-12 mb-3 mb-md-0">
            <label class="font-weight-bold" for="fullname">Category</label>
            <input name="category" input type="text"  class="form-control" placeholder="eg. Facebook, Inc.">
          </div>
        </div>

        <div class="row form-group mb-5">

                <label class="font-weight-bold" for="fullname">Job Type</label>
                <div class="col-md-12 mb-3 mb-md-0">
            <select name="type" class="form-control" id="exampleFormControlSelect1">
              <option>Full Time</option>
              <option>Part Time</option>
              <option>Freelance</option>
              <option>Internship</option>
              <option>Termporary</option>
            </select>
          </div>
        </div>




        <div class="row form-group mb-4">
          <div class="col-md-12"><h3>Location</h3></div>
          <div class="col-md-12 mb-3 mb-md-0">
            <input name="location" input type="text" class="form-control" placeholder="New York City">
          </div>
        </div>

        

        <div class="row form-group">
          <div class="col-md-12">
            <button type="submit"  class="btn btn-primary  py-2 px-5">Submit</button>
          </div>
        </div>


      </form>
</div>


@endsection
