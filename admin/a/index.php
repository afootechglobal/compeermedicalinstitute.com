<?php include '../../config/connection.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include 'links.php'?>
<?php include 'config/session.php'; ?>
<?php include 'config/time.php'; ?>

<!-------------------------------------------------------------->
<title>COMPEER MEDICAL INSTITUTE</title>
</head>
<body>
<?php include 'header.php'?>

<?php include 'dashboard-left-link.php'?>
<div class="right-sided-div ">

<?php 
$view_content='dashboard';
require_once 'content/page-content.php'
?>
</div>

    
    
</body>
</html>