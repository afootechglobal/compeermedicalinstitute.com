<?php require_once '../../config/connection.php'?>

<?php 
$action =$_POST['action'];
?>




<?php if ($action=='get_panel'){
    $view_content=$_POST['view_content'];
    require_once('../content/page-content.php');
}
?>



<?php if ($action=='slide_panel'){
    $view_content=$_POST['view_content'];
    require_once('../content/page-content.php');
}
?>



<?php if ($action=='profile'){
    $view_content=$_POST['view_content'];
    require_once('../content/page-content.php');
}
?>



<?php if ($action=='staff_profile'){
  $staff_id=$_POST['staff_id'];
    $view_content=$_POST['view_content'];
    require_once('../content/page-content.php');
}
?>



<?php if ($action=='view_student_details'){
    $admission_id=$_POST['admission_id'];
    $view_content=$_POST['view_content'];
    require_once('../content/page-content.php');
}
?>

<?php if ($action=='admitted_status'){
    $admission_id=$_POST['admission_id'];
    $view_content=$_POST['view_content'];
    require_once('../content/page-content.php');
}
?>



<?php if ($action=='register_staff'){

$firstname=trim($_POST['firstname']);
$lastname=trim($_POST['lastname']);
$email=trim($_POST['email']);
$phonenumber=trim($_POST['phonenumber']);
$role=trim($_POST['role']);
$status=trim($_POST['status']);


   // get user id
   $counter_id='CMI_STF00';
   $query = mysqli_query($conn, "SELECT counter_value+1 AS counter_value FROM `counter_tab` WHERE counter_id='$counter_id' FOR UPDATE");
     $fetch=mysqli_fetch_array($query);
   $counter_value=$fetch['counter_value'];
   $staff_id=$counter_id.$counter_value;
  // $user_id="$counter_id$counter_value";
  mysqli_query($conn,"UPDATE counter_tab SET `counter_value`='$counter_value' WHERE counter_id='$counter_id'") or die('cannot update counter_tab');
  


mysqli_query($conn,"INSERT INTO `admin_tab`
(`staff_id`, `firstname`, `lastname`, `email`, `phonenumber`, `s_role`, `status`, `date`) VALUES 
(' $staff_id','$firstname','$lastname','$email','$phonenumber','$role','$status', NOW())") or die('cannot insert into admin_tab');


}
?>



<?php if ($action=='admitted_student'){
    $admission_id=$_POST['admission_id'];
  $admission_status='ADMIT';
    mysqli_query($conn,"UPDATE s_admission_tab SET `admission_status`='$admission_status' WHERE admission_id='$admission_id'") or die('cannot update counter_tab');

    $check=1;
    
    echo json_encode(array("check" => $check)); 
}
?>

<?php if ($action=='cancel_admitted_student'){
    $admission_id=$_POST['admission_id'];
  $admission_status='NOT ADMIT';
    mysqli_query($conn,"UPDATE s_admission_tab SET `admission_status`='$admission_status' WHERE admission_id='$admission_id'") or die('cannot update counter_tab');

    $check=1;
    
    echo json_encode(array("check" => $check)); 
}
?>
