<?php if(empty($s_admin)){session_destroy();?>
					<script>
					window.parent(location="../../admin/");

					</script>
<?php 
exit;
}else{
	
$userquery=mysqli_query($conn,"SELECT * FROM admin_tab WHERE admin_id='$s_admin' AND status_id='ACT'");
$user_sel=mysqli_fetch_array($userquery);
	$admin_id=$user_sel['admin_id'];
 $user_array=$callclass->_get_admin_detail($conn, $admin_id);
 			  $u_array = json_decode($user_array, true);
			
			   $s_admin_id=$u_array[0]['admin_id'];
			   $s_firstname=$u_array[0]['firstname'];
			   $s_middlename=$u_array[0]['middlename'];
			   $s_lastname=$u_array[0]['lastname'];
			   $s_password=$u_array[0]['password'];
			   $s_otp=$u_array[0]['otp'];
			   $s_dob=$u_array[0]['dob'];
			   $s_phonenumber=$u_array[0]['phonenumber'];
			   $s_gender=$u_array[0]['gender'];
			   $s_email=$u_array[0]['email'];
			   $s_status_id=$u_array[0]['status_id'];
			   $s_country_id=$u_array[0]['country_id'];
			   $s_role_id=$u_array[0]['role_id'];
			   $s_state_id=$u_array[0]['state_id'];
			   $s_address=$u_array[0]['address'];
			   $s_passport=$u_array[0]['passport'];
			   $s_date=$u_array[0]['date'];
			   $s_last_login=$u_array[0]['last_login'];
	
			   

                         $query=mysqli_query($conn,"SELECT country_name FROM setup_countries_tab WHERE country_id='$s_country_id'");
                         $fectch=mysqli_fetch_array($query);
                         $adm_country_name=strtoupper($fectch['country_name']);
                     
                         
                        $query=mysqli_query($conn,"SELECT * FROM setup_country_states_tab WHERE  country_id='$s_country_id' AND state_id='$s_state_id'");
                        $fectch=mysqli_fetch_array($query);
                        $adm_state_name=strtoupper($fectch['state_name']);

                         $query= mysqli_query($conn,"SELECT role_name FROM role_tab WHERE role_id='$s_role_id'");
                         $fetch=mysqli_fetch_array($query);
						 $adm_role_name=$fetch['role_name'];

                         $query= mysqli_query($conn,"SELECT status_name FROM status_tab WHERE status_id='$s_status_id'");
                         $fetch=mysqli_fetch_array($query);
						 $adms_status_name=$fetch['status_name'];
	
					
					
						 $query=mysqli_query($conn,"SELECT * FROM alert_tab  WHERE admin_id='$s_admin_id' AND seen_status=0");
						 $alert_count=mysqli_num_rows($query);

						 
						 $array=$callclass->_get_backend_settings_detail($conn, 'BK_ID001');
						 $fetch = json_decode($array, true);
						 $bank_name=$fetch[0]['bank_name'];
						 $account_name=$fetch[0]['account_name'];
						 $account_number=$fetch[0]['account_number'];
						 $admission_form_fee=$fetch[0]['admission_form_fee'];
						 $smtp_host=$fetch[0]['smtp_host'];
						 $smtp_username=$fetch[0]['smtp_username'];
						 $smtp_password=$fetch[0]['smtp_password'];
						 $smtp_port=$fetch[0]['smtp_port'];
						 $sender_name=$fetch[0]['sender_name'];
						 $support_email=$fetch[0]['support_email'];
						 $support_phonenumber=$fetch[0]['support_phonenumber'];
						 $support_address=$fetch[0]['support_address'];
						
						
				   
}?>

<?php if(($admin_id=='')||($s_status_id=='SUSP')){session_destroy();?>
					<script>
	window.parent(location="../../admin/");
					</script>
<?php } ?>
