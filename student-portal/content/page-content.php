 
<?php if ($view_content=='get_payment'){?>
<div class="payment-div animated zoomIn">
    <div class="payment-div-in">
        <div class="payment-icon-div animated fadeInLeft">
            <div class="img-div" >
                <img src="images/payment-icon.gif" alt="Payment Icon">
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
                <img src="images/icon.png" alt="cmi icon">
            </div>
        </div>
        <?php 
        $check_query='student_admission_panel';
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
                            <h4 id="digitalclock"> </h4>
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
              
              
              
                <div class="main-div " id="s_admission" onclick="_get_Admission('Admission_process','admission')">
                    <div class="inner-div">
                        <div class="icon-div">
                            <i class="fa fa-check-square-o"> </i>
                        </div>
                  <p>Apply For Admission </p> 
                    </div>
                </div>



                


              
                <div class="main-div" id="s_myadmission" onclick="_get_panel('my_Admission','myadmission')">
                 <div class="inner-div">
                 <span class="number"> <?php  echo $admission_count; ?></span>
               <div class="icon-div">
                <i class="fa fa-graduation-cap"> </i>
               </div><br>
               My Admission
               </div>
               
                </div>


                <div class="main-div" id="s_requirement" onclick="_get_requirement('Admission_requirement','requirement')">
                    <div class="inner-div">
                        <div class="icon-div">
                            <i class="fa fa-level-up"> </i>
                        </div>
                  <p>Admission Requirement</p> 
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

                            <div class="time-dash-div time">
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


                    



        <div class="profile-back-div">
  
            <div class="profile-pix-div">
            <div class="password-div">
                    <button type="button" title="CHANGE PASSWORD" onclick="_change_password('change_password')"> <i class="fa fa-exchange" ></i> CHANGE PASSWORD</button>
                </div>  
            <fieldset class="pix_fieldset">
                
                            <legend style="text-align:left;">UPLOAD PICTURE <I class="fa fa-arrow-down" style="font-size:12pz;color:hsla(0, 100%, 40%, 0.774);"></I></legend>
                                
                            <label>   
                            <div class="profile-img-div">  
                        
                            <?php if ($passport!=''){?>
                                    <img src="../admin/a/uploaded_files/student_pix/<?php echo $passport; ?>" id="passport-5"/>
                                    <?php } else { ?>

                                        <img src="images/user.png" id="passport-5"/>

                                <?php } ?>
                                    
                            <input type="file" id="passport" style="display:none"  name="passport" accept=".jpg,.png" onchange="Test.UpdatePreview(this);"/>

                    
                        
                                </div>
                                </label>

            </fieldset>
                    </div>

            
        <fieldset class="info_field">
           
                        <legend style="text-align:left;">PERSONAL INFORMATION</legend>
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
                        <div class="title">SELECT DATE OF BIRTH: <span>*</span></div>
                            <input type="DATE" class="text_field"  placeholder="SELECT DATE OF BIRTH" value="<?php echo $dob ?>" name="dob" id="dob" required/>
                        </div>

                        <div class="individual-input" >
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
                    <select id="state_id" class="text_field select_field" title="Province/State">
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
                      <div class="alert">
                      KIndly enter the Old password and Create new password <i class="fa fa-lock"></i>
                      </div>

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


        <div class="search-all-div">
        <div class="create-back-div">
                <div class="create">
                    <h4><i class="fa fa-list"></i> ADMISSION CHECK LIST <button class="create-btn" onclick="_get_Admission('Admission_process')" title="Apply For New Admission"><i class="fa fa-check-square-o"></i> Apply For New Admission</button></h4>
                </div>
            </div>
    </div>



    <div class="div-in-list">
    <tbody>
    <div class="table-div animated fadeIn">

 
 

        
<table  cellspacing="0">
                       <tr class="tuple">
                           <th>S/N</th>
                           <th>ADMISSION ID</th>
                           <th class="hidden">STUDENT NAME</th>
                           <th class="hidden">EMAIL</th>
                           <th>PHONE NUMBER</th>
                           <th>PROGRAM</th>
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

<div class="requirement-back-div profile_div animated fadeInUp">
    <div class="header-requirement">
        <h4><i class="fa fa-user"></i>  STUDENT ADMISSION PROFILE  <button class="close-btn" id="close" onclick="close_btn()" title="Close">X</button></h4>
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
          
            <div class="alert"> 
        <i class="fa fa-edit" style=" color:hsla(0, 100%, 40%, 0.678);"></i> Fill the form below to apply for admission
        </div>
     
            
          
                        <div class="title">FIRST NAME: <span>*</span></div>
                        <input type="text"  class="text_field" name="firstname" id="firstname" placeholder="FIRST NAME" title="FIRST NAME"  required>

                        <div class="title">LAST NAME: <span>*</span></div>
                        <input type="text"  class="text_field" name="lastname" id="lastname" placeholder="LAST NAME" title="LAST NAME"  required>
                     
                        <div class="title">EMAIL ADDRESS: <span>*</span></div>
                        <input type="email"   required class="text_field" name="email" id="email" placeholder="ENTER EMAIL ADDRESS" title="EMAIL ADDRESS">
                        
                        <div class="title">PHONE NUMBER: <span>*</span></div>
                        <input type="text"  onkeypress="isNumber_Check();"  required class="text_field" name="phonenumber" id="phonenumber" placeholder="ENTER PHONE NUMBER" title="ENTER PHONE NUMBER">
                        
                        <div class="title">SELECT COUNTRY:<span>*</span></div>
                        <select id="country_id" class="text_field selectinput" title="Country" style="background:#fff;width:100%" onchange="_get_states();">
                            <option value="" selected="selected">SELECT YOUR COUNTRY</option>
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

                    
                            <div class="title">SELECT STATE: <span>*</span></div>
                            <select id="state_id" class="text_field selectinput" title="Province/State" style="background:#fff;width:100%">
                                <option value="" selected="selected">SELECT COUNTRY FIRST</option>
                          </select>
     
                        
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
                   
                        <button class="submit-btn" id="next_btn" onclick="_input_check('program');" title="NEXT" type="button" > NEXT <i class="fa fa-arrow-right"></i></button>
                  
                </div>
               
               
            <div class="next_div" id="program" >
                               
                            <div class="title">SELECT PROGRAM:<span>*</span></div>

                <select  id="program_id" class="text_field" style="width:100%" onChange="_program();">
                        <option value="" selected="selected">SELECT PROGRAM</option>
                            <?php
                            $query=mysqli_query($conn,"SELECT * FROM program_tab");
                            while($fetch=mysqli_fetch_array($query)){
                            $program_id=$fetch['program_id'];
                            $program_name=$fetch['program_name'];
                            ?>
                                <option value="<?php echo $program_id?>"><?php echo $program_name?></option>
                            <?php }?>            
                </select>

                            <button class="submit-btn back-btn" id="go-back-btn" onclick="_back_panel('register');" title="BACK" type="button" ><i class="fa fa-arrow-left" ></i> BACK </button>
                          
                            <div class="program-div" id="program-1" style="display:none;">
                               
                                        <div class="info-div">           
                                            <p>You select <span>FOUR(4) YEAR'S MD PROGRAM</span>, KIndly provide the <span>name of your current institution</span>, scan and upload your <span>SSCE Result</span> and <span>HND/DEGREE</span> result.</p>
                                            <p>Upload format: accept <span>'.jpg'</span> or <span>'.png'</span>  </p>
                                        </div>
                            
                                    <div class="title">NAME OF YOUR CURRENT INSTITUTION: <span>*</span></div>
                                    <input type="text" required class="text_field" name="schoolname" id="schoolname_four_years" placeholder="ENTER YOUR SCHOOL NAME" title="ENTER YOUR SCHOOL NAME">
                                    
                                   
                                    <div class="title">UPLOAD SSCE RESULT: <span>*</span></div>
                                    <label>
                                    <div class="result-div" title="CLICK HERE TO UPLOAD YOUR SSCE RESULT">
                            
                                        <div class="result-div-in">
                                            <img src="images/result.png" id="ssce_img_result" alt=""/>
                                            <p>click here re-upload</p>
                                            <input type="file" id="four_year_ssce_result" style="display:none"  name="ssce_result"  accept=".jpg,.JPG,.jpeg,.JPEG,.png,.PNG" onchange="scan_ssce_img_result.UpdatePreview(this);"/>

                                        </div>
                                
                                    </div>
                                    </label>




                                    <div class="title">UPLOAD HND/DEGREE RESULT: <span>*</span></div>
                                    <label>
                                    <div class="result-div" title="CLICK HERE TO UPLOAD YOUR HND/DEGREE RESULT">
                            
                                        <div class="result-div-in">
                                            <img src="images/result.png" id="hnd_or_degree_img_result" alt=""/>
                                            <p>click here re-upload</p>
                                            <input type="file" id="hnd_or_degree_result" style="display:none"  name="four_year"  accept=".jpg,.JPG,.jpeg,.JPEG,.png,.PNG" onchange="scan_hnd_or_degree_img_result.UpdatePreview(this);"/>

                                        </div>
                                
                                    </div>
                                    </label>



                                <button class="submit-btn back-btn" id="go-top" onclick="_back_panel('register');" title="BACK" type="button" ><i class="fa fa-arrow-left" ></i> BACK </button>
                                <button class="submit-btn" id="four_submit_btn" title="PROCEED TO PAYMENT"  onclick="_apply_for_four_year_admission('<?php echo $student_id ?>');" type="button" > PROCEED <i class="fa fa-arrow-right"></i> </button>
                            


                            </div>


                    <div class="program-div " id="program-2" style="display:none">   
                            <div class="info-div">
                                <p>You select <span>SIX(6) YEAR'S PRE-MEDICAL PROGRAM</span>, Kindly scan and upload your <span>SSCE result</span>.</p>
                                 <p>Upload format: accept <span>'.jpg'</span> or <span>'.png'</span>  </p>
        
                            </div>

                            <div class="title">UPLOAD SSCE RESULT: <span>*</span></div>

                                <label>    
                                <div class="result-div" title="CLICK HERE TO UPLOAD YOUR SSCE RESULT">
                        
                                    <div class="result-div-in">
                                        <img src="images/result.png" id="six_year_result" alt="result image">
                                        <p>click here re-upload</p>
                                        <input type="file" id="six_years_ssce_result" style="display:none"  name="six_year"  accept=".jpg,.JPG,.jpeg,.JPEG,.png,.PNG" onchange="scan_six_years_result.UpdatePreview(this);"/>

                                    </div>
                            
                                </div>
                                </label>


                            <button class="submit-btn back-btn" id="go-top" onclick="_back_panel('register');" title="BACK" type="button" ><i class="fa fa-arrow-left" ></i> BACK </button>
                            <button class="submit-btn" id="six_submit_btn" title="PROCEED TO PAYMENT"  onclick="_apply_for_six_year_admission('<?php echo $student_id ?>');" type="button" >  PROCEED <i class="fa fa-arrow-right"></i> </button>
                   
                </div>

                
                <div class="program-div " id="program-3" style="display:none">   
                            <div class="info-div">
                                <p style="margin:0px;">You select <span>STUDENT TRANSFER</span>, Kindly provide <span>name of your current institution</span>, <span>name of your department</span>, <span>level</span>, <span>student ID</span> and upload your <span>SSCE</span> result.</p>
                               <p> Upload format: accept <span>'.jpg'</span> or <span>'.png'</span>  </p>
        
                            </div>
                            <div class="title">NAME OF YOUR INSTITUTION: <span>*</span></div>
                            <input type="text" id="transfer_schoolname" required class="text_field" name="transfer_schoolname" placeholder="ENTER NAME OF YOUR INSTITUTION" title="ENTER NAME OF YOUR INSTITUTION"/>
                           
                            <div class="title">NAME OF YOUR DEPARTMENT: <span>*</span></div>
                            <input type="text" id="transfer_department_name" required class="text_field" name="transfer_department_name"  placeholder="ENTER NAME OF YOUR DEPARTMENT" title="ENTER NAME OF YOUR DEPARTMENT"/>
                           
                            <div class="title">LEVEL: <span>*</span></div>
                            <input type="text" id="transfer_level" required class="text_field" name="transfer_level"  placeholder="ENTER YOUR LEVEL" title="ENTER YOUR LEVEL"/>
                           
                            <div class="title">STUDENT ID: <span>*</span></div>
                            <input type="text" id="transfer_student_id" required class="text_field" name="transfer_student_id"  placeholder="ENTER YOUR STUDENT ID" title="ENTER YOUR STUDENT ID"/>
                           
                            <div class="title">UPLOAD SSCE RESULT: <span>*</span></div>
                            <label>
                            <div class="result-div" title="CLICK HERE TO UPLOAD YOUR SSCE RESULT">
                        
                                    <div class="result-div-in">
                                        <img src="images/result.png" id="transfer_ssce_img_result" alt="ssce image">
                                        <p>click here re-upload</p>
                                        <input type="file" id="student_trans_ssce_result" style="display:none"  name="ssce_result"  accept=".jpg,.JPG,.jpeg,.JPEG,.png,.PNG" onchange="scan_transfer_ssce_img_result.UpdatePreview(this);"/>

                                    </div>
                            
                                </div>
                                </label>


                            <button class="submit-btn back-btn" id="go-top" onclick="_back_panel('register');" title="BACK" type="button" ><i class="fa fa-arrow-left" ></i> BACK </button>
                            <button class="submit-btn" id="submit_btn" title="PROCEED TO PAYMENT"  onclick="_apply_for_transfer('<?php echo $student_id ?>');" type="button" >PROCEED <i class="fa fa-arrow-right"></i> </button>
                   
                </div>

        </div>










<?php } ?>





<?php if ($view_content=='Admission_requirement'){?>

    <div class="requirement-back-div animated fadeInUp">
        <div class="header-requirement">
            <h4><i class="fa fa-check-square-o"></i> ADMISSION REQUIREMENTS  <button class="close-btn" id="close" onClick="close_btn()" title="Close">X</button></h4>
        </div>
           <div class="div-in-requirement">
               <h4>INFORMATION</h4>
               <p>Have you considered study abroad opportunities outside of the United States or Canada? Situated on an island in the Caribbean, St. Kitts is an economical, 
                accredited campus perfect for those seeking <span>Caribbean medical school</span> admissions. It’s idyllic climate, sunshine, and beaches also provide excellent means of relaxation and recreation, helping you to strike a study-life balance. </p>
                <h4>Admission Requirement</h4>
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

    