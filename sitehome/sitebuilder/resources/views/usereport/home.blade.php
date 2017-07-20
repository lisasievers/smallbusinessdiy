@extends ('layouts.dashboard')
<div class="signupstage">
@section('page_heading','')
</div>
@section('section')
<div class="col-sm-12 ">
	 @if( Auth::user()->type == 'admin')
	    @include('layouts.reports.adminreports') 
	 @else
	    @include('layouts.reports.usereports') 
	 @endif
     
</div>

@stop
