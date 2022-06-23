<?php require_once '../../config/connection.php'; ?>
<?php 
$action=$_POST['action'];

?>




	




<?php
if($action=='login_check'){


	      $email=trim($_POST['email']);
				$password=md5(trim($_POST['password']));

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





if ($action=='login'){

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




<?php
  
if($action=='proceed_reset_password'){
	    	$reset_pass_email=$_POST['reset_pass_email'];
			/////////// confirm user exitence//////////////////////////////////
			$query=mysqli_query($conn,"SELECT * FROM student_registration_tab WHERE email='$reset_pass_email'");
					$checkemail=mysqli_num_rows($query);
					if ($checkemail>0){
					  $fetch=mysqli_fetch_array($query);
						$student_id= $fetch['student_id'];
						$status_id= $fetch['status_id'];
						if ($status_id=='A'){
						$check=1; /// user  Active
						
					}else{
						$check=0; /// user Not Exist
					}
				}else{
					$check=0; /// user Not Exist
				}
			  ////////sending json///////////////////////////
					  echo json_encode(array("check" => $check,"student_id" => $student_id)); 

}
?>




<?php
  
if($action=='reset_password'){

	  $student_id=$_POST['student_id'];
	  	  
	  $user_array=$callclass->_get_student_detail($conn, $student_id);
	  $u_array = json_decode($user_array, true);
	  $student_id= $u_array[0]['student_id'];
	  $firstname= $u_array[0]['firstname'];
	  $lastname= $u_array[0]['lastname'];
	  $email= $u_array[0]['email'];

		$otp = rand(111111,999999);
		////////////////update user OTP///////////////
		mysqli_query($conn,"UPDATE student_registration_tab SET otp='$otp' WHERE student_id ='$student_id'") or die("cannot update student_registration_tab");
		////////////////send OTP true email///////////////
    	$view_content='reset_password';
		require_once('../content/page-content.php');

		$mail_to_send='password_otp';
		require_once('mail/mail.php');
}
?>


<?php
if($action=='resend_otp'){
	  $student_id=$_POST['student_id'];
	  	  
	  $user_array=$callclass->_get_student_detail($conn, $student_id);
	  $u_array = json_decode($user_array, true);
	  $firstname= $u_array[0]['firstname'];
	  $lastname= $u_array[0]['lastname'];
	  $student_id= $u_array[0]['student_id'];
	  $email= $u_array[0]['email'];
	  
	  $otp = rand(111111,999999);
	  ////////////////update user OTP///////////////
	  mysqli_query($conn,"UPDATE student_registration_tab SET otp='$otp' WHERE student_id ='$student_id'")or die("cannot update staff_tab");
	  ////////////////send OTP true email///////////////
	  $mail_to_send='password_otp';
	  require_once('mail/mail.php');
	}
?>


<?php 
if ($action=='finish_reset_password'){
	  $student_id=$_POST['student_id'];
	  $reset_pass_otp=trim($_POST['reset_pass_otp']); 
	  $reset_pass_create_password=md5(trim($_POST['reset_pass_create_password']));
	  
	  $fetch=$callclass->_get_student_detail($conn, $student_id);
	  $array = json_decode($fetch, true);
	  $db_otp=$array[0]['otp'];
	  
		if ($reset_pass_otp==$db_otp){ ///// check 1
		mysqli_query($conn,"UPDATE student_registration_tab SET `password`='$reset_pass_create_password' WHERE student_id='$student_id'")or die (mysqli_error($conn));
		$check=1;
		/////////// get alert//////////////////////////////////
		}else{						
		$check=0;
		}
		echo json_encode(array("check" => $check)); 
  }
  ?>

  <?php 
  if ($action=='password_reset_completed'){
	  $student_id=$_POST['student_id'];
	  $view_content='password_reset_completed';
	require_once('../content/page-content.php');
  	}?>
	