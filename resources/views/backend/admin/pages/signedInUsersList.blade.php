@extends('backend.admin.master')
@section('content')

<div class="container" style="margin-top: 20px">

{{-- message showing --}}
@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif


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


          </tr>
        </thead>
        <tbody>
{{-- @dd($candidateProfileShow) --}}
@foreach ( $signInList as $key=>$user)
<tr>
    <td>{{ $key+1 }}</td>
    <td>{{  $user->name }}</td>
    <td>{{  $user->email }}</td>
    <td>{{   $user->mobile }}</td>
    <td>{{  $user->address }}</td>
    <td>
        <img width="100px" src=" {{url('/uploads/candidate/'.$user->image)}}" style="border-radius: 4px;" width="500px;" alt="candidate">
    </td>

   {{-- <td>{{  $user->image }}</td> --}}
    <td>
        <a href="{{ url('/uploads/cv/'.$user->cv ) }}">{{ $user->cv }}</a>
    </td>
    <td>{{ $user->gender }}</td>


  </tr>
@endforeach


     <tbody>
      </table>

      {{  $signInList->links() }}

</div>



@endsection
