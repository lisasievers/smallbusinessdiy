<!DOCTYPE html>
<html>
<head>
	<title>{{$cdata[0]}}</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="https://storage.googleapis.com/assets-sitebuilder/images/facicon.ico">

	<link href="{{ URL::to('src/css/vendor/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ URL::to('src/css/flat-ui-pro.css') }}" rel="stylesheet">
	
	<link href="{{ URL::to('src/css/login.css') }}" rel="stylesheet">
	<link href="{{ URL::to('src/css/font-awesome.css') }}" rel="stylesheet">

	<link href="{{ URL::to('src/css/builder.css') }}" rel="stylesheet">
	<link href="{{ URL::to('src/css/spectrum.css') }}" rel="stylesheet">
	<link href="{{ URL::to('src/css/chosen.css') }}" rel="stylesheet">
	<link href="{{ URL::to('src/css/summernote.css') }}" rel="stylesheet">
    <link href="{{ URL::to('src/css/page_pricing.css') }}" rel="stylesheet">
	<!--<link rel="stylesheet" href="{{ URL::to('src/css/build-main.min.css') }}">-->
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" type="text/css">
    <style>


    </style>
</head>
<body class="login">
<div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{$cdata[1]}}">
                        
                        <img src="https://storage.googleapis.com/assets-sitebuilder/images/SMBDIY_Logo2.png" alt="SMBDIY"></a>
                        
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
<?php //echo Session::get('name');?>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                         @foreach( $topmenu as $key=>$menu )
                            <li><a href="{{$menu}}">{{$key}}</a></li>
                           @endforeach  
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <?php echo Session::get('name');?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
<!-- footer section -->
	<div id="footer-wrapper">
    	<div class="container">
        <div id="foottitle" class="col-md-6">			<div class="textwidgeth3">Do IT Yourself!</div>
		</div>   
            <div id="footmenu" class="col-md-6">
                <div class="menu-menu-1-container">
                    <ul id="menu-menu-2" class="">
                        @foreach( $topmenu as $key=>$menu )
                            <li><a href="{{$menu}}">{{$key}}</a></li>
                           @endforeach  
                        </ul> 
                </div>
            </div>   
            <div class="clear gap"><!--clear both --></div>
            <aside id="text-2" class="cols-4 widget-column-1 widget_text">			<div class="textwidget">
<h6>Thank you!</h6>

Thank you for visiting us at SmallBusinessDIY.com! We are here to help! Please do share our site with other Small Business owners where we can help them survive in this new digital world! Lisa Sievers - Serial Entrepreneur</div>
		</aside>    
                        
               <aside id="nav_menu-3" class=" cols-4 widget-column-2 widget_nav_menu"><div class="menu-footer-left-container">
                <ul id="menu-footer-left" class="">
                    @foreach( $bmenu1 as $key=>$menu )
                            <li><a href="{{$menu}}">{{$key}}</a></li>
                           @endforeach  
    </ul></div></aside>   
            
               <aside id="nav_menu-2" class=" cols-4 widget-column-3 widget_nav_menu"><div class="menu-footer-right-container">
                <ul id="menu-footer-right" class="">
                    @foreach( $bmenu2 as $key=>$menu )
                            <li><a href="{{$menu}}">{{$key}}</a></li>
                           @endforeach  
</ul></div></aside>  
              
               <aside id="text-3" class="cols-4 widget-column-4 widget_text">			<div class="textwidget"><div class="contactdetail">
                	                	  <p><i class="fa fa-map-marker"></i> 109 East Street Road, Ohio, USA</p>
                    	
               
					                        <p><i class="fa fa-phone"></i>(305) 555-4446</p>
                                         
					                      <p><i class="fa fa-envelope"></i><a href="mailto:info@sitename.com">info@sitename.com</a></p>
                                       
                                     </div>
                <div class="social-icons">
			<a href="#" target="_blank" class="fa fa-facebook" title="facebook"></a>
			<a href="#" target="_blank" class="fa fa-twitter" title="twitter"></a>
			<a href="#" target="_blank" class="fa fa-linkedin" title="linkedin"></a>
			<a href="#" target="_blank" class="fa fa-google-plus" title="google-plus"></a>				
		</div></div>
		</aside>    
                
                
            <div class="clear"></div>
        </div><!--end .container-->
        
        <div class="copyright-wrapper">
        	<div class="container">
            	<div class="copyright-txt">
					{{$cdata[3]}}           
                </div>
                <div class="design-by">
				  <a href="https://wordpress.org/"></a>
                </div>
                 <div class="clear"></div>
                 
                 	 				                 
            </div>           
        </div>        
    </div> <!-- footer section -->

	<script src="{{ URL::to('src/js/vendor/jquery.min.js') }}"></script>
	<script src="{{ URL::to('src/js/vendor/flat-ui-pro.min.js') }}"></script>
    
	<!--<script src="{{ URL::to('src/js/build/login.min.js') }}" type="text/javascript"></script>-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="text/javascript"></script>
</body>
</html>