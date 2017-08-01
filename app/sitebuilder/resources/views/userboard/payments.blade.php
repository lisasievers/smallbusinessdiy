@extends ('layouts.dashboard')
<div class="signupstage">
@section('page_heading','Payments Details')
</div>
@section('section')
<div class="col-sm-12 ">
	 @if( Auth::user()->type == 'admin')
	    @include('layouts.partials.admin_payments') 
	 @else
	    @include('layouts.partials.userdash') 
	 @endif
     
</div>

@stop
