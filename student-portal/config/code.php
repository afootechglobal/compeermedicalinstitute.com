
<?php require_once '../../config/connection.php';?>
<?php require_once('user-session.php');?>





<?php 
$action = $_POST['action'];
?>


<?php if ($action=='logout'){
  session_destroy();
  ?>
<script>
  	window.parent(location="../../login/");
</script>
<?php
}
?>




<?php if ($action=='get_dashboard'){
    $view_content=$_POST['view_content'];
    require_once('../content/page-content.php');
}
?>


<?php if ($action=='get_panel'){
    $view_content=$_POST['view_content'];
    require_once('../content/page-content.php');
}
?>

<?php if ($action=='Admission_process'){
    $view_content=$_POST['view_content'];
    require_once('../content/page-content.php');
}
?>

<?php if ($action=='Admission_requirement'){
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

<?php if ($action=='get_payment'){
    $view_content=$_POST['view_content'];
    require_once('../content/page-content.php');
}
?>



<?php if ($action=='profile'){
    $view_content=$_POST['view_content'];
    require_once('../content/page-content.php');
}
?>


<?php if ($action=='change_password'){
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


<?php if ($action=='not_yet_admitted_status'){
    $admission_id=$_POST['admission_id'];
    $view_content=$_POST['view_content'];
    require_once('../content/page-content.php');
}
?>



<?php if ($action=='update_password'){

     $old_password=trim($_POST['old_password']);
     $new_password=trim($_POST['new_password']);
     $comfirmed_password=trim($_POST['comfirmed_password']);
$query=mysqli_query($conn, "SELECT `password` FROM student_registration_tab WHERE `password`='$old_password' AND student_id='$student_id' ") or die('cannot select password from student_tab');
$check_pass=mysqli_num_rows($query);

if ($check_pass>0){
    mysqli_query($conn,"UPDATE student_registration_tab SET `password`='$new_password' WHERE student_id='$student_id'")or die ("cannot update staff_tab");
    $check=1;

}else {

    $check=0;
}
echo json_encode(array("check" => $check));

}
?>







<?php if ($action=='update_profile_pix'){

 // Upload Profile Pix for first time login
		$passport=$_FILES['passport']['name'];
		$datetime=date("Ymdhi");
		
		$allowedExts = array("jpg", "jpeg", "JPEG", "JPG", "gif", "png","PNG","GIF");
		$extension = pathinfo($_FILES['passport']['name'], PATHINFO_EXTENSION);
		
		if (in_array($extension, $allowedExts)){				  
		$passport = $datetime.'_'.$passport;
		move_uploaded_file($_FILES["passport"]["tmp_name"],"../../admin/uploaded_files/student_pix/" .$passport);
		}
		
		mysqli_query($conn,"UPDATE `student_registration_tab` SET passport='$passport' WHERE student_id='$student_id'")
		or die ("cannot update student_tab");
	

    }
    ?>






<?php
if ($action=='get_states'){
            $country_id=trim(strtoupper($_POST['country_id']));
            $query=mysqli_query($conn,"SELECT * FROM setup_country_states_tab WHERE country_id='$country_id'");
            $no= mysqli_num_rows($query);
            if ($no>0){
            ?>
            <option selected="selected" value="">STATE/PROVINCE LOADED</option>
            <?php
            while($fetch=mysqli_fetch_array($query)){
            $state_id= $fetch['state_id'];
            $state_name= strtoupper($fetch['state_name']);
            ?>
            <option value="<?php echo $state_id;?>"><?php echo $state_name;?></option>
            <?php
            }
            }else{
            ?>
            <option value="">-- NO RECORD FOUND --</option>
            <?php
            }
            }              
?>







<?php if ($action=='update_profile'){
    $student_id=$_POST['student_id'];

    $firstname=trim(strtoupper($_POST['firstname']));
    $middlename=trim(strtoupper($_POST['middlename']));
    $lastname=trim(strtoupper($_POST['lastname']));
    $email=trim($_POST['email']);
    $phonenumber=trim(strtoupper($_POST['phonenumber']));
    $gender=trim(strtoupper($_POST['gender']));
    $dob=trim(strtoupper($_POST['dob']));
    $country_id=trim(strtoupper($_POST['country_id']));
    $address=trim(strtoupper($_POST['address']));
    $state_id=trim(strtoupper($_POST['state_id']));
    $lga=trim(strtoupper($_POST['lga']));

    $check_email=mysqli_query($conn,"SELECT * FROM student_registration_tab WHERE email='$email' AND student_id!='$student_id'");				
    $c_email=mysqli_num_rows($check_email);

    if ($c_email>0){
        $check=0;
    }else{
        mysqli_query($conn,"UPDATE student_registration_tab SET firstname='$firstname',middlename='$middlename',lastname='$lastname',email='$email',phonenumber='$phonenumber',
        gender='$gender',dob='$dob',country_id='$country_id',`address`='$address',`state_id`='$state_id',`lga`='$lga' WHERE student_id='$student_id'")or die ("cannot update student_tab");
        $check=1;
    }
     
    echo json_encode(array("check" => $check,"student_id" => $student_id,"email" => $email));
}
?>













<?php
//// apply 4 years program ///////////////////////
if ($action=='apply_for_four_year_admission'){
    $student_id=$_POST['student_id'];

       $firstname=trim(strtoupper($_POST['firstname']));
       $lastname=trim(strtoupper($_POST['lastname']));
       $email=trim($_POST['email']);
       $phonenumber=trim(strtoupper($_POST['phonenumber']));
       $country=trim(strtoupper($_POST['country']));
       $address=trim(strtoupper($_POST['address']));
     
       $year_program=trim(strtoupper($_POST['year_program']));
      
       
       
       $check_email=mysqli_query($conn,"SELECT * FROM `s_admission_tab` WHERE email='$email'");
       $email_count=mysqli_num_rows($check_email);

    
 if ($email_count>0){
     
    $check=0; /// student exist

     } else {

        $check=1;

        $four_year_result=$_FILES['four_year_result']['name'];
        $allowedExts = array("jpg","jpeg","JPEG","JPG","png","PNG");
        $extension = pathinfo($_FILES['four_year_result']['name'], PATHINFO_EXTENSION);
        if (in_array($extension, $allowedExts)){
            move_uploaded_file($_FILES["four_year_result"]["tmp_name"],"../uploaded_files/document/".$four_year_result);
            }
  
        // get Admission id
      $counter_id='CMI-STD-ADMS';
        $query = mysqli_query($conn, "SELECT counter_value+1 AS counter_value FROM `counter_tab` WHERE counter_id='$counter_id' FOR UPDATE");
        $fetch=mysqli_fetch_array($query);
        $counter_value=$fetch['counter_value'];
        $admission_id=$counter_id.'-'.$counter_value;
        mysqli_query($conn,"UPDATE counter_tab SET `counter_value`='$counter_value' WHERE counter_id='$counter_id'") or die('cannot update counter_tab');
       
        //// admission status /////
        $adms_query = mysqli_query($conn, "SELECT status_id FROM `admission_status_tab` WHERE status_id='NT' ");
        $adms_fetch=mysqli_fetch_array($adms_query);
        $status_id=$adms_fetch['status_id'];

            
        mysqli_query($conn,"INSERT INTO `s_admission_tab`
        (`student_id`,`admission_id`,`admission_status`, `firstname`, `lastname`, `email`, `phonenumber`, `country`,`address`, `year_program`,`result`, `date`) VALUES
        ('$student_id','$admission_id','$status_id','$firstname','$lastname','$email','$phonenumber','$country','$address','$year_program','$four_year_result', NOW())") or die('cannot insert into Admission_tab');

        $mail_to_send='send_admission_email'; 
        require_once ('mail/mail.php');
}


echo json_encode(array("check" => $check,"email" => $email));

}
//// end apply 4 years program ///////////////////////
?>









<?php

if ($action=='apply_for_six_year_admission'){
    $student_id=$_POST['student_id'];

       $firstname=trim(strtoupper($_POST['firstname']));
       $lastname=trim(strtoupper($_POST['lastname']));
       $email=trim($_POST['email']);
       $phonenumber=trim(strtoupper($_POST['phonenumber']));
       $country=trim(strtoupper($_POST['country']));
       $address=trim(strtoupper($_POST['address']));
     
       $year_program=trim(strtoupper($_POST['year_program']));
      
       
     
       $check_email=mysqli_query($conn,"SELECT * FROM `s_admission_tab` WHERE email='$email'");
       $email_count=mysqli_num_rows($check_email);

    
 if ($email_count>0){
     
    $check=0; /// student exist

     } else {

        $check=1;

        $six_year_result=$_FILES['six_year_result']['name'];
        $allowedExts = array("jpg","jpeg","JPEG","JPG","png","PNG");
        $extension = pathinfo($_FILES['six_year_result']['name'], PATHINFO_EXTENSION);
        if (in_array($extension, $allowedExts)){
            move_uploaded_file($_FILES["six_year_result"]["tmp_name"],"../uploaded_files/document/".$six_year_result);
            }
  
        // get Admission id
      $counter_id='CMI-STD-ADMS';
        $query = mysqli_query($conn, "SELECT counter_value+1 AS counter_value FROM `counter_tab` WHERE counter_id='$counter_id' FOR UPDATE");
        $fetch=mysqli_fetch_array($query);
        $counter_value=$fetch['counter_value'];
        $admission_id=$counter_id.'-'.$counter_value;
        mysqli_query($conn,"UPDATE counter_tab SET `counter_value`='$counter_value' WHERE counter_id='$counter_id'") or die('cannot update counter_tab');
       
       //// admission status /////
       $adms_query = mysqli_query($conn, "SELECT status_id FROM `admission_status_tab` WHERE status_id='NT' ");
       $adms_fetch=mysqli_fetch_array($adms_query);
       $status_id=$adms_fetch['status_id'];
         
         
        mysqli_query($conn,"INSERT INTO `s_admission_tab`
        (`student_id`,`admission_id`,`admission_status`, `firstname`, `lastname`, `email`, `phonenumber`, `country`,`address`, `year_program`,`result`, `date`) VALUES
        ('$student_id','$admission_id','$status_id','$firstname','$lastname','$email','$phonenumber','$country','$address','$year_program','$six_year_result', NOW())") or die('cannot insert into Admission_tab');


$mail_to_send='send_admission_email'; 
require_once('mail/mail.php');

}



echo json_encode(array("check" => $check));

}
?>
















<?php

if ($action=='student_adms_profile'){
    $admission_id=$_POST['admission_id'];
 

       $firstname=trim($_POST['firstname']);
       $middlename=trim($_POST['middlename']);
       $lastname=trim($_POST['lastname']);
       $gender=trim($_POST['gender']);
       $dob=trim($_POST['dob']);
       $email=trim($_POST['email']);
       $phonenumber=trim($_POST['phonenumber']);
       $sat_or_act=trim($_POST['sat_or_act']);
       $address=trim($_POST['address']);
       $country=trim($_POST['country']);
       $state=trim($_POST['state']);
       $religious=trim($_POST['religious']);
       $lga=trim($_POST['lga']);

    
    
     
     
       $check_email=mysqli_query($conn,"SELECT * FROM `s_admission_tab` WHERE email='$email' AND admission_id!='$admission_id'");
       $email_count=mysqli_num_rows($check_email);

    
 if ($email_count>0){
     
    $check=0; /// emai exist by someone

     }else{
        $check=1;


      
      mysqli_query($conn,"UPDATE `s_admission_tab` SET `firstname`='$firstname',`middlename`='$middlename',`lastname`='$lastname',`email`='$email',`phonenumber`='$phonenumber',
      
        `gender`='$gender',`dob`='$dob',`sat_or_act_score`='$sat_or_act',`address`='$address',`country`='$country',`state`='$state',`religious`='$religious',`lga`='$lga', `last_update`=NOW() WHERE admission_id='$admission_id'")
		
        or die ("cannot update s_admission_tab");
      
}
echo json_encode(array("check" => $check,"admission_id" => $admission_id));

}
?>





























<?php

if ($action=='student_adms_document_profile'){
    $admission_id=trim($_POST['admission_id']);
  


  
    $student_adms_pix=$_FILES['student_adms_pix']['name'];
    $allowedExts = array("jpg","jpeg","JPEG","JPG","png","PNG");
    $extension = pathinfo($_FILES['student_adms_pix']['name'], PATHINFO_EXTENSION);
    if (in_array($extension, $allowedExts)){
    unlink("../uploaded_files/admission_student_pix/".$student_adms_pix);
    move_uploaded_file($_FILES["student_adms_pix"]["tmp_name"],"../uploaded_files/admission_student_pix/" .$student_adms_pix);
    mysqli_query($conn,"UPDATE `s_admission_tab` SET passport='$student_adms_pix' WHERE admission_id='$admission_id'")or die (mysqli_error($conn));
   
}

    
    
    
    
    $result=$_FILES['result']['name'];
            $allowedExts = array("jpg","jpeg","JPEG","JPG","png","PNG");
            $extension = pathinfo($_FILES['result']['name'], PATHINFO_EXTENSION);
            if (in_array($extension, $allowedExts)){
            unlink("../uploaded_files/document/".$result);
            move_uploaded_file($_FILES["result"]["tmp_name"],"../uploaded_files/document/" .$result);
            mysqli_query($conn,"UPDATE `s_admission_tab` SET result='$result' WHERE admission_id='$admission_id'")or die (mysqli_error($conn));
           
        }

         

         
            $essay=$_FILES['essay']['name'];
            $allowedExts = array("pdf","PDF");
            $extension = pathinfo($_FILES['essay']['name'], PATHINFO_EXTENSION);
            if (in_array($extension, $allowedExts)){	
              unlink("../uploaded_files/document/".$essay);				  
            move_uploaded_file($_FILES["essay"]["tmp_name"], "../uploaded_files/document/".$essay);
  
            mysqli_query($conn,"UPDATE `s_admission_tab` SET essay='$essay' WHERE admission_id='$admission_id'")or die (mysqli_error($conn));
          
        }



        $letter_one=$_FILES['letter_one']['name'];
        $allowedExts = array("pdf","PDF");
        $extension = pathinfo($_FILES['letter_one']['name'], PATHINFO_EXTENSION);
        if (in_array($extension, $allowedExts)){	
          unlink("../uploaded_files/document/".$letter_one);				  
        move_uploaded_file($_FILES["letter_one"]["tmp_name"], "../uploaded_files/document/".$letter_one);

        mysqli_query($conn,"UPDATE `s_admission_tab` SET letter_one='$letter_one' WHERE admission_id='$admission_id'")or die (mysqli_error($conn));
      
    }

    
    $letter_two=$_FILES['letter_two']['name'];
    $allowedExts = array("pdf","PDF");
    $extension = pathinfo($_FILES['letter_two']['name'], PATHINFO_EXTENSION);
    if (in_array($extension, $allowedExts)){	
      unlink("../uploaded_files/document/".$letter_two);				  
    move_uploaded_file($_FILES["letter_two"]["tmp_name"], "../uploaded_files/document/".$letter_two);

    mysqli_query($conn,"UPDATE `s_admission_tab` SET letter_two='$letter_two' WHERE admission_id='$admission_id'")or die (mysqli_error($conn));
  
}
        
        $check=1;
    
      



 
echo json_encode(array("check" => $check,"admission_id" => $admission_id));

}
?>





