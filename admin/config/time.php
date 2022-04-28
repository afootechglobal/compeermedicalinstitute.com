<?php 
$time = $_GET['time'];
?>

<?php
  if ($time=='date_time'){?>
 <?php echo date("h:i:s") ?> <sup> <?php echo date("A") ?> </sup>
<?php
  }
?>