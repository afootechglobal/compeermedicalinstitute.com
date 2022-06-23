<?php require_once '../../config/connection.php'; ?>
<?php 

$action=$_POST['action'];

?>




<?php
//////////////////////////////////////////////////////////////// Sign-Up Code //////////////////////////////
if ($action=='registration'){
       $firstname=trim(strtoupper($_POST['firstname']));
       $lastname=trim(strtoupper($_POST['lastname']));
       $email=trim(($_POST['email']));
       $address=trim(strtoupper($_POST['address']));
       $country_id=trim(strtoupper($_POST['country_id']));
       $phonenumber=trim(strtoupper($_POST['phonenumber']));
       $password=md5(trim($_POST['password']));
     
       $check_email=mysqli_query($conn,"SELECT * FROM student_registration_tab WHERE email='$email'");
       $email_count=mysqli_num_rows($check_email);


     if ($email_count>0){
      $view_content='email_exist';
      require_once('../content/page-content.php');

     }else{

    
  

        // get adminssion id
        $counter_id='REG-STD';
        $date= date('Ymd');
        $query = mysqli_query($conn, "SELECT counter_value+1 AS counter_value FROM `counter_tab` WHERE counter_id='$counter_id' FOR UPDATE");
        $fetch=mysqli_fetch_array($query);
        $counter_value=$fetch['counter_value'];
        $student_id=$counter_id.$date.$counter_value;
        mysqli_query($conn,"UPDATE counter_tab SET `counter_value`='$counter_value' WHERE counter_id='$counter_id'") or die('cannot update counter_tab');
       
  
        // $user_id="$counter_id$counter_value";
        mysqli_query($conn,"UPDATE counter_tab SET `counter_value`='$counter_value' WHERE counter_id='$counter_id'") or die('cannot update counter_tab');

        mysqli_query($conn,"INSERT INTO `student_registration_tab`
        (`student_id`,`firstname`, `lastname`,`password`, `phonenumber`,`email`,`status_id`, `country_id`,`address`, `date`) VALUES 
        ('$student_id','$firstname','$lastname','$password','$phonenumber','$email','A','$country_id','$address', NOW())") or die('cannot insert into student_tab');




				 $mail_to_send='send_signup_email'; // to all the compnay admins
				  require_once('mail/mail.php');

        $view_content='registration_successful';
        require_once('../content/page-content.php');
}
}
?>

