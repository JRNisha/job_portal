@extends('backend.admin.master')
@section('content')

<div class="container" style="margin-top: 20px">

{{-- message showing --}}
@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif


<h1 class="text-center w-100 py-4">Posted Job List</h1>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Serial</th>
            <th scope="col">Job Title</th>
            <th scope="col">Company</th>
            <th scope="col">Salary</th>
            <th scope="col">Job Type</th>
            <th scope="col">Location</th>



          </tr>
        </thead>
        <tbody>
{{-- @dd($postJobShow) --}}
@foreach ( $postJobShow as $key=>$postedJob)
<tr>
    <td>{{ $key+1 }}</td>
    <td>{{  $postedJob->title }}</td>
    <td>{{  $postedJob->company }}</td>
    <td>{{  $postedJob->salary }}</td>
    <td>{{  $postedJob->type }}</td>
    <td>{{  $postedJob->location }}</td>

  </tr>
@endforeach


     <tbody>
      </table>

      {{  $postJobShow->links() }}

</div>



@endsection
