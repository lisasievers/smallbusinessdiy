@extends ('layouts.dashboard')
<div class="signupstage">
@section('page_heading','Welcome, '.Session::get('name'). '!')
</div>
@section('section')
<style>
.domaininfo-need{width: 60%;}
</style>
<div class="col-sm-12 ">
  <h2>Please fill form about your website</h2>   
  <form role="form" id="sign_form" method="post" action="{{ route('webdataform') }}" enctype="multipart/form-data" >
    <div class="domaininfo-need">  
        <div class="form-group">
            <label class="control-label">Website Name</label>
             <input type="hidden" name="_token" value="{{ Session::token() }}">
             <input type="hidden" name="site_id" value="{{$_REQUEST['choose_template']}}">
             <input type="hidden" name="site_category" value="{{$_REQUEST['sitecats']}}">
            <input maxlength="200" type="text" required="required" name="site_name" class="form-control webname" value="{{ Session::get('site_name')}}" />
         </div>
         <div class="form-group">
            <label class="control-label">Home Title</label>
            <input type="text" required="required" name="home_title" class="form-control" />
         </div>
         <div class="form-group">
            <label class="control-label">Text Content</label>
            <input type="text" required="required" name="home_text" class="form-control" />
         </div>
         <div class="form-group">
            <label class="control-label">Products Part</label>
            <input type="text" required="required" name="products_title" class="form-control" />
         </div>
         <div class="form-group">
            <label class="control-label">Contact address</label>
            <input type="text" required="required" name="contact_address" class="form-control" />
         </div>
         <div class="form-group">
            <label class="control-label">Goolge map location</label>
            <input type="text" required="required" name="google_map" class="form-control" />
         </div>
         <div class="form-group">
            <label class="control-label">Home page sliders</label>
            <div class="controls">
                                <input type="file" id="sliderFile" name="sliderFile">
                              
                            </div>
         </div>
         <!--
         <div class="control-group">
            <label class="control-label">Upload your full requirement document</label>
             <div class="import_inst">Please upload your file below. <a href="{{ url('src/excel/webdoc.xls') }}">Click here</a> for sample document import file.</div>
                            
                       <div class="controls">
                                <input type="file" id="userFile" name="userFile">
                              
                            </div>

          </div>-->
               <div class="form-group" style="margin-bottom:10px;"></div>  
             <div class="form-group">
            <label class="control-label"></label>
            <input type="submit" value="Submit" class="btn btn-primary" />
         </div>
                  
        </div>
    
  </form>
  
</div>
   </div>
   <div class="clear"></div>       
</div>

@stop
