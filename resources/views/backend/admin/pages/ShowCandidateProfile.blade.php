@extends('backend.admin.master')
@section('content')

<div class="container" style="margin-top: 20px">

{{-- message showing --}}
@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif


<h1 class="text-center w-100 py-4">Registered Candidate List</h1>
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
            <th scope="col">Role</th>


          </tr>
        </thead>
        <tbody>
{{-- @dd($candidateProfileShow) --}}
@foreach ( $candidateProfileShow as $key=>$candidate)
@if($candidate->role=='Candidate')
<tr>
    <td>{{ $key+1 }}</td>
    <td>{{  $candidate->name }}</td>
    <td>{{  $candidate->email }}</td>
    <td>{{  $candidate->mobile }}</td>
    <td>{{  $candidate->address }}</td>
   
    <td>
        <img width="100px" src=" {{url('/uploads/candidate/'.$candidate->image)}}" style="border-radius: 4px;" width="500px;" alt="candidate">
    </td>

   {{-- <td>{{  $candidate->image }}</td> --}}
    <td>
        <a href="{{ url('/uploads/cv/'.$candidate->cv ) }}">{{  $candidate->cv }}</a>
    </td>
    <td>{{  $candidate->gender }}</td>
    <td>{{  $candidate->role }}</td>

  </tr>
  @endif
@endforeach


     <tbody>
      </table>

      {{  $candidateProfileShow->links() }}

</div>



@endsection
