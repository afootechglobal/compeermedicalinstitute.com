<?php require_once '../../config/connection.php'; ?>
<?php 
$action=$_POST['action'];

?>




	




<?php
if($action=='login_check'){


	      $email=trim($_POST['email']);
				$password=trim($_POST['password']);

        $query=mysqli_query($conn,"SELECT * FROM student_registration_tab WHERE email='$email' and `password`='$password'");
        $usercount = mysqli_num_rows($query);
        if ($usercount>0){
          $usersel=mysqli_fetch_array($query);
          $student_id=$usersel['student_id'];
          $status_id=$usersel['status_id'];
          $email=$usersel['email'];

          if ($status_id=='A'){
            $check=1;
          }
}else{
  $check=0; //invalid login details
}
echo json_encode(array("check" => $check)); 
}





if($action=='login'){

    $userquery= mysqli_query ($conn,"SELECT * FROM `student_registration_tab` WHERE email = '$email' AND `password` = '$password' AND `status_id`='A' ");
    $usersel=mysqli_fetch_array($userquery);
    $s_student=$usersel['student_id'];

    $_SESSION['s_student'] = $s_student;
    $s_student=$_SESSION['s_student'];

    mysqli_query($conn,"UPDATE `student_registration_tab` SET last_login=NOW() WHERE student_id='$s_student'"); //// update last login
?>

<script>
window.parent(location="../../student-portal");
</script>
<?php


}
?>










