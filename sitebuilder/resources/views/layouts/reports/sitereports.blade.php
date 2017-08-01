<style>
#chosensite{width:350px;height: 42px;padding: 10px;}
.act-group{margin-top: 10px;}
</style>
  <?php //dd($data); ?>
    @if( isset($data['sites']) && count( $data['sites'] ) > 0 )
<div class="row">

  <div class="sitelist col-md-6">
  <form role="form" id="ReportSite" action="{{ route('user.showreports') }}" method="post">
     <input type="hidden" name="_token" value="{{ Session::token() }}">
    <h2>Your Sites</h2>
<select id="chosensite" data-style="btn-info" name="sitename">
 
@foreach( $data['sites'] as $site )
<option value="{{$site['id']}}">{{ $site['site_name'] }}</option>
 @endforeach

  </select>
  <!--<div class="act-group">
<button type="submit" class="btn btn-info">Go to Reports</button>
</div>-->
</form>
 <p>Add more websites, Please click <a href="{{ route('user-reports-addition') }}"> here</a></p>
  </div>
</div>
  <div class="row">
 
    <div class="col-md-6">
 <div class="tools-details">
      <h3>DIY Doctor</h3>
      <P>SideDoctor can check your website’s health status within a minute. Follow the suggestion provided by the SiteDoctor and make your site more SEO friendly. </P>
  <a href="{{$tools['sitedoctor']}}" class="btn btn-primary btn-embossed btn-block"><span class="fui-new"></span>GO TO TEST</a>
  </div> 
  </div> 
  <div class="col-md-6">
 <div class="tools-details">
      <h3>DIY Sitespy</h3>
      <P>SideDoctor can check your website’s health status within a minute. Follow the suggestion provided by the SiteDoctor and make your site more SEO friendly. </P>
  <a href="{{$tools['sitespy']}}" class="btn btn-primary btn-embossed btn-block"><span class="fui-new"></span>GO THIS</a>
  </div> 
  </div> 
</div>
<div class="row">
  <div class="col-md-6">
 <div class="tools-details">
      <h3>DIY Site Review</h3>
      <P>SideDoctor can check your website’s health status within a minute. Follow the suggestion provided by the SiteDoctor and make your site more SEO friendly. </P>
 <a href="{{$tools['website-review']}}" class="btn btn-primary btn-embossed btn-block"><span class="fui-new"></span>GO THIS</a>
  </div> 
  </div> 
  <div class="col-md-6">
 <div class="tools-details">
      <h3>DIY A2Z SEO</h3>
      <P>SideDoctor can check your website’s health status within a minute. Follow the suggestion provided by the SiteDoctor and make your site more SEO friendly. </P>
  <a href="{{$tools['atoz']}}" class="btn btn-primary btn-embossed btn-block"><span class="fui-new"></span>GO THIS</a>
  </div> 
  </div> 
</div>
  @else
  <div class="row">
  <h2>You are yet to add websites </h2><p>We have below tools for improve your website using these tools. Please add your website <a href="{{ route('user-reports-addition') }}"> here</a> and continue.</p>
    <div class="col-md-6">
 <div class="tools-details">
      <h3>DIY Doctor</h3>
      <P>SideDoctor can check your website’s health status within a minute. Follow the suggestion provided by the SiteDoctor and make your site more SEO friendly. </P>
  </div> 
  </div> 
  <div class="col-md-6">
 <div class="tools-details">
      <h3>DIY Sitespy</h3>
      <P>SideDoctor can check your website’s health status within a minute. Follow the suggestion provided by the SiteDoctor and make your site more SEO friendly. </P>
  </div> 
  </div> 
</div>
<div class="row">
  <div class="col-md-6">
 <div class="tools-details">
      <h3>DIY Site Review</h3>
      <P>SideDoctor can check your website’s health status within a minute. Follow the suggestion provided by the SiteDoctor and make your site more SEO friendly. </P>
  </div> 
  </div> 
  <div class="col-md-6">
 <div class="tools-details">
      <h3>DIY A2Z SEO</h3>
      <P>SideDoctor can check your website’s health status within a minute. Follow the suggestion provided by the SiteDoctor and make your site more SEO friendly. </P>
  </div> 
  </div> 
</div>

@endif
