@extends('layouts.login')

@section('content')

<div class="container">

    <div class="row needweb">
        <!--
<div class="col-md-5">
<div class="pricing ">
<div class="pricing-head">
<h3>NEED A WEBSITE</h3>
<h4><i>$</i>{{$cost_month}}<span> Per Month</span><span> <span class="tcolor">(or)</span> </span><i>$</i>{{$cost_year}}<span> Per Annual</span></h4>
<div class="dived-line"></div>
<h5><span>+</span><i>$</i>{{$setup_cost}}<span> Setup Costs</span></h5>
</div>
<ul class="pricing-content list-unstyled">
<li><i class="fa fa-gift"></i> Need a Makeover ?</li>
<div class="dived-line"></div>
<li><i class="fa fa-desktop"></i> New Responsive Website ?</li>
<div class="dived-line"></div>
<li><i class="fa fa-credit-card"></i> NO CREDIT CARD NEEDED! </li>
<div class="dived-line"></div>
<li><i class="fa fa-external-link"></i><a href="#" target="_blank"> Terms & Conditions</a> </li>
<div class="dived-line"></div>
</ul>
<div class="pricing-footer">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cloud Storage magna psum olor .</p></div>
</div>
</div>
<div class="col-md-2">
<div class="new_site_ribbon">SIGN UP NOW</div>
</div>-->
   <div class="col-md-5">
    
    @if ($errors->any())
            @foreach ($errors->all() as $error)
                @if ($error =='The email has already been taken.' )
            <div class="alert alert-danger">
                <button type="button" class="close fui-cross" data-dismiss="alert"></button>
                Sorry! This email already registered with us!! 
                 </div>
                @endif            
            @endforeach
    @endif
            @if( Session::has('message') )
            <div class="alert alert-success">
                <button type="button" class="close fui-cross" data-dismiss="alert"></button>
                {{ Session::get('message') }}
            </div>
            @endif
            @if( $errors->has('users:email'))
            <div class="alert alert-error">
                <button type="button" class="close fui-cross" data-dismiss="alert"></button>
                Sorry! This email already registered with us!! {{$error}}
            </div>
            @endif
            <div class="regform">
                <h6>Register Here - Need a website !!</h6>
                <div class="moresteps">You're on your way to creating an amazing website! Just 3 more steps to go!</div>
            <form role="form" id="SignUp" action="{{ route('signup') }}" method="post">

                <div class="input-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                    
                    <input type="text" class="form-control" id="first_name" name="first_name" tabindex="1" placeholder="First name *" value="{{ Request::old('first_name') }}">
                </div>

                <div class="input-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                    
                    <input type="text" class="form-control" id="last_name" name="last_name" tabindex="2" placeholder="Last name *" value="{{ Request::old('last_name') }}">
                </div>

                <div class="input-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    
                    <input type="email" class="form-control" id="email" name="email" tabindex="3" placeholder="Email *"  >
                </div>
                <!--<div class="input-group {{ $errors->has('city') ? 'has-error' : '' }}">
                    <span class="input-group-btn">
                        <button class="btn"><span class="fui-arrow-right"></span></button>
                    </span>
                    <input type="text" class="form-control" id="city" name="city" tabindex="4" placeholder="City *" value="{{ Request::old('city') }}">
                </div>
                <div class="input-group {{ $errors->has('state') ? 'has-error' : '' }}">
                    <span class="input-group-btn">
                        <button class="btn"><span class="fui-arrow-right"></span></button>
                    </span>
                    <input type="text" class="form-control" id="state" name="state" tabindex="5" placeholder="State *" value="{{ Request::old('state') }}">
                </div>-->
                
                <div class="input-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    
                    <input type="password" class="form-control" id="password" name="password" tabindex="4" placeholder="Password *" >
                </div>
                <!--
                <div class="input-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                    <span class="input-group-btn">
                        <button class="btn"><span class="fui-arrow-right"></span></button>
                    </span>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" tabindex="5" placeholder="Confirm password *" value="">
                </div>
                -->
               
                <!--
                <div class="input-group">
                    <span class="input-group-btn">
                        <button class="btn"><span class="fui-arrow-right"></span></button>
                    </span>
                    <input type="text" class="form-control" id="captcha" name="CaptchaCode" tabindex="6" placeholder="Enter the letters from the image *">
                </div>-->
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <input type="hidden" name="userfrom" value="needweb">
                <div class="signbtn-group">
                    <button type="submit" class="btn btn-primary btn-block btn-embossed" tabindex="5"> Register </span></button>
                 </div>  
                <!-- <div class="moresteps">You're on your way to creating an amazing website! Just 3 more steps to go!</div>-->
             </div>
               <!-- <hr class="dashed light">-->

                <div class="text-center">
                   Already registered? <a href="{{ route('home') }}" style="font-size: 15px"> Login</a>
                <!--<img src="{{ URL::to('src/images/test.jpg') }}" /> -->
                </div>

            </form>
<script>
function myFunction() {
    // Display an info toast with no title
  toastr.info('You have to complete some more steps to reach sitebuilde..')
    document.getElementById("SignUp").submit();
}

</script>
        </div><!-- /.col -->
<div class="col-md-7">
<div id="tv_container">
    <video width="555" height="309" controls>
        <source src="https://storage.googleapis.com/assets-sitebuilder/video/sitebuilder-lite.mp4" type="video/mp4" />
    </video>
</div>
   </div>
   
    </div><!-- /.row -->
    <div class="clear"></div>
    <div class="row">
<div class="col-md-12">
<div class="pricing ">
<div class="pricing-head">
<h3>NEED A WEBSITE</h3>
<h4><i>$</i>{{$cost_month}}<span> Per Month</span><span> <span class="tcolor">(or)</span> </span><i>$</i>{{$cost_year}}<span> Per Annual</span></h4>
<div class="dived-line"></div>
<h5><span>+</span><i>$</i>{{$setup_cost}}<span> Setup Costs</span></h5>
</div>
<div class="pricing-content list-unstyled">
<div class="col-md-3"><i class="fa fa-gift"></i> Need a Makeover ?</div>
<!--<div class="dived-line2"></div>-->
<div class="col-md-3"><i class="fa fa-desktop"></i> New Responsive Website ?</div>
<!--<div class="dived-line2"></div>-->
<div class="col-md-3"><i class="fa fa-credit-card"></i> NO CREDIT CARD NEEDED! </div>
<!--<div class="dived-line2"></div>-->
<div class="col-md-3"><i class="fa fa-external-link"></i><a href="#" target="_blank"> Terms & Conditions</a> </div>
<!--<div class="dived-line2"></div>-->
</div>
<div class="pricing-footer">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cloud Storage magna psum olor .</p></div>
</div>
</div>
</div>
</div><!-- /.container -->

@endsection