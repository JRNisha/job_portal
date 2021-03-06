@extends('backend.admin.master')
@section('content')

<div class="container">


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

    <form action="{{ route('company.profile') }}" method="POST">
        @csrf

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Company Name</label>
          <input name="name" type="name" class="form-control" id="exampleInputName">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Company Email</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Comapany Address</label>
            <input name="address" type="address" class="form-control" id="exampleInputAddress">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Comapany Type</label>
            <input name="type" type="type" class="form-control" id="exampleInputtype">
          </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>


</div>



@endsection
