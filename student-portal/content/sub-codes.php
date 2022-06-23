<?php if ($check_query=='student_admission_panel'){
 $usersquery=mysqli_query($conn,"SELECT * FROM `s_admission_tab` WHERE admission_id='$admission_id'")or die ('cannot select users_tab');
 $fetch_query=mysqli_fetch_array($usersquery);
 $admission_id=$fetch_query['admission_id'];         
 $admission_status=$fetch_query['admission_status'];         
 $firstname=$fetch_query['firstname'];         
 $lastname=$fetch_query['lastname'];         
  ?>
  <?php 
    if ($admission_status=="ADM"){?>
        <h4 style="color:#794512">ADMITTED</h4> 
        <p><i class="fa fa-user-circle-o"></i> Congratulations, <span><?php echo ucwords(strtolower("$firstname $lastname")) ?></span> (<?php echo $admission_id?>) you are successfully <strong>ADMITTED</strong>, Kindly go to COMPEER MEDICAL CENTER for your next step. </p>
   <?php     
    } else if($admission_status=="NT") {?>
        <h4 style="color:hsla(0, 100%, 40%, 0.774);margin-bottom:15px;">NOT ADMITTED YET</h4> 
        <p><i class="fa fa-user-circle-o"></i>  Dear, <span><?php echo ucwords(strtolower("$firstname $lastname")) ?></span> (<?php echo $admission_id ?>) you are not admitted yet. </p>
      <?php 
    

    }
  }
  ?>
    








<?php   ////    welcome dashboard user ///////
if($check_query=='welcome_user'){
?>
  <div class="picture-back-div">
                <div class="picture-div animated zoomIn">

              <?php if ($passport!=''){?>
              <img src="../admin/a/uploaded_files/student_pix/<?php echo $passport; ?>" id="passport-3"/>
              <?php } else { ?>

              <img src="images/user.png" id="passport-3"/>

              <?php } ?>

                </div>
                <div class="wel_name_div animated fadeIn">
                <h3 >Welcome Back!</h3>
                <h2 ><?php echo ucwords(strtolower("$firstname $lastname")) ?>  </h2>

                <span>Last Login Date | <?php echo $last_login ?></span>
                </div>
                </div>

 <?php
 }////////////////////////////////////////////////////////
 ?>


<?php if ($check_query=='student_details'){

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
         $country=$u_array[0]['country'];
         $state=$u_array[0]['state'];
         $lga=$u_array[0]['lga'];
         $address=$u_array[0]['address'];
         $passport=$u_array[0]['passport'];
         $date=$u_array[0]['date'];
         $last_login=$u_array[0]['last_login'];

        }
?>


<?php


if ($check_query=='get_sub_student_info'){
$no=0;


$usersquery=mysqli_query($conn,"SELECT * FROM `s_admission_tab` WHERE student_id='$s_student' ORDER BY firstname ASC ") or die ('cannot select s_admission_tab');
while($fetch_query=mysqli_fetch_array($usersquery)){
  $no++;
      $student_id=$fetch_query['student_id'];
      $admission_id=$fetch_query['admission_id'];
      $admission_status=$fetch_query['admission_status'];
      $firstname=$fetch_query['firstname'];
      $lastname=$fetch_query['lastname'];
      $email=$fetch_query['email'];
      $phonenumber=$fetch_query['phonenumber'];
      $program_id=$fetch_query['program_id'];



      $query = mysqli_query($conn, "SELECT * FROM `program_tab` WHERE program_id='$program_id' ");
      $fectch=mysqli_fetch_array($query);

      $program_name=$fectch['program_name'];

    
      $query = mysqli_query($conn, "SELECT * FROM `s_admission_tab` WHERE  admission_id='$admission_id'   ");
      $fectch=mysqli_fetch_array($query); 
      $result=$fectch['ssce_result'];
      $hnd_or_degree_result=$fectch['hnd_or_degree_result'];
      $essay=$fectch['essay'];
      $letter_one=$fectch['letter_one'];
      $letter_two=$fectch['letter_two'];
      
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
                       <td><?php echo $admission_id ?></td>
                       <td class="hidden"><?php echo ucwords(strtolower("$firstname $lastname")) ?></td>
                       <td class="hidden"><?php echo $email ?></td>
                       <td><?php echo $phonenumber ?></td>
                       <td> <?php echo $program_name ?></td>
                     
                       
                      <?php if (($program_id=='PRO_6') || ($program_id=='TRANS')){?>

                       <?php if (($result=='') || ($essay=='') || ($letter_one=='' )|| ($letter_two=='')){?>
                        <td style="color:red;"><?php echo $not_completed ?></td>
                       <td><button type="button" class="c_btn" title="COMPLETE STUDENT PROFILE"  onclick="view_student_details('student_profile','<?php echo $admission_id ?>')"><i class="fa fa-check"></i> Complete Profile</button></td>

                     <?php  } else { ?>
                      <td style="color:green;"><?php echo $completed?></td>
                      <td><button type="button" title="VIEW STUDENT PROFILE"  onclick="view_student_details('student_profile','<?php echo $admission_id ?>')"><i class="fa fa-eye"></i> View Profile</button></td>

                    <?php 
                    } 

                   }else{
                        if($program_id=='PRO_4'){

                   if (($result=='') || ($essay=='') || ($hnd_or_degree_result=='' )|| ($letter_one=='' )|| ($letter_two=='')){?>
                       <td style="color:red;"><?php echo $not_completed ?></td>
                     <td><button type="button" class="c_btn" title="COMPLETE STUDENT PROFILE"  onclick="view_student_details('student_profile','<?php echo $admission_id ?>')"><i class="fa fa-check"></i> Complete Profile</button></td>

                   <?php  } else { ?>
                    <td style="color:green;"><?php echo $completed?></td>
                    <td><button type="button" title="VIEW STUDENT PROFILE"  onclick="view_student_details('student_profile','<?php echo $admission_id ?>')"><i class="fa fa-eye"></i> View Profile</button></td>
              <?php
                }
                  }
                }
                    ?>


                    <?php if($admission_status=='ADM'){?>
                                <td><button type="button" title="VIEW ADMISSION STATUS"  onclick="_get_admitted_status('admitted_status','<?php echo $admission_id ?>')"><i class="fa fa-check"></i> Admitted</button></td>
                           <?php
                            } else if($admission_status=='NT'){?>
                       <td><button type="button" class="c_btn" title="NOT ADMITTED YET"  onclick="_get_admitted_status('admitted_status','<?php echo $admission_id ?>')"><i class="fa fa-close"></i> Not Admitted</button></td>
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
                                            <img src="uploaded_files/admission_student_pix/<?php echo $passport; ?>" id="student_adms_passport"  alt="image"/>
                                            <?php } else { ?>

                                                <img src="images/user.png" id="student_adms_passport" alt="image"/>

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
                      <select name="gender" id="gender" class="text_field select_text" >
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
                  <select id="country_id" class="text_field select_text" title="Country"  onchange="_get_states()">
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
                            <select id="state_id" class="text_field select_text" title="Province/State" >
                                  <?php if($state_id==''){?>
                                      <option value="" selected="selected">SELECT YOUR COUNTRY FIRST</option>
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
                  <select id="school_country_id" class="text_field select_text" title="Country"  >
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
                      <input type="text" placeholder="ENTER NAME OF YOUR INSTITUTION" title="ENTER NAME OF YOUR INSTITUTION" class="text_field school_text" value="<?php echo $school_name ?>"  id="schoolname"  required/>
                      </div>

                      <div class="individual-input ">
                      <div class="title">NAME OF YOUR DEPARTMENT: <span>*</span></div>
                      <input type="text" placeholder="ENTER NAME OF YOUR DEPARTMENT" title="ENTER NAME OF YOUR DEPARTMENT" class="text_field school_text" value="<?php echo $transfer_department_name ?>"   id="transfer_department_name"  required/>
                      </div>

                      <div class="individual-input ">
                      <div class="title">LEVEL: <span>*</span></div>
                      <input type="text" placeholder="ENTER YOUR LEVEL" title="ENTER YOUR LEVEL" class="text_field school_text" value="<?php echo $transfer_level ?>" id="transfer_level"  required/>
                      </div>

                      <div class="individual-input ">
                      <div class="title">STUDENT ID: <span>*</span></div>
                      <input type="text" placeholder="ENTER YOUR STUDENT ID" title="ENTER YOUR STUDENT ID" class="text_field school_text" value="<?php echo $transfer_student_id ?>"  id="transfer_student_id"  required/>
                      </div>



                      <div class="individual-input">
                  <div class="title">SELECT YOUR INSTITUTION COUNTRY: <span>*</span></div>
                  <select id="school_country_id" class="text_field select_text" title="Country"  >
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

          <button class="next-btn" title="NEXT PROFILE" type="button" id="next_btn" onclick="_input_check('document','<?php echo $admission_id ?>')"> NEXT <i class="fa fa-arrow-right"></i></button>


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
                                <img  src="uploaded_files/document/<?php echo $result ?>"  id="result" name="result"/>     
                                <?php } else { ?>
                                <img src="images/result.png" id="result" alt="Scan Result" />
                                <?php } ?> 
                                <p>click here to upload</p>
                           </div>
                          <input type="file" id="ssce_result" style="display:none"  name="ssce_result"  accept=".jpg,.JPG,.jpeg,.JPEG,.png,.PNG" onchange="scan_result.UpdatePreview(this);"/>
                        
                        </div>
                   </label>
                   

                                   </fieldset>

    
                <?php if ($program_id=='PRO_4') {?>
                      <fieldset class="field">
                          <legend>UPLOAD HND/DEGREE RESULT (<span style="color:hsla(0, 100%, 40%, 0.774)">accept: .pdf</span>)</legend>
                          <label>    
                                <div class="result-div" title="CLICK HERE TO UPLOAD YOUR TRANSCRIPT">
                            
                                    <div class="result-div-in">
                                    
                                          
                                    <?php if ($hnd_or_degree_result!=''){?>
                                            <img  src="uploaded_files/document/<?php echo $hnd_or_degree_result ?>"   id="document4" name="document4"/>
                                       
                                        <?php } else { ?>
                                            <img src="images/result.png" id="document4" alt="Scan Result" />
                                          <?php } ?> 
                                      
                                          <p>click here to upload</p>
                                </div>
                                <input type="file" id="hnd_or_degree_result" style="display:none"  name="document_four"  accept=".jpg,.JPG,.jpeg,.JPEG,.png,.PNG" onchange="scan_hnd_or_degree_result.UpdatePreview(this);"/>
                                
                                </div>
                     </label>
                      </fieldset>
              <?php } ?>




                
                <fieldset class="field">
                    <legend class="">PERSONAL ESSAY (<span style="color:hsla(0, 100%, 40%, 0.774)">accept: .pdf</span>)</legend>
                            <label>    
                                    <div class="result-div" title="CLICK HERE TO UPLOAD YOUR ESSAY">
                            
                                      <div class="result-div-in">
                                          <?php if ($essay!=''){?>
                                            <img src="images/essay.png"  alt=""/>
                                                <embed src="uploaded_files/document/<?php echo $essay ?>" id="document1" type="application/pdf" />
                                                <?php } else {?>
                                                <img src="images/essay.png"  alt=""/>
                                                <embed src="" id="document1"  type="application/pdf" id="document1"/>
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
                                                <img src="images/letter.png"  alt=""/>
                                                <embed src="uploaded_files/document/<?php echo $letter_one ?>" id="document2" name="document2"  type="application/pdf"/>
                                                <?php } else {?>
                                                <img src="images/letter.png"  alt=""/>
                                                <embed src="" id="document2"  type="application/pdf"/>
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
                                                    <img src="images/letter.png"  alt=""/>
                                                    <embed src="uploaded_files/document/<?php echo $letter_two ?>" id="document3" name="document3" type="application/pdf" />
                                                    <?php } else {?>
                                                    <img src="images/letter.png"  alt=""/>
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
            <button class="next-btn update-btn" title="UPDATE PROFILE" type="button" id="update_btn" onclick="_update_four_years_profile('<?php echo $admission_id ?>')"> <i class="fa fa-check"> UPDATE PROFILE</i></button>
                <?php } else {?>
                  <button class="next-btn  update-btn" title="UPDATE PROFILE" type="button" id="update_btn" onclick="_update_admission_student_profile('<?php echo $admission_id ?>')"> <i class="fa fa-check"> UPDATE PROFILE </i></button>
              <?php  } ?>
            <button class="next-btn back-btn" title="BACK" type="button" id="back_btn"  onclick="_back_pro('information')"> <i class="fa fa-arrow-left"></i> BACK </button>


  </div>


<?php
}

?>