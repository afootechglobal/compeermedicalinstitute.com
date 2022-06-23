<?php if($view_content=='log-in'){?>
                    <div class="text" id="login-info">
                        <h1><i class="fa fa-user-circle"></i> ADMINISTRATIVE LOG-IN <br /><hr /></h1><br clear="all" />
                    <form action="config/code.php" id="loginform" enctype="multipart/form-data" method="post">
            
                                <div class="title"><i class="fa fa-envelope"></i> EMAIL ADDRESS: <span>*</span></div>
                                  <input name="email" id="email" type="text" class="text_field" placeholder="ENTER YOUR EMAIL ADDRESS" title="ENTER YOUR EMAIL ADDRESS" />
            
                                <div class="title"><i class="fa fa-lock"></i> PASSWORD: <span>*</span></div>
                                  <input name="password" id="password" type="password" class="text_field" placeholder="ENTER YOUR PASSWORD" title="ENTER YOUR PASSWORD"/>
                               <input name="action" value="login" type="hidden" />
                               <button class="btn" type="button"  title="Login" id="login-btn" onClick="_sign_in()"><i class="fa fa-check"></i> Log-In </button>
                        <div class="alert" style="margin-bottom:5px;">Forget Password? <span onClick=" _view_div('reset-password-info')"> RESET PASSWORD</span></div>
                </form>
                    </div>
                    
                    
                    
            <div class="text" id="reset-password-info">
                    <br />
                    <h1><i class="fa fa-lock"></i> RESET PASSWORD <br /><hr /></h1><br clear="all" />
                    <div class="title">Provide Email Address:</div>
                    <input id="reset_pass_email" type="text" class="text_field" placeholder="ENTER YOUR EMAIL ADDRESS" title="ENTER YOUR EMAIL ADDRESS" />
                    <button class="btn" type="button"  title="Next" id="reset-pwd-btn" onClick="_proceed_reset_password()"> Proceed <i class="fa fa-long-arrow-right"></i></button>
                    <div class="alert">Existing User? <span onClick=" _view_div('login-info')">LOG-IN HERE</span> </div>
            </div>
                    
            
<script>
		superplaceholder({
			el: reset_pass_email,
				sentences: [ 'ENTER YOUR EMAIL ADDRESS', 'e.g sunaf4real@gmail.com', 'info@pec.com.ng', 'king123@hotmail.com', 'afootech2016@yahoo.com' ],
				options: {
				letterDelay: 80,
				loop: true,
				startOnFocus: false
			}
		});
</script>
            
<?php } ?>




<?php if ($view_content=='reset_password') { ?>
  
      <h1 style="color: hsla(0, 100%, 40%, 0.678);padding-bottom:10px;">O.T.P SENT  <buttonm class="back_btn" title="Go Back" onClick="window.location.reload();" type="button"><i class="fa fa-arrow-left"></i> Go-Back</button></h1>
           <div class="alert alert-success"><i class="fa fa-user-o"></i> Dear <strong> <?php echo ucwords(strtolower("$firstname $lastname")) ?></strong> an <span>OTP</span> has been sent to your email address (<span><?php echo $email; ?></span>) to reset your password.</div>
                    <div class="title"><i class="fa fa-ellipsis-h"></i> ENTER OTP: <span>*</span> </div>
                      <input id="reset_pass_otp" type="text" class="text_field" placeholder="ENTER OTP" title="ENTER OTP"/>
                    <div class="alert" style="margin-bottom:0px;"><span>OTP</span> not received? <span id="resend" onclick="_resend_otp('resend','<?php echo $admin_id; ?>')"><i class="fa fa-send"></i> RESEND OTP</span></div>
                    <div class="segment-div">
                        <div class="title"><i class="fa fa-ellipsis-h"></i> CREATE PASSWORD:  <span>*</span></div>
                          <input id="reset_pass_create_password" type="password" class="text_field" placeholder="CREATE PASSWORD" title="CREATE PASSWORD" />
                    </div>
                    <div class="segment-div">
                    <div class="title"><i class="fa fa-ellipsis-h"></i> CONFIRM PASSWORD:  <span>*</span>  </div>
                      <input id="reset_pass_confirmed_password" onkeyup="checkpassword()" type="password" class="text_field" placeholder="CONFIRM PASSWORD" title="CONFIRM PASSWORD"/>
                    </div>
                   
                        
                     <button class="btn " type="button"  title="Reset Password" id="finish-reset-btn" onclick="_finish_reset_password('<?php echo $admin_id; ?>')"><i class="fa fa-check"></i> Reset Password </button>
                     <div style="float:right;" id='message'></div>
 <?php } ?>


 <?php if ($view_content=='password_reset_completed'){?>
        <div  class="pass_reset">
            <div class="reset_success_div animated fadeInLeft" >
            <img src="all-images/images/success.gif" alt="">
            </div>
            <div class="alert-password">  <h4>PASSWORD RESET SUCCESSFUL!</h4></div>
    <button onClick="window.location.reload();" type="button" class="proceed-btn"  title="Click to Log-In">Click to Log-In</button>
        </div>
<?php
}
?>






  

