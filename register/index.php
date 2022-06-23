<?php require_once ('../config/connection.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php include 'links.php' ?>
<!-------------------------------------------------------------->
<title>COMPEER MEDICAL INSTITUTE</title>
</head>
<body>


<div class="body-div">
<?php include 'header.php' ?>
<div class="body-div">

    <?php
    $view_content='registration';
    include 'content/page-content.php';
    ?>

    <div class="back-2-top-div" id="scroll_up" onClick="_back_to_top()" >
    <i class="fa fa-arrow-up"></i>
    </div>


    <?php include '../footer.php' ?>   

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







<script>
    AOS.init({
    easing: 'ease-in-out-sine'
    });
</script>

</body>

</html>