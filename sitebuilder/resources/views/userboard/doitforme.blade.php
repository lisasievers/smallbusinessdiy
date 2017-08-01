@extends ('layouts.dashboard')
<div class="signupstage">
@section('page_heading','List of Websites from DO IT for me')
</div>
@section('section')
<div class="col-sm-12 ">
	 @if( Auth::user()->type == 'admin')
	    @include('layouts.partials.admin_doitformeusers') 
	 @else
	    @include('layouts.partials.userdash') 
	 @endif
     
</div>

@stop
