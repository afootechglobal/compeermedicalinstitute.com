<?php include '../config/connection.php'?>
<?php
if($s_admin!=''){
?>
    <script>
	window.parent(location="a/");
	</script>
<?php } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php include 'links.php'?>
<title>Administrative Login </title>
<meta name="keywords" content="Admin - Compeer Medical Institute" />
<meta name="description" content="Administrative Login "/>
</head>
<body>
<?php include 'header.php'?>
<div class="login-back-div fadeIn animated">
		<div class="left-div">
                <div class="login-div zoomIn  animated">
				<?php $view_content='log-in';
               require_once 'content/content-page.php'
			   ?>
                </div>
         </div>
        <div class="right-div animated fadeInRight">
        	<a href="<?php echo $website?>" title="Compeer Medical Institute ">
        	<div class="pix-div" data-aos="flip-left" data-aos-duration="1500"><img src="all-images/images/icon.png" alt="Compeer Medical Institute logo"/></div></a>
        </div>
</div>
<script>
		superplaceholder({
			el: email,
				sentences: [ 'ENTER YOUR EMAIL ADDRESS', 'info@compeermedicalinstitute.com', 'e.g afootechglobal@gmail.com', 'afootech2016@yahoo.com' ],
				options: {
				letterDelay: 80,
				loop: true,
				startOnFocus: false
			}
		});
</script>
    <script src="javascript/aos.js"></script>
    <script>
      AOS.init({
        easing: 'ease-in-out-sine'
      });
    </script>
</body>
</html>



