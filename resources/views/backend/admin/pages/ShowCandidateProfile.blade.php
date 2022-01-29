@extends('backend.admin.master')
@section('content')

<div class="container" style="margin-top: 20px">

{{-- message showing --}}
@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif


{{--search --}}

<form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" action="{{route('show.candidate.profile')}}"method="get">
    <div class="input-group">
        <input class="form-control" name="search"type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
        <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>

</form>



<h1 class="text-center w-100 py-4">Registered Candidate List</h1>
    <table class="table ">
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
            <th scope="col">Role</th>
            <th scope="col">Status </th>


          </tr>
        </thead>
        <tbody>
{{-- @dd($candidateProfileShow) --}}
@php
    $count=1;
@endphp
@foreach ( $candidateProfileShow as $key=>$candidate)
@if($candidate->role=='Candidate')
<tr>
    <td>{{ $count++}}</td>
    <td>{{  $candidate->name }}</td>
    <td>{{  $candidate->email }}</td>
    <td>{{  $candidate->mobile }}</td>
    <td>{{  $candidate->address }}</td>

    <td>
        <img width="100px" src=" {{url('/uploads/candidate/'.$candidate->image)}}" style="border-radius: 4px;" width="500px;" alt="candidate">
    </td>

    <td>
        <a href="{{ url('/uploads/cv/'.$candidate->cv ) }}">{{  $candidate->cv }}</a>
    </td>
    <td>{{  $candidate->gender }}</td>
    <td>{{  $candidate->role }}</td>
    <td>

            {{-- <a href=""class="btn btn-success btn-sm" >Update</a> --}}
            <a href="{{route('candidate.profile.delete',$candidate->id)}}" class="btn btn-danger btn-sm" style="margin-left:50;margin-top: 20px;">Reject</a>


    </td>

  </tr>
  @endif
@endforeach


     <tbody>
      </table>

      {{  $candidateProfileShow->links() }}

</div>



@endsection
