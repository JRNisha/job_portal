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

<!-- starts-->



<div class="container">
    <div class="row py-5 mt-4 align-items-center">
        <!-- For Demo Purpose -->
        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
            <img src="https://bootstrapious.com/i/snippets/sn-registeration/illustration.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
            <h1>Create an Account</h1>
        </div>

        <!-- Registeration Form -->
        <div class="col-md-7 col-lg-6 ml-auto">
            <form action="{{route('store.company.profile') }}" method="POST">
            @csrf
            <div class="form-group col-md-12">


                

                    <!--unnecessary <label for="inputEmail4" class="form-label">Company Name</label> -->


             <input hidden value="company" name="role" type="text" class="form-control" >
                  </div>
                <div class="row">

                    <!-- First Name -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input name="name" type="text" placeholder="Company Name" class="form-control bg-white border-left-0 border-md">
                    </div>



                    <!-- Email Address -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                        </div>
                        <input name="email" type="email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md">
                    </div>

                     <!-- Password -->
                     <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input name="password" type="password" placeholder="Password" class="form-control bg-white border-left-0 border-md">
                    </div>





                     <!-- Company Address -->
                     <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fas fa-map-marker-alt"></i>
                            </span>
                        </div>
                        <input name="address" type="text" placeholder="Company Address" class="form-control bg-white border-left-0 border-md">
                    </div>

                   <!-- Company Type -->
                   <div class="form-group col-lg-12 mb-4" class="form-label">Company Type</label>

                    <div class=" form-group col-lg-12 mb-4">
                      <select name="type" class="btn btn dropdown" id="dropdownMenu2" data-toggle="dropdown" placeholder="Select Company Type">

                        <option>Government</option>
                        <option>Private</option>
                        <option>Something Else</option>

                      </select>
                    </div>
                </div>




                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                    <button type="submit" class="btn btn-primary btn-block py-2">
                    <span class="font-weight-bold">Create your Company account</span>
                    </button>

                    </div>



                    <!-- Already Registered -->
                    <div class="text-center w-100">
                        <p class="text-muted font-weight-bold">Already Registered? <a href="#" class="text-primary ml-2">Login</a></p>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>


<style>
  /*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/

.border-md {
    border-width: 2px;
}

.btn-facebook {
    background: #405D9D;
    border: none;
}

.btn-facebook:hover, .btn-facebook:focus {
    background: #314879;
}

.btn-twitter {
    background: #42AEEC;
    border: none;
}

.btn-twitter:hover, .btn-twitter:focus {
    background: #1799e4;
}



/*
*
* ==========================================
* FOR DEMO PURPOSES
* ==========================================
*
*/

body {
    min-height: 100vh;
}

.form-control:not(select) {
    padding: 1.5rem 0.5rem;
}

select.form-control {
    height: 52px;
    padding-left: 0.5rem;
}

.form-control::placeholder {
    color: #ccc;
    font-weight: bold;
    font-size: 0.9rem;
}
.form-control:focus {
    box-shadow: none;
}

</style>

<script>
  // For Demo Purpose [Changing input group text on focus]
$(function () {
    $('input, select').on('focus', function () {
        $(this).parent().find('.input-group-text').css('border-color', '#80bdff');
    });
    $('input, select').on('blur', function () {
        $(this).parent().find('.input-group-text').css('border-color', '#ced4da');
    });
});

</script>

</div>
</div>
</div>
@endsection
         <!-- <div class="row mt-5">
             <h1 class="text-center w-100 py-4" style="color:slateblue" >Create Company Profile</h1>
             <form action="{{route('store.company.profile') }}" method="POST" class="row g-3">
                @csrf

                <div class="form-group col-md-12"> -->



                    <!--unnecessary <label for="inputEmail4" class="form-label">Company Name</label> -->


                    <!-- <input hidden value="company" name="role" type="text" class="form-control" id="inputEmail4">
                  </div>

                <div class="form-group col-md-12">
                    <label for="inputEmail4" class="form-label">Company Name</label>
                    <input name="name" type="text" class="form-control" id="inputEmail4">
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
</div>  -->

