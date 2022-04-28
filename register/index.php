<?php require_once ('../config/connection.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php require_once ("links.php")?>
<!-------------------------------------------------------------->
<title>COMPEER MEDICAL INSTITUTE</title>
</head>
<body>



<?php include 'header.php' ?>


<div class="back-div">




<div class="reg-back-div animated fadeInUp animated animated">
<?php
$view_content='registration';
 include 'content/page-content.php';
?>
        </div>











 
</div>
<?php include 'footer.php' ?>   




















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







<script>
    AOS.init({
    easing: 'ease-in-out-sine'
    });
</script>

</body>

</html>