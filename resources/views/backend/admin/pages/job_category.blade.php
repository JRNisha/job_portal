@extends('master')
@section('content')

<div class="container" style="margin-top: 20px">

   


    <a class="button" href="{{ route('job.category.list') }}">
        <div class="d-grid gap-2 col-2 mx-auto">
            <button class="btn btn-primary" type="Post Job">Create Job Details</button>

          </div>
    </a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Serial</th>
            <th scope="col">Job Category Name</th>
            <th scope="col">Job Category Type</th>




          </tr>
        </thead>

        <tbody>
            @foreach ($jobcategories as $key=>$jobcategory)
            <tr>
                <th>{{ $key+1 }}</th>
                <th>{{ $jobcategory-> name }}</th>

                <th>{{ $jobcategory-> type }}</th>
              </tr>
            @endforeach



        </tbody>
      </table>


 {{ $jobcategories->links() }}


</div>



@endsection
