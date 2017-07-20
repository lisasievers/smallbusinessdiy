@extends ('layouts.dashboard')
<div class="signupstage">
@section('page_heading','List of Websites from i will do IT')
</div>
@section('section')
<div class="col-sm-12 ">
	 @if( Auth::user()->type == 'admin')
	    @include('layouts.partials.admin_iwilldoitusers') 
	 @else
	    @include('layouts.partials.userdash') 
	 @endif
     
</div>

@stop
