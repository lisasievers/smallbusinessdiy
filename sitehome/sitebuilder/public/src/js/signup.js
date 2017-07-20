$(document).ready(function () {

//Domain check condition
$(':checkbox').checkboxpicker();
$('#input-2').change(function(){
 // console.log('red');
  var wh=$(this).val();
   console.log(wh);
  if(wh=='yes'){
    $('#input-2').attr('value','no');
    $('.domaininfo').hide();
    $('.domaininfo input').removeAttr('required','');
  }
  else
  {
    $('#input-2').attr('value','yes');
    $('.domaininfo').show();
    $('.domaininfo input').attr('required','required');
  }

  });

        $("input[name=whodo]:radio").click(function () {
            if ($('input[name=whodo]:checked').val() == "iwill") {
          $('.iwill').css('border-bottom','2px solid #8bc435');
          $('.youwill').css('border-bottom','2px solid #ddd');
            } else if ($('input[name=whodo]:checked').val() == "youwill") {
          $('.youwill').css('border-bottom','2px solid #8bc435');
          $('.iwill').css('border-bottom','2px solid #ddd');
           }
  });
        $(".iwill").click(function () {
          $('.iwill').css('border-bottom','2px solid #8bc435');
          $('.youwill').css('border-bottom','2px solid #ddd');
          $("#youwill").attr('checked', false);
          $("#iwill").attr('checked', true);
         // $(".iwilltext").html('Selected');
          
       });
         $(".youwill").click(function () {
          $('.youwill').css('border-bottom','2px solid #8bc435');
          $('.iwill').css('border-bottom','2px solid #ddd');
          $("#iwill").attr('checked', false);
          $("#youwill").attr('checked', true);
          
       });
 
});

function reject_delay(){
var delay=3000;//3 seconds
setTimeout(function(){
  window.location.href='site-create';
},delay);
}
 
function iwilldoit(){
    var siteUrl = $('.site_url').val();
    var domainurl=$('.domain_url').val();
    var domainemail=$('.domain_email').val();
    var token=$('.token').val();
    var whodo=$('input[name=whodo]:checked').val();
    console.log(domainemail);
    console.log(whodo);
    var formdata = {"domainck": 'yes',"domainurl": domainurl,"domainmail": domainemail,"whodo": whodo,"_token": token};
        $.ajax({
           type: "POST",
           url: siteUrl+"updateDomainData",
           data: formdata,
          dataType: "json",
           success: function(res){
            if(res=='iwill'){
              reject_delay();
            }
            else
            {
              //window.location.href='site-estimate';
              
            }
           }

         });

}