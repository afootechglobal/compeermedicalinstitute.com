<?php 
ini_set('session.use_only_cookies', 1); // secure cookie
session_start();
session_regenerate_id(); // regenerating for security issues

error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
   
    // local Database Configuration //
$website='http://localhost/compeermedicalinstitute.com';
    $main_server = 'localhost';
    $server_username = 'root';
    $server_password = '';
	
    // Online Database Configuration //
//$website='https://www.compeermedicalinstitute.com';
    //$main_server = 'localhost';
    //$server_username = 'compeerm';
    //$server_password = '$CMI@2022';

    // Create Connection //
    $conn = mysqli_connect($main_server, $server_username, $server_password) or die("connection error");
    mysqli_select_db($conn, "compeerm_db");
?>



    

<?php 

    // variable declaration  //
if ($_POST && !empty($_POST['email'])) {
$_SESSION['email'] = $_POST['email'];
}
$email=$_SESSION['email'];

if ($_POST && !empty($_POST['password'])) {
$_SESSION['password'] = $_POST['password'];
}
$password=md5($_SESSION['password']);

////// user session ////
$s_student=$_SESSION['s_student'];

$s_admin=$_SESSION['s_admin'];

?>




<?php

class allClass{


    	
function _get_backend_settings_detail($conn, $backend_setting_id){
	$query=mysqli_query($conn,"SELECT * FROM backend_settings_tab WHERE backend_setting_id='$backend_setting_id'");
	$fetch=mysqli_fetch_array($query);
		$smtp_host=$fetch['smtp_host'];
		$smtp_username=$fetch['smtp_username'];
		$smtp_password=$fetch['smtp_password'];
		$smtp_port=$fetch['smtp_port'];
		$sender_name=$fetch['sender_name'];
		$support_email=$fetch['support_email'];
		$support_phonenumber=$fetch['support_phonenumber'];
		$support_address=$fetch['support_address'];
		$bank_name=$fetch['bank_name'];
		$account_name=$fetch['account_name'];
		$account_number=$fetch['account_number'];
		$admission_form_fee=$fetch['admission_form_fee'];

		$payment_gateway_id=$fetch['payment_gateway_id'];

		return '[{"smtp_host":"'.$smtp_host.'","smtp_username":"'.$smtp_username.'","smtp_password":"'.$smtp_password.'",
		"smtp_port":"'.$smtp_port.'","sender_name":"'.$sender_name.'","support_email":"'.$support_email.'","support_phonenumber":"'.$support_phonenumber.'","support_address":"'.$support_address.'","bank_name":"'.$bank_name.'","account_name":"'.$account_name.'",
		"account_number":"'.$account_number.'","admission_form_fee":"'.$admission_form_fee.'","payment_gateway_id":"'.$payment_gateway_id.'"}]';

}


function _get_student_detail($conn, $student_id){
	$usersquery=mysqli_query($conn,"SELECT * FROM student_registration_tab WHERE student_id ='$student_id'")or die ('cannot select users_tab');
	$fetch_query=mysqli_fetch_array($usersquery);
		$student_id=$fetch_query['student_id'];
		$reg_pin=$fetch_query['reg_pin'];
		$firstname=$fetch_query['firstname'];
		$middlename=$fetch_query['middlename'];
		$lastname=$fetch_query['lastname'];
		$password=$fetch_query['password'];
		$otp=$fetch_query['otp'];
		$dob=$fetch_query['dob'];
		$phonenumber=$fetch_query['phonenumber'];
		$gender=$fetch_query['gender'];
		$email=$fetch_query['email'];
		$status_id=$fetch_query['status_id'];
		$country_id=$fetch_query['country_id'];
		$state_id=$fetch_query['state_id'];
		$lga=$fetch_query['lga'];
		$address=$fetch_query['address'];
		$passport=$fetch_query['passport'];
	
		///////
		$date=$fetch_query['date'];
		$last_login=$fetch_query['last_login'];
		
		
	return '[{"student_id":"'.$student_id.'","reg_pin":"'.$reg_pin.'","firstname":"'.$firstname.'","middlename":"'.$middlename.'","lastname":"'.$lastname.'","password":"'.$password.'","otp":"'.$otp.'",
        "dob":"'.$dob.'","phonenumber":"'.$phonenumber.'","gender":"'.$gender.'","email":"'.$email.'","status_id":"'.$status_id.'",
        "country_id":"'.$country_id.'", "state_id":"'.$state_id.'", "lga":"'.$lga.'", "address":"'.$address.'", "passport":"'.$passport.'", "date":"'.$date.'", "last_login":"'.$last_login.'"}]';
}	
	





function _get_student_admission_detail($conn, $admission_id){
$usersquery=mysqli_query($conn,"SELECT * FROM `s_admission_tab` WHERE admission_id='$admission_id'")or die ('cannot select users_tab');
$fetch_query=mysqli_fetch_array($usersquery);

      $student_id=$fetch_query['student_id'];
      $admission_id=$fetch_query['admission_id'];
      $admission_status=$fetch_query['admission_status'];
      $firstname=$fetch_query['firstname'];
      $middlename=$fetch_query['middlename'];
      $lastname=$fetch_query['lastname'];
      $gender=$fetch_query['gender'];
      $dob=$fetch_query['dob'];
      $email=$fetch_query['email'];
      $phonenumber=$fetch_query['phonenumber'];
      $address=$fetch_query['address'];
      $sat_or_act=$fetch_query['sat_or_act_score'];
      $country_id=$fetch_query['country_id'];
      $program_id=$fetch_query['program_id'];
      $ssce_result=$fetch_query['ssce_result'];
      $essay=$fetch_query['essay'];
      $letter_one=$fetch_query['letter_one'];
      $letter_two=$fetch_query['letter_two'];
      $date=$fetch_query['date'];


	  		
	return '[{"student_id":"'.$student_id.'","admission_id":"'.$admission_id.'","firstname":"'.$firstname.'","middlename":"'.$middlename.'","lastname":"'.$lastname.'","gender":"'.$gender.'","dob":"'.$dob.'",
        "email":"'.$email.'","phonenumber":"'.$phonenumber.'","address":"'.$address.'","sat_or_act":"'.$sat_or_act.'","program_id":"'.$program_id.'",
        "country_id":"'.$country_id.'", "ssce_result":"'.$ssce_result.'", "essay":"'.$essay.'", "letter_one":"'.$letter_one.'", "letter_two":"'.$letter_two.'", "date":"'.$date.'"}]';

}


////////////////////////////////		

////////////////////////////////



function _admin_sub_panel(){?>

<div class="image-back-div staff-back-div">
            <div class="cover">
                
                <div class="div-in-header">
                    <div class="div-in">
                        <div class="div-in-text">
                            <h5 id="page-title"><i class="fa fa-user-o"></i> Staff Profile</h5><br clear="all">
                            <p>Adminstrator Portal</p>

                            <div class="time-dash-div">
                            <span>Current Time</span>
                            <h4 id="digitalclock"> </h4>
                            <span> <?php $date = date("l, dS F, Y");
				                echo $date 
                                ?> 
                            </span>

                            </div>
                        </div>

                    
                    </div>

                </div>
            </div>
        </div>

<?php }


function _get_admin_detail($conn, $admin_id){
    $query=mysqli_query($conn,"SELECT * FROM admin_tab WHERE admin_id='$admin_id'")or die ('cannot select staff_tab');
    $fetch_query=mysqli_fetch_array($query);

    $admin_id=$fetch_query['admin_id'];
    $firstname=$fetch_query['firstname'];
    $middlename=$fetch_query['middlename'];
    $lastname=$fetch_query['lastname'];
    $gender=$fetch_query['gender'];
    $dob=$fetch_query['dob'];
    $email=$fetch_query['email'];
    $phonenumber=$fetch_query['phonenumber'];
    $country_id=$fetch_query['country_id'];
    $state_id=$fetch_query['state_id'];
    $city=$fetch_query['city'];
    $address=$fetch_query['address'];
    $role_id=$fetch_query['role_id'];
    $status_id=$fetch_query['status_id'];
//// if ($passport==''){
     //   $passport='friends.png';
    //}
    $passport=$fetch_query['passport'];
    $otp=$fetch_query['otp'];
    $last_login=$fetch_query['last_login']; 
    $date=$fetch_query['date'];

      		
	return '[{"admin_id":"'.$admin_id.'","firstname":"'.$firstname.'","middlename":"'.$middlename.'","lastname":"'.$lastname.'","gender":"'.$gender.'","dob":"'.$dob.'",
    "email":"'.$email.'","phonenumber":"'.$phonenumber.'","country_id":"'.$country_id.'", "state_id":"'.$state_id.'", "city":"'.$city.'", "address":"'.$address.'", "role_id":"'.$role_id.'",
         "status_id":"'.$status_id.'","passport":"'.$passport.'","otp":"'.$otp.'","last_login":"'.$last_login.'","date":"'.$date.'"}]';
}	
            
        

function _get_status_detail($conn, $status_id){
    $query=mysqli_query($conn,"SELECT * FROM status_tab WHERE status_id='$status_id'");
    $fetch=mysqli_fetch_array($query);
        $status_name=$fetch['status_name'];
    return '[{"status_name":"'.$status_name.'"}]';
}
    


function _get_alert_detail($conn, $alert_id){
    $query=mysqli_query($conn,"SELECT * FROM alert_tab WHERE alert_id='$alert_id'");
    $fetch = mysqli_fetch_array($query); 
    $admin_id = $fetch['admin_id'];
    $name = $fetch['name'];
    $ipaddress = $fetch['ipaddress'];
    $computer = $fetch['computer'];
    $seen_status = $fetch['seen_status'];
    $date = $fetch['date'];
    return '[{"admin_id":"'.$admin_id.'","name":"'.$name.'","ipaddress":"'.$ipaddress.'","computer":"'.$computer.'","seen_status":"'.$seen_status.'","date":"'.$date.'"}]';
}


function _alert_sequence_and_update($conn,$alert_detail,$admin_id,$firstname,$ip_address,$sysname){
    $alertsele=mysqli_fetch_array(mysqli_query($conn,"SELECT mast_val FROM masters_tab WHERE mast_id = 'ALT' FOR UPDATE"));
    $alertno=$alertsele[0]+1;
    $alertid='ALT'.$alertno;
        
      mysqli_query($conn,"INSERT INTO `alert_tab` VALUES( '','$alertid','$alert_detail', '$admin_id','$firstname', '$ip_address',
       '$sysname','0',NOW())")or die ("cannot insert alert_tab");
       
      mysqli_query($conn,"UPDATE masters_tab SET mast_val='$alertno' WHERE mast_id = 'ALT'")
      or die("cannot update masters_tab");
}

}
$callclass=new allClass();
?>






