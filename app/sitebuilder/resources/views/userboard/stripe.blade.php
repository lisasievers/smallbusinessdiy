@extends ('layouts.dashboard')
<div class="signupstage">
@section('page_heading','Stripe Payment Page')
</div>
@section('section')
<div class="col-sm-12 ">

        @include('layouts.partials.stripe_form') 
</div>

@stop
