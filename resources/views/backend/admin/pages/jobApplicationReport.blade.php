@extends('backend.admin.master')

@section('content')



<div class="container">



    <div class="form-row" style="margin-top: 80px;">
    {{-- message --}}

    @if ($errors->any())
     @foreach ($errors->all() as $error)
         <div>{{$error}}</div>
     @endforeach
 @endif
        <div class="form-group">
            <form action="{{route('admin.job.application.report.search')}}" method="post">
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
