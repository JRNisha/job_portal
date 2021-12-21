@extends('frontend.master')
 @section('content')

 <div class="categories-area pt-80 grey-bg pb-50">
    <div class='container'>


 <h1 class="text-center w-100 py-4" style="color:slateblue" >Job Details</h1>


<div class="text-center w-100 py-4">
<p>Job Title : {{  $postedJob->title }}</p>
<p>Job Type : {{  $postedJob->type }}</p>
<p> Salary : {{  $postedJob->salary }} Tk</p>
<p>Company Name : {{  $postedJob->company }}</p>
<p>Job Location : {{  $postedJob->location }}</p>

    <button type="apply" class="btn btn-primary">Apply</button>
</div>
</div>
</div>


 @endsection
