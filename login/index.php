<?php require_once '../config/connection.php' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include 'links.php'?>
<!-------------------------------------------------------------->
<title>COMPEER MEDICAL INSTITUTE</title>
</head>
<body>
<?php include 'header.php'?>
<div class="scroll_back_div">


<div class="background-div">
<div class="login-div animated zoomIn">
  <div class="div-in">

      <?php $view_content='login';
      require_once 'content/page-content.php';
      ?>


           
</div>
 
 
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


</body>






</html>