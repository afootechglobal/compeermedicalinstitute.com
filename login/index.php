<?php require_once '../config/connection.php'; ?>
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
<div class="login-div">
  <div class="div-in">

      <?php $view_content='login';
      require_once 'content/page-content.php';
      ?>



                    <form action="" method="POST" enctype="multipart/form-data">
                   <div class="next_div" id="sent-email">
                      <h1>PROVIDE EMAIL</h1>
                      <p>KINDLY, PROVIDE YOUR <strong>EMAIL ADDRESS</strong> TO RESET YOUR PASSWORD</p>
                      
                      <div class="title">Email Address:<span>*</span></div>
                      <input type="email"  name="Email" required class="text_field" id="" placeholder="Enter your email" title="email address"/>
 
                      <div class="text-info">
                          Already have an account?
                          <span onclick="_get_div_back_Panel('login_div')">LOGIN HERE</span>
                      </div>
                      
                      <button class="btn btn-back-div" id="back-div"  onclick="_get_div_back_Panel('login_div')" type="button" title="SignUp"><i class="fa fa-arrow-left"></i>Back</button>        
                      <a href="../reset-password"> <button class="btn btn-next-div" type="button" title="Proceed">Proceed<i class="fa fa-arrow-right"></i></button></a>       
                </div>
            
                <div class="login-footer" title="Create An Account">Don't have an account? <a href="../register" title="Sign Up"> <span>Sign Up</span></a></div>
          </form>

        </div>
    
    
  </div>
  

  </div>








  <script>
    superplaceholder({
	el: email,
		sentences: [ 'ENTER YOUR EMAIL ADDRESS', 'e.g afootech2016@gmail.com', 'compeermedicals@gmail.com' ],
		options: {
		letterDelay: 80,
		loop: true,
		startOnFocus: false
	}
});
</script>


    
</body>






</html>