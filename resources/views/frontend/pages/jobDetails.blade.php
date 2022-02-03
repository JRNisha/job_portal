@extends('frontend.master')
 @section('content')

 <div class="categories-area pt-80 grey-bg pb-50">
    <div class='container'>


<div id="divToPrint">
 <h1 class="text-center w-100 py-4" style="color:slateblue" >Job Details</h1>


<div class="text-center w-100 py-4">
<h3>Job Title : {{  $postedJob->title }}</h3>
<h4>Job Type : {{  $postedJob->type }}</h4>
<h4> Salary : {{  $postedJob->salary }} Tk</h4>
<h4>Company Name : {{  $postedJob->company->name }}</h4>
<h4>Job Location : {{  $postedJob->location }}</h4>
<h4 style="color: red">Deadline : {{  $postedJob->deadline }}</h4>
@if(auth()->user())
@if(auth()->user()->role == "Candidate")
<a href="{{route('job.application',$postedJob->id)}}"class="btn btn-primary">Apply</a>
@else
@endif
@endif

</div>
</div>
</div>
</div>

<button class="btn btn-primary" type="submit" onClick="PrintDiv('divToPrint');" value="Print" >print</button>
<script language="javascript">
    function PrintDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>

 @endsection


