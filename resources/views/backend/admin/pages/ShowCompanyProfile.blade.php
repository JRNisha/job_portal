@extends('backend.admin.master')
@section('content')

<div class="container" style="margin-top: 20px">

{{-- message showing --}}
@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif


<h1 class="text-center w-100 py-4">Registered Company List</h1>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Serial</th>
            <th scope="col">Company Name</th>
            <th scope="col">Email</th>
            <th scope="col">Company Type</th>
            <th scope="col">Address</th>
            <th scope="col">Status </th>


          </tr>
        </thead>
        <tbody>

@foreach ( $companyProfileShow as $key=>$company)
@if($company->role=='company')
<tr>
    <td>{{ $key+1 }}</td>
    <td>{{  $company->name }}</td>
    <td>{{  $company->email }}</td>
    <td>{{  $company->company_type }}</td>
    <td>{{  $company->address }}</td>
    <td>
        <a class="btn btn-success btn-sm" >Approve</a>
        <a class="btn btn-danger btn-sm" style="margin-left: 15px;">Reject</a>
    </td>

  </tr>
  @endif
@endforeach


     <tbody>
      </table>

      {{  $companyProfileShow->links() }}

</div>



@endsection
