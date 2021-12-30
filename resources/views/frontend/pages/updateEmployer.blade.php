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
             <h1 class="text-center w-100 py-4" style="color:slateblue">Create Employer Profile</h1>
             <form action="{{ route('update.employer.profile',$employer->id) }}" method="POST" class="row g-3">
                @method('PATCH')
                @csrf
                <div class="form-group col-md-12">
                    <label for="inputEmail4" class="form-label">Employer Name</label>
                    <input value="{{ $employer->name }}" name="name" type="name" class="form-control" id="inputEmail4">
                  </div>

                <div class="form-group col-md-6">
                  <label for="inputEmail4" class="form-label">*Email</label>
                  <input value="{{ $employer->email }}" name="email" type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4" class="form-label">*Password</label>
                  <input value="{{ $employer->password }}" name="password" type="password" class="form-control" id="inputPassword4">
                </div>

                <div class="form-group col-12">
                    <label for="inputMobileNumber" class="form-label">*Mobile Number</label>
                    <input value="{{ $employer->mobile }}" name="mobile" type="text" class="form-control" id="inputMobileNumber" placeholder="">
                  </div>
                  <div class="form-group col-12">
                      <label for="inputAddress" class="form-label">Employer Address</label>
                      <input value="{{ $employer->address }}" name="address" type="text" class="form-control" id="inputAddress" placeholder="">
                    </div>


                <div class="text-center w-100 py-4">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>

    </div>
</div>

@endsection
