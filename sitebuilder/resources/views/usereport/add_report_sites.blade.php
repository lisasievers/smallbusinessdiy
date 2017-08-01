@extends ('layouts.dashboard')
<div class="signupstage">
@section('page_heading','Add New Website & Payment Details')
</div>
@section('section')
<div class="col-sm-12 ">
	 @if( Auth::user()->type == 'admin')
	    @include('layouts.reports.add_site_for_reports') 
	 @else
	    @include('layouts.reports.add_site_for_reports') 
	 @endif
     
</div>

@stop
