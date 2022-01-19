@extends('backend.admin.master')
@section('content')

<div class="container" style="margin-top: 20px">

<div>
<table class="table">
<h1 class="text-center w-100 py-4">Job Apply Details</h1>
  <thead>
  <tr>
            <th scope="col">Serial</th>
            <th scope="col">User_ID</th>
            <th scope="col">Company_ID</th>
            <th scope="col">Posted_Job_ID</th>
            <th scope="col">Date</th>
            <th scope="col">Status</th>
            <th scope="col">Details</th>
            


          </tr>
  </thead>
  <tbody>
  @foreach ( $jobApplicationView as $key=>$data)

    <tr>
     <td>{{$key+1}}</td>
    <td>{{  $data->user->name }}</td>
    <td>{{$data->company->name}}</td>
    <td>{{  $data->JobApplication->title }}</td>
    
    <td>{{  $data->created_at }}</td>
    <td>{{  $data->status }}</td>
    <td>
        <a href="{{route('job.applicant',$data->id)}}"class="btn btn-success btn-sm" >View Details</a>
        <a href=""class="btn btn-success btn-sm" >Approve</a>
        <a href=""class="btn btn-danger btn-sm" style="margin-left: 15px;">Decline</a>
    </td>
    </tr>
    @endforeach

  </tbody>
</table>

{{  $jobApplicationView->links() }}

  

</div>



@endsection
