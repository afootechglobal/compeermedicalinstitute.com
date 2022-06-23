<?php require_once '../../config/connection.php';?>
<?php $action=$_POST['action']; ?>



<?php
if($action=='proceed_reset_password'){
	$reset_pass_email=$_POST['reset_pass_email'];
	/////////// confirm user email is exist//////////////////////////////////
	$query=mysqli_query($conn,"SELECT * FROM admin_tab WHERE email='$reset_pass_email'");
	$checkemail=mysqli_num_rows($query);
	if ($checkemail>0){ // if check 1
	  $fetch=mysqli_fetch_array($query);
		$admin_id= $fetch['admin_id'];
		$status_id= $fetch['status_id'];
		
		if ($status_id=='ACT'){
			$check=2; /// user  Active
		}else{
			$check=1; /// user suspended	
		}
		
	}else{ /// else check 1
		$check=0; /// user Not Exist
	}/// end check 1
	  ////////sending json///////////////////////////
		echo json_encode(array("check" => $check,"admin_id" => $admin_id)); 
	}
?>




<?php
  
if($action=='reset_password'){
	$admin_id=$_POST['admin_id'];		
	$user_array=$callclass->_get_admin_detail($conn, $admin_id);
	$u_array = json_decode($user_array, true);
	$firstname= $u_array[0]['firstname'];
	$lastname= $u_array[0]['lastname'];
	$email= $u_array[0]['email'];
	$role_id= $u_array[0]['role_id'];

	$otp = rand(111111,999999);
	////////////////update user OTP///////////////
	mysqli_query($conn,"UPDATE admin_tab SET otp='$otp' WHERE admin_id ='$admin_id'") or die("cannot update admin_tab");
	////////////////send OTP true email///////////////
	$role_query=mysqli_query($conn,"SELECT * FROM role_tab a,`admin_tab`b WHERE a.role_id=b.role_id AND a.role_id='$role_id' ");
	$role=mysqli_fetch_array($role_query);
	$role_name=$role['role_name'];

	$mail_to_send='send_reset_password_otp';
	require_once('mail/mail.php');

	$view_content='reset_password';
	require_once('../content/content-page.php');

}
?>


<?php
if($action=='resend_otp'){
	$admin_id=$_POST['admin_id'];		
	$user_array=$callclass->_get_admin_detail($conn, $admin_id);
	$u_array = json_decode($user_array, true);
	$firstname= $u_array[0]['firstname'];
	$lastname= $u_array[0]['lastname'];
	$email= $u_array[0]['email'];
	$role_id= $u_array[0]['role_id'];
	
	$otp = rand(111111,999999);
	////////////////update user OTP///////////////
	mysqli_query($conn,"UPDATE admin_tab SET otp='$otp' WHERE admin_id ='$admin_id'")or die("cannot update admin_tab");
	////////////////send OTP true email///////////////	

	$role_query=mysqli_query($conn,"SELECT * FROM role_tab a,`admin_tab`b WHERE a.role_id=b.role_id AND a.role_id='$role_id' ");
	$role=mysqli_fetch_array($role_query);
	$s_role_name=$role['role_name'];

	$mail_to_send='send_reset_password_otp';
	require_once('mail/mail.php');
}
?>







	
<?php 
if ($action=='finish_reset_password'){
	$admin_id=$_POST['admin_id'];
	$reset_pass_otp=trim($_POST['reset_pass_otp']); 
	$reset_pass_create_password=md5(trim($_POST['reset_pass_create_password']));
	
	$fetch=$callclass->_get_admin_detail($conn, $admin_id);
	$array = json_decode($fetch, true);
	$firstname=$array[0]['firstname'];
	$db_otp=$array[0]['otp'];
	
	  if ($reset_pass_otp==$db_otp){ ///// check 1
	  mysqli_query($conn,"UPDATE admin_tab SET `password`='$reset_pass_create_password' WHERE admin_id='$admin_id'")or die (mysqli_error($conn));
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
	$admin_id=$_POST['admin_id'];
	$view_content='password_reset_completed';
	require_once('../content/content-page.php');
	
}
?>

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  














































 
	  
<?php
if($action=='login_check'){


	$email=trim($_POST['email']);
				$password=md5(trim($_POST['password']));
					$query=mysqli_query($conn,"SELECT * FROM admin_tab WHERE email='$email' and `password`='$password'");
					$usercount = mysqli_num_rows($query);
					if ($usercount>0){
						$usersel=mysqli_fetch_array($query);
						$admin_id=$usersel['admin_id'];
						$status_id=$usersel['status_id'];
						
							
							if ($status_id=='ACT'){
								$check=1; ///// account is active
								
							} else if($status_id=='SUSP'){
								$check=2; ///// USER is SUSPENDED
						}else{
							$check=0; ///// USER not exist

						}
					}else{$check=0;}
					echo json_encode(array("check" => $check)); 
}





if($action=='login'){
	$userquery = mysqli_query ($conn,"SELECT * FROM `admin_tab` WHERE email = '$email' and `password` = '$password' and status_id='ACT' ");
	$usersel=mysqli_fetch_array($userquery);
	$s_admin=$usersel['admin_id'];
	$_SESSION['s_admin'] = $s_admin;
	$s_admin=$_SESSION['s_admin'];
	mysqli_query($conn,"UPDATE `admin_tab` SET last_login=NOW() WHERE admin_id='$s_admin'"); //// update last login
	?>
		<script>
		window.parent(location="../a/");
		</script>
<?php
}
?>

