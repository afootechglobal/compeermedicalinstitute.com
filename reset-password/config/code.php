
<?php 

$action=$_POST['action'];?>



<?php if ($action=='get_panel'){
    $view_content=$_POST['view_content'];
    require_once('../../content/page-content.php');
}
?>


<?php
//////////////////////////////////////////////////////////////// Sign-Up Code //////////////////////////////
if ($action=='sign_up'){ /// start check 1




      
       $view_content='registration_successful';
       require_once('../../content/page-content.php');
}

?>

<?php
//////////////////////////////////////////////////////////////// Sign-Up Code //////////////////////////////
if ($action=='close_up'){ /// start check 1




      
       $view_content='delete_successful';
       require_once('../../content/page-content.php');
}

?>

