@extends('frontend.master')
@section('content')
<div class="categories-area pt-80 grey-bg pb-50">
    <div class="container">
<h1 class="text-center w-100 py-4">Posted Job List</h1>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Job Title</th>
            <th scope="col">Company</th>
            <th scope="col">Category</th>
            <th scope="col">Salary</th>
            <th scope="col">Job Type</th>
            <th scope="col">Location</th>
          </tr>
        </thead>
        <tbody>

@foreach($postJob as $postJob)
@if($postJob->category=='Medical')
<tr>
    <td>{{  $postJob->title }}</td>
    <td>{{  $postJob->company->name }}</td>
    <td>{{  $postJob->category }}</td>
    <td>{{  $postJob->salary }}</td>
    <td>{{  $postJob->type }}</td>
    <td>{{  $postJob->location }}</td>
  </tr>
  @endif
  @endforeach
     <tbody>
      </table>

      

</div>
</div>


@endsection
