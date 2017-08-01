<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	<title>@if($page!='') {{$page}} @elseif(isset($data['page'])!='') {{$data['page']}} @endif | {{$cdata[0]}}</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="https://storage.googleapis.com/assets-sitebuilder/images/favicon.ico" type="image/vnd.microsoft.icon" >
    <link rel="icon" href="https://storage.googleapis.com/assets-sitebuilder/images/favicon.ico" type="image/vnd.microsoft.icon" >
    <link rel="shortcut icon" href="https://storage.googleapis.com/assets-sitebuilder/images/favicon.ico" type="image/vnd.microsoft.icon" >
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	    <!-- Custom CSS -->
    <link href="{{ asset('src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('src/css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('src/metisMenu/metisMenu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('src/css/sbadmin/sb-admin-2.css') }}" rel="stylesheet"> 
    <link href="{{ asset('src/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
    
    <script src="{{ URL::to('src/js/vendor/jquery.min.js') }}"></script>
    <!--<script src="{{ asset('src/assets/scripts/jquery.min.js') }}"></script>-->
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('src/bootstrap/js/bootstrap.min.js') }}"></script>
    <script>
        var baseUrl = '<?php echo url('/'); ?>/';
        var siteUrl = '<?php echo url('/'); ?>/';
    </script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
    </script>
</head>
<body>
	@yield('body')
	
<script src="{{ asset('src/metisMenu/metisMenu.min.js') }}" ></script>
<script src="{{asset('src/js/signup.js')}}"></script>
<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
    <!-- Metis Menu Plugin JavaScript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="text/javascript"></script>
<script src="{{ URL::to('src/bootstrap/js/bootstrap-checkbox.js') }}"></script>
    <!-- Custom Theme JavaScript -->
<script src="{{ asset('src/assets/scripts/sb-admin-2.js') }}" type="text/javascript"></script>
<!-- jQuery easing plugin -->
</body>
</html>