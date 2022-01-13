@extends('backend.admin.master')
@section('content')

<div class="container" style="margin-top: 20px">



@foreach ( $user_info as $key=>$info)
<section class="section about-section gray-bg" id="about">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="about-text go-to">
                            <h3 class="dark-color">{{$info->name}}</h3>
                           
                            <div class="row about-list">
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>Gender</label>
                                        <p>{{  $info->gender }}</p>
                                    </div>
                                
                                    <div class="media">
                                        <label>Address</label>
                                        <p>{{ $info->address }}</p>
                                    </div>
                                   
                                    <div class="media">
                                        <label>CV</label>
                                         <a href="{{ url('/uploads/cv/'.$info->cv ) }}">{{  $info->cv }}</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>E-mail</label>
                                        <p>{{  $info->email }}</p>
                                    </div>
                                    <div class="media">
                                        <label>Phone</label>
                                        <p>{{  $info->mobile }}</p>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-avatar">
                        <img width="500px" src=" {{url('/uploads/candidate/'.$info->image)}}" style="border-radius: 4px;" width="500px;" alt="candidate">
                        </div>
                    </div>
                </div>
                <!-- <div class="counter">
                    <div class="row">
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="500" data-speed="500">500</h6>
                                <p class="m-0px font-w-600">Happy Clients</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="150" data-speed="150">150</h6>
                                <p class="m-0px font-w-600">Project Completed</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="850" data-speed="850">850</h6>
                                <p class="m-0px font-w-600">Photo Capture</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="190" data-speed="190">190</h6>
                                <p class="m-0px font-w-600">Telephonic Talk</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
        @endforeach
        <style>
    body{
    color: #6F8BA4;
    margin-top:20px;
}
.section {
    padding: 100px 0;
    position: relative;
}
.gray-bg {
    background-color: #f5f5f5;
}
img {
    max-width: 100%;
}
img {
    vertical-align: middle;
    border-style: none;
}
/* About Me 
---------------------*/
.about-text h3 {
  font-size: 45px;
  font-weight: 700;
  margin: 0 0 6px;
}
@media (max-width: 767px) {
  .about-text h3 {
    font-size: 35px;
  }
}
.about-text h6 {
  font-weight: 600;
  margin-bottom: 15px;
}
@media (max-width: 767px) {
  .about-text h6 {
    font-size: 18px;
  }
}
.about-text p {
  font-size: 18px;
  max-width: 450px;
}
.about-text p mark {
  font-weight: 600;
  color: #20247b;
}

.about-list {
  padding-top: 10px;
}
.about-list .media {
  padding: 5px 0;
}
.about-list label {
  color: #20247b;
  font-weight: 600;
  width: 88px;
  margin: 0;
  position: relative;
}
.about-list label:after {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  right: 11px;
  width: 1px;
  height: 12px;
  background: #20247b;
  -moz-transform: rotate(15deg);
  -o-transform: rotate(15deg);
  -ms-transform: rotate(15deg);
  -webkit-transform: rotate(15deg);
  transform: rotate(15deg);
  margin: auto;
  opacity: 0.5;
}
.about-list p {
  margin: 0;
  font-size: 15px;
}

@media (max-width: 991px) {
  .about-avatar {
    margin-top: 30px;
  }
}

.about-section .counter {
  padding: 22px 20px;
  background: #ffffff;
  border-radius: 10px;
  box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
}
.about-section .counter .count-data {
  margin-top: 10px;
  margin-bottom: 10px;
}
.about-section .counter .count {
  font-weight: 700;
  color: #20247b;
  margin: 0 0 5px;
}
.about-section .counter p {
  font-weight: 600;
  margin: 0;
}
mark {
    background-image: linear-gradient(rgba(252, 83, 86, 0.6), rgba(252, 83, 86, 0.6));
    background-size: 100% 3px;
    background-repeat: no-repeat;
    background-position: 0 bottom;
    background-color: transparent;
    padding: 0;
    color: currentColor;
}
.theme-color {
    color: #fc5356;
}
.dark-color {
    color: #20247b;
}

</style>
<!-- //list -->


<!-- <h1 class="text-center w-100 py-4">Applicant Details</h1>
    <table class="table table-bordered ">
        <thead>
          <tr>
            <th scope="col">Serial</th>
            <th scope="col">Candidate Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile Number</th>
            <th scope="col">Address</th>
            <th scope="col">Image</th>
            <th scope="col">Upload CV</th>
            <th scope="col">Gender</th>
            <th scope="col">Status</th>


          </tr>
        </thead>
        <tbody>

@foreach ( $user_info as $key=>$info)
<tr>
    <td>{{ $key+1 }}</td>
    <td>{{  $info->name }}</td>
    <td>{{  $info->email }}</td>
    <td>{{  $info->mobile }}</td>
    <td>{{ $info->address }}</td>
    <td>
        <img width="100px" src=" {{url('/uploads/candidate/'.$info->image)}}" style="border-radius: 4px;" width="500px;" alt="candidate">
    </td>

   {{-- <td>{{  $info->image }}</td> --}}
    <td>
        <a href="{{ url('/uploads/cv/'.$info->cv ) }}">{{  $info->cv }}</a>
    </td>
    <td>{{  $info->gender }}</td>
    <td>{{  $info->Status }}
    

        <a href=""class="btn btn-success btn-sm" >Approve</a>
        <a href=""class="btn btn-danger btn-sm" style="margin-left: 15px;">Decline</a>
    </td>

  </tr>
@endforeach


     <tbody>
      </table>

      {{ $user_info->links() }} -->

</div>



@endsection
