<?php if ($check_query=='student_Admission_panel'){
 $usersquery=mysqli_query($conn,"SELECT * FROM `s_admission_tab` WHERE admission_id='$admission_id'")or die ('cannot select users_tab');
 $fetch_query=mysqli_fetch_array($usersquery);
 $admission_id=$fetch_query['admission_id'];         
 $admission_status=$fetch_query['admission_status'];         
 $firstname=$fetch_query['firstname'];         
 $lastname=$fetch_query['lastname'];         
  ?>
  <?php 
    if ($admission_status=="ADMIT"){?>
        <h4 style="color:#794512">ADMITTED</h4> 
        <p><i class="fa fa-user-circle-o"></i> Congratulations, <span><?php echo ucwords(strtolower("$firstname $lastname")) ?></span> you are successfully <strong>ADMITTED</strong>, Kindly go to COMPEER MEDICAL CENTER for your next step. </p>
   <?php     
    } else if($admission_status=="NOT ADMIT") {?>
        <h4 style="color:hsla(0, 100%, 40%, 0.774);margin-bottom:15px;">NOT ADMITTED YET</h4> 
   <?php     
    }
  ?>
    
  
  

<?php   

}
?> 



<?php if ($check_query=='admission_count'){?>
  
               

               <?php
               $count_query = mysqli_query ($conn,"SELECT count(student_id) FROM `s_admission_tab` WHERE student_id='$student_id'") or die  (mysqli_error($conn));
               $count=mysqli_fetch_array($count_query);	
               $admission=$count['student_id'];
               ?>
              
               <span class="number"> <?php echo number_format($admission_count); ?></span>
              
               
                       

<?php
}
?>








<?php   ////    welcome dashboard user ///////
if($check_query=='welcome_user'){
?>
  <div class="picture-back-div">
                <div class="picture-div">

              <?php if ($passport!=''){?>
              <img src="../admin/uploaded_files/student_pix/<?php echo $passport; ?>" id="passport-3"/>
              <?php } else { ?>

              <img src="../image/user.png" id="passport-3"/>

              <?php } ?>


                </div>
                <h3>Welcome Back!</h3>

                <h2><?php echo ucwords(strtolower("$firstname $lastname")) ?>  </h2>

                <span>Last Login Date | <?php echo $last_login ?></span>
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


$usersquery=mysqli_query($conn,"SELECT * FROM `s_admission_tab`")or die ('cannot select users_tab');
while($fetch_query=mysqli_fetch_array($usersquery)){
  $no++;
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


   ?>
 


               <tr>
                       <td><?php echo $no ?></td>
                       <td><?php echo $student_id ?></td>
                       <td><?php echo $admission_id ?></td>
                       <td><?php echo ucwords(strtolower("$firstname $lastname")) ?></td>
                       <td ><?php echo $email ?></td>
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
if ($check_query=='get_student_admission_id'){

  $usersquery=mysqli_query($conn,"SELECT * FROM `s_admission_tab` WHERE admission_id='$admission_id'")or die ('cannot select users_tab');
  $fetch_query=mysqli_fetch_array($usersquery);
  $admission_id=$fetch_query['admission_id'];
?>
<span style="text-align:center"><?php echo $admission_id ?></span>
<?php 
}
?>




<?php 
if ($check_query=='view_student_profile'){

  $usersquery=mysqli_query($conn,"SELECT * FROM `s_admission_tab` WHERE admission_id='$admission_id'")or die ('cannot select users_tab');
  $fetch_query=mysqli_fetch_array($usersquery);

  $admission_id=$fetch_query['admission_id'];
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
    $passport=$fetch_query['passport'];
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
                
                
                <fieldset  style="width:15%;float:left;border:none;">
                            <legend>UPLOAD PICTURE <I class="fa fa-arrow-down" style="font-size:12pz;color:hsla(0, 100%, 40%, 0.774);"></I></legend>
                                
                        
                            <div class="profile-img-div">  
                                    <label>   
                                    <?php if ($passport!=''){?>
                                            <img src="uploaded_files/admission_student_pix/<?php echo $passport; ?>" id="student_adms_passport"  alt="image"/>
                                            <?php } else { ?>

                                                <img src="../image/user.png" id="student_adms_passport" alt="image"/>

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
                                    
                                        <img 
                                        <?php if ($result!=''){?>
                                        src="uploaded_files/document/<?php echo $result ?>"  id="result" name="result"
                                        <?php } else { ?>
                                        src="../image/result.png" id="result" alt="Scan Result"
                                          <?php } ?> />
                                      
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
                                                <img src="image/essay.png"  alt="">
                                                <embed src="uploaded_files/document/<?php echo $essay ?>" id="document1" type="application/pdf" />
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
                                                <img src="image/letter.png"  alt="">
                                                <embed src="uploaded_files/document/<?php echo $letter_one ?>" id="document2" name="document2"  type="application/pdf" />
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
                                                    <img src="image/letter.png"  alt="">
                                                    <embed src="uploaded_files/document/<?php echo $letter_two ?>" id="document3" name="document3" type="application/pdf" />
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