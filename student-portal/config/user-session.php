<?php if(empty($s_student)){
    session_destroy();?>
					<script>
					window.parent(location="../login/");
					</script>
<?php 
exit;
}else{
    $userquery=mysqli_query($conn,"SELECT * FROM student_registration_tab WHERE student_id='$s_student' AND status_id='A'");
    $user_fetch=mysqli_fetch_array($userquery);
        $student_id=$user_fetch['student_id'];

        $count_query=mysqli_query($conn,"SELECT count(student_id) FROM s_admission_tab WHERE student_id='$s_student'");
        $count=mysqli_fetch_array($count_query);
            $admission_count=$count['student_id'];

            $get_details=$callclass->_get_student_detail($conn, $student_id);
 			  $u_array = json_decode($get_details, true);
		
                $student_id=$u_array[0]['student_id'];
                $reg_pin=$u_array[0]['reg_pin'];
                $firstname=$u_array[0]['firstname'];
                $middlename=$u_array[0]['middlename'];
                $lastname=$u_array[0]['lastname'];
                $password=$u_array[0]['password'];
                $otp=$u_array[0]['otp'];
                $dob=$u_array[0]['dob'];
                $phonenumber=$u_array[0]['phonenumber'];
                $gender=$u_array[0]['gender'];
                $email=$u_array[0]['email'];
                $status_id=$u_array[0]['status_id'];
                $country_id=$u_array[0]['country_id'];
                $state_id=$u_array[0]['state_id'];
                $lga=$u_array[0]['lga'];
                $address=$u_array[0]['address'];
                $passport=$u_array[0]['passport'];
                $date=$u_array[0]['date'];
                $last_login=$u_array[0]['last_login'];

                $query=mysqli_query($conn,"SELECT * FROM setup_countries_tab WHERE country_id='$country_id'");
                $fectch=mysqli_fetch_array($query);
                $user_country_name=strtoupper($fectch['country_name']);

                $query=mysqli_query($conn,"SELECT * FROM setup_country_states_tab WHERE  country_id='$country_id' AND state_id='$state_id'");
                $fectch=mysqli_fetch_array($query);
                $user_state_name=strtoupper($fectch['state_name']);

                $query=mysqli_query($conn,"SELECT * FROM s_admission_tab WHERE  student_id='$s_student' ");
                $admission_count=mysqli_num_rows($query);
                
                

            }
?>

<?php if ($student_id==''){
    session_destroy();?>

					<script>
					window.parent(location="../login/");
					</script>
<?php }?>
