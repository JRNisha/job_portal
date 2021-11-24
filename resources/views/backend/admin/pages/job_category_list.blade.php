@extends('master')
@section('content')

<div class="container" style="margin-top: 20px">

    <form action="{{ route('job.category.show') }}" method="POST">
@csrf


        <div class="mb-3">
          <label for="jobCategoryName" class="form-label">Job Category Name</label>
          <input name="name" type="name" class="form-control" id="exampleInputName">
        </div>

          <div class="mb-3">
            <label for="jobCategoryType" class="form-label">Job Category Type</label>
            <input name="type" type="type" class="form-control" id="exampleInputType">
          </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>






</div>



@endsection
