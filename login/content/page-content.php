


<?php if ($view_content=='login'){ ?>

                <div class="next_div" id="login_div">
                      <h1>LOG IN</h1>
            <form action="config/code.php" id="loginform"  method="post" enctype="multipart/form-data">
                      
                      <div class="title">EMAIL ADDRESS:<span>*</span></div>
                      <input type="email"  name="email"  id="email" required class="text_field" placeholder="ENTER YOUR EMAIL ADDRESS" title="ENTER YOUR EMAIL ADDRESS"/>
                      
                      <div class="title">PASSWORD:<span>*</span></div>
                      <input type="password"  name="password" id="password" required class="text_field"  placeholder="ENTER YOUR PASSWORD" title="ENTER YOUR PASSWORD" />
                      
                      <div class="text-info">
                          Did you forget your password?
                          <span onclick="_next_panel('reset-password-info')">RESET PASSWORD</span>
                      </div>
                      <input name="action" value="login" type="hidden" />
                     <button class="btn" id="login-btn"  type="button" onclick="_log_in();" title="Login"><i class="fa fa-check-square-o"></i> Log In</button>
                <div class="login-footer" title="Create An Account">Don't have an account? <a href="../register" title="Sign Up"> <span>Sign Up</span></a></div>
                   
         </form>
                    </div>
               

              <div class="next_div" id="reset-password-info">
                   
                   <h1>PROVIDE EMAIL</h1>

                   <p>KINDLY, PROVIDE YOUR <strong>EMAIL ADDRESS</strong> TO RESET YOUR PASSWORD</p>
                   
                   <div class="title">EMAIL ADDRESS:<span>*</span></div>
                   <input type="email"  id="reset_pass_email"  required class="text_field" placeholder="ENTER YOUR EMAIL ADDRESS" title="ENTER YOUR EMAIL ADDRESS"/>

                   <div class="text-info">
                       Already have an account?
                       <span onclick="_get_div_back_Panel('login_div')">LOGIN HERE</span>
                   </div>
                   
                   <button class="btn btn-back-div" id="back-div"  onclick="_get_div_back_Panel('login_div')" type="button" title="SignUp"><i class="fa fa-arrow-left"></i>Back</button>        
                   <button class="btn btn-next-div" id="reset-pwd-btn" onClick="_proceed_reset_password()" type="button" title="Proceed">Proceed<i class="fa fa-arrow-right"></i></button>    
            
         
             <div class="login-footer" title="Create An Account">Don't have an account? <a href="../register" title="Sign Up"> <span>Sign Up</span></a></div>
       </div>




  
            
<?php } ?>






<?php if ($view_content=='reset_password'){?>

<div class="next_div" id="next-1"> 
<h1>O.T.P SENT</h1>
<div class="alert alert-success"> 
<i class="fa fa-user-circle"></i>  Dear <strong><?php echo ucwords(strtolower("$firstname $lastname"))?></strong> , an otp has been sent to your email (<span><?php echo $email?></span>) to reset your password.<br> 

</div>
      
           <div class="title">OTP: <span>*</span></div>
           <input type="text"  required class="text_field" id="reset_pass_otp" placeholder="ENTER OTP" title="ENTER OTP">
           <div class="alert" style="margin-bottom:0px;"><span>OTP</span> not received? <span id="resend" onclick="_resend_otp('resend','<?php echo $student_id; ?>')"><i class="fa fa-send"></i> RESEND OTP</span></div>

           <div class="title">CREATE PASSWORD: <span>*</span></div>
            <input type="password"  required class="text_field" id="reset_pass_create_password" placeholder="CREATE PASSWORD" title="CREATE PASSWORD">

         <div class="title">CONFIRM PASSWORD: <span>*</span> <div style="float:right;" id='message'></div></div>
         <input type="password"  required onkeyup="checkpassword()" class="text_field" id="reset_pass_confirmed_password" placeholder="CONFIRM PASSWORD" title="CONFIRM PASSWORD">
         
       
         <button class="btn btn-back-div" onClick="window.location.reload();" type="button" title="SignUp"><i class="fa fa-arrow-left"></i>Back</button>        

         <button class="btn btn-next-div" type="button"id="finish-reset-btn" onclick="_finish_reset_password('<?php echo $student_id; ?>')" title="Submit"><i class="fa fa-check"></i> Reset Password </button>
     
         <div class="login-footer" title="Create An Account">Don't have an account? <a href="../register" title="Sign Up"> <span>Sign Up</span></a></div>
       </div>


<?php } ?>



<?php if ($view_content=='password_reset_completed'){?>
        <div  class="pass_reset">
            <div class="reset_success_div animated fadeInLeft"  id="">
            <img src="all-images/images/success.gif" alt="">
            </div>
            <div class="alert-password">  <h4>PASSWORD RESET SUCCESSFUL!</h4></div>
    <button onClick="window.location.reload();" type="button" class="proceed-btn"  title="Click to Log-In">Click to Log-In</button>
        </div>
<?php
}
?>










