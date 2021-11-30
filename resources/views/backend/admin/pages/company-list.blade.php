@extends('backend.admin.master')
@section('content')

<div class="container" style="margin-top: 20px">



    {{-- message showing --}}
    @if(session()->has('msg'))
        <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif






    <a class="button" href="{{ route('about.company') }}">
        <div class="d-grid gap-2 col-2 mx-auto">
            <button class="btn btn-primary" type="Post Job">Create Company Details</button>

          </div>
    </a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Serial</th>
            <th scope="col">Company Name</th>
            <th scope="col">Company Email</th>
            <th scope="col">Company Address</th>
            <th scope="col">Company Type</th>


          </tr>
        </thead>
        <tbody>
            @foreach ($companylist as $key=>$item)
            <tr>
                <th>{{ $key+1 }}</th>
                <th>{{  $item-> name }}</th>
                <th>{{ $item-> email }}</th>
                <th>{{ $item-> address }}</th>
                <th>{{ $item-> type }}</th>
              </tr>
            @endforeach



        </tbody>
      </table>


{{ $companylist->links() }}


</div>



@endsection
