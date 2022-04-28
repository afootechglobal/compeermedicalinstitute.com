<?php 
$time = $_GET['time'];
?>

<?php
  if ($time=='date_time'){?>
  <?php
  $hour=date("h");
  $h=date("h")-1;
  $hr=12;

  if ($h=="00"){
    echo date("$hr:i:s") ?> <sup> <?php echo date("A") ?> </sup>
    <?php
  } else {

echo date("$h:i:s") ?> <sup> <?php echo date("A") ?> </sup>
 
<?php
}
}
?>