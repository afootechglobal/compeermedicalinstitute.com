
 <?php if ($view_content=='registration_successful'){?>
    <div class="success-back-div animated zoomIn">
                      <div class="success-div-in">
                      <div class="success-logo"><img src="../image/tick-2.gif" alt="Hero" /></div>
                        <h3>REGISTRATION SUCCESSFUL</h3>
                      <button class="success-btn" type="Submit" title="Ok"  onClick="_close_reg_panel()">OK, Thanks</button>
                    </div>
                </div>
<?php } ?>


<?php if ($view_content=='get_payment'){?>
<div class="payment-div animated zoomIn">
    <div class="payment-div-in">
        <div class="payment-icon-div animated fadeInLeft">
            <div class="img-div" >
                <img src="../image/payment-icon.gif" alt="Payment Icon">
            </div>
        </div>
        <p><i class="fa fa-user-circle-o"></i> Dear, <span>AFOLABI TAIWO</span> you will be charge <strong>#20, 000</strong> (Twenty Thousand Naira) for your application fees. Take Note, the application fees is <span>Non-Refundable</span> after your payment. Thanks </p>
   <button class="proceed-btn" title="CLICK TO PROCEED">CLICK TO PROCEED...</button>
    </div>
</div>
<?php } ?>



<?php if ($view_content=='admitted_status'){?>
<div class="payment-div admission-status-div animated zoomIn">
    <div class="payment-div-in status-div-in">
    <div class="close" alt="close" title="close" onclick="close_btn();">X</div>
        <div class="payment-icon-div status_icon animated fadeInLeft">
            <div class="img-div" >
                <img src="../image/icon.png" alt="cmi icon">
            </div>
        </div>
        <?php 
        $check_query='student_Admission_panel';
        require_once 'sub-codes.php'
        ?>
        <button class="proceed-btn ok_btn" type="button" onclick="_close()" title="OK, THANKS">Ok, Thanks</button>
    </div>
</div>
<?php } ?>





<?php if ($view_content=='dashboard'){?>

    <div class="image-back-div">
            <div class="cover">
                
                <div class="div-in-header">
                    <div class="div-in">
                        <div class="div-in-text">
                            <h5><i class="fa fa-dashboard"></i> Dashboard</h5><br clear="all">
                            <p>Student Portal</p>

                            <div class="time-dash-div">
                            <span>Current Time</span>
                            <h4 id="datetime">  <?php $hour=date("h")-1; ?><?php echo date("$hour:i:s") ?> <sup> <?php echo date("A") ?> </sup></h4>
                            <span> <?php $date = date("l, dS F, Y");
                                echo $date 
                                ?> 
                            </span>
                            </div>
                        </div>

                             <?php
                            $check_query='welcome_user';
                            require_once 'sub-codes.php'; 
                            ?>

                    
                    </div>

                </div>
            </div>
        </div>



            <div class="dashboard-main-div">
                <div class="dash-div-in">
              
              
              
                <div class="main-div "  onclick="_get_Admission('Admission_process')">
                    <div class="inner-div">
                        <div class="icon-div">
                            <i class="fa fa-check-square-o"> </i>
                        </div>
                  <p>Apply For Admission </p> 
                    </div>
                </div>



                


              
                <div class="main-div " onclick="_get_panel('my_Admission')">
                 <div class="inner-div">
                 <span class="number"> <?php echo number_format($admission_count); ?></span>
               <div class="icon-div">
                <i class="fa fa-graduation-cap"> </i>
               </div><br>
               My Admission
               </div>
               
                </div>


                <div class="main-div " onclick="_get_requirement('Admission_requirement')">
                    <div class="inner-div">
                        <div class="icon-div">
                            <i class="fa fa-level-up"> </i>
                        </div>
                  <p>Admission Requirements</p> 
                    </div>
                </div>


                </div>
         

              
                     
          
</div>


<?php } ?>




<?php if ($view_content=='profile'){?>

<div class="view-list">
        <div class="image-back-div staff-back-div">
            <div class="cover">
                
                <div class="div-in-header">
                    <div class="div-in">
                        <div class="div-in-text">
                            <h5><i class="fa fa-user-o"></i> My Profile</h5><br clear="all">
                            <p>Student Portal</p>

                            <div class="time-dash-div">
                            <h4 id="datetime">  <?php  $hours=date("h")-1; ?><?php echo date(" $hours:i:s") ?> <sup> <?php echo date("A") ?> </sup></h4>
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


                    



        <div class="profile-back-div">
  

        <div class="profile-pix-div">
                        
        <fieldset  style="width:15%;float:left;border:none;">
                        <legend>UPLOAD PICTURE <I class="fa fa-arrow-down" style="font-size:12pz;color:hsla(0, 100%, 40%, 0.774);"></I></legend>
                             
                        <label>   
                        <div class="profile-img-div">  
                      
                        <?php if ($passport!=''){?>
                                <img src="../admin/uploaded_files/student_pix/<?php echo $passport; ?>" id="passport-5"/>
                                <?php } else { ?>

                                    <img src="../image/user.png" id="passport-5"/>

                               <?php } ?>
                                 
                        <input type="file" id="passport" style="display:none"  name="passport" accept=".jpg,.png" onchange="Test.UpdatePreview(this);"/>

                   
                       
                            </div>
                            </label>


        </fieldset>
                </div>


        <fieldset>
            <div class="password-div">
                <button type="button" title="CHANGE PASSWORD" onclick="_change_password('change_password')"> <i class="fa fa-exchange" ></i> CHANGE PASSWORD</button>
            </div>
                        <legend>PERSONAL INFORMATION</legend>
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
                            <input type="email"  class="text_field" value="<?php echo $phonenumber ?>" placeholder="ENTER YOUR PHONE NUMBER" name="phonenumber" id="phonenumber"  required/>
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

                        <div class="individual-input">
                        <div class="title">SELECT COUNTRY: <span>*</span></div>
                            <select id="country_id" class="text_field selectinput" title="Country" style="background:#fff;width:99.5%" onchange="_get_states()">
                            <?php if($country_id==''){?>
                                <option value="" selected="selected">SELECT COUNTRY</option>
                            <?php  } else { ?>
                                <option value="<?php echo $country_id?>" selected="selected"><?php echo $user_country_name?></option>
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
     
                    <div class="individual-input">
                    <div class="title">STATE: <span>*</span></div>
                    <select id="state_id" class="text_field selectinput" title="Province/State">
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

                <button class="submit-btn" title="UPDATE PROFILE" type="button" id="submit_btn" onclick="_update_profile('<?php echo $student_id ?>')"><i class="fa fa-check"></i> UPDATE</button>


        </div>



<?php } ?>









<?php if ($view_content=='change_password'){?>


<div class="register-back-div animated fadeInRight">
              
            
                  <div class="text-back-div">
                  <h4><i class="fa fa-exchange"></i> CHANGE PASSWORD <button class="close-btn" id="close" onclick="close_btn()" title="Close">X</button></h4>
                  </div>
                 
                  <div class="input-div">
      
                <p>KIndly enter the Old password and Create new password.. <span><i class="fa fa-lock"></i></span></p>
     
                <div class="title">OLD PASSWORD: <span>*</span></div>
                  <input type="password" id="old_password" name="old_password" required class="text_field"  placeholder="ENTER OLD PASSWORD" title="ENTER YOUR OLD PASSWORD">
              
                  <div class="title">CREATE NEW PASSWORD: <span>*</span></div>
                  <input type="password" id="new_password" name="new_password" required class="text_field"  placeholder="CREATE NEW PASSWORD" title="CREATE NEW PASSWORD">
              
                  <div class="title" style="float:left;">COMFIRMED NEW PASSWORD:<span >*</span>  <div id='message' style="float:right;margin-left:10px"></div></div>
                  <input type="password"  id="comfirmed_password" onkeyup="checkpassword()" name="comfirmed_password" required class="text_field" placeholder="COMFIRMED NEW PASSWORD" title="COMFIRMED NEW PASSWORD">
              
               
                  
                      <button class="submit-btn" type="button" style="float:left;" onClick="_update_password('<?php echo $student_id ?>')" title="CHANGE PASSWORD"><i class="fa fa-exchange"></i> CHANGE PASSWORD</button>
        
                  </div>
             
      
      
      </div>
            

<?php } ?>

























        
<?php if ($view_content=='my_Admission'){?>

      
<div class="view-list">
        <div class="image-back-div staff-back-div">
            <div class="cover">
                
                <div class="div-in-header">
                    <div class="div-in">
                        <div class="div-in-text">
                            <h5><i class="fa fa-graduation-cap"></i> My Admission</h5><br clear="all">
                            <p>Student Portal</p>

                            <div class="time-dash-div">
                            <h4 id="datetime"> <?php  $hours=date("h")-1; ?> <?php echo date("$hours:i:s") ?> <sup> <?php echo date("A") ?> </sup></h4>
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


        <div class="search-all-div">
        <div class="create-back-div">
                <div class="create">
                    <h4><i class="fa fa-list"></i> Admission LIST <button class="create-btn" onclick="_get_Admission('Admission_process')" title="Apply For New Admission"><i class="fa fa-check-square-o"></i> Apply For New Admission</button></h4>
                </div>
            </div>
    </div>



    <div class="div-in-list">
    <tbody>
    <div class="table-div">

 
 

        
<table  cellspacing="0">
                       <tr class="tuple">
                           <th>S/N</th>
                           <th>STUDENT ID</th>
                           <th>ADMISSION ID</th>
                           <th class="hidden">STUDENT NAME</th>
                           <th class="hidden">EMAIL</th>
                           <th>PHONE NUMBER</th>
                           <th>YEAR PROGRAM</th>
                           <th>PROFILE STATUS</th>
                           <th>ACTION</th>
                           <th>ADMISSION STATUS</th>
                       </tr>

  

                       
                <?php

                $check_query='get_sub_student_info';
                require_once 'sub-codes.php';

                ?>


</table>           


   
</div>
</tbody> 
           <?php
            if($no==0){?>
            <div class="view-pro-div no-record-div" >
            <h4>NO RECORD FOUND</h4>
            <button class="create-btn" title="Apply For Admission" onclick="_get_Admission('Admission_process')"><i class="fa fa-check-square-o"></i> Apply For Admission</button>
            </div>
            <?php 
            } 
            ?> 



</div>
</div>
  

 




<?php } ?>






<?php if ($view_content=='student_profile'){?>

<div class="requirement-back-div animated fadeInUp">
    <div class="header-requirement">
        <h4><i class="fa fa-user"></i>  STUDENT ADMISSION PROFILE  <button class="close-btn" id="close" onclick="_close()" title="Close">X</button></h4>
    </div>
       
      

    <div class="profile-back-div back-div">
  

  <div class="profile-pix-div">
    

     <?php
    
    $check_query='view_student_profile';
    require_once 'sub-codes.php';
        ?>

     






  </div>
</div>


<?php } ?>



















<?php if ($view_content=='Admission_process'){?>


<div class="register-back-div animated fadeInRight">


                <div class="text-back-div">
                <h4><i class="fa fa-graduation-cap"></i> APPLY FOR ADMISSION <button class="close-btn" id="close" onclick="close_btn()" title="Close">X</button></h4>
                </div>

<div class="input-div">

                     
                       
    
            <div class="next_div" id="register" >
            <div class="info-div">
            <p style="font-size:15px">Fill the form below to apply for admission.</p> 
            </div>
                        <div class="title">FIRST NAME: <span>*</span></div>
                        <input type="text"  class="text_field" name="firstname" id="firstname" placeholder="FIRST NAME" title="FIRST NAME"  required>

                        <div class="title">LAST NAME: <span>*</span></div>
                        <input type="text"  class="text_field" name="lastname" id="lastname" placeholder="LAST NAME" title="LAST NAME"  required>
                     
                        <div class="title">EMAIL ADDRESS: <span>*</span></div>
                        <input type="email"   required class="text_field" name="email" id="email" placeholder="ENTER EMAIL ADDRESS" title="EMAIL ADDRESS">
                        
                        <div class="title">PHONE NUMBER: <span>*</span></div>
                        <input type="text"   required class="text_field" name="phonenumber" id="phonenumber" placeholder="ENTER PHONE NUMBER" title="ENTER PHONE NUMBER">
                        
                        <div class="title">COUNTRY:<span>*</span></div>
                        <input type="text"   required class="text_field" name="country" id="country" placeholder="ENTER YOUR COUNTRY" title="ENTER YOUR COUNTRY">

                        
                        <div class="title">HOME ADDRESS:<span>*</span></div>
                        <input type="text"   required class="text_field" name="address" id="address" placeholder="ENTER YOUR HOME ADDRESS" title="ENTER HOME ADDRESS">

                            <!-- <select name="country" id="country" class="text_field" style="width:94%">
                                    <option value="" selected > SELECT YOUR COUNTRY </option>
                                    <option value="NIGERIA" >NIGERIA</option> 
                                    <option value="USA" >USA</option> 
                                    <option value="CHINA" >CHINA</option> 
                                    <option value="SOUTH AFRICA" >SOUTH AFRICA</option> 
                                    <option value="KENYA"  >KENYA</option> 
                            </select> -->
                        

                      
                        
                        <button class="submit-btn" onclick="_input_check('program');" title="NEXT" type="button" > NEXT <i class="fa fa-arrow-right"></i></button>
               
                        
                </div>
               
               
            <div class="next_div" id="program">
            <P style="font-size:15px">Step: <span>2</span> </P>  
                               
                            <div class="title">PROGRAM:<span>*</span></div>
                            <select name="year_program" id="year_program" class="text_field" style="width:97%">
                                    <option value="" selected onclick="_program('four_program','six_program', 'notefile');"> SELECT YEAR'S PROGRAM </option>
                                    <option value="4 YEARS" id="four" onclick="_four_program('four_program');">4 YEARS MD</option> 
                                    <option value="6 YEARS"  onclick="_six_program('six_program');">6 YEARS PREMED</option> 
                            </select>

                            
                            <div class="program-div" id="four_program" style="display:none;">
                               
                            <div class="info-div">

                            
                    <p>You selected <span>FOUR</span> year's <span>M D</span> program. KIndly, scan and upload your pre-requisite coursework (Minimum 90 Credits) to continue your application.</p>
                    <p style="padding:0px 0px 10px 15px;margin:0px;"><i class="fa fa-edit"></i> Note: Course requirements listed here below..</p>
                    <span class="subject"><i class="fa fa-dot-circle-o"></i> General biology or Zoology</span><br>
                    <span  class="subject"><i class="fa fa-dot-circle-o"></i> Inorganic or General chemistry</span><br>
                    <span  class="subject"><i class="fa fa-dot-circle-o"></i> Organic chemistry or Biochemistry</span><br>
                    <span  class="subject"><i class="fa fa-dot-circle-o"></i> Physics with laboratory </span><br>
                    <span  class="subject"><i class="fa fa-dot-circle-o"></i> English or the Humanities</span><br>
                    <span  class="subject"><i class="fa fa-dot-circle-o"></i> Mathematics</span><br>
                    <p>Upload format: accept <span>'.jpg'</span> or <span>'.png'</span>  </p>
                    </div>
                   
                        <label>    
                        <div class="result-div" title="CLICK HERE TO UPLOAD YOUR RESULT">
                   
                            <div class="result-div-in">
                                <img src="../image/result.png" id="four_year_result" alt="">
                                <p>click here re-upload</p>
                                <input type="file" id="four_year" style="display:none"  name="four_year"  accept=".jpg,.JPG,.jpeg,.JPEG,.png,.PNG" onchange="scan_four_years_result.UpdatePreview(this);"/>

                            </div>
                      
                        </div>
                        </label>


                    <button class="submit-btn back-btn" id="go-top" onclick="_back_panel('register');" title="BACK" type="button" ><i class="fa fa-arrow-left" ></i> BACK </button>
                    <button class="submit-btn" id="four_submit_btn" title="PROCEED TO PAYMENT"  onclick="_apply_for_four_year_admission('<?php echo $student_id ?>');" type="button" > <i class="fa fa-credit-card"></i> PROCEED TO PAYMENT </button>
                   


                            </div>


                    <div class="program-div " id="six_program" style="display:none">   
                    <div class="info-div">
                    <p>You selected <span>SIX</span> year's <span>pre-medical</span> program. KIndly, scan and upload your WAEC/GCE result requirements to continue your application.</p>
                    <p style="padding:0px 0px 10px 15px;margin:0px;"><i class="fa fa-edit"></i> Note: Result Requirements listed here below..</p>
                    <span class="subject"><i class="fa fa-dot-circle-o"></i> Mathematics</span><br>
                    <span  class="subject"><i class="fa fa-dot-circle-o"></i> English</span><br>
                    <span  class="subject"><i class="fa fa-dot-circle-o"></i> Chemistry</span><br>
                    <span  class="subject"><i class="fa fa-dot-circle-o"></i> Physics</span><br>
                    <span  class="subject"><i class="fa fa-dot-circle-o"></i> Biology</span><br>
                    <p>Upload format: accept <span>'.jpg'</span> or <span>'.png'</span>  </p>
   
                    </div>
                        <label>    
                        <div class="result-div" title="CLICK HERE TO UPLOAD YOUR RESULT">
                   
                            <div class="result-div-in">
                                <img src="../image/result.png" id="six_year_result" alt="">
                                <p>click here re-upload</p>
                                <input type="file" id="six_year" style="display:none"  name="six_year"  accept=".jpg,.JPG,.jpeg,.JPEG,.png,.PNG" onchange="scan_six_years_result.UpdatePreview(this);"/>

                            </div>
                      
                        </div>
                        </label>


                    <button class="submit-btn back-btn" id="go-top" onclick="_back_panel('register');" title="BACK" type="button" ><i class="fa fa-arrow-left" ></i> BACK </button>
                    <button class="submit-btn" id="six_submit_btn" title="PROCEED TO PAYMENT"  onclick="_apply_for_six_year_admission('<?php echo $student_id ?>');" type="button" > <i class="fa fa-credit-card"></i> PROCEED TO PAYMENT </button>
                   
                </div>

        </div>










<?php } ?>





<?php if ($view_content=='Admission_requirement'){?>

    <div class="requirement-back-div animated fadeInUp">
        <div class="header-requirement">
            <h4><i class="fa fa-check-square-o"></i> ADMISSION REQUIREMENTS  <button class="close-btn" id="close" onclick="close_btn()" title="Close">X</button></h4>
        </div>
           <div class="div-in-requirement">
               <h4>INFORMATION</h4>
               <p>Have you considered study abroad opportunities outside of the United States or Canada? Situated on an island in the Caribbean, St. Kitts is an economical, 
                accredited campus perfect for those seeking <span>Caribbean medical school</span> admissions. It’s idyllic climate, sunshine, and beaches also provide excellent means of relaxation and recreation, helping you to strike a study-life balance. </p>
                <h4>Admission REQUIREMENTS</h4>
                <p>To be admitted, you must possess the basic matriculation requirements from an accredited institution. 
                This also includes an <span>undergraduate degree (or foreign equivalent)</span> . We recommend applicants complete 
                a minimum of <span>90 hours</span> of undergraduate coursework before matriculation.
                </p>
                <p>In our requirement section, Applicant want to apply for medical program, He/She must meet up the requirements listed here below..</p>
                <p>For: <span>Six (6) years medical program</span> (MD)</p>
                <span class="subject"><i class="fa fa-dot-circle-o"></i> Mathematics</span><br>
                <span  class="subject"><i class="fa fa-dot-circle-o"></i> English</span><br>
                <span  class="subject"><i class="fa fa-dot-circle-o"></i> Chemistry</span><br>
                <span  class="subject"><i class="fa fa-dot-circle-o"></i> Physics</span><br>
                <span  class="subject"><i class="fa fa-dot-circle-o"></i> Biology</span><br>

                <p>For: <span>Four (4) years medical program</span> (MD)</p>
                <span class="subject"><i class="fa fa-dot-circle-o"></i> General Biology or Zoology with laboratory or computer simulation (2 semesters or 8 credit hours)</span><br>
                <span  class="subject"><i class="fa fa-dot-circle-o"></i> Inorganic or General Chemistry with laboratory or computer simulation (2 semesters or 8 credit hours)</span><br>
                <span  class="subject"><i class="fa fa-dot-circle-o"></i> Organic Chemistry or Biochemistry with laboratory or computer simulation (2 semesters or 8 credit hours)</span><br>
                <span  class="subject"><i class="fa fa-dot-circle-o"></i> Physics with laboratory or computer simulation (2 semesters or 8 credit hours)</span><br>
                <span  class="subject"><i class="fa fa-dot-circle-o"></i> English or Humanities equivalent i.e. Social Sciences (2 semesters or 6 credit hours)</span><br>
                <span  class="subject"><i class="fa fa-dot-circle-o"></i> Mathematics (preferably Calculus or Statistics) (1 semester or 3 credit hours)</span><br>
            
                <p><i class="fa fa-dot-circle-o" style="color:hsla(0, 100%, 40%, 0.774);"></i> Note: This applicable to all student, Student are expect to submit list of documents here below</p>
                <span class="subject"><i class="fa fa-dot-circle-o"></i> Official transcript</span><br>
                <span class="subject"><i class="fa fa-dot-circle-o"></i> Two (2) Letter of Recommendation</span><br>
                <span class="subject"><i class="fa fa-dot-circle-o"></i> Personal Essay</span><br>
                <span class="subject"><i class="fa fa-dot-circle-o"></i> Overview of Activities and Achievememts</span><br>

                <h3>International (Non-U.S./Non-Canadian) applicants must submit listed requirements</h3>
                <span class="subject"><i class="fa fa-dot-circle-o"></i> Official credential evaluation report of transcript through World Education Services (WES); Visit www.wes.org</span><br>
                <span class="subject"><i class="fa fa-dot-circle-o"></i> Official report of scores on the Test of English as a Foreign Language (TOEFL) or International English Language Testing System (IELTS) (This is on the school website, but it is not applicable to Nigerian students)</span><br>
                <span class="subject"><i class="fa fa-dot-circle-o"></i> Refundable Security Deposit of $2,000 USD</span><br>
                

                
</div>
    </div>


<?php } ?>

    