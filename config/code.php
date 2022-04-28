<?php include '../config/connection.php'?>
<?php 

$action=$_POST['action'];?>



<?php if ($action=='get_panel'){
    $view_content=$_POST['view_content'];
    require_once('../content/page-content.php');
}
?>


