@extends ('layouts.dashboard')
<div class="signupstage">
@section('page_heading','')
</div>
@section('section')
<div class="col-sm-12 ">
	 @if( Auth::user()->type == 'admin')
	    @include('layouts.reports.sitereports_results') 
	 @else
	   @include('layouts.reports.sitereports_results') 
	 @endif
     
</div>

@stop
