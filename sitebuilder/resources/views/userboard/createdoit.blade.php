@extends ('layouts.dashboard')
<div class="signupstage">
@section('page_heading','Welcome, '.Session::get('name'). '!')
</div>
@section('section')
<div class="col-sm-12 ">
<h3 class="stepscount">You have just <span class="clock">3</span> more steps to complete</h3>
        @include('layouts.partials.progresspay') 
</div>

@stop
