@extends('backend.admin.master')
@section('content')

<div class="container" style="margin-top: 20px">



<h1 class="text-center w-100 py-4">Applicant Details</h1>
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

      {{ $user_info->links() }}

</div>



@endsection
