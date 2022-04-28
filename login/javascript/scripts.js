function _back_to_top(){
return event.preventDefault(),$("html, body").animate({scrollTop:0},"slow");
}



function _get_reset_password_Panel(nextid){
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







//////////// LOGIN ////////////
function _log_in(){ 
            var email = $('#email').val();
            var password = $('#password').val();
            $('#email,#password').removeClass('complain');
            if((email!='')&&(password!='')){
               user_login(email,password);
            }else{
                  $('#email,#password').addClass('complain');
                  $('#warning-div').fadeIn(500).delay(5000).fadeOut(100);  
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
      $('#invalid-div').fadeIn(500).delay(5000).fadeOut(100);
		$('#login-btn').html('<i class="fa fa-check-square-o"></i> Log In');
   }
	}

	});
}




