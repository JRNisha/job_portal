@extends('backend.admin.master')
@section('content')

<div class="container" style="margin-top: 20px">

{{-- message showing --}}
@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif


{{--search --}}

<form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" action="{{route('show.company.profile')}}"method="get">
    <div class="input-group">
        <input class="form-control" name="search"type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
        <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>

</form>

<h1 class="text-center w-100 py-4">Registered Company List</h1>
    <table class="table">
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
            @php
            $count=1;
        @endphp
@foreach ( $companyProfileShow as $key=>$company)
@if($company->role=='company')
<tr>
    <td>{{ $count++ }}</td>
    <td>{{  $company->name }}</td>
    <td>{{  $company->email }}</td>
    <td>{{  $company->company_type }}</td>
    <td>{{  $company->address }}</td>
    <td>
        <a href=""class="btn btn-success btn-sm" >Update</a>
        <a href="{{route('company.profile.delete',$company->id)}}"class="btn btn-danger btn-sm" style="margin-left: 15px;">Reject</a>
    </td>

  </tr>
  @endif
@endforeach


     <tbody>
      </table>

      {{  $companyProfileShow->links() }}

</div>



@endsection
