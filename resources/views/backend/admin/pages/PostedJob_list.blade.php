@extends('backend.admin.master')
@section('content')

<div class="container" style="margin-top: 20px">

{{-- message showing --}}
@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif
{{--search --}}
<h1 class="text-center w-100 py-4">Posted Job List</h1>

<form class="form-inline" action="{{route('post.job.show')}}"method="get">
    <div class="input-group">
        <input class="form-control" name="search"type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
        <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>

</form>





    <table class="table">
        <thead>
          <tr>
            <th scope="col">Serial</th>
            <th scope="col">Job Title</th>
            <th scope="col">Company</th>
            <th scope="col">Category</th>
            <th scope="col">Salary</th>
            <th scope="col">Job Type</th>
            <th scope="col">Location</th>
            <th scope="col">Deadline</th>
            {{-- <th scope="col">Status </th> --}}





          </tr>
        </thead>
        <tbody>
{{-- @dd($postJobShow) --}}
@foreach ( $postJobShow as $key=>$postedJob)
<tr>
    <td>{{ $key+1 }}</td>
    <td>{{  $postedJob->title }}</td>
    <td>{{  $postedJob->company->name }}</td>
    <td>{{  $postedJob->category }}</td>
    <td>{{  $postedJob->salary }}</td>
    <td>{{  $postedJob->type }}</td>
    <td>{{  $postedJob->location }}</td>
    <td>{{  $postedJob->deadline }}</td>
    {{-- <td>
        {{-- <a href=""class="btn btn-success btn-sm" >Update</a> --}}
        {{-- <a href="{{route('posted.job.delete',$postedJob->id)}}" class="btn btn-danger btn-sm" style="margin-left: 15px;">Delete</a> --}}

    {{-- </td> --}}

  </tr>
@endforeach


     <tbody>
      </table>

      {{  $postJobShow->links() }}

</div>



@endsection
