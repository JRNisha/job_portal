@extends('backend.admin.master')

@section('content')

<div class="container">
    <div class="form-row" style="margin-top: 80px;">

        <div class="form-group">
            <form action="{{route('admin.posted.job.report.search')}}" method="post">
                @csrf
                <div style="display: flex; justify-content: space-between;">
                <div class="form-group col-lg-6" style="padding-right: 30px;">
                <label for="inputPassword4">From date</label>
                <input name="from" class="form-control" id="inputPassword4"  type="date" placeholder="">
                </div>
                <div class="form-group col-lg-6">
                <label for="inputPassword4">To date</label>
                <input name="to" class="form-control" id="inputPassword4"  type="date" placeholder="">
                </div>
            </div >
                <button style="margin-top: 15px;margin-bottom: 15px;" type="submit" class="btn btn-info">Submit</button>
            </form>

          </div>
          <table class="table">
          <thead>
            <tr>
                <th scope="col">Serial</th>
                <th scope="col">Job Title</th>
                <th scope="col">Company</th>
                <th scope="col">Category</th>
                <th scope="col">Salary</th>
                <th scope="col">Job Type</th>
                <th scope="col">Location</th>
            </tr>
          </thead>
          <tbody>
            @foreach ( $postJobShow as $key=>$postedJob)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{  $postedJob->title }}</td>
                <td>{{  $postedJob->company->name }}</td>
                <td>{{  $postedJob->category }}</td>
                <td>{{  $postedJob->salary }}</td>
                <td>{{  $postedJob->type }}</td>
                <td>{{  $postedJob->location }}</td>


              </tr>
            @endforeach
          </tbody>
        </table>

          </div>
</div>


@endsection