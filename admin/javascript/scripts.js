//////////////////////////////10/2/2022////////////////////////// by Afolabi Taiwo Abayomi
	
$(document).ready(function() {
	function trim(s) {
            return s.replace( /^\s*/, "" ).replace( /\s*$/, "" );
        }
$("#login-info").keydown(function(e){
	if(e.keyCode==13){
		_sign_in();
	}
});
});
	
	
	
	
function _view_div(ids){
				  $('#login-info, #reset-password-info').css("display", "none");
				  $('#'+ids).fadeIn(300).css("display", "block");
}



function _sign_in(){ 
	$('#email').removeClass('complain');
$('.success-div').hide();
			var email = $('#email').val();
			var password = $('#password').val();
			if((email!='')&&(password!='')){
				user_login(email,password)
			}else{
				$('#warning-div').fadeIn(500).delay(5000).fadeOut(100);
				$('#email').addClass('complain');
				$('#password').addClass('complain');
			}
};


///////////////////// user login ///////////////////////////////////////////


		///////////////////// user login ///////////////////////////////////////////
		function user_login(email,password){
		var action='login_check';

		//////////////// get btn text ////////////////
		var btn_text=$('#login-btn').html();
		$('#login-btn').html('Authenticating...');
		document.getElementById('login-btn').disabled=true;
		////////////////////////////////////////////////	

		var dataString ='action='+ action+'&email='+ email + '&password='+ password;
		$('#login-btn').html('Authenticating...');
		$.ajax({
		type: "POST",
		url: "config/code.php",
		data: dataString,
		dataType: 'json',
		cache: false,
		success: function(data){
		$('#login-btn').html(btn_text);
		document.getElementById('login-btn').disabled=false;

		var scheck = data.check;
		if(scheck==1){
					//$('#success-div').html('<div><i class="fa fa-check"></i></div> LOGIN SUCCESSFUL!').fadeIn(500).delay(5000).fadeOut(100);
			$('#loginform').submit();
		}else if(scheck==2){
			$('#invalid-div').html(' <div class="alert-logo"><i class="fa fa-times"></i></div><h3>ACCOUNT SUSPEDNDED</h3><p>Contact the admin</p>').fadeIn(500).delay(5000).fadeOut(100);

		}else{
		$('#invalid-div').fadeIn(500).delay(5000).fadeOut(100);
		}
		$('#login-btn').html('<i class="fa fa-sign-in"></i> Log-In');
		document.getElementById('login-btn').disabled=false;
		}
		});
		}








function _proceed_reset_password(){
			var reset_pass_email = $('#reset_pass_email').val();
			if(reset_pass_email==''){
				$('#reset_pass_email').addClass('complain');
				$('#warning-div').fadeIn(500).delay(5000).fadeOut(100);
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
				var admin_id = data.admin_id;
				if(scheck==0){/// invalid email
					$('#invalid-div').html(' <div class="alert-logo"><i class="fa fa-times"></i></div><h3>INVALID EMAIL ADDRESS</h3><p>check your email and try again.</p>').fadeIn(500).delay(5000).fadeOut(100);
					$('#reset_pass_email').addClass('complain');
				}else if(scheck==1){
					$('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Warning" /></div><h3>ACCOUNT SUSPENDED</h3><p>Contact the admin</p></div').fadeIn(500).delay(3000).fadeOut(100);

					}else{ /// user Active and login successful
					_reset_password(admin_id);
				}
					$('#reset-pwd-btn').html(btn_text);
					document.getElementById('reset-pwd-btn').disabled=false;
		}
	});
		}
}



function _reset_password(admin_id){
			var action='reset_password';
		$('#reset-password-info').html('<div class="ajax-loader">loading...<br><img src="all-images/images/ajax-loader.gif"/></div>').fadeIn(500);
			var dataString ='action='+ action+'&admin_id='+ admin_id;
			$.ajax({
			type: "POST",
			url: "config/code.php",
			data: dataString,
			cache: false,
			success: function(html){$('#reset-password-info').html(html);}
			});
}




function _resend_otp(ids,admin_id){
	var btn_text=$('#'+ids).html();
	$('#'+ids).html('SENDING...');
var action='resend_otp';
var dataString ='action='+ action+'&admin_id='+ admin_id;
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
 




	function _finish_reset_password(admin_id){
		
	var reset_pass_otp = $('#reset_pass_otp').val();
	var reset_pass_create_password = $('#reset_pass_create_password').val();
	var reset_pass_confirmed_password = $('#reset_pass_confirmed_password').val();

	$('#reset_pass_otp,#reset_pass_create_password,#reset_pass_confirmed_password').removeClass('complain');
	if(reset_pass_otp==''){
		$('#reset_pass_otp').addClass('complain');
		$('#warning-div').fadeIn(500).delay(5000).fadeOut(100);
	}else if (reset_pass_create_password==''){
		$('#reset_pass_create_password').addClass('complain');
		$('#reset_pass_otp').removeClass('complain');
		$('#warning-div').fadeIn(500).delay(5000).fadeOut(100);
	}else if (reset_pass_confirmed_password==''){
		$('#reset_pass_confirmed_password').addClass('complain');
		$('#reset_pass_create_password').removeClass('complain');
		$('#reset_pass_otp').removeClass('complain');
		$('#warning-div').fadeIn(500).delay(5000).fadeOut(100);
	}else if(reset_pass_create_password!=reset_pass_confirmed_password){
		$('#reset_pass_create_password').addClass('complain');
		$('#reset_pass_create_password').addClass('complain');
		$('#invalid-div').html('<div class="alert-logo"><i class="fa fa-times"></i></div><h3>PASSWORD ERROR</h3><p>Password Not Match.</p>').fadeIn(500).delay(5000).fadeOut(100);
	}else{
		$('#reset_pass_create_password,#reset_pass_confirmed_password').removeClass('complain');
			//////////////// get btn text ////////////////
			var btn_text=$('#finish-reset-btn').html();
			$('#finish-reset-btn').html('PROCESSING...');
			document.getElementById('finish-reset-btn').disabled=true;
	////////////////////////////////////////////////	
		var action='finish_reset_password';
		var dataString ='action='+ action+'&admin_id='+ admin_id+'&reset_pass_otp='+reset_pass_otp+'&reset_pass_create_password='+ reset_pass_create_password;
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
				_password_reset_completed(admin_id);
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

function _password_reset_completed(admin_id){
			var action='password_reset_completed';
		$('#reset-password-info').html('<div class="ajax-loader">loading...<br><img src="all-images/images/ajax-loader.gif"/></div>').fadeIn(500);
			var dataString ='action='+ action+'&admin_id='+ admin_id;
			$.ajax({
			type: "POST",
			url: "config/code.php",
			data: dataString,
			cache: false,
			success: function(html){$('#reset-password-info').html(html);}
			});
}



	   

