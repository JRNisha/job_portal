@extends('backend.admin.master')
@section('content')

<div class="container" style="margin-top: 20px">

{{-- message showing --}}
@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif
<h1 class="text-center w-100 py-4">Registered Employer List</h1>
    <table class="table">
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
    <td>{{ $key+1 }}</td>
    <td>{{  $employer-> name }}</td>
    <td>{{  $employer-> email }}</td>
    <td>{{  $employer-> password }}</td>
    <td>{{  $employer-> mobile }}</td>
    <td>{{  $employer-> address }}</td>
    <td>
        <a class="btn btn-success btn-sm" >Approve</a>
        <a class="btn btn-danger btn-sm" style="margin-left: 15px;">Reject</a>
    </td>

  </tr>
@endforeach


     <tbody>
      </table>

      {{  $employerProfileShow->links() }}

</div>



@endsection
