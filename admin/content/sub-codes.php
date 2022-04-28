<?php if ($check_query=='student_adminssion_panel'){
 $usersquery=mysqli_query($conn,"SELECT admission_id, admission_status FROM `s_admission_tab` WHERE admission_id='$admission_id'")or die ('cannot select users_tab');
 $fetch_query=mysqli_fetch_array($usersquery);
 $admission_id=$fetch_query['admission_id'];         
 $admission_status=$fetch_query['admission_status'];         
  ?>
  <?php 
    if ($admission_status=="ADMIT"){?>
        <h4 style="color:#794512">ADMITTED</h4> 
   <?php     
    } else if($admission_status=="NOT ADMIT") {?>
        <h4 style="color:hsla(0, 100%, 40%, 0.774);">NOT ADMITTED YET</h4> 
   <?php     
    }
  ?>
  
  <p><i class="fa fa-user-circle-o"></i> <span> C.M.I</span>, are you sure that you have agree with the student (<span><?php echo $admission_id ?></span>) requirements?
       if yes, admit the student (<span><?php echo $admission_id ?></span>). </p>
      
      <?php 
    if ($admission_status=="ADMIT"){?>  
    <button style="background:hsla(0, 100%, 40%, 0.774)" class="proceed-btn ok_btn" id="admit" title="CANCEL STUDENT ADMISSION" onclick="_cancel_admitted_student('<?php echo $admission_id ?>')">CANCEL ADMISSION</button>
    <?php } else if($admission_status=="NOT ADMIT") {?>
      
    <button class="proceed-btn ok_btn" id="admit" title="ADMIT STUDENT" onclick="_get_admitted_student('<?php echo $admission_id ?>')">ADMIT STUDENT</button>

<?php   
}
}
?> 

<?php if ($check_query=='view_all_staff_list'){?> 
	<?php
	$no=0;
                         $view_staff_list_query= mysqli_query($conn,"SELECT * FROM admin_tab");
                         while($staff_list=mysqli_fetch_array($view_staff_list_query)){
							$no++;
                         $staff_id=$staff_list['staff_id'];
                         $firstname=$staff_list['firstname'];
                         $lastname=$staff_list['lastname'];
                         $phonenumber=$staff_list['phonenumber'];
                         $status=$staff_list['status'];
                        
                        ?>
						<div class="view-pro-div" onclick="_staff_profile('staff_profile','<?php echo $staff_id?>');" title="VIEW STAFF">
						<div class="view-pro-in">
						<div class="img-div">
						<img src="../image/cmi-img.jpg" alt="picture">
						</div>
						<div class="name-div"><?php echo strtoupper($firstname) ?> <?php echo strtoupper($lastname) ?></div>
						<hr>
						<span>ID:  <?php echo $staff_id ?></span> <br>
						<span><i class="fa fa-phone"></i> <?php echo $phonenumber ?></span> 
						<p class="status"><?php echo $status ?></p>


						</div>
						</div>


					

<?php 
} 
?>
	<?php if($no==0){?>				
		<div class="no-record-div">
		<h4>NO RECORD FOUND</h4>
		<button onClick="_get_slide_panel('register_staff')" class="create-btn" title="Create A New Admin"><i class="fa fa-plus"></i> Create A New Admin</button>
		</div>
<?php
}
}
?>






<?php if ($check_query=='view_active_staff_list'){?> 
	<?php
	$no=0;
                         $view_staff_list_query= mysqli_query($conn,"SELECT * FROM admin_tab");
                         while($staff_list=mysqli_fetch_array($view_staff_list_query)){
							$no++;
                         $staff_id=$staff_list['staff_id'];
                         $firstname=$staff_list['firstname'];
                         $lastname=$staff_list['lastname'];
                         $phonenumber=$staff_list['phonenumber'];
                         $status=$staff_list['status'];
                        
                        ?>
						<div class="view-pro-div" onclick="_staff_profile('staff_profile','<?php echo $staff_id?>');" title="VIEW STAFF">
						<div class="view-pro-in">
						<div class="img-div">
						<img src="../image/cmi-img.jpg" alt="picture">
						</div>
						<div class="name-div"><?php echo strtoupper($firstname) ?> <?php echo strtoupper($lastname) ?></div>
						<hr>
						<span>ID:  <?php echo $staff_id ?></span> <br>
						<span><i class="fa fa-phone"></i> <?php echo $phonenumber ?></span> 
						<p class="status"><?php echo $status ?></p>


						</div>
						</div>


					
<?php 
} 
?>
	<?php if($no==0){?>				
		<div class="no-record-div">
		<h4>NO RECORD FOUND</h4>
		<button onClick="_get_slide_panel('register_staff')" class="create-btn" title="Create A New Admin"><i class="fa fa-plus"></i> Create A New Admin</button>
		</div>
	
<?php
}
}
?>






<?php if ($check_query=='view_suspended_staff_list'){?> 
	<?php
	$no=0;
                         $view_staff_list_query= mysqli_query($conn,"SELECT * FROM admin_tab");
                         while($staff_list=mysqli_fetch_array($view_staff_list_query)){
							$no++;
                         $staff_id=$staff_list['staff_id'];
                         $firstname=$staff_list['firstname'];
                         $lastname=$staff_list['lastname'];
                         $phonenumber=$staff_list['phonenumber'];
                         $status=$staff_list['status'];
                        
                        ?>
						<div class="view-pro-div" onclick="_staff_profile('staff_profile','<?php echo $staff_id?>');" title="VIEW STAFF">
						<div class="view-pro-in">
						<div class="img-div">
						<img src="../image/cmi-img.jpg" alt="picture">
						</div>
						<div class="name-div"><?php echo strtoupper($firstname) ?> <?php echo strtoupper($lastname) ?></div>
						<hr>
						<span>ID:  <?php echo $staff_id ?></span> <br>
						<span><i class="fa fa-phone"></i> <?php echo $phonenumber ?></span> 
						<p class="status"><?php echo $status ?></p>


						</div>
						</div>

				
<?php 
} 
?>
	<?php if ($no==0){?>				
		<div class="no-record-div">
		<h4>NO RECORD FOUND</h4>
		<button onClick="_get_slide_panel('register_staff')" class="create-btn" title="Create A New Admin"><i class="fa fa-plus"></i> Create A New Admin</button>
		</div>
<?php
}
}
?>











<?php if ($check_query=='view_staff_profile'){?> 
	<?php
                         $view_staff_list_query= mysqli_query($conn,"SELECT * FROM admin_tab WHERE staff_id='$staff_id'");
                         $staff_list=mysqli_fetch_array($view_staff_list_query);
                         $staff_id=$staff_list['staff_id'];
                         $firstname=$staff_list['firstname'];
                         $middlename=$staff_list['middlename'];
                         $lastname=$staff_list['lastname'];
                         $email=$staff_list['email'];
                         $gender=$staff_list['gender'];
                         $dob=$staff_list['dob'];
                         $phonenumber=$staff_list['phonenumber'];
                         $state=$staff_list['s_state'];
                         $address=$staff_list['homeaddress'];
                         $religious=$staff_list['religious'];
                         $role=$staff_list['s_role'];
                         $status=$staff_list['status'];
                        

						 $s_gender= mysqli_query($conn,"SELECT gender FROM admin_tab WHERE gender='' AND staff_id='$staff_id'");
                         $s_sgender=mysqli_fetch_array($s_gender);
						 $staff_gender=$s_sgender['gender'];
                        ?>

				<div class="profile-pix-div">
								
								<fieldset  style="width:15%;float:left;border:none;">
										<legend>UPLOAD PICTURE <I class="fa fa-arrow-down" style="font-size:12pz;color:hsla(0, 100%, 40%, 0.774);"></I></legend>
										<div class="profile-img-div">  
										<input type="file" id="passport" style="display:none"  name="passport" accept=".jpg,.png" onchange="Test.UpdatePreview(this);"/>
										<img src="../image/cmi-img.jpg" id="MyPassport" alt="picture"/>
										</div>
											  
								</fieldset>
					</div>
				
						<fieldset>
										<legend>STAFF INFORMATION</legend>
										<div class="individual-input">
										<div class="title">FIRST NAME: <span>*</span></div>
											<input type="text" class="text_field" value="<?php echo  strtoupper($firstname) ?>" placeholder="FIRST NAME" name="firstname" id="firstname"  required/>
										</div>
									  
										<div class="individual-input">
										<div class="title">MIDDLE NAME: <span>*</span></div>
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
									 <div class="title">GENDER: <span>*</span></div>
									<select name="gender" id="gender" class="text_field" style="width:96%">
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
									 <div class="title">SELECT STATE: <span>*</span></div>
									<select name="state" id="state" class="text_field" style="width:96%">
									<option value='' selected> SELECT YOUR STATE </option>
									<option value="<?php echo $state ?>" selected> <?php echo $state ?> </option>
									<option value='ABIA'>ABIA STATE</option>
										<option value='ADAMAWA'>ADAMAWA </option>
										<option value='AKWAIBOM'>AKWAIBOM </option>
										<option value='ANAMBRA'>ANAMBRA </option>
										<option value='BAUCHI'>BAUCHI </option>
										<option value='BAYELSA'>BAYELSA </option>
										<option value='BENUE'>BENUE </option>
										<option value='BORNO'>BORNO </option>
										<option value='RIVERS'>RIVERS </option>
										<option value='DELTA'>DELTA </option>
										<option value='EBONYI'>EBONYI </option>
										<option value='EDO'>EDO </option>
										<option value='EKITI'>EKITI </option>
										<option value='ENUGU'>ENUGU </option>
										<option value='GOMBE'>GOMBE </option>
										<option value='IMO'>IMO STATE</option>
										<option value='JIGAWA'>JIGAWA </option>
										<option value='KADUNA'>KADUNA </option>
										<option value='KANO'>KANO </option>
										<option value='KATSINA'>KATSINA </option>
										<option value='KEBBI'>KEBBI </option>
										<option value='KOGI'>KOGI </option>
										<option value='KWARA'>KWARA </option>
										<option value='LAGOS'>LAGOS </option>
										<option value='NASARAWA'>NASARAWA </option>
										<option value='NIGER'>NIGER </option>
										<option value='OGUN'>OGUN </option>
										<option value='ONDO'>ONDO </option>
										<option value='OSUN'>OSUN </option>
										<option value='OYO'>OYO </option>
										<option value='PLATEAU'>PLATEAU </option>
										<option value='RIVERS'>RIVERS </option>
										<option value='SOKOTO'>SOKOTO </option>
										<option value='TARABA'>TARABA </option>
										<option value='YOBE'>YOBE </option>
										<option value='ZAMFARA'>ZAMFARA </option>
														
									</select>
				
									</div>

									
									<div class="individual-input">
									<div class="title">ADDRESS: <span>*</span></div>
									<input type="text" value="<?php echo strtoupper($address)?>" class="text_field" placeholder="ADDRESS" name="address" id="address"  />
									</div>
				
									<div class="individual-input">
									 <div class="title">RELIGIOUS: <span>*</span></div>
									<select name="religious" id="religious" class="text_field" style="width:96%">
									<option value=''>SELECT RELIGION</option> 
									<option value="<?php echo strtoupper($religious) ?>"selected><?php echo strtoupper($religious)?></option>
										<?php if($religious=='CHRISTIAN'){?>
										<option value="MUSLIM">MUSLIM</option> 
										<?php }else{ ?>
										<option value="CHRISTIAN">CHRISTIAN</option> 
										<?php } ?>
									</select>
				
									</div>

									 <div class="individual-input">
									 <div class="title">ROLE: <span>*</span></div>
									<select name="role" id="role" class="text_field" style="width:96%">
									<option value='' selected> SELECT ROLE </option>
									<option value="<?php echo strtoupper($role)?>" selected><?php echo strtoupper($role)?> </option>
									<?php if ($role=='ADMIN'){?>
										<option value="STAFF">STAFF</option> 
									<?php } else { ?>
										<option value="ADMIN">ADMIN</option> 
								<?php	} ?>
								
									</select>
				
									</div>
				
									<div class="individual-input">
									 <div class="title">STATUS: <span>*</span></div>
										<select name="status" id="status" class="text_field" style="width:96%">
										<option selected> SELECT STATUS </option>
										<option value="<?php echo strtoupper($status)?>" selected><?php echo strtoupper($status)?> </option>
											
										<?php if ($role=='ACTIVE'){?>
											<option value="SUSPENDED">SUSPENDED</option> 
											<?php } else { ?>
											<option value="ACTIVE">ACTIVE</option> 
											<?php	} ?>
										
										</select>
									</div>
										
				
									   
									   
							</fieldset>
				<br clear="all">
				
	<button class="submit-btn" onClick="_update_profile('<?php echo $staff_id ?>');" title="UPDATE PROFILE" type="button"><i class="fa fa-check"></i> UPDATE</button>
				
				

</div>				

				
<?php
}

?>






<?php
if ($check_query=='get_sub_student_info'){
$no=0;


$usersquery=mysqli_query($conn,"SELECT * FROM `s_admission_tab`")or die ('cannot select users_tab');
while($fetch_query=mysqli_fetch_array($usersquery)){
  $no++;
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


   ?>
                   <tr>
                       <td><?php echo $no ?></td>
                       <td><?php echo $admission_id ?></td>
                       <td><?php echo ucwords(strtolower("$firstname $lastname")) ?></td>
                       <td><?php echo $email ?></td>
                       <td><?php echo $phonenumber ?></td>
                       <td><?php echo $year_program ?></td>
                     
                     
                       <?php if ($firstname=='' || $lastname==''|| $gender==''|| $dob==''|| $email==''|| $phonenumber==''|| $address==''
                       || $year_program==''|| $sat_or_act==''|| $country==''|| $result==''|| $essay==''|| $letter_one==''|| $letter_two==''){?>
                        <td style="color:red;">not completed</td>
                       <td><button type="button" class="c_btn" title="COMPLETE STUDENT PROFILE"  onclick="view_student_details('student_profile','<?php echo $admission_id ?>')"><i class="fa fa-check"></i> Complete Profile</button></td>

                     <?php  } else { ?>
                      <td style="color:green;">completed</td>
                      <td><button type="button" title="VIEW STUDENT PROFILE"  onclick="view_student_details('student_profile','<?php echo $admission_id ?>')"><i class="fa fa-eye"></i> View Profile</button></td>

                    <?php } ?>

                            <?php if($admission_status=='ADMIT'){?>
                                <td><button type="button" title="VIEW STUDENT ADMISSION STATUS"  onclick="_get_admitted_status('admitted_status','<?php echo $admission_id ?>')"><i class="fa fa-check"></i> Admitted</button></td>
                           <?php
                            } else { ?>
                       <td><button type="button" class="c_btn" title="ADMIT STUDENT"  onclick="_get_admitted_status('admitted_status','<?php echo $admission_id ?>')"><i class="fa fa-graduation-cap"></i> Admit Student</button></td>
                            <?php } ?>
                       
                       </tr>
                       
                 

<?php 
} 
}
?>








<?php 
if ($check_query=='view_student_profile'){

  $usersquery=mysqli_query($conn,"SELECT * FROM `s_admission_tab` WHERE admission_id='$admission_id'")or die ('cannot select users_tab');
  $fetch_query=mysqli_fetch_array($usersquery);

  $firstname=$fetch_query['firstname'];
		$middlename=$fetch_query['middlename'];
		$lastname=$fetch_query['lastname'];
		$gender=$fetch_query['gender'];
		$dob=$fetch_query['dob'];
  $year_program=$fetch_query['year_program'];
  $sat_or_act=$fetch_query['sat_or_act_score']; ////////
		$email=$fetch_query['email'];
		$phonenumber=$fetch_query['phonenumber'];
		$address=$fetch_query['address'];
    $country=$fetch_query['country'];
		$state=$fetch_query['state'];
    $religious=$fetch_query['religious'];
    $lga=$fetch_query['lga'];
    $result=$fetch_query['result'];

    $essay=$fetch_query['essay'];
    $letter_one=$fetch_query['letter_one'];
    $letter_two=$fetch_query['letter_two'];


		$status_id=$fetch_query['status_id'];
		$passport=$fetch_query['passport'];
	
?>
  
  <div class="div-pro" id="information" >

  <fieldset>
           <legend>BASIC INFORMATION</legend>
                  <div class="individual-input">
                  <div class="title">ADMISSION ID: </div>
                      <input type="text" class="text_field" value="<?php echo $admission_id ?>" required="" readonly=""/>
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

                  <div class="individual-input">
                  <div class="title">DATE OF BIRTH: <span>*</span></div>
                      <input type="date" class="text_field" value="<?php echo $dob ?>" name="dob" id="dob" required/>
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
                  <div class="title">YEAR PROGRAM: <span>*</span></div>
                      <input type="text" class="text_field" value="<?php echo strtoupper($year_program) ?>"  name="year_program" id="year_program"  required="" readonly=""/>
                  </div>

                  <div class="individual-input">
                  <div class="title">SAT OR ACT SCORE: <span>*</span></div>
                      <input type="text" class="text_field" value="<?php echo $sat_or_act ?>"  name="sat_or_act" id="sat_or_act"  required/>
                  </div>

                  <div class="individual-input">
                  <div class="title">COUNTRY: <span>*</span></div>
                      <input type="text" class="text_field" value="<?php echo strtoupper($country) ?>" placeholder="ENTER YOUR COUNTRY" name="country" id="country"  required/>
                  </div>

              <div class="individual-input">
              <div class="title">STATE:</div>
              <input type="text" class="text_field" value="<?php echo strtoupper($state) ?>" placeholder="ENTER YOUR STATE" name="state" id="state"  />
              </div>

              <div class="individual-input">
              <div class="title">RELIGIOUS: </div>
              <input type="text" class="text_field" value="<?php echo strtoupper($lga) ?>" placeholder="ENTER YOUR RELIGIOUS" name="religious" id="religious"  />
              </div>
         

              <div class="individual-input">
              <div class="title">LOCAL GOVT: </div>
              <input type="text" class="text_field" value="<?php echo strtoupper($lga) ?>" placeholder="ENTER YOUR LOCAL GOVT" name="lga" id="lga"  />
              </div>

      </fieldset>
<br clear="all">

          <button class="next-btn" title="NEXT PROFILE" type="button" id="next_btn" onclick="_input_check('document')"> NEXT <i class="fa fa-arrow-right"></i></button>


  </div>






  <div class="div-pro" id="document">
  <fieldset>
    <legend>DOCUMENTS INFORMATION</legend>

                <fieldset class="field">
                    <legend>WAEC/GCE RESULT (<span style="color:hsla(0, 100%, 40%, 0.774)">accept: .png , .jpg</span>)</legend>

                     <label>    
                                <div class="result-div" title="CLICK HERE TO UPLOAD YOUR RESULT">
                            
                                    <div class="result-div-in">
                                    
                                        <img  src="../student/uploaded_files/document/<?php echo $result ?>"  id="result" name="result"  />
                                      
                                        <p>click here re-upload</p>
                                </div>
                                <input type="file" id="myresult" style="display:none"  name="myresult"  accept=".jpg,.JPG,.jpeg,.JPEG,.png,.PNG" onchange="scan_result.UpdatePreview(this);"/>
                                
                                </div>
                     </label>
                </fieldset>

    

                <fieldset class="field">
                    <legend>PERSONAL ESSAY (<span style="color:hsla(0, 100%, 40%, 0.774)">accept: .pdf</span>)</legend>
                            <label>    
                                    <div class="result-div" title="CLICK HERE TO UPLOAD YOUR ESSAY">
                            
                                      <div class="result-div-in">
                                          <?php if ($essay!=''){?>
                                                <img src="../image/essay.png"  alt="">
                                                <embed src="../student/uploaded_files/document/<?php echo $essay ?>" id="document1" type="application/pdf" />
                                                <?php } else {?>
                                                <img src="../image/essay.png"  alt="">
                                                <embed src="" id="document1"  type="application/pdf" />
                                          <?php } ?>
                                            <p>click here re-upload</p>
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
                                                <img src="../image/letter.png"  alt="">
                                                <embed src="../student/uploaded_files/document/<?php echo $letter_one ?>" id="document2" name="document2"  type="application/pdf" />
                                                <?php } else {?>
                                                <img src="../image/letter.png"  alt="">
                                                <embed src="" id="document2"  type="application/pdf" />
                                          <?php } ?> 
                                            <p>click here re-upload</p>
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
                                                    <img src="../image/letter.png"  alt="">
                                                    <embed src="../student/uploaded_files/document/<?php echo $letter_two ?>" id="document3" name="document3" type="application/pdf" />
                                                    <?php } else {?>
                                                    <img src="../image/letter.png"  alt="">
                                                    <embed src="" id="document3" name="document3" type="application/pdf" />
                                              <?php } ?> 
                                            <p>click here re-upload</p>
                                    </div>
                                    <input class="" name="document_three" id="document_three" accept=".pdf" onchange="showdocument_three(this)" type="file" style="display:none;" required>

                                            </div>
                                 </label>
                        </fieldset>












      </fieldset>



      </fieldset>












<br clear="all">

<button class="next-btn" title="UPDATE PROFILE" type="button" id="update_btn" onclick="_update_student_document_profile('<?php echo $admission_id ?>')"> <i class="fa fa-check"> UPDATE PROFILE </i></button>
<button class="next-btn back-btn" title="BACK" type="button" id="back_btn"  onclick="_back_pro('information')"> <i class="fa fa-arrow-left"></i> BACK </button>


  </div>




<?php
}

?>




