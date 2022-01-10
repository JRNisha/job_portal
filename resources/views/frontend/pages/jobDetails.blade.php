@extends('frontend.master')
 @section('content')

 <div class="categories-area pt-80 grey-bg pb-50">
    <div class='container'>


<div id="divToPrint">
 <h1 class="text-center w-100 py-4" style="color:slateblue" >Job Details</h1>


<div class="text-center w-100 py-4">
<p>Job Title : {{  $postedJob->title }}</p>
<p>Job Type : {{  $postedJob->type }}</p>
<p> Salary : {{  $postedJob->salary }} Tk</p>
<p>Company Name : {{  $postedJob->company }}</p>
<p>Job Location : {{  $postedJob->location }}</p>

<a href="{{route('applied.jobs.add',$postedJob->id)}}"class="btn btn-primary">Apply</a>   


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


