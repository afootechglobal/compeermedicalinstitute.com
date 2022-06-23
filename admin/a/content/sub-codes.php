







<?php if ($check_query=='student_adminssion_panel'){
 $usersquery=mysqli_query($conn,"SELECT * FROM `s_admission_tab` WHERE admission_id='$admission_id'")or die ('cannot select users_tab');
 $fetch_query=mysqli_fetch_array($usersquery);
 $admission_id=$fetch_query['admission_id'];         
 $firstname=$fetch_query['firstname'];         
 $lastname=$fetch_query['lastname'];         
 $admission_status=$fetch_query['admission_status']; 
 ////////// ADMISSION STATUS ////////////
$admitted='ADMITTED';
 $nt_admitted='NOT ADMITTED YET';
 ////////////////////////////////
  ?>
  <?php 
    if ($admission_status=="ADM"){?>
        <h4 style="color:#794512"><?php echo $admitted ?></h4>
        <p><i class="fa fa-user-circle-o"></i> <span> C.M.I</span>, does applicant <span><?php echo ucwords(strtolower("$firstname $lastname")) ?></span> (<?php echo $admission_id ?>) fill the neccessary requirements?
       if <strong>NO</strong>, cancel applicant admission. </p> 
    <button style="background:hsla(0, 100%, 40%, 0.774)" class="proceed-btn ok_btn" id="cancel" title="CANCEL STUDENT ADMISSION" onclick="_cancel_admitted_student('<?php echo $admission_id ?>')">CANCEL ADMISSION</button>

   <?php     
    } else if($admission_status=="NT") {?>
        <h4 style="color:hsla(0, 100%, 40%, 0.774);"><?php echo $nt_admitted ?></h4> 
        <p><i class="fa fa-user-circle-o"></i> <span> C.M.I</span>, are you sure that you have agree with the student <span><?php echo ucwords(strtolower("$firstname $lastname")) ?></span> <br> (<?php echo $admission_id ?>) requirements?
       if <strong>YES</strong>, admit the student. </p>
    <button class="proceed-btn ok_btn" id="admit" title="ADMIT STUDENT" onclick="_get_admitted_student('<?php echo $admission_id ?>',)">ADMIT STUDENT</button>
      
   <?php     
}
}
  ?>


<?php if ($check_query=='view_staff'){?> 
	<?php
                $search_like="(admin_id like '%$search_txt%' OR 
                firstname like '%$search_txt%' OR 
                lastname like '%$search_txt%' OR 
                phonenumber like '%$search_txt%' OR 
                email like '%$search_txt%' OR 
                status_id like '%$search_txt%' OR 
                role_id like '%$search_txt%')";

                         $s_query= mysqli_query($conn,"SELECT * FROM admin_tab WHERE role_id<2 AND status_id LIKE '%$status_id%' AND $search_like  ORDER BY firstname ASC ");
                         $no=0;
                         while($fetch_query=mysqli_fetch_array($s_query)){
							$no++;
                         $admin_id=$fetch_query['admin_id'];
                        
                         $user_array=$callclass->_get_admin_detail($conn, $admin_id);
							  $u_array = json_decode($user_array, true);

                              $admin_id=$u_array[0]['admin_id'];
                              $firstname=$u_array[0]['firstname'];
                              $lastname=$u_array[0]['lastname'];
                              $phonenumber=$u_array[0]['phonenumber'];
                              $email=$u_array[0]['email'];
                              $status_id=$u_array[0]['status_id'];
                              $role_id=$u_array[0]['role_id'];
                              $passport=$u_array[0]['passport'];
                            
                         
                         $query=mysqli_query($conn,"SELECT status_name FROM status_tab WHERE status_id='$status_id' ");
                          $fetch=mysqli_fetch_array($query);
                         $status_name=strtoupper($fetch['status_name']);
                      
                        ?>
						<div class="view-pro-div" onclick="_staff_profile('staff_profile','<?php echo $admin_id?>');" title="VIEW STAFF">
						<div class="view-pro-in">
						<div class="img-div">
                            <?php if ($passport!=''){?>
                            <img src="uploaded_files/staff_pix/<?php echo $passport ?>" alt="picture"/>
                            <?php } else {?>
                                <img src="../../image/user.png" id="passport-3"/>
                            <?php } ?>
						</div>
                        <div class="info-div"> 
                            <div class="name-div"><?php echo strtoupper($firstname) ?> <?php echo strtoupper($lastname) ?></div>
                            <hr>
                            <span>ID:  <?php echo $admin_id ?></span> <br>
                            <span><i class="fa fa-phone"></i> <?php echo $phonenumber ?></span> 
                            <p class="status"><?php echo $status_name ?></p>
                         </div>

						</div>
						</div>


					

<?php 
} 
?>
	<?php if($no==0){?>				
		<div class="no-record-div">
		<h4>NO RECORD FOUND!</h4>
		<button onClick="_get_slide_panel('register_staff')" class="create-btn" title="Create A New Admin"><i class="fa fa-plus"></i> Create A New Admin</button>
		</div>
<?php
}
}
?>







<?php if ($check_query=='view_staff_profile'){?> 
	<?php
   

                         $adm_query= mysqli_query($conn,"SELECT * FROM admin_tab WHERE admin_id='$adm_staff'");
                         $admin_list=mysqli_fetch_array($adm_query);
                         $admin_id=$admin_list['admin_id'];

                         $firstname=$admin_list['firstname'];
                         $middlename=$admin_list['middlename'];
                         $lastname=$admin_list['lastname'];
                         $email=$admin_list['email'];
                         $gender=$admin_list['gender'];
                         $dob=$admin_list['dob'];
                         $phonenumber=$admin_list['phonenumber'];
                         $country_id=$admin_list['country_id'];
                         $state_id=$admin_list['state_id'];
                         $address=$admin_list['address'];
                         $passport=$admin_list['passport'];
                         $religious=$admin_list['religious'];
                         $role_id=$admin_list['role_id'];
                         $status_id=$admin_list['status_id'];
                        

					

                         $query=mysqli_query($conn,"SELECT country_name FROM setup_countries_tab WHERE country_id='$country_id'");
                         $fectch=mysqli_fetch_array($query);
                         $adm_country_name=strtoupper($fectch['country_name']);
                     
                         
                        $query=mysqli_query($conn,"SELECT * FROM setup_country_states_tab WHERE  country_id='$country_id' AND state_id='$state_id'");
                        $fectch=mysqli_fetch_array($query);
                        $adm_state_name=strtoupper($fectch['state_name']);

                         $query= mysqli_query($conn,"SELECT role_name FROM role_tab WHERE role_id='$role_id'");
                         $fetch=mysqli_fetch_array($query);
						 $adm_role_name=$fetch['role_name'];

                         $query= mysqli_query($conn,"SELECT status_name FROM status_tab WHERE status_id='$status_id'");
                         $fetch=mysqli_fetch_array($query);
						 $adms_status_name=$fetch['status_name'];
                        ?>

				<div class="profile-pix-div">		
                            <fieldset class="pix_fieldset">
                                    <legend style="text-align:left;font-weight: bold;">UPLOAD PICTURE <I class="fa fa-arrow-down" style="font-size:12pz;color:hsla(0, 100%, 40%, 0.774);"></I></legend>
                                            <div class="profile-img-div">  
                                                <?php if ($passport!=''){?>
                                                <img src="../a/uploaded_files/staff_pix/<?php echo $passport; ?>" id="passport-6"/>
                                                <?php } else { ?>
                                                <img src="../../image/user.png" id="passport-6"/>
                                                <?php } ?>
                                            </div>        	  
								</fieldset>
					</div>

				
                    <fieldset class="info_field">
									   <legend style="text-align:left;font-weight: bold;">PERSON INFORMATION</legend>
										<div class="individual-input">
										<div class="title">ADMIN ID: <span>*</span></div>
											<input type="text" class="text_field" value="<?php echo  strtoupper($admin_id) ?>"   required="" readonly=""/>
										</div>
									  
                                        <div class="individual-input">
										<div class="title">FIRST NAME: <span>*</span></div>
											<input type="text" class="text_field" value="<?php echo  strtoupper($firstname) ?>" placeholder="FIRST NAME" name="firstname" id="firstname"  required/>
										</div>
									  
										<div class="individual-input">
										<div class="title">MIDDLE NAME:</div>
											<input type="text"  class="text_field" value="<?php echo  strtoupper($middlename) ?>" placeholder="MIDDLE NAME" name="middlename" id="middlename" required/>
										</div>
				

										<div class="individual-input">
										<div class="title">LAST NAME: <span>*</span></div>
											<input type="text"  class="text_field" value="<?php echo  strtoupper($lastname) ?>" placeholder="LAST NAME" name="lastname" id="lastname" required/>
										</div>
				
										<div class="individual-input">
										<div class="title">EMAIL ADDRESS: <span>*</span></div>
											<input type="email"  class="text_field"  value="<?php echo $email ?>" placeholder="EMAIL ADDRESS" name="email" id="email"  required/>
										</div>
				
										<div class="individual-input">
										<div class="title">PHONE NUMBER: <span>*</span></div>
											<input type="text"  class="text_field" value="<?php echo $phonenumber ?>" placeholder="PHONE NUMBER" name="phonenumber" id="phonenumber"  required/>
										</div>
				
	
                                        <div class="individual-input">
                                        <div class="title">ADDRESS: <span>*</span></div>
                                        <input type="text" value="<?php echo strtoupper($address)?>" class="text_field" placeholder="ADDRESS" name="address" id="address"  />
                                        </div>
				

										<div class="individual-input">
									 <div class="title">SELECT GENDER: <span>*</span></div>
									<select name="gender" id="gender" class="text_field select_field" >
									<option value=''selected>SELECT GENDER</option> 
									<?php if ($gender =='MALE'){ ?>
										<option value="<?php echo strtoupper($gender) ?>"selected><?php echo strtoupper($gender)?></option>
										<option value="FEMALE">FEMALE</option> 
										<?php } elseif ($gender =='FEMALE') { ?>
											<option value="<?php echo strtoupper($gender) ?>"selected><?php echo strtoupper($gender)?></option>
											<option value="MALE">MALE</option> 
									<?php } else { 
										if ($gender=='') { ?>
											<option value="MALE">MALE</option> 
											<option value="FEMALE">FEMALE</option>
									<?php }	} ?>			
                                </select>
									</div>
				
										<div class="individual-input">
										<div class="title">DATE OF BIRTH: <span>*</span></div>
											<input type="date" class="text_field" value="<?php echo $dob ?>" name="dob" id="dob" required/>
										</div>
				
									
                                        <div class="individual-input">
                                            <div class="title">SELECT COUNTRY: <span>*</span></div>
                                                <select id="country_id" class="text_field select_field" title="Country" onchange="_get_states()">
                                                <?php if($country_id==''){?>
                                                    <option value="" selected="selected">SELECT COUNTRY</option>
                                                <?php  } else { ?>
                                                    <option onclick="_get_states()" value="<?php echo $country_id?>" selected="selected"><?php echo $adm_country_name?></option>
                                                <?php }
                                          
                                                $query=mysqli_query($conn,"SELECT * FROM setup_countries_tab ORDER BY country_name ASC");
                                                while($fetch=mysqli_fetch_array($query)){
                                                $country_id=$fetch['country_id'];
                                                $country_name=strtoupper($fetch['country_name']);
                                                ?>
                                                <option value="<?php echo $country_id?>"><?php echo $country_name?></option>

                                                <?php } ?>
                                                </select>

                                            </div>

                                        <div class="individual-input">
                                            <div class="title">SELECT STATE: <span>*</span></div>
                                            <select id="state_id" class="text_field select_field" title="Province/State" >
                                            <?php if($state_id==''){?>
                                                <option value="" selected="selected">SELECT COUNTRY FIRST</option>
                                            <?php  } else { ?>
                                                <option value="<?php echo $state_id?>" selected="selected"><?php echo $adm_state_name?></option>
                                            <?php } ?>
                                                
                                                
                                                </select>
                                            </div>
                                                 <?php if ($s_role_id>1){?>       
                                        <div class="individual-input">
                                         <div class="title" >SELECT ROLE: <span>*</span></div>
                                            <select id="role_id" required class="text_field select_field"  title="SELECT ROLE">
                                                    <option  value="<?php echo $role_id?>" selected="selected"><?php echo $adm_role_name?></option>
                                            </select>
                                        </div>


                                        <div class="individual-input">
                                        <div class="title">STATUS: <span>*</span></div>
                                            <select id="status_id" required class="text_field select_field" title="SELECT STATUS">
                                            <?php if($status_id==''){?>
                                                <?php  } else { ?>
                                                    <option value="<?php echo $status_id?>"><?php echo $adms_status_name?></option>
                                                <?php }
                                        
                                                $query=mysqli_query($conn,"SELECT * FROM status_tab ORDER BY status_name ASC");
                                                while($fetch=mysqli_fetch_array($query)){
                                                $status_id=$fetch['status_id'];
                                                $status_name=strtoupper($fetch['status_name']);
                                                ?>
                                                <option value="<?php echo $status_id?>"><?php echo $status_name?></option>
                                                <?php	
                                                }
                                                ?>
                                            </select>
                                        </div>
										
				
									   <?php } ?>
									   
							</fieldset>
				<br clear="all">
				
	            <button class="submit-btn" id="update_btn" onClick="_update_profile('<?php echo $admin_id ?>');" title="UPDATE PROFILE" type="button"><i class="fa fa-check"></i> UPDATE</button>
				
				

</div>				

				
<?php
}

?>



















<?php if ($check_query=='registered_student_list'){?> 
                        <?php
                       
                           
                      
                        $query= mysqli_query($conn,"SELECT * FROM student_registration_tab WHERE student_id like '%$search_txt%' OR firstname like '%$search_txt%' OR 
                         lastname like '%$search_txt%' OR   phonenumber like '%$search_txt%' OR email like '%$search_txt%'   ORDER BY firstname ASC ");
                           $no=0;
                         while($fetch_query=mysqli_fetch_array($query)){
							$no++;
                         $student_id=$fetch_query['student_id'];
                        
                         $user_array=$callclass->_get_student_detail($conn, $student_id);
							  $u_array = json_decode($user_array, true);

                              $student_id=$u_array[0]['student_id'];
                              $firstname=$u_array[0]['firstname'];
                              $lastname=$u_array[0]['lastname'];
                              $phonenumber=$u_array[0]['phonenumber'];
                              $email=$u_array[0]['email'];
                              $passport=$u_array[0]['passport'];
                       
                       
                       
                       ?>

						<div class="view-pro-div" onclick="_registered_student_profile('registered_student_profile','<?php echo $student_id?>');" title="VIEW STAFF">
						<div class="view-pro-in">
						<div class="img-div">
                        <?php if ($passport!=''){?>
						<img src="uploaded_files/student_pix/<?php echo $passport ?>" alt="picture"/>
                        <?php } else{?>
                            <img src="../../image/user.png" id="passport-6" alt="picture"/>
                       <?php } ?>
                        </div>
                        <div class="info-div"> 
                            <div class="name-div"><?php echo strtoupper($firstname) ?> <?php echo strtoupper($lastname) ?></div>
                            <hr>
                            <span>ID:  <?php echo $student_id ?></span> <br>
                            <span> <?php echo $email ?></span> <br>
                            <span><?php echo $phonenumber ?></span> 
                        </div>

						</div>
						</div>

				
<?php 
} 
?>
	<?php if($no==0){?>				
		<div class="no-record-div">
		<h4>NO RECORD FOUND!</h4>
		</div>
<?php
}
}
?>













<?php if ($check_query=='view_registered_student'){?> 
	<?php

                        $userquery=mysqli_query($conn,"SELECT * FROM student_registration_tab WHERE student_id='$student_id' ");
                            $user_fetch=mysqli_fetch_array($userquery);
                           $student_id=$user_fetch['student_id'];
                           $firstname=$user_fetch['firstname'];
                           $lastname=$user_fetch['lastname'];
                           $phonenumber=$user_fetch['phonenumber'];
                           $gender=$user_fetch['gender'];
                           $email=$user_fetch['email'];
                           $dob=$user_fetch['dob'];
                           $country_id=$user_fetch['country_id'];
                           $state_id=$user_fetch['state_id'];
                           $address=$user_fetch['address'];
                           $lga=$user_fetch['lga'];
                           $passport=$user_fetch['passport'];
                           
                           $query=mysqli_query($conn,"SELECT * FROM setup_countries_tab WHERE country_id='$country_id'");
                           $fectch=mysqli_fetch_array($query);
                           $user_country_name=strtoupper($fectch['country_name']);
           
                           $query=mysqli_query($conn,"SELECT * FROM setup_country_states_tab WHERE  country_id='$country_id' AND state_id='$state_id'");
                           $fectch=mysqli_fetch_array($query);
                           $user_state_name=strtoupper($fectch['state_name']);
                         ?>

                    <div class="profile-pix-div">

                            <fieldset class="pix_fieldset">
                                <legend style="text-align:left;font-weight: bold;">UPLOAD PICTURE <I class="fa fa-arrow-down" style="font-size:12pz;color:hsla(0, 100%, 40%, 0.774);"></I></legend>
                                <div class="profile-img-div">  
                                <?php if ($passport!=''){?>
                                <img src="uploaded_files/student_pix/<?php echo $passport ?>" alt="picture"/>
                                <?php } else{?>
                                <img src="../../image/user.png" id="passport-6" alt="picture"/>
                                <?php } ?>
                                </div>
                            </fieldset>
                    </div>
                    
					
                    <fieldset class="info_field">
                    <legend style="text-align:left;font-weight: bold;">STUDENT INFORMATION</legend>
                        <div class="individual-input">
                        <div class="title">STUDENT ID: </div>
                            <input type="text" class="text_field" value="<?php echo $student_id ?>" required="" readonly=""/>
                        </div>

                        <div class="individual-input">
                        <div class="title">FIRST NAME: <span>*</span></div>
                            <input type="text" class="text_field" value="<?php echo strtoupper($firstname) ?>" placeholder="ENTER YOUR FIRST NAME" name="firstname" id="firstname"  required/>
                        </div>
                      
                        <div class="individual-input">
                        <div class="title">MIDDLE NAME: </div>
                            <input type="text"  class="text_field"  value="<?php echo strtoupper($middlename) ?>" placeholder="ENTER YOUR MIDDLE NAME" name="middlename" id="middlename"  required/>
                        </div> 
                        
                        <div class="individual-input">
                        <div class="title">LAST NAME: <span>*</span></div>
                            <input type="text"  class="text_field"  value="<?php echo strtoupper($lastname) ?>" placeholder="ENTER YOUR LAST NAME" name="lastname" id="lastname"  required/>
                        </div>

                        <div class="individual-input">
                        <div class="title">EMAIL ADDRESS: <span>*</span></div>
                            <input type="email"  class="text_field" value="<?php echo $email ?>" placeholder="ENTER YOUR EMAIL ADDRESS" name="email" id="email"  required/>
                        </div>

                        <div class="individual-input">
                        <div class="title">PHONE NUMBER: <span>*</span></div>
                            <input type="email" onkeypress="isNumber_Check()"  class="text_field" value="<?php echo $phonenumber ?>" placeholder="ENTER YOUR PHONE NUMBER" name="phonenumber" id="phonenumber"  required/>
                        </div>

                        <div class="individual-input">
									 <div class="title">GENDER: <span>*</span></div>
							<select name="gender" id="gender" class="text_field select_field" >
									<option value=''selected>SELECT GENDER</option> 
									<?php if ($gender =='MALE'){ ?>
										<option value="<?php echo strtoupper($gender) ?>"selected><?php echo strtoupper($gender)?></option>
										<option value="FEMALE">FEMALE</option> 
										<?php } elseif ($gender =='FEMALE') { ?>
											<option value="<?php echo strtoupper($gender) ?>"selected><?php echo strtoupper($gender)?></option>
											<option value="MALE">MALE</option> 
									<?php } else { 
										if ($gender=='') { ?>
											<option value="MALE">MALE</option> 
											<option value="FEMALE">FEMALE</option>
									<?php }	} ?>
							</select>
						</div>

                        <div class="individual-input">
                        <div class="title">DATE OF BIRTH: <span>*</span></div>
                            <input type="date" class="text_field" value="<?php echo $dob ?>" name="dob" id="dob" required/>
                        </div>

                        <div class="individual-input">
                        <div class="title">SELECT COUNTRY: <span>*</span></div>
                            <select id="country_id" class="text_field select_field" title="Country"  onchange="_get_states()">
                            <?php if($country_id==''){?>
                                <option value="" selected="selected">SELECT COUNTRY</option>
                            <?php  } else { ?>
                                <option onclick="_get_states()" value="<?php echo $country_id?>" selected="selected"><?php echo $user_country_name?></option>
                             <?php } ?>  
                        <?php
                         
                            $query=mysqli_query($conn,"SELECT * FROM setup_countries_tab ORDER BY country_name ASC");
                            while($fetch=mysqli_fetch_array($query)){
                            $country_id=$fetch['country_id'];
                            $country_name=strtoupper($fetch['country_name']);
                            ?>
                            <option   value="<?php echo $country_id?>"><?php echo $country_name?></option>

                            <?php	
                            }
                                                   
                            ?>
                            </select>
                        </div>
     
                    <div class="individual-input">
                    <div class="title">STATE: <span>*</span></div>
                    <select id="state_id" class="text_field select_field" title="Province/State" >
                    <?php if($state_id==''){?>
                        <option value="" selected="selected">SELECT COUNTRY FIRST</option>
                    <?php  } else { ?>
                          <option value="<?php echo $state_id?>" selected="selected"><?php echo $user_state_name?></option>
                    <?php } ?>
                        
                           
                        </select>
                    </div>

                    <div class="individual-input">
                    <div class="title">HOME ADDRESS: <span>*</span></div>
                    <input type="text" class="text_field" value="<?php echo strtoupper($address) ?>" placeholder="ENTER YOUR HOME ADDRESS" name="address" id="address"  />
                    </div>


                    <div class="individual-input">
                    <div class="title">LOCAL GOVT: </div>
                    <input type="text" class="text_field" value="<?php echo strtoupper($lga) ?>" placeholder="ENTER YOUR LOCAL GOVT" name="lga" id="lga"  />
                    </div>

            </fieldset>
<br clear="all">



        </div>



<?php } ?>



































<?php
if ($check_query=='get_sub_student_info'){?>

 <div class="div-in-list">
 <tbody>
    <div class="table-div">
    <table  cellspacing="0">
            <tr class="tuple">
            <th>S/N</th>
            <th>AGENT/USER ID</th>
            <th>STUDENT ID</th>
            <th class="hidden">STUDENT NAME</th>
            <th class="hidden">EMAIL</th>
            <th>PHONE NUMBER</th>
            <th>PROGRAM</th>
            <th>PROFILE STATUS</th>
            <th>ACTION</th>
            <th>ADMISSION STATUS</th>
            </tr>
<?php
  $search_like="(student_id like '%$search_txt%' OR 
  admission_id like '%$search_txt%' OR 
  firstname like '%$search_txt%' OR 
  lastname like '%$search_txt%' OR 
  profile_status_id like '%$search_txt%' OR 
  email like '%$search_txt%')";
    $no=0;

   $usersquery=mysqli_query($conn,"SELECT * FROM `s_admission_tab` WHERE profile_status_id LIKE '%$status_id%' AND $search_like  ORDER BY firstname ASC  ")or die ('cannot select s_admission_tab');
    while($fetch_query=mysqli_fetch_array($usersquery)){
  $no++;
  $student_id=$fetch_query['student_id'];
  $admission_id=$fetch_query['admission_id'];
  $admission_status=$fetch_query['admission_status'];
  $firstname=$fetch_query['firstname'];
  $lastname=$fetch_query['lastname'];
  $email=$fetch_query['email'];
  $phonenumber=$fetch_query['phonenumber'];
  $result=$fectch['ssce_result'];
  $program_id=$fetch_query['program_id'];

  $essay=$fetch_query['essay'];
  $hnd_or_degree_result=$fetch_query['hnd_or_degree_result'];
  $letter_one=$fetch_query['letter_one'];
  $letter_two=$fetch_query['letter_two'];

  

  $query = mysqli_query($conn, "SELECT * FROM `program_tab` WHERE program_id='$program_id' ");
  $fectch=mysqli_fetch_array($query);
  $program_name=$fectch['program_name'];



  $query = mysqli_query($conn, "SELECT profile_status_id FROM `s_admission_tab` WHERE admission_id='$admission_id'  ");
  $fectch=mysqli_fetch_array($query);
  $profile_status_id=$fectch['profile_status_id'];


  $query = mysqli_query($conn, "SELECT profile_status_name FROM `s_profile_status_tab` WHERE profile_status_id='NTC'" );
  $fectch=mysqli_fetch_array($query);
  $not_completed=$fectch['profile_status_name'];

  $query = mysqli_query($conn, "SELECT profile_status_name FROM `s_profile_status_tab` WHERE profile_status_id='COM'");
  $fectch=mysqli_fetch_array($query);
  $completed=$fectch['profile_status_name'];



   ?>

                
              <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $student_id ?></td>
                        <td><?php echo $admission_id ?></td>
                        <td class="hidden"><?php echo ucwords(strtolower("$firstname $lastname")) ?></td>
                        <td class="hidden"><?php echo $email ?></td>
                        <td><?php echo $phonenumber ?></td>
                        <td><?php echo ucwords(strtoupper("$program_name "))?></td>


                        <?php if ($profile_status_id=='COM'){?>
                            <td style="color:green;"><?php echo ucwords(strtolower(" $completed")) ?></td>
                        <td><button type="button" title="VIEW STUDENT PROFILE"  onclick="view_student_details('student_adms_profile','<?php echo $admission_id ?>')"><i class="fa fa-eye"></i> View Profile</button></td>
                        
                        <?php  } else { ?>
                            
                        <td style="color:red;"><?php echo ucwords(strtolower("$not_completed")) ?></td>
                        <td><button type="button" class="c_btn" title="VIEW STUDENT PROFILE"  onclick="view_student_details('student_adms_profile','<?php echo $admission_id ?>')"><i class="fa fa-check"></i> View Profile</button></td>

                        <?php } ?>

                        <?php if($admission_status=='ADM'){?>
                        <td><button type="button" title="VIEW STUDENT ADMISSION STATUS"  onclick="_get_admitted_status('admitted_status','<?php echo $admission_id ?>')"><i class="fa fa-check"></i> Admitted</button></td>
                        <?php
                        } else { ?>
                        <td><button type="button" class="c_btn" title="ADMIT STUDENT"  onclick="_get_admitted_status('admitted_status','<?php echo $admission_id ?>')"><i class="fa fa-graduation-cap"></i> Admit Student</button></td>
                        <?php } ?>
                                     
               </tr>
                     

<?php } ?>  
     

        </table>
        <?php if($no==0){?>				
		<div class="no-record-div">
		<h4 >NO RECORD FOUND!</h4>
		</div>
<?php
}
?>   
 </div>
 </div>
 



 <?php } ?>








<?php 
if ($check_query=='view_student_adms_profile'){

 
    $usersquery=mysqli_query($conn,"SELECT * FROM `s_admission_tab` WHERE admission_id='$admission_id'")or die ('cannot select users_tab');
    $fetch_query=mysqli_fetch_array($usersquery);
  
           $passport=$fetch_query['passport'];
          $admission_id=$fetch_query['admission_id'];
          $firstname=$fetch_query['firstname'];
          $middlename=$fetch_query['middlename'];
          $lastname=$fetch_query['lastname'];
          $gender=$fetch_query['gender'];
          $dob=$fetch_query['dob'];
          $email=$fetch_query['email'];
          $phonenumber=$fetch_query['phonenumber'];
          $address=$fetch_query['address'];
          $country_id=$fetch_query['country_id'];
          $state_id=$fetch_query['state_id'];
          $sat_or_act=$fetch_query['sat_or_act_score']; ////////
          $lga=$fetch_query['lga'];
  
          $school_name=$fetch_query['school_name'];
          $school_country_id=$fetch_query['school_country_id'];
          $program_id=$fetch_query['program_id'];
          $hnd_or_degree_result=$fetch_query['hnd_or_degree_result'];
          $transfer_department_name=$fetch_query['transfer_department_name'];
          $transfer_student_id=$fetch_query['transfer_student_id'];
          $transfer_level=$fetch_query['transfer_level'];
          $result=$fetch_query['ssce_result'];
          $essay=$fetch_query['essay'];
          $letter_one=$fetch_query['letter_one'];
          $letter_two=$fetch_query['letter_two'];
  
      
      $query=mysqli_query($conn,"SELECT country_name FROM setup_countries_tab WHERE country_id='$country_id'");
      $fectch=mysqli_fetch_array($query);
      $s_adms_country_name=strtoupper($fectch['country_name']);
  
      
      $query=mysqli_query($conn,"SELECT country_name FROM setup_countries_tab WHERE country_id='$school_country_id'");
      $fectch=mysqli_fetch_array($query);
      $adms_school_country_name=strtoupper($fectch['country_name']);
     
  
    
      $query=mysqli_query($conn,"SELECT * FROM setup_country_states_tab WHERE  country_id='$country_id' AND state_id='$state_id'");
      $fectch=mysqli_fetch_array($query);
      $s_adms_state_id=strtoupper($fectch['state_id']);
      $s_adms_state_name=strtoupper($fectch['state_name']);
  
      $query=mysqli_query($conn,"SELECT program_name FROM program_tab WHERE program_id='$program_id'");
      $fectch=mysqli_fetch_array($query);
      $s_adms_program_name=strtoupper($fectch['program_name']);
  
      $query=mysqli_query($conn,"SELECT program_name FROM program_tab WHERE program_id='$program_id'");
      $fectch=mysqli_fetch_array($query);
      $s_adms_program_name=strtoupper($fectch['program_name']);
  
      
?>
  
       
  <fieldset class="profile_field" style="">
                            <legend>UPLOAD PICTURE <I class="fa fa-arrow-down" style="font-size:12pz;color:hsla(0, 100%, 40%, 0.774);"></I></legend>
                                
                        
                            <div class="profile-img-div">  
                                    <label>   
                                    <?php if ($passport!=''){?>
                                            <img src="../../student-portal/uploaded_files/admission_student_pix/<?php echo $passport ?>" id="student_adms_passport" alt="picture">
                                            <?php } else { ?>

                                                <img src="../../image/user.png" id="student_adms_passport" alt="image"/>

                                            <?php } ?>
                                            
                                    <input type="file" id="student_adms_pix"  style="display:none"   accept=".jpg,.png" onchange="update_student_adms_profile_pix.UpdatePreview(this);"/>

                                
                                    </label>
                                </div>
                                </div>
                                
            </fieldset>

  <div class="div-pro" id="information" >

  <fieldset>
           <legend>BASIC INFORMATION</legend>
                  <div class="individual-input">
                  <div class="title">ADMISSION ID: </div>
                      <input type="text" class="text_field" value="<?php echo $admission_id ?>" required="" readonly=""/>
                  </div>

                  <div class="individual-input">
                  <div class="title"> PROGRAM: <span>*</span></div>
                      <input type="text" class="text_field" value="<?php echo strtoupper($s_adms_program_name) ?>"  name="year_program" id="year_program"  required="" readonly=""/>
                  </div>

                  <div class="individual-input">
                  <div class="title">FIRST NAME: <span>*</span></div>
                      <input type="text" class="text_field" value="<?php echo strtoupper($firstname) ?>" placeholder="ENTER YOUR FIRST NAME" name="firstname" id="firstname"  required/>
                  </div>
                
                  <div class="individual-input">
                  <div class="title">MIDDLE NAME: </div>
                      <input type="text"  class="text_field"  value="<?php echo strtoupper($middlename) ?>" placeholder="ENTER YOUR MIDDLE NAME" name="middlename" id="middlename"  required/>
                  </div>
                  
                  <div class="individual-input">
                  <div class="title">LAST NAME: <span>*</span></div>
                      <input type="text"  class="text_field"  value="<?php echo strtoupper($lastname) ?>" placeholder="ENTER YOUR LAST NAME" name="lastname" id="lastname"  required/>
                  </div>

               
                  <div class="individual-input">
                               <div class="title">GENDER: <span>*</span></div>
                      <select name="gender" id="gender" class="text_field" style="width:100%">
                              <option value=''selected>SELECT GENDER</option> 
                              <?php if ($gender =='MALE'){ ?>
                                  <option value="<?php echo strtoupper($gender) ?>"selected><?php echo strtoupper($gender)?></option>
                                  <option value="FEMALE">FEMALE</option> 
                                  <?php } elseif ($gender =='FEMALE') { ?>
                                      <option value="<?php echo strtoupper($gender) ?>"selected><?php echo strtoupper($gender)?></option>
                                      <option value="MALE">MALE</option> 
                              <?php } else { 
                                  if ($gender=='') { ?>
                                      <option value="MALE">MALE</option> 
                                      <option value="FEMALE">FEMALE</option>
                              
                          
                              <?php }	} ?>
                      </select>
                  </div>




        </fieldset>

            <fieldset>
                <legend>CONTACT INFORMATION</legend>
                  <div class="individual-input">
                  <div class="title">EMAIL ADDRESS: <span>*</span></div>
                      <input type="email"  class="text_field" value="<?php echo $email ?>" placeholder="ENTER YOUR EMAIL ADDRESS" name="email" id="email"  required/>
                  </div>

                  <div class="individual-input">
                  <div class="title">PHONE NUMBER: <span>*</span></div>
                      <input type="email"  class="text_field" value="<?php echo $phonenumber ?>" placeholder="ENTER YOUR PHONE NUMBER" name="phonenumber" id="phonenumber"  required/>
                  </div>

                  <div class="individual-input">
              <div class="title">HOME ADDRESS: <span>*</span></div>
              <input type="text" class="text_field" value="<?php echo strtoupper($address) ?>" placeholder="ENTER YOUR HOME ADDRESS" name="address" id="address"  />
              </div>
        </fieldset>
      
            <fieldset>
                <legend>OTHER'S INFORMATION</legend>
                           
                  <div class="individual-input">
                  <div class="title">DATE OF BIRTH: <span>*</span></div>
                      <input type="date" class="text_field" value="<?php echo $dob ?>" name="dob" id="dob" required/>
                  </div>
               
                  <div class="individual-input">
                  <div class="title">SELECT COUNTRY: <span>*</span></div>
                  <select id="country_id" class="text_field selectinput" title="Country" style="width:100%" onchange="_get_states()">
                            <?php if($country_id==''){?>
                                <option value="" selected="selected">SELECT YOUR COUNTRY</option>
                            <?php  } else { ?>
                                <option onclick="_get_states()" value="<?php echo $country_id?>" selected="selected"><?php echo $s_adms_country_name?></option>
                             <?php } ?>  
                        <?php
                         
                            $query=mysqli_query($conn,"SELECT * FROM setup_countries_tab ORDER BY country_name ASC");
                            while($fetch=mysqli_fetch_array($query)){
                            $country_id=$fetch['country_id'];
                            $country_name=strtoupper($fetch['country_name']);
                            ?>
                            <option  value="<?php echo $country_id?>"><?php echo $country_name?></option>

                            <?php	
                            }
                                                   
                            ?>
                            </select> 
                          
                          </div>

                

                      <div class="individual-input">
                      <div class="title">SELECT STATE: <span>*</span></div>
                            <select id="state_id" class="text_field selectinput" title="Province/State" style="background:#fff;width:99.5%">
                                  <?php if($state_id==''){?>
                                      <option value="" selected="selected">SELECT COUNTRY FIRST</option>
                                  <?php  } else { ?>
                                          <option value="<?php echo $state_id?>" selected="selected"><?php echo $s_adms_state_name?></option>
                                   <?php } ?>
                          </select>
                      </div>

                      <?php if ($program_id=='PRO_4'){?>
                      <div class="individual-input school-div">
                      <div class="title">NAME OF YOUR INSTITUTION: <span>*</span></div>
                      <input type="text" placeholder="ENTER NAME OF YOUR INSTITUTION" title="ENTER NAME OF YOUR INSTITUTION" class="text_field school_text" value="<?php echo $school_name ?>"  name="schoolname" id="schoolname"  required/>
                      </div>


                      <div class="individual-input">
                  <div class="title">SELECT YOUR INSTITUTION COUNTRY: <span>*</span></div>
                  <select id="school_country_id" class="text_field selectinput" title="Country" style="width:100%" >
                            <?php if($school_country_id==''){?>
                                <option value="" selected="selected">SELECT YOUR SCHOOL COUNTRY</option>
                            <?php  } else { ?>
                                <option value="<?php echo $school_country_id?>" selected="selected"><?php echo $adms_school_country_name?></option>
                             <?php } ?>  
                        <?php
                   
                            $query=mysqli_query($conn,"SELECT * FROM setup_countries_tab ORDER BY country_name ASC");
                            while($fetch=mysqli_fetch_array($query)){
                            $country_id=$fetch['country_id'];
                            $country_name=strtoupper($fetch['country_name']);
                            ?>
                            <option value="<?php echo $country_id?>"><?php echo $country_name?></option>

                            <?php	
                            }
                                 
                            ?>
                            </select> 
                        </div>
                       
                    <?php } ?>
                  
                      <?php if ($program_id=='TRANS'){?>

                        <div class="individual-input school-div">
                      <div class="title">NAME OF YOUR INSTITUTION: <span>*</span></div>
                      <input type="text" placeholder="ENTER NAME OF YOUR INSTITUTION" title="ENTER NAME OF YOUR INSTITUTION" class="text_field school_text" value="<?php echo $school_name ?>"  name="schoolname" id="schoolname"  required/>
                      </div>

                      <div class="individual-input ">
                      <div class="title">NAME OF YOUR DEPARTMENT: <span>*</span></div>
                      <input type="text" placeholder="ENTER NAME OF YOUR DEPARTMENT" title="ENTER NAME OF YOUR DEPARTMENT" class="text_field school_text" value="<?php echo $transfer_department_name ?>"  name="transfer_department_name" id="transfer_department_name"  required/>
                      </div>
                      <div class="individual-input ">
                      <div class="title">LEVEL: <span>*</span></div>
                      <input type="text" placeholder="ENTER YOUR LEVEL" title="ENTER YOUR LEVEL" class="text_field school_text" value="<?php echo $transfer_level ?>" id="transfer_level"  required/>
                      </div> 

                      <div class="individual-input ">
                      <div class="title">STUDENT ID: <span>*</span></div>
                      <input type="text" placeholder="ENTER YOUR STUDENT ID" title="ENTER YOUR STUDENT ID" class="text_field school_text" value="<?php echo $transfer_student_id ?>"  name="transfer_student_id" id="transfer_student_id"  required/>
                      </div>



                      <div class="individual-input">
                  <div class="title">SELECT YOUR INSTITUTION COUNTRY: <span>*</span></div>
                  <select id="school_country_id" class="text_field selectinput" title="Country" style="width:100%" >
                            <?php if($school_country_id==''){?>
                                <option value="" selected="selected">SELECT YOUR SCHOOL COUNTRY</option>
                            <?php  } else { ?>
                                <option value="<?php echo $school_country_id?>" selected="selected"><?php echo $adms_school_country_name?></option>
                             <?php } ?>  
                        <?php
                   
                            $query=mysqli_query($conn,"SELECT * FROM setup_countries_tab ORDER BY country_name ASC");
                            while($fetch=mysqli_fetch_array($query)){
                            $country_id=$fetch['country_id'];
                            $country_name=strtoupper($fetch['country_name']);
                            ?>
                            <option value="<?php echo $country_id?>"><?php echo $country_name?></option>

                            <?php	
                            }
                                 
                            ?>
                            </select> 
                        </div>
                       


                      <?php } ?>
                
                  

                  <div class="individual-input">
                  <div class="title">SAT OR ACT SCORE:</div>
                      <input type="text" class="text_field" value="<?php echo $sat_or_act ?>"  name="sat_or_act" id="sat_or_act"  required/>
                  </div>

           

              <div class="individual-input">
              <div class="title">LOCAL GOVT: </div>
              <input type="text" class="text_field" value="<?php echo strtoupper($lga) ?>" placeholder="ENTER YOUR LOCAL GOVT" name="lga" id="lga"  />
              </div>


              
      </fieldset>
<br clear="all">

          <button class="next-btn" title="NEXT PROFILE" type="button" id="next_btn" onclick="_next('document')"> NEXT <i class="fa fa-arrow-right"></i></button>


  </div>







  <div class="div-pro" id="document">
  <fieldset>
    <legend>DOCUMENTS INFORMATION</legend>

                <fieldset class="field">

                 <legend>UPLOAD SSCE RESULT (<span style="color:hsla(0, 100%, 40%, 0.774)">accept: .png , .jpg</span>)</legend>
                   <label>    
                        <div class="result-div" title="CLICK HERE TO UPLOAD YOUR RESULT">
                            <div class="result-div-in">  
                                <?php if ($result!=''){?>
                                <img  src="../../student-portal/uploaded_files/document/<?php echo $result ?>"  id="result" name="result"/>     
                                <?php } else { ?>
                                <img src="../../image/result.png" id="result" alt="Scan Result" />
                                <?php } ?> 
                                <p>click here to re-upload</p>
                           </div>
                          <input type="file" id="ssce_result" style="display:none"  name="ssce_result"  accept=".jpg,.JPG,.jpeg,.JPEG,.png,.PNG" onchange="scan_result.UpdatePreview(this);"/>
                        
                        </div>
                   </label>
                   

                                   </fieldset>

    
                <?php if ($program_id=='PRO_4') {?>
                      <fieldset class="field">
                          <legend>UPLOAD HND/DEGREE RESULT (<span style="color:hsla(0, 100%, 40%, 0.774)">accept: .png , .jpg</span>)</legend>
                          <label>    
                                <div class="result-div" title="CLICK HERE TO UPLOAD YOUR HND/DEGREE RESULT">
                            
                                    <div class="result-div-in">
                                    
                                          
                                    <?php if ($hnd_or_degree_result!=''){?>
                                            <img  src="../../student-portal/uploaded_files/document/<?php echo $hnd_or_degree_result ?>"   id="document4" name="document4"/>
                                       
                                        <?php } else { ?>
                                            <img src="../../image/result.png" id="document4" alt="Scan Result" />
                                          <?php } ?> 
                                      
                                        <p>click here to upload</p>
                                </div>
                                <input type="file" id="hnd_or_degree_result" style="display:none"  name="document_four"  accept=".jpg,.JPG,.jpeg,.JPEG,.png,.PNG" onchange="scan_hnd_or_degree_result.UpdatePreview(this);"/>
                                
                                </div>
                     </label>
                      </fieldset>
              <?php } ?>




                
                <fieldset class="field">
                    <legend>PERSONAL ESSAY (<span style="color:hsla(0, 100%, 40%, 0.774)">accept: .pdf</span>)</legend>
                            <label>    
                                    <div class="result-div" title="CLICK HERE TO UPLOAD YOUR ESSAY">
                            
                                      <div class="result-div-in">
                                          <?php if ($essay!=''){?>
                                                <img src="image/essay.png"  alt=""/>
                                                <embed src="../../student-portal/uploaded_files/document/<?php echo $essay ?>" id="document1" type="application/pdf" />
                                                <?php } else {?>
                                                <img src="../../image/essay.png"  alt=""/>
                                                <embed src="" id="document1"  type="application/pdf" />
                                          <?php } ?>
                                            <p>click here to upload</p>
                                    </div>
                                    <input class="" name="document_one" id="document_one" accept=".pdf" onchange="showdocument_one(this)" type="file" style="display:none;" required>

                                
                                    </div>
                            </label>
                </fieldset>






      <fieldset style="border:none">
        <legend>LETTER OF RECOMMENDATION </legend>

                    <fieldset class="field">
                        <legend>LETTER ONE (<span style="color:hsla(0, 100%, 40%, 0.774)">accept: .pdf</span>)</legend>

                            <label>    
                                    <div class="result-div" title="CLICK HERE TO UPLOAD YOUR LETTER">
                            
                                        <div class="result-div-in">
                                        <?php if ($letter_one!=''){?>
                                                <img src="image/letter.png"  alt="">
                                                <embed src="../../student-portal/uploaded_files/document/<?php echo $letter_one ?>" id="document2" name="document2"  type="application/pdf" />
                                                <?php } else {?>
                                                <img src="../../image/letter.png"  alt="">
                                                <embed src="" id="document2"  type="application/pdf" />
                                          <?php } ?> 
                                            <p>click here to upload</p>
                                       </div>
                                         <input class="" name="document_two" id="document_two" accept=".pdf" onchange="showdocument_two(this)" type="file" style="display:none;" required>

                                    </div>
                            </label>
                    </fieldset>

                 


                    <fieldset class="field">
                        <legend>LETTER TWO (<span style="color:hsla(0, 100%, 40%, 0.774)">accept: .pdf</span>)</legend>
                                <label>    
                                            <div class="result-div" title="CLICK HERE TO UPLOAD YOUR LETTER">
                                    
                                            <div class="result-div-in">
                                            <?php if ($letter_two!=''){?>
                                                    <img src="image/letter.png"  alt="">
                                                    <embed src="../../student-portal/uploaded_files/document/<?php echo $letter_two ?>" id="document3" name="document3" type="application/pdf" />
                                                    <?php } else {?>
                                                    <img src="../../image/letter.png"  alt="">
                                                    <embed src="" id="document3" name="document3" type="application/pdf" />
                                              <?php } ?> 
                                            <p>click here to upload</p>
                                    </div>
                                    <input class="" name="document_three" id="document_three" accept=".pdf" onchange="showdocument_three(this)" type="file" style="display:none;" required>

                                            </div>
                                 </label>
                        </fieldset>


                   </fieldset>

            </fieldset>




<br clear="all">

                <?php if($program_id=='PRO_4'){?>
            <button class="next-btn" title="UPDATE PROFILE" type="button" id="update_btn" onclick="_update_four_years_profile('<?php echo $admission_id ?>')"> <i class="fa fa-check"> UPDATE PROFILE </i></button>
                <?php } else {?>
                  <button class="next-btn" title="UPDATE PROFILE" type="button" id="update_btn" onclick="_update_admission_student_profile('<?php echo $admission_id ?>')"> <i class="fa fa-check"> UPDATE PROFILE </i></button>
              <?php  } ?>
            <button class="next-btn back-btn" title="BACK" type="button" id="back_btn"  onclick="_back_pro('information')"> <i class="fa fa-arrow-left"></i> BACK </button>


  </div>


<?php
}

?>