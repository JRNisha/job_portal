@extends('backend.admin.master')

@section('content')

<div class="container">
    <div class="form-row">

        <div class="form-group col-md-6">
            <form action="{{route('admin.job.application.report.search')}}" method="post">
                @csrf
                <label for="inputPassword4">From date</label>
                <input name="from" class="form-control" id="inputPassword4"  type="date" placeholder="">
                </div>
                <div class="form-group col-md-6">
                <label for="inputPassword4">To date</label>
                <input name="to" class="form-control" id="inputPassword4"  type="date" placeholder="">
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
            </form>

          </div>
          <table class="table">
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
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>

          </div>
</div>


@endsection
