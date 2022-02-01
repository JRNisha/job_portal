@extends('backend.admin.master')
@section('content')

<div class="container" style="margin-top: 20px">



    

<section class="section about-section gray-bg" id="about">

            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="about-text go-to">
                            <h3 class="dark-color">{{$jobapplication->user->name}}</h3>

                            <div class="row about-list">
                                <div class="col-md-6">
                                    <div class="col">
                                        <h5><label>Gender</label></h5>
                                        <h4>{{  $jobapplication->user->gender }}</h4>
                                    </div>

                                    <div class="media">
                                        <label>Address</label>
                                        <h4>{{ $jobapplication->user->address }}</h4>
                                    </div>

                                    <div class="media">
                                        <label>CV</label>
                                         <a href="{{ url('/uploads/cv/'.$jobapplication->user->cv ) }}">{{  $jobapplication->user->cv }}</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>E-mail</label>
                                        <h4>{{  $jobapplication->user->email }}</h4>
                                    </div>

                                    <div class="media">
                                        <label>Phone</label>
                                        <h4>{{  $jobapplication->user->mobile }}</h4>
                                    </div>


                                <div class="media">

        <a href="{{route('hire',$jobapplication->id)}}"class="btn btn-primary btn-sm" >Hire</a>
        <a href="{{route('reject',$jobapplication->id)}}"class="btn btn-danger btn-sm" style="margin-left: 15px;">Reject</a>
        <a href="{{route('terminate',$jobapplication->id)}}"class="btn btn-danger btn-sm" style="margin-left: 15px;">Terminate</a>

                                </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-avatar">
                        <img width="500px" src=" {{url('/uploads/candidate/'.$jobapplication->user->image)}}" style="border-radius: 4px;" width="500px;" alt="candidate">
                        </div>
                    </div>
                </div>

            </div>
        </section>

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
  font-size: 80px;
  font-weight: 700;
  margin: 0 0 6px;
}
@media (max-width: 767px) {
  .about-text h3 {
    font-size: 55px;
  }
}
.about-text h6 {
  font-weight: 600;
  margin-bottom: 15px;
}
@media (max-width: 767px) {
  .about-text h6 {
    font-size: 30px;
  }
}
.about-text p {
  font-size: 30px;
  max-width: 450px;
}
.about-text p mark {
  font-weight: 600;
  color: #20247b;
}

.about-list {
  padding-top: 30px;
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




@endsection
