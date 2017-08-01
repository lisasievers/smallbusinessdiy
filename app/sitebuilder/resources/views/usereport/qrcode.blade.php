@extends ('layouts.dashboard')
<div class="signupstage">
@section('page_heading','')
</div>
@section('section')
<style>
#content{clear:both;}
.container{width:100% !important;}
</style>
<div class="col-sm-12 ">
	<h2>QR Report</h2>
	<!--<div class="col-md-6">
		<div class="tools-box">
		<input type="text" name="qrurl" id="qrurl" value="" />
		<input type="button" id="qrsubmit" value="Go" />
	</div>
	</div>-->

  <div id="content"></div>   
</div>

<script>
$(window).load(function () {
$("#content").load("http://localhost/sitehome/qrcode");
});     
</script>
@stop
