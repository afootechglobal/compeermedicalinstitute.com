<?php require_once '../config/connection.php'; ?>

<?php 
$action=$_GET['action'];
////
$json_response = array();
?>

<?php
///////////////////////////////////////////////////////////////////////////////////
if ($action== 'get_each_user'){
    $student_id=$_GET['student_id'];
    $get_details=$callclass->_get_student_detail($conn, $student_id);
        $u_array = json_decode($get_details, true);
 
         $json_response['student_id']=$u_array[0]['student_id'];
         $json_response['reg_pin']=$u_array[0]['reg_pin'];
         $json_response['firstname']=$u_array[0]['firstname'];
         $json_response['middlename']=$u_array[0]['middlename'];
         $json_response['lastname']=$u_array[0]['lastname'];
         $json_response['password']=$u_array[0]['password'];
         $json_response['otp']=$u_array[0]['otp'];
         $json_response['dob']=$u_array[0]['dob'];
         $json_response['phonenumber']=$u_array[0]['phonenumber'];
         $json_response['gender']=$u_array[0]['gender'];
         $json_response['email']=$u_array[0]['email'];
         $json_response['status_id']=$u_array[0]['status_id'];
         $json_response['country']=$u_array[0]['country'];
         $json_response['state']=$u_array[0]['state'];
         $json_response['lga']=$u_array[0]['lga'];
         $json_response['address']=$u_array[0]['address'];
         $json_response['passport']=$u_array[0]['passport'];
         $json_response['date']=$u_array[0]['date'];
         $json_response['last_login']=$u_array[0]['last_login'];

         if($json_response['student_id']==''){
            $json_response['report']=0;//// User Account doesnt exist
            $json_response['cmment']='User Account doesnt exist';
         }else{
            $json_response=1;///User Account  exist
            $json_response['comment']='User Account exist';
         }

         echo json_encode($json_response, JSON_PRETTY_PRINT);
}
?>