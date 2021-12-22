@extends('backend.admin.master')
@section('content')

<div class="container" style="margin-top: 20px">

{{-- message showing --}}
@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif


<h1 class="text-center w-100 py-4">Singed In Users List</h1>
    <table class="table table-bordered ">
        <thead>
          <tr>
            <th scope="col">Serial</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Mobile Number</th>
            <th scope="col">Address</th>



          </tr>
        </thead>
        <tbody>
{{-- @dd($candidateProfileShow) --}}
@foreach ( $signInList as $key=>$user)
<tr>
    <td>{{ $key+1 }}</td>
    <td>{{  $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{  $user->password }}</td>
    <td>{{  $user->mobile }}</td>
    <td>{{  $user->address }}</td>



  </tr>
@endforeach


     <tbody>
      </table>

      {{  $signInList->links() }}

</div>



@endsection
