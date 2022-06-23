<?php require_once '../../../config/connection.php';?>
<?php require_once('session.php');?>
<?php 
$action =$_POST['action'];
?>


<?php if ($action=='logout'){
  session_destroy();
  ?>
<script>
  	window.parent(location="../../../admin/");
</script>
<?php
}
?>

<?php if($action=='read_alert'){
		$alert_id = $_POST['alert_id'];
		$view_content=$action;
		require_once '../content/page-content.php';
}
?>

<?php if ($action=='system_alert'){
		$view_report=$_POST['view_report'];
		$all_search_txt=$_POST['all_search_txt'];			  
		require_once '../content/report-date-schedule.php';
		$check_code='alert-list';
		require_once '../content/sub-codes.php';

}
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


<?php if ($action=='change_password'){
    $view_content=$_POST['view_content'];
    require_once('../content/page-content.php');
}
?>



<?php if ($action=='profile'){
    $view_content=$_POST['view_content'];
    require_once('../content/page-content.php');
}
?>



<?php if ($action=='admin_profile'){
  $adm_staff=$_POST['adm_staff'];
    $view_content=$_POST['view_content'];
    require_once('../content/page-content.php');
}
?>


<?php if ($action=='registered_student_profile'){
  $student_id=$_POST['student_id'];
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






<?php if ($action=='fetch_admin_list'){
	  $status_id=$_POST['status_id'];
	  $search_txt=$_POST['search_txt'];
	  $check_query='view_staff';
	  require_once '../content/sub-codes.php';
}
?>	
	

  <?php if ($action=='fetch_student_list'){
	  $search_txt=$_POST['search_txt'];
	  $check_query='registered_student_list';
	  require_once '../content/sub-codes.php';
}
?>	


<?php if ($action=='student_adms_list'){
	  $status_id=$_POST['status_id'];
	  $search_txt=$_POST['search_txt'];
	  $check_query='get_sub_student_info';
	  require_once '../content/sub-codes.php';
}
?>	
 




 <?php if ($action=='register_staff'){

$firstname=trim(strtoupper($_POST['firstname']));
$lastname=trim(strtoupper($_POST['lastname']));
$email=trim($_POST['email']);
$phonenumber=trim(strtoupper($_POST['phonenumber']));
$role_id=trim(strtoupper($_POST['role_id']));
$status_id=trim(strtoupper($_POST['status_id']));

$check_email=mysqli_query($conn,"SELECT * FROM admin_tab WHERE email='$email'");				
$adm_email=mysqli_num_rows($check_email);

if ($adm_email>0){
    $check=0;
}else{
    $check=1;
    // get user id
    $counter_id='ADM';
    $date= date('Ymd');
    $query = mysqli_query($conn, "SELECT counter_value+1 AS counter_value FROM `counter_tab` WHERE counter_id='$counter_id' FOR UPDATE");
    $fetch=mysqli_fetch_array($query);
    $counter_value=$fetch['counter_value'];
    $admin_id=$counter_id.$date.$counter_value;
    // $user_id="$counter_id$counter_value";
    mysqli_query($conn,"UPDATE counter_tab SET `counter_value`='$counter_value' WHERE counter_id='$counter_id'") or die('cannot update counter_tab');

    mysqli_query($conn,"INSERT INTO `admin_tab`
    (`admin_id`, `firstname`, `lastname`, `email`, `phonenumber`,`role_id`, `status_id`, `date`) VALUES 
    ('$admin_id','$firstname','$lastname','$email','$phonenumber','$role_id','$status_id', NOW())") or die('cannot insert into admin_tab');

    $role_query=mysqli_query($conn,"SELECT * FROM role_tab a,`admin_tab`b WHERE a.role_id=b.role_id AND a.role_id='$role_id' ");
    $role=mysqli_fetch_array($role_query);
    $s_role_name=$role['role_name'];

    $mail_to_sent='administrator_reg_mail';
    require_once ('mail/mail.php');

}
   
    echo json_encode(array("check" => $check));
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
            <?php } } ?>










<?php if ($action=='update_profile_pix'){

// Upload Profile Pix for first time login
   $passport=$_FILES['passport']['name'];
   $datetime=date("Ymdhi");
   
   $allowedExts = array("jpg", "jpeg", "JPEG", "JPG", "gif", "png","PNG","GIF");
   $extension = pathinfo($_FILES['passport']['name'], PATHINFO_EXTENSION);
   
   if (in_array($extension, $allowedExts)){				  
   $passport = $datetime.'_'.$passport;
   move_uploaded_file($_FILES["passport"]["tmp_name"],"../uploaded_files/staff_pix/" .$passport);
   }
  
   mysqli_query($conn,"UPDATE `admin_tab` SET passport='$passport' WHERE admin_id='$s_admin_id'")
   or die ("cannot update passport from admin_tab");
 

   }
   ?>






<?php if ($action=='update_reg_student_profile'){
    $student_id=$_POST['student_id'];

    $firstname=trim(strtoupper($_POST['firstname']));
    $middlename=trim(strtoupper($_POST['middlename']));
    $lastname=trim(strtoupper($_POST['lastname']));
    $email=trim($_POST['email']);
    $phonenumber=trim(strtoupper($_POST['phonenumber']));
    $country_id=trim(strtoupper($_POST['country_id']));
    $address=trim(strtoupper($_POST['address']));
    $state_id=trim(strtoupper($_POST['state_id']));

    $check_email=mysqli_query($conn,"SELECT * FROM student_registration_tab WHERE email='$email' AND student_id!='$student_id'");				
    $c_email=mysqli_num_rows($check_email);

    if ($c_email>0){
        $check=0;
    }else{
      
        mysqli_query($conn,"UPDATE student_registration_tab SET firstname='$firstname',middlename='$middlename',lastname='$lastname',email='$email',phonenumber='$phonenumber',
      country_id='$country_id',`address`='$address',`state_id`='$state_id'S WHERE student_id='$student_id'")or die ("cannot update student_tab");
        $check=1;
    }
     
    echo json_encode(array("check" => $check,"student_id" => $student_id,"email" => $email));
}
?>





<?php if ($action=='update_password'){

$old_password=md5(trim($_POST['old_password']));
$new_password=md5(trim($_POST['new_password']));
$comfirmed_password=trim($_POST['comfirmed_password']);
$query=mysqli_query($conn, "SELECT `password` FROM admin_tab WHERE `password`='$old_password' AND admin_id='$s_admin_id' ") or die('cannot select password from student_tab');
$check_pass=mysqli_num_rows($query);

if ($check_pass>0){
mysqli_query($conn,"UPDATE admin_tab SET `password`='$new_password' WHERE admin_id='$s_admin_id'")or die ("cannot update staff_tab");
$check=1;
session_destroy();
}else {

$check=0;
}
echo json_encode(array("check" => $check));

}
?>






 

<?php if ($action=='update_profile'){
    $admin_id=$_POST['admin_id'];

    $firstname=trim(strtoupper($_POST['firstname']));
    $middlename=trim(strtoupper($_POST['middlename']));
    $lastname=trim(strtoupper($_POST['lastname']));
    $email=trim($_POST['email']);
    $phonenumber=trim(strtoupper($_POST['phonenumber']));
    $address=trim(strtoupper($_POST['address']));
    $gender=trim(strtoupper($_POST['gender']));
    $dob=trim(strtoupper($_POST['dob']));
    $country_id=trim(strtoupper($_POST['country_id']));
    $state_id=trim(strtoupper($_POST['state_id']));
    $role_id=trim(strtoupper($_POST['role_id']));
    $status_id=trim(strtoupper($_POST['status_id']));

    $check_email=mysqli_query($conn,"SELECT * FROM admin_tab WHERE email='$email' AND admin_id!='$admin_id'");				
    $c_email=mysqli_num_rows($check_email);

    if ($c_email>0){
        $check=0;
    }else{
      $check=1;
        if($s_role_id==1){
        mysqli_query($conn,"UPDATE admin_tab SET firstname='$firstname',middlename='$middlename',lastname='$lastname',email='$email',phonenumber='$phonenumber',
        gender='$gender',dob='$dob',country_id='$country_id',`state_id`='$state_id',`address`='$address' WHERE admin_id='$admin_id'")or die ("cannot update admin_tab");
  
        }else{
            mysqli_query($conn,"UPDATE admin_tab SET firstname='$firstname',middlename='$middlename',lastname='$lastname',email='$email',phonenumber='$phonenumber',
            gender='$gender',dob='$dob',country_id='$country_id',`state_id`='$state_id',`address`='$address',`role_id`='$role_id',`status_id`='$status_id' WHERE admin_id='$admin_id'")or die ("cannot update admin_tab");       
        }

    }
     
    echo json_encode(array("check" => $check,"admin_id" => $admin_id));
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
       $address=trim($_POST['address']);
       $country_id=trim($_POST['country_id']);
       $state_id=trim($_POST['state_id']);
       $schoolname=trim($_POST['schoolname']);
       $school_country_id=trim($_POST['school_country_id']);
       $transfer_department_name=trim($_POST['transfer_department_name']);
       $transfer_student_id=trim($_POST['transfer_student_id']);
       $sat_or_act=trim($_POST['sat_or_act']);
       $lga=trim($_POST['lga']);
     
       $check_email=mysqli_query($conn,"SELECT * FROM `s_admission_tab` WHERE email='$email' AND admission_id!='$admission_id'");
       $email_count=mysqli_num_rows($check_email);

    
 if ($email_count>0){
     
    $check=0; /// emai exist by someone

     }else{

        $check=1;
        $check_program=mysqli_query($conn,"SELECT program_id FROM `s_admission_tab` WHERE admission_id='$admission_id' ");
        $program=mysqli_fetch_array($check_program);
        $s_program_id=$program['program_id'];

            if ($s_program_id=='PRO_4') {

                $check_document=mysqli_query($conn,"SELECT ssce_result,essay,hnd_or_degree_result,letter_one,letter_two FROM `s_admission_tab` WHERE admission_id='$admission_id' ");
                $fetch_document=mysqli_fetch_array($check_document);
                $ssce_result=$fetch_document['ssce_result'];
                $essay_document=$fetch_document['essay'];
                $hnd_or_degree_result=$fetch_document['hnd_or_degree_result'];
                $letter_one=$fetch_document['letter_one'];
                $letter_two=$fetch_document['letter_two'];

                    mysqli_query($conn,"UPDATE `s_admission_tab` SET `firstname`='$firstname',`middlename`='$middlename',`lastname`='$lastname',`email`='$email',`phonenumber`='$phonenumber',
                    `gender`='$gender',`dob`='$dob',`sat_or_act_score`='$sat_or_act',`address`='$address',`country_id`='$country_id',`state_id`='$state_id',`school_name`='$schoolname',
                     `school_country_id`='$school_country_id',`lga`='$lga', `last_update`=NOW() WHERE admission_id='$admission_id'")  or die ("cannot update s_admission_tab");
        

            }else if($s_program_id=='PRO_6'){

                $check_document=mysqli_query($conn,"SELECT  ssce_result,essay,letter_one,letter_two FROM `s_admission_tab` WHERE admission_id='$admission_id' ");
                $fetch_document=mysqli_fetch_array($check_document);
                $ssce_result=$fetch_document['ssce_result'];
                $essay_document=$fetch_document['essay'];
                $letter_one=$fetch_document['letter_one'];
                $letter_two=$fetch_document['letter_two'];

                    mysqli_query($conn,"UPDATE `s_admission_tab` SET `firstname`='$firstname',`middlename`='$middlename',`lastname`='$lastname',`email`='$email',`phonenumber`='$phonenumber',
                    `gender`='$gender',`dob`='$dob',`sat_or_act_score`='$sat_or_act',`address`='$address',`country_id`='$country_id',`state_id`='$state_id',`lga`='$lga', `last_update`=NOW() WHERE admission_id='$admission_id'")
                    
                    or die ("cannot update s_admission_tab");
              
            }else{

                
                $check_document=mysqli_query($conn,"SELECT  ssce_result,essay,letter_one,letter_two FROM `s_admission_tab` WHERE admission_id='$admission_id' ");
                $fetch_document=mysqli_fetch_array($check_document);
                $ssce_result=$fetch_document['ssce_result'];
                $essay_document=$fetch_document['essay'];
                $letter_one=$fetch_document['letter_one'];
                $letter_two=$fetch_document['letter_two'];
                
                mysqli_query($conn,"UPDATE `s_admission_tab` SET `firstname`='$firstname',`middlename`='$middlename',`lastname`='$lastname',`email`='$email',`phonenumber`='$phonenumber',
                    `gender`='$gender',`dob`='$dob',`sat_or_act_score`='$sat_or_act',`address`='$address',`country_id`='$country_id',`state_id`='$state_id',`school_name`='$schoolname',
                     `transfer_department_name`='$transfer_department_name', `transfer_student_id`='$transfer_student_id',`school_country_id`='$school_country_id',`lga`='$lga', `last_update`=NOW() WHERE admission_id='$admission_id'")
                    
                    or die ("cannot update s_admission_tab");
        
              
            }
       
      
}
echo json_encode(array("check" => $check));

}
?>









<?php

if ($action=='student_adms_document_profile'){
    $admission_id=trim($_POST['admission_id']);
  


  
    $student_adms_pix=$_FILES['student_adms_pix']['name'];
    $allowedExts = array("jpg","jpeg","JPEG","JPG","png","PNG");
    $extension = pathinfo($_FILES['student_adms_pix']['name'], PATHINFO_EXTENSION);
    if (in_array($extension, $allowedExts)){
    unlink("../../student-portal/uploaded_files/admission_student_pix/".$student_adms_pix);
    move_uploaded_file($_FILES["student_adms_pix"]["tmp_name"],"../../../student-portal/uploaded_files/admission_student_pix/" .$student_adms_pix);
    mysqli_query($conn,"UPDATE `s_admission_tab` SET passport='$student_adms_pix' WHERE admission_id='$admission_id'")or die (mysqli_error($conn));
   
}


    
    
    
            $ssce_result=$_FILES['ssce_result']['name'];
            $allowedExts = array("jpg","jpeg","JPEG","JPG","png","PNG");
            $extension = pathinfo($_FILES['ssce_result']['name'], PATHINFO_EXTENSION);
            if (in_array($extension, $allowedExts)){
            unlink("../../student-portal/uploaded_files/document/".$result);
            move_uploaded_file($_FILES["ssce_result"]["tmp_name"],"../../../student-portal/uploaded_files/document/" .$ssce_result);
            mysqli_query($conn,"UPDATE `s_admission_tab` SET ssce_result='$ssce_result' WHERE admission_id='$admission_id'")or die (mysqli_error($conn));
        }


         
        $hnd_or_degree_result=$_FILES['hnd_or_degree_result']['name'];
        $allowedExts = array("jpg","jpeg","JPEG","JPG","png","PNG");
        $extension = pathinfo($_FILES['hnd_or_degree_result']['name'], PATHINFO_EXTENSION);
        if (in_array($extension, $allowedExts)){
        move_uploaded_file($_FILES["hnd_or_degree_result"]["tmp_name"],"../../../student-portal/uploaded_files/document/".$hnd_or_degree_result);
        mysqli_query($conn,"UPDATE `s_admission_tab` SET hnd_or_degree_result='$hnd_or_degree_result' WHERE admission_id='$admission_id'")or die (mysqli_error($conn));
    }

         
            $essay=$_FILES['essay']['name'];
            $allowedExts = array("pdf","PDF");
            $extension = pathinfo($_FILES['essay']['name'], PATHINFO_EXTENSION);
            if (in_array($extension, $allowedExts)){	
              unlink("../../student-portal/uploaded_files/document/".$essay);				  
            move_uploaded_file($_FILES["essay"]["tmp_name"], "../../../student-portal/uploaded_files/document/".$essay);
            mysqli_query($conn,"UPDATE `s_admission_tab` SET essay='$essay' WHERE admission_id='$admission_id'")or die (mysqli_error($conn));     
        }



        $letter_one=$_FILES['letter_one']['name'];
        $allowedExts = array("pdf","PDF");
        $extension = pathinfo($_FILES['letter_one']['name'], PATHINFO_EXTENSION);
        if (in_array($extension, $allowedExts)){	
          unlink("../../student-portal/uploaded_files/document/".$letter_one);				  
        move_uploaded_file($_FILES["letter_one"]["tmp_name"], "../../../student-portal/uploaded_files/document/".$letter_one);
        mysqli_query($conn,"UPDATE `s_admission_tab` SET letter_one='$letter_one' WHERE admission_id='$admission_id'")or die (mysqli_error($conn));
    }

    
        $letter_two=$_FILES['letter_two']['name'];
        $allowedExts = array("pdf","PDF");
        $extension = pathinfo($_FILES['letter_two']['name'], PATHINFO_EXTENSION);
        if (in_array($extension, $allowedExts)){	
        unlink("../../student-portal/uploaded_files/document/".$letter_two);				  
        move_uploaded_file($_FILES["letter_two"]["tmp_name"], "../../../student-portal/uploaded_files/document/".$letter_two);
        mysqli_query($conn,"UPDATE `s_admission_tab` SET letter_two='$letter_two' WHERE admission_id='$admission_id'")or die (mysqli_error($conn));

        }

        $check_program=mysqli_query($conn,"SELECT * FROM `s_admission_tab` WHERE admission_id='$admission_id' ");
        $program=mysqli_fetch_array($check_program);
        $ss_program_id=$program['program_id'];

        if($ss_program_id=='PRO_6' || $ss_program_id=='TRANS'){

            $check_document=mysqli_query($conn,"SELECT  ssce_result,essay,letter_one,letter_two FROM `s_admission_tab` WHERE admission_id='$admission_id' ");
            $fetch_document=mysqli_fetch_array($check_document);
            $s_ssce_result=$fetch_document['ssce_result'];
            $s_essay_document=$fetch_document['essay'];
            $s_letter_one=$fetch_document['letter_one'];
            $s_letter_two=$fetch_document['letter_two'];
            
                if($s_ssce_result=='' || $s_essay_document=='' || $s_letter_one=='' || $s_letter_two==''){
                    mysqli_query($conn,"UPDATE `s_admission_tab` SET profile_status_id='NOTCOM' WHERE admission_id='$admission_id'")or die (mysqli_error($conn));
               
                }else{
                    mysqli_query($conn,"UPDATE `s_admission_tab` SET profile_status_id='COM' WHERE admission_id='$admission_id'")or die (mysqli_error($conn));
                }
        }else{

            if($ss_program_id=='PRO_4'){

                $check_document=mysqli_query($conn,"SELECT  ssce_result,essay,letter_one,letter_two,hnd_or_degree_result FROM `s_admission_tab` WHERE admission_id='$admission_id' ");
                $fetch_document=mysqli_fetch_array($check_document);
                $s_ssce_result=$fetch_document['ssce_result'];
                $s_essay_document=$fetch_document['essay'];
                $s_letter_one=$fetch_document['letter_one'];
                $s_letter_two=$fetch_document['letter_two'];
                $s_hnd_or_degree_result=$fetch_document['hnd_or_degree_result'];
                
                    if($s_ssce_result=='' || $s_essay_document=='' || $s_letter_one=='' || $s_letter_two=='' || $s_hnd_or_degree_result==''){
                        mysqli_query($conn,"UPDATE `s_admission_tab` SET profile_status_id='NOTCOM' WHERE admission_id='$admission_id'")or die (mysqli_error($conn));
                   
                    }else{
                        mysqli_query($conn,"UPDATE `s_admission_tab` SET profile_status_id='COM' WHERE admission_id='$admission_id'")or die (mysqli_error($conn));
                    }

        }
    
    }        
             
$check=1;
    
echo json_encode(array("check" => $check,"admission_id" => $admission_id));

}
?>


















<?php if ($action=='admitted_student'){
    $admission_id=$_POST['admission_id'];
    $admission_status='ADM';




    $check_program=mysqli_query($conn,"SELECT * FROM `s_admission_tab` WHERE admission_id='$admission_id' ");
        $program=mysqli_fetch_array($check_program);
        $ss_program_id=$program['program_id'];

        if($ss_program_id=='PRO_6' || $ss_program_id=='TRANS'){

            $check_document=mysqli_query($conn,"SELECT  ssce_result,essay,letter_one,letter_two FROM `s_admission_tab` WHERE admission_id='$admission_id' ");
            $fetch_document=mysqli_fetch_array($check_document);
            $s_ssce_result=$fetch_document['ssce_result'];
            $s_essay_document=$fetch_document['essay'];
            $s_letter_one=$fetch_document['letter_one'];
            $s_letter_two=$fetch_document['letter_two'];
            
                if($s_ssce_result=='' || $s_essay_document=='' || $s_letter_one=='' || $s_letter_two==''){
                    $check=0;
                }else{
    $check=1;

    mysqli_query($conn,"UPDATE s_admission_tab SET `admission_status`='$admission_status' WHERE admission_id='$admission_id'") or die('cannot update counter_tab');
                }
        }else{

            if($ss_program_id=='PRO_4'){

                $check_document=mysqli_query($conn,"SELECT  ssce_result,essay,letter_one,letter_two,hnd_or_degree_result FROM `s_admission_tab` WHERE admission_id='$admission_id' ");
                $fetch_document=mysqli_fetch_array($check_document);
                $s_ssce_result=$fetch_document['ssce_result'];
                $s_essay_document=$fetch_document['essay'];
                $s_letter_one=$fetch_document['letter_one'];
                $s_letter_two=$fetch_document['letter_two'];
                $s_hnd_or_degree_result=$fetch_document['hnd_or_degree_result'];
                
                    if($s_ssce_result=='' || $s_essay_document=='' || $s_letter_one=='' || $s_letter_two=='' || $s_hnd_or_degree_result==''){
                        $check=0;
                   
                    }else{
    $check=1;

                 mysqli_query($conn,"UPDATE s_admission_tab SET `admission_status`='$admission_status' WHERE admission_id='$admission_id'") or die('cannot update counter_tab');
                    }

        }
    
    }   
    echo json_encode(array("check" => $check)); 

}
?>

<?php if ($action=='cancel_admitted_student'){
    $admission_id=$_POST['admission_id'];
  $admission_status='NT';
    mysqli_query($conn,"UPDATE s_admission_tab SET `admission_status`='$admission_status' WHERE admission_id='$admission_id'") or die('cannot update counter_tab');

    $check=1;
    
    echo json_encode(array("check" => $check)); 
}
?>














		
<?php if ($action=='update_backend_setting'){
        $smtphost=trim(strtolower($_POST['smtphost']));
        $smtpusername=trim($_POST['smtpusername']);
        $smtppassword=trim($_POST['smtppassword']);
        $smtpport=trim($_POST['smtpport']);
        $sendername=trim(ucwords(strtolower($_POST['sendername'])));
        $support_phonenumber=trim($_POST['support_phonenumber']);
        $support_email=trim(strtolower($_POST['support_email']));
        $admission_form_fee=trim($_POST['admission_form_fee']);
        $support_address=trim(ucwords(strtolower($_POST['support_address'])));

        $bankname=trim(strtoupper($_POST['bankname']));
        $accountname=trim(strtoupper($_POST['accountname']));
        $accountnumber=trim(strtoupper($_POST['accountnumber']));

 
          
          mysqli_query($conn,"UPDATE `backend_settings_tab` SET `smtp_host`='$smtphost',`smtp_username`='$smtpusername',`smtp_password`='$smtppassword',
          `smtp_port`='$smtpport',`sender_name`='$sendername',`support_phonenumber`='$support_phonenumber',`support_email`='$support_email',`support_address`='$support_address',`admission_form_fee`='$admission_form_fee',
          `bank_name`='$bankname',`account_name`='$accountname',`account_number`='$accountnumber',`date`=NOW() WHERE backend_setting_id='BK_ID001'")or die ("cannot update backend_settings_tab");       
    
    $check=1;
     
    echo json_encode(array("check" => $check,));
}
?>


