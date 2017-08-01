@extends ('layouts.dashboard')
<div class="signupstage">
@section('page_heading','')
</div>
@section('section')
<div class="col-sm-12 ">
	<h2>Free Report Tools</h2>
	<div class="col-md-3">
		<div class="tools-box">
		<a href="{{ route('user.qrcode.generation') }}">QR Code Generator</a>
	</div>
	</div>
     <div class="col-md-3">
     	<div class="tools-box">
     	<a href="{{ route('user.gmobiletest') }}">Mobile Friendly Test</a>
     </div>
	</div>
</div>

@stop
