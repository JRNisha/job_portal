@extends('frontend.master')
 @section('content')

 <div class="categories-area pt-80 grey-bg pb-50">
    <div class='container'>

    <h1 class="text-center w-100 py-4" style="color:slateblue" >Applied Jobs({{session()->has('appliedJobs') ? count(session()->get('appliedJobs')):0}})</h1>
    <table class="table table-success table-striped">
  
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Job Title </th>
      <th scope="col">Job Type</th>
      <th scope="col">Salary </th>
      <th scope="col">Company Name</th>
      <th scope="col">Job Location </th>
      <th scope="col">Number of Jobs</th>
    </tr>
  </thead>
  <tbody>
 @if($postedJob)
  @foreach($postedJob as $key=>$data)
        <tr>
        <td>{{ $key }}</td>
            <td>{{$data['job_title']}}</td>
            <td>{{$data['job_type']}}</td>
            <td>{{$data['job_salary']}}</td>
            <td>{{$data['job_location']}}</td>
            <td>{{$data['job_company_name']}}</td>
            <td>{{$data['job_qty']}}</td>
            
        </tr>
        @endforeach
        @endif
      
  </tbody>

</table>
<a href="{{route('cart.job')}}" class="btn btn-danger">Cancel</a>
</div>
</div>

    @endsection