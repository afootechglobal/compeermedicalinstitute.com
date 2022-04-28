<?php 
ini_set('session.use_only_cookies', 1); // secure cookie
session_start();
session_regenerate_id(); // regenerating for security issues

error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
header("Acces-Contorl-Allow-Origin");/// to call API and clear the error from web-page
   

    // local Database Configuration //
    $main_server = 'localhost';
    $server_username = 'root';
    $server_password = '';
	
    // Online Database Configuration //
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
$password=$_SESSION['password'];

////// user session ////
$s_student=$_SESSION['s_student'];

?>




<?php

class allClass{

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
      $year_program=$fetch_query['year_program'];
      $sat_or_act=$fetch_query['sat_or_act_score'];
      $country=$fetch_query['country'];
      $result=$fetch_query['result'];
      $essay=$fetch_query['essay'];
      $letter_one=$fetch_query['letter_one'];
      $letter_two=$fetch_query['letter_two'];
      $date=$fetch_query['date'];


	  		
	return '[{"student_id":"'.$student_id.'","admission_id":"'.$admission_id.'","firstname":"'.$firstname.'","middlename":"'.$middlename.'","lastname":"'.$lastname.'","gender":"'.$gender.'","dob":"'.$dob.'",
        "email":"'.$email.'","phonenumber":"'.$phonenumber.'","address":"'.$address.'","year_program":"'.$year_program.'","sat_or_act":"'.$sat_or_act.'",
        "country":"'.$country.'", "result":"'.$result.'", "essay":"'.$essay.'", "letter_one":"'.$letter_one.'", "letter_two":"'.$letter_two.'", "date":"'.$date.'"}]';

}










}
$callclass=new allClass();
?>






