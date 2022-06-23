
$(document).ready(function() {
	function trim(s) {
            return s.replace( /^\s*/, "" ).replace( /\s*$/, "" );
        }
$("#login_div").keydown(function(e){
	if(e.keyCode==13){
		_log_in();
	}
});
});


function _back_to_top(){
return event.preventDefault(),$("html, body").animate({scrollTop:0},"slow");
}



function _next_panel(nextid){
   $('.next_div').hide();
   $('#'+nextid).fadeIn(1000);
}

function _get_div_back_Panel(nextid){
   $('.next_div').hide();
   $('#'+nextid).fadeIn(1000);
}



$(window).scroll(function() {
  if ($(this).scrollTop() >= 100 ){  
    $("#scroll_up").fadeIn(300).css("display", "block");
    }
    else{
      $('#scroll_up').fadeOut();
    }
  });





  function _open_menu(){
   $('.menu-back-div').animate({'margin-left':'0%'},200);
   $('.side-menu-div').animate({'margin-left':'0px'},400);
   }
   
   
   function _close_menu(){
   $('.menu-back-div').animate({'margin-left':'-100%'},400);
   $('.side-menu-div').animate({'margin-left':'-250px'},200);
   }
 
 
   function _expand_link1(){
     $('#about_us').toggle(500);
     $('#admission').fadeOut(0);
     $('#program').fadeOut(0);
   }
   
   function _expand_link2(){
     $('#admission').toggle(500);
     $('#about_us').fadeOut(0);
     $('#program').fadeOut(0);
   }
    
   function _expand_link3(){
     $('#program').toggle(500);
     $('#about_us').fadeOut(0);
     $('#admission').fadeOut(0);
   }


//////////// LOGIN ////////////
function _log_in(){ 
            var email = $('#email').val();
            var password = $('#password').val();
            $('#email,#password').removeClass('complain');
            if((email!='')&&(password!='')){
               $('#email,#password').addClass('focus');
               user_login(email,password);
            }else{
               $('#email,#password').addClass('complain');
               $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Warning" /></div><h3>LOG-IN ERROR</h3> <p>Fill This Fields To Continue .</p></div').fadeIn(500).delay(3000).fadeOut(100);

         }
   };
   
  ///////////////////////////////////// 

///////////////////// user login /////////////////////
function user_login(email,password){                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
	 var action='login_check';
   
	//////////////// get btn text ////////////////
	var btn_text=$('#login-btn').html();
	$('#login-btn').html('Authenticating...');
	document.getElementById('login-btn').disabled=true;
	////////////////////////////////////////////////	

var dataString ='action='+action+'&email='+email+'&password='+password;
	
	$.ajax({
	type: "POST",
	url: "config/code.php",
   dataType: 'json',
	data: dataString,
   success: function(data){
		$('#login-btn').html(btn_text);
		document.getElementById('login-btn').disabled=false;

 	var scheck = data.check;
	if(scheck==1){
			$('#loginform').submit();
       
	}else{
      $('#email,#password').addClass('complain');
   $('#invalid-div').html('<div class="alert-logo"><i class="fa fa-times"></i></div><h3>INVALID LOG-IN / SIGN-UP</h3> <p>Fill Correct Login Details.</p></div').fadeIn(500).delay(3000).fadeOut(100);
		$('#login-btn').html('<i class="fa fa-check-square-o"></i> Log In');
   }
	}

	});
}




function _view_div(ids){
   $('#login_div, #reset-password-info,#next-1').hide();
   $('#'+ids).fadeIn(300).css("display", "block");
}







function _proceed_reset_password(){
   var reset_pass_email = $('#reset_pass_email').val();
   if(reset_pass_email==''){
      $('#reset_pass_email').addClass('complain');
   $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Warning" /></div><h3>EMAIL ERROR</h3> <p>Fill This Fields To Continue .</p></div').fadeIn(500).delay(3000).fadeOut(100);

   }else if(reset_pass_email.indexOf('@')<=0){
      $('#reset_pass_email').addClass('complain');
      $('#invalid-div').html(' <div class="alert-logo"><i class="fa fa-times"></i></div><h3>INVALID EMAIL ADDRESS</h3><p>check your email and try again.</p>').fadeIn(500).delay(5000).fadeOut(100);
   }else{
      $('#reset_pass_email').removeClass('complain');
   //////////////// get btn text ////////////////
   var btn_text=$('#reset-pwd-btn').html();
   $('#reset-pwd-btn').html('PROCESSING...');
   document.getElementById('reset-pwd-btn').disabled=true;
   ////////////////////////////////////////////////	
   
   var action='proceed_reset_password';
   var dataString ='action='+ action+'&reset_pass_email='+ reset_pass_email;
   $.ajax({
   type: "POST",
   url: "config/code.php",
   data: dataString,
   cache: false,
   dataType: 'json',
   cache: false,
   success: function(data){
         var scheck = data.check;
         var student_id = data.student_id;
         if(scheck==0){/// invalid email
            $('#invalid-div').html(' <div class="alert-logo"><i class="fa fa-times"></i></div><h3>INVALID EMAIL ADDRESS</h3><p>check your email and try again.</p>').fadeIn(500).delay(5000).fadeOut(100);
            $('#reset_pass_email').addClass('complain');
         }else{ /// user Active
            _reset_password(student_id);
            _view_div(ids);
         }
            $('#reset-pwd-btn').html(btn_text);
            document.getElementById('reset-pwd-btn').disabled=false;
         
   }
});
   }
}



function _reset_password(student_id){
   var action='reset_password';
$('#reset-password-info').html('<div class="ajax-loader">loading...<br><img src="../image/ajax-loader.gif"/></div>').fadeIn(500);
   var dataString ='action='+ action+'&student_id='+ student_id;
   $.ajax({
   type: "POST",
   url: "config/code.php",
   data: dataString,
   cache: false,
   success: function(html){$('#reset-password-info').html(html);}
   });
}




function _resend_otp(ids,student_id){
var btn_text=$('#'+ids).html();
$('#'+ids).html('SENDING...');
var action='resend_otp';
var dataString ='action='+ action+'&student_id='+ student_id;
$.ajax({
type: "POST",
url: "config/code.php",
data: dataString,
cache: false,
success: function(html){
$('#success-div').fadeIn(500).delay(5000).fadeOut(100);
$('#'+ids).html(btn_text);
}
});
}


var checkpassword = function() {
if (document.getElementById('reset_pass_create_password').value == document.getElementById('reset_pass_confirmed_password').value) {
document.getElementById('reset_pass_create_password').style.border='#CCC 1px solid';
document.getElementById('reset_pass_confirmed_password').style.border='#CCC 1px solid';
document.getElementById('message').style.display = 'none';

} else {
document.getElementById('reset_pass_create_password').style.border='hsla(0, 100%, 40%, 0.678) 1px solid';
document.getElementById('reset_pass_confirmed_password').style.border='hsla(0, 100%, 40%, 0.678) 1px solid';
document.getElementById('message').style.display = 'block';
document.getElementById('message').style.color = 'hsla(0, 100%, 40%, 0.678)';
document.getElementById('message').style.fontSize = '12px';
document.getElementById('message').innerHTML = 'PASSWORD NOT MATCH!';
}
}





function _finish_reset_password(student_id){
   var reset_pass_otp = $('#reset_pass_otp').val();
   var reset_pass_create_password = $('#reset_pass_create_password').val();
   var reset_pass_confirmed_password = $('#reset_pass_confirmed_password').val();

   $('#reset_pass_otp,#reset_pass_create_password,#reset_pass_confirmed_password').removeClass('complain');
   if(reset_pass_otp==''){
      $('#reset_pass_otp').addClass('complain');
   $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Warning" /></div><h3>OTP ERROR</h3> <p>Fill This Fields To Continiue.</p></div').fadeIn(500).delay(3000).fadeOut(100);

   }else if (reset_pass_create_password==''){
      $('#reset_pass_create_password').addClass('complain');
      $('#reset_pass_otp').removeClass('complain');
   $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Warning" /></div><h3>PASSWORD ERROR</h3> <p>Fill This Fields To Continiue.</p></div').fadeIn(500).delay(3000).fadeOut(100);


   }else if (reset_pass_confirmed_password==''){
      $('#reset_pass_confirmed_password').addClass('complain');
      $('#reset_pass_create_password').removeClass('complain');
      $('#reset_pass_otp').removeClass('complain');
      $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Warning" /></div><h3>PASSWORD ERROR</h3> <p>Fill This Fields To Continiue.</p></div').fadeIn(500).delay(3000).fadeOut(100);

   }else if(reset_pass_create_password!=reset_pass_confirmed_password){
      $('#reset_pass_create_password').addClass('complain');
      $('#reset_pass_confirmed_password').addClass('complain');
      $('#invalid-div').html('<div class="alert-logo"><i class="fa fa-times"></i></div><h3>PASSWORD ERROR</h3><p>Password Not Match.</p>').fadeIn(500).delay(5000).fadeOut(100);
   }else{
      $('#reset_pass_create_password,#reset_pass_confirmed_password').removeClass('complain');
         //////////////// get btn text ////////////////
         var btn_text=$('#finish-reset-btn').html();
         $('#finish-reset-btn').html('PROCESSING...');
         document.getElementById('finish-reset-btn').disabled=true;
   ////////////////////////////////////////////////	
      var action='finish_reset_password';
      var dataString ='action='+ action+'&student_id='+ student_id+'&reset_pass_otp='+reset_pass_otp+'&reset_pass_create_password='+ reset_pass_create_password;
         $.ajax({
         type: "POST",
         url: "config/code.php",
         data: dataString,
         cache: false,
         dataType: 'json',
         cache: false,
         success: function(data){
         var scheck = data.check;
         if(scheck==1){
            _password_reset_completed(student_id);
         }else{
         $('#invalid-div').html('<div class="alert-logo"><i class="fa fa-times"></i></div><h3>INVALID OTP!</h3><p>please check your eamil or span.</p>	</div>').fadeIn(500).delay(5000).fadeOut(100);
         $('#reset_pass_otp').addClass('complain');
         $('#finish-reset-btn').html(btn_text);
         document.getElementById('finish-reset-btn').disabled=false;
         }
         }
      });
            
}
}

function _password_reset_completed(student_id){
   var action='password_reset_completed';
$('#reset-password-info').html('<div class="ajax-loader">loading...<br><img src="all-images/images/ajax-loader.gif"/></div>').fadeIn(500);
   var dataString ='action='+ action+'&student_id='+ student_id;
   $.ajax({
   type: "POST",
   url: "config/code.php",
   data: dataString,
   cache: false,
   success: function(html){$('#reset-password-info').html(html);}
   });
}

