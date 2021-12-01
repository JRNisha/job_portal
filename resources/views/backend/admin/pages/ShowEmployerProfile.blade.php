@extends('backend.admin.master')
@section('content')

<div class="container" style="margin-top: 20px">

{{-- message showing --}}
@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif
<h1 class="text-center w-100 py-4">Registered Employer List</h1>
    <table class="table table-bordered table-dark">
        <thead>
          <tr>
            <th scope="col">Serial</th>
            <th scope="col">Employer Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Mobile Number</th>
            <th scope="col">Address</th>
            <th scope="col">Status </th>


          </tr>
        </thead>
        <tbody>

@foreach ( $employerProfileShow as $key=>$employer)
<tr>
    <th>{{ $key+1 }}</th>
    <th>{{  $employer-> name }}</th>
    <th>{{  $employer-> email }}</th>
    <th>{{  $employer-> password }}</th>
    <th>{{  $employer-> mobile }}</th>
    <th>{{  $employer-> address }}</th>
    <th>{{  $employer-> status }}</th>

  </tr>
@endforeach


     <tbody>
      </table>

      {{  $employerProfileShow->links() }}

</div>



@endsection
