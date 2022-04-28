<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include 'links.php'?>
<!-------------------------------------------------------------->
<title>COMPEER MEDICAL INSTITUTE</title>
</head>
<body>
<?php include 'header.php'?>

<div class="background-div">
<div class="login-div  animated zoomIn" >

    	<div class="div-in">

          <form method="POST" action="connection/code.php?action=signup" enctype="multipart/form-data">
         <div class="next_div" id="next-1"> 
         <h1>O.T.P</h1>
         <div class="details"> 
         <i class="fa fa-user-circle"></i>  Dear <strong>Afolabi taiwo abayomi</strong> , an otp has been sent to your email (<span>afolabitaiwoabayomi112@gmail.com</span>).<br> 
         Kindly, provide <span>otp</span> sent to your email to reset password.
        </div>
               
                    <div class="title">OTP:<span>*</span></div>
                    <input type="text"  name="otp" required class="text_field" id="otp" placeholder="Enter Otp" title="Enter Otp">

                    <div class="title">Create Password:<span>*</span></div>
                  <input type="password"  name="CreatePassword" required class="text_field" id="CreatePassword" placeholder="Create Password" title="Create Password">

                  <div class="title">Confirmed Password:<span>*</span></div>
                  <input type="password"  name="ConfirmedPassword" required  class="text_field" id="ConfirmedPassword" placeholder="Confirmed Password" title="Confirmed Password">
                  
                 <a href="../login"> <button class="btn btn-back-div" type="button" title="Go Back"><i class="fa fa-arrow-left"></i>Back</button></a>
                   
                  <button class="btn btn-next-div" type="button"  title="Submit"><i class="fa fa-exchange"></i> Reset Password </button>
              
                </div>


             </form>

         </div>
         
         <a href="../login"><div class="login-footer"  title="Log In" >Already have an account?<span> Log In </span></div></a>
      </div>








    
</body>








</html>