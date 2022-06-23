<?php if ($view_content=='admitted_status'){?>
<div class="payment-div admission-status-div animated zoomIn">
    <div class="payment-div-in status-div-in">
    <div class="close" alt="close" title="close" onclick="close_adms();">X</div>
        <div class="payment-icon-div status_icon animated fadeInLeft">
            <div class="img-div" >
                <img src="../../image/icon.png" alt="cmi logo">
            </div>
        </div>
       
       <?php
       $check_query='student_adminssion_panel';
       require_once 'sub-codes.php'
       ?>
   <!-- <button class="proceed-btn ok_btn" title="CANCEL ADMISSION">CANCEL ADMISSION</button> -->
    </div>
</div>
<?php } ?>



<?php if ($view_content=='dashboard'){?>
    <div class="image-back-div">
            <div class="cover">
                
                <div class="div-in-header">
                    <div class="div-in">
                        <div class="div-in-text">
                            <h5 ><i class="fa fa-dashboard"></i> Dashboard</h5><br clear="all">
                            <p>Adminstrators Portal</p>

                            <div class="time-dash-div">
                            <span>Current Time</span>
                            <h4 id="digitalclock"> </h4>
                            <span> <?php $date = date("l, dS F, Y");
				                echo $date 
                                ?> 
                            </span>
                            </div>
                        </div>

                        <div class="picture-back-div">
                <div class="picture-div animated zoomIn">

              <?php if ($s_passport!=''){?>
              <img src="../a/uploaded_files/staff_pix/<?php echo $s_passport; ?>" id="passport-3"/>
              <?php } else { ?>
              <img src="../../image/user.png" id="passport-3"/>
              <?php } ?>


                        </div>
                        <div class="wel_name_div animated fadeIn">
                        <h3>Welcome Back!</h3>
                        <h2><?php echo ucwords(strtolower("$s_firstname $s_lastname")) ?>  </h2>
                      
                        <span>Last Login Date | <?php echo $s_last_login ?></span>
                        </div>
                        </div>
                        

                    
                    </div>

                </div>
            </div>
        </div>



            <div class="dashboard-main-div">
                <div class="dash-div-in">
                    <?php if ($s_role_id>1){?>
                <div class="main-div first-link" onClick="_get_panel('get_all_staff', 'admin')">
                    <div class="inner-div">
                     <?php
                      $query=mysqli_query($conn,"SELECT * FROM admin_tab WHERE admin_id!='$s_admin_id'  ");
                      $admin_count=mysqli_num_rows($query);
                      ?>
                      <span class="number"><?php echo $admin_count?></span>
                        <div class="icon-div">
                            <i class="fa fa-user-plus"> </i>
                        </div><br>
                    Staff
                    </div>
                </div>
<?php } ?>
                <div class="main-div" onClick="_get_panel('registered_student','reg_student')">
                    <div class="inner-div">
                    <?php
                      $query=mysqli_query($conn,"SELECT * FROM student_registration_tab  ");
                      $agent_count=mysqli_num_rows($query);
                      ?>
                      <span class="number"><?php echo $agent_count?></span>
                        <div class="icon-div">
                            <i class="fa fa-users"> </i>
                        </div><br>
                    Agent/User
                    </div>
                </div>


                <div class="main-div "onClick="_get_panel('student_check_list','reg_student')">
                    <div class="inner-div text-color">
                        <?php
                        $query=mysqli_query($conn,"SELECT * FROM s_admission_tab");
                        $applicant_count=mysqli_num_rows($query);
                        ?>
                        <span class="number"> <?php echo $applicant_count?> </span>                      
                        <div class="icon-div">
                            <i class="fa fa-graduation-cap"> </i>
                        </div><br>
                   Applicant
                    </div>
                </div>

              
                </div>
         

              
          
</div>





<?php } ?>
















<?php if ($view_content=='register_staff'){?>


            <div class="register-back-div animated fadeInRight">

            <div class="text-back-div">
            <h4><i class="fa fa-registered"></i> REGISTER NEW ADMIN <button class="close-btn" id="close" onclick="close_btn()" title="Close">X</button></h4>
            </div>
            
            <div class="input-div">
            <div class="info-div">
            <p><i class="fa fa-edit" style="color:hsla(0, 100%, 40%, 0.774);"></i> Fill all (<span>*</span>) to continue New Admin registration</p>
            </div>
            <div class="title">FIRST NAME: <span>*</span></div>
            <input type="text" id="firstname" required class="text_field"  placeholder="FIRST NAME" title="FIRST NAME"/>

            <div class="title">LAST NAME: <span>*</span></div>
            <input type="text"  id="lastname" required class="text_field" placeholder="LAST NAME" title="LAST NAME"/>

            <div class="title">EMAIL ADDRESS: <span>*</span></div>
            <input type="email" id="email" required class="text_field"  placeholder="ENTER EMAIL ADDRESS" title="EMAIL ADDRESS"/>

            <div class="title">PHONE NUMBER: <span>*</span></div>
            <input type="text" id="phonenumber"  onkeypress="isNumber_Check()"   required class="text_field" placeholder="PHONE NUMBER" title="PHONE NUMBER"/>
            

            <div class="title" >SELECT ROLE: <span>*</span></div>
                <select id="role_id" required class="text_field"  style="width:100%;color: #777777; " title="SELECT ROLE">
                <?php
                    $query=mysqli_query($conn,"SELECT * FROM role_tab ORDER BY role_name ASC");
                    while($fetch=mysqli_fetch_array($query)){
                    $role_id=$fetch['role_id'];
                    $role_name=strtoupper($fetch['role_name']);
                        if($role_id<2){     
                    ?>
                    
                    <option value="<?php echo $role_id?>" selected><?php echo $role_name?></option>
                    <?php	
                    } }
                    ?>
                </select>
            

            
                <div class="title">SELECT STATUS: <span>*</span></div>
                <select id="status_id" required class="text_field"  style="width:100%;color: #777777; " title="SELECT STATUS">
                <option value="" selected="selected">SELECT STATUS</option>
                <?php
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
            
                <button class="submit-btn" type="button" id="register_btn" onClick="_register_staff()" title="SUBMIT"><i class="fa fa-check"></i> SUBMIT</button>

            </div>
            </div>


<?php } ?>











<?php if ($view_content=='backend_settings'){?>


<div class="register-back-div animated fadeInRight">

<div class="text-back-div">
<h4><i class="fa fa-gears"></i> SETTINGS <button class="close-btn" id="close" onclick="close_btn()" title="Close">X</button></h4>
</div>


						      
<div class="input-div">

    <div class="alert alert-success">
                <h3 style="color:#996633;margin-bottom:5px; font-size:14px">BANK ACCOUNT DETAILS</h3>
            <div class="title">BANK NAME: <span>*</span></div>
            <input type="text" id="bankname" value="<?php echo $bank_name ?>"  required class="text_field"  placeholder="BANK NAME" title="BANK NAME"/>

            <div class="title">ACCOUNT NAME: <span>*</span></div>
            <input type="text"  id="accountname" value="<?php echo $account_name ?>" required class="text_field" placeholder="ACCOUNT NAME" title="ACCOUNT NAME"/>

            <div class="title">ACCOUNT NUMBER: <span>*</span></div>
            <input type="text" id="accountnumber" value="<?php echo $account_number ?>" required class="text_field"  placeholder="ACCOUNT NUMBER" title="ACCOUNT NUMBER"/>

    </div>

    

    <div class="alert alert-success">
                <h3 style="color:#996633;margin-bottom:5px; font-size:14px">ADMISSION FORM FEE</h3>
            <div class="title">ADMISSION FEE: <span>*</span></div>
            <input type="text" id="admission_form_fee" value="<?php echo $admission_form_fee ?>" required class="text_field"  placeholder="ADMISSION FEE" title="ADMISSION FEE"/>
    </div>

    <div class="alert alert-success">
                <h3 style="color:#996633;margin-bottom:5px; font-size:14px">CMI CONTACT INFO</h3>
            <div class="title">CMI EMAIL ADDRESS: <span>*</span></div>
            <input type="text" id="support_email" value="<?php echo $support_email ?>" required class="text_field"  placeholder="CMI EMAIL ADDRESS" title="CMI EMAIL ADDRESS"/>

            <div class="title">CMI PHONE NUMBER: <span>*</span></div>
            <input type="text"  id="support_phonenumber" value="<?php echo $support_phonenumber ?>" required class="text_field" placeholder="CMI PHONE NUMBER" title="CMI PHONE NUMBER"/>

            <div class="title">CMI ADDRESS/LOCATION: <span>*</span></div>
            <input type="text" id="support_address" value="<?php echo $support_address ?>" required class="text_field"  placeholder="CMI ADDRESS/LOCATION" title="CMI ADDRESS/LOCATION"/>

    </div>

						
    <div class="alert alert-success">
            <h3 style="color:#996633;margin-bottom:5px; font-size:14px">SMTP DETAILS</h3>
            <div class="title">SENDER NAME: <span>*</span></div>
            <input type="text" id="sendername" value="<?php echo $sender_name ?>" required class="text_field"  placeholder="SENDER NAME" title="SENDER NAME"/>

            <div class="title">SMTP HOST: <span>*</span></div>
            <input type="text"  id="smtphost" value="<?php echo $smtp_host ?>" required class="text_field" placeholder="SMTP HOST" title="SMTP HOST"/>

            <div class="title">SMTP USERNAME: <span>*</span></div>
            <input type="text" id="smtpusername" value="<?php echo $smtp_username ?>" required class="text_field"  placeholder="SMTP USERNAME" title="SMTP USERNAME"/>

            <div class="title">SMTP PASSWORD: <span>*</span></div>
            <input type="text" id="smtppassword" value="<?php echo $smtp_password ?>" required class="text_field"  placeholder="SMTP PASSWORD" title="SMTP PASSWORD"/>

            <div class="title">SMTP PORT: <span>*</span></div>
            <input type="text" id="smtpport" value="<?php echo $smtp_port ?>" required class="text_field"  placeholder="SMTP PORT" title="SMTP PORT"/>

    </div>


        <button class="submit-btn" type="button" id="update_btn" onClick="_update_backend_setting()" title="UPDATE SETTING"><i class="fa fa-check"></i> UPDATE SETTING</button>
</div>
</div>


<?php } ?>

































<?php if ($view_content=='staff_profile'){?>

         
<div class="view-list">
        
<?php $callclass->_admin_sub_panel();?>


        <div class="profile-back-div">
       <?php
            $check_query='view_staff_profile';
            require_once 'sub-codes.php'
?>
        </div>



<?php } ?>











    <?php if ($view_content=='get_all_staff'){?>

        <div class="view-list">
        <div class="image-back-div staff-back-div">
            <div class="cover">
                
                <div class="div-in-header">
                    <div class="div-in">
                        <div class="div-in-text">
                            <h5><i class="fa fa-dashboard"></i> All Adminstrator's</h5><br clear="all">
                            <p>Adminstrator Portal</p>

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
                    <select id="status_id"  class="search select" onchange="_fetch_admin_list()">
                    <option value="" selected="selected">ALL ADMIN STATUS</option>
                    <?php 
                    $status_query= mysqli_query($conn,"SELECT distinct(a.status_id),b.`status_name` FROM admin_tab a, status_tab b where a.status_id=b.status_id AND a.role_id=1");
                    while($status_sel=mysqli_fetch_array($status_query)){
                    $status_id=$status_sel[0];
                    $status_name=$status_sel[1];
                    ?>
                    <option value="<?php echo $status_id;?>"><?php echo $status_name;?></option>
                    <?php } ?>
                    </select>
                    <input type="text" class="search search_content" id="search_txt"  onkeyup="_fetch_admin_list()" placeholder="Type here to search..." />
                   
                        <div class="create-back-div">
                            <div class="create">
                                <h4><i class="fa fa-users"></i> ADMINSTRATOR'S LIST <button class="create-btn" onClick="_get_slide_panel('register_staff')" title="Create A New Admin"><i class="fa fa-plus"></i> Create A New Admin</button></h4>
                            </div>
                        </div>
                </div>
   

                <div class="list-back-div">
                    <div class="div-in-list">     
                        <div class="animated fadeIn" id="search-content">
                            <?php
                                $status_id='';
                                $search_txt='';
                                $check_query='view_staff';
                                require_once 'sub-codes.php';
                                ?>
                        </div> 
                
                    </div>
                </div>
               
                <script>
    superplaceholder({
	el: search_txt,
		sentences: [ 'TYPE HERE TO SEARCH...', 'INPUT NAME OR ADMIN ID OR EMAIL ADDRESS'],
		options: {
		letterDelay: 70,
		loop: true,
		startOnFocus: false
	}
});
</script>


 <?php } ?>







  

<?php if ($view_content=='registered_student'){?>
 
<div class="view-list">

<div class="image-back-div staff-back-div">
    <div class="cover">
        
        <div class="div-in-header">
            <div class="div-in">
                <div class="div-in-text">
                    <h5><i class="fa fa-dashboard"></i> Agent/User List</h5><br clear="all">
                    <p>Adminstrator Portal</p>

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
            <input type="text" id="search_txt"  onkeyup="_fetch_student_list()" class="search" placeholder="Type here to search"  />
           
                <div class="create-back-div">
                    <div class="create">
                        <h4><i class="fa fa-users"></i> REGISTERED STUDENT LIST </h4>
                    </div>
                </div>
        </div>


            <div class="list-back-div">
                <div class="div-in-list">
                <div class="animated fadeIn" id="search-content">
                        <?php
                          $search_txt='';
                        $check_query='registered_student_list';
                        require_once 'sub-codes.php';
                        ?>
                      </div>  
            </div>
        </div>
    
        <script>
    superplaceholder({
	el: search_txt,
		sentences: [ 'TYPE HERE TO SEARCH...', 'INPUT NAME OR STUDENT ID OR EMAIL ADDRESS'],
		options: {
		letterDelay: 70,
		loop: true,
		startOnFocus: false
	}
});
</script>

<?php } ?>


















        
<?php if ($view_content=='student_check_list'){?>

      
<div class="view-list">
        <div class="image-back-div staff-back-div">
            <div class="cover">
                
                <div class="div-in-header">
                    <div class="div-in">
                        <div class="div-in-text">
                            <h5><i class="fa fa-dashboard"></i> Applicant Student</h5><br clear="all">
                            <p>Adminstrator Portal</p>

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
            <select id="status_id"  class="search select" onchange="_fetch_student_adms_list()">
            <option value="" selected="selected">SELECT PROFILE STATUS</option>
            <?php 

            $status_query= mysqli_query($conn,"SELECT distinct(a.profile_status_id),b.`profile_status_name` FROM  s_admission_tab a, s_profile_status_tab b WHERE a.profile_status_id=b.profile_status_id");
            while($status_sel=mysqli_fetch_array($status_query)){
            $status_id=$status_sel[0];
            $status_name=$status_sel[1];
            ?>
            <option value="<?php echo $status_id;?>" ><?php echo $status_name;?></option>
            <?php } ?>
            </select>
                   
    <input type="text" class="search search_content" id="search_txt"  onkeyup="_fetch_student_adms_list()"  placeholder="Type here to search"  />
   
        <div class="create-back-div">
            <div class="create">
                <h4><i class="fa fa-users"></i> APPLICANT CHECK LIST </h4>
            </div>
        </div>
</div>


   
                        <div class="animated fadeIn" id="search-content">
                            <?php
                            $status_id='';
                            $search_txt='';
                            $check_query='get_sub_student_info';
                            require_once 'sub-codes.php';
                            ?>
                      </div>
     
    </div>

    <script>
    superplaceholder({
	el: search_txt,
		sentences: [ 'TYPE HERE TO SEARCH...', 'INPUT STUDENT ID OR ADMISSION ID OR EMAIL ADDRESS'],
		options: {
		letterDelay: 70,
		loop: true,
		startOnFocus: false
	}
});
</script>

  

<?php } ?>








<?php if ($view_content=='student_adms_profile'){?>

<div class="requirement-back-div profile_div animated fadeInUp">
    <div class="profile-header">
        <h4><i class="fa fa-user"></i>  STUDENT PROFILE  <button class="close-btn" id="close" onclick="_close()" title="Close">X</button></h4>
    </div>
       
      

            <div class="profile-back-div back-div">
          
        
          <div class="profile-pix-div">
                  
           
                 <?php
                $check_query='view_student_adms_profile';
                require_once 'sub-codes.php';
                ?>

            
              </div>
            </div>


<?php } ?>





<?php if ($view_content=='change_password'){?>
<div class="register-back-div animated fadeInRight">
              
            
                  <div class="text-back-div">
                  <h4><i class="fa fa-lock"></i> CHANGE PASSWORD <button class="close-btn" id="close" onclick="close_btn()" title="Close">X</button></h4>
                  </div>
                 
                  <div class="input-div">
                      <div class="next_div">                
                  <div class="info-div">
                <p>KIndly enter the <span>old password</span>  and <span>create new password</span> <span><i class="fa fa-lock"></i></span></p>
                </div>
                <div class="title">OLD PASSWORD: <span>*</span></div>
                  <input type="password" id="old_password" name="old_password" required class="text_field"  placeholder="ENTER OLD PASSWORD" title="ENTER YOUR OLD PASSWORD">
              
                  <div class="title">CREATE NEW PASSWORD: <span>*</span></div>
                  <input type="password" id="new_password" name="new_password" required class="text_field"  placeholder="CREATE NEW PASSWORD" title="CREATE NEW PASSWORD">
              
                  <div class="title" style="float:left;">COMFIRMED NEW PASSWORD:<span >*</span>  <div id='message' style="float:right;margin-left:10px"></div></div>
                  <input type="password"  id="comfirmed_password" onkeyup="checkpassword()" name="comfirmed_password" required class="text_field" placeholder="COMFIRMED NEW PASSWORD" title="COMFIRMED NEW PASSWORD">
                  
                      <button class="submit-btn" type="button" style="float:left;" onClick="_update_password('<?php echo $s_admin_id ?>')" title="CHANGE PASSWORD"><i class="fa fa-exchange"></i> CHANGE PASSWORD</button>
        
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
                            <p>Adminstrator Portal</p>

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



        <div class="profile-back-div">
      

        <div class="profile-pix-div">
        <div class="password-div">
        <button type="button" title="CHANGE PASSWORD" onclick="_change_password('change_password')"> <i class="fa fa-exchange" ></i> CHANGE PASSWORD</button>
        </div>    

        <fieldset class="pix_fieldset">
            
        <legend style="text-align:left;font-weight: bold;">UPLOAD PICTURE <I class="fa fa-arrow-down" style="font-size:12pz;color:hsla(0, 100%, 40%, 0.774);"></I></legend>
                <label>  
                          <?php if ($s_passport!='') { ?> 

                                <div class="profile-img-div">  
                                    <img src="../a/uploaded_files/staff_pix/<?php echo $s_passport; ?>" id="passport-5"/>
                                    <input type="file" id="passport" style="display:none"  accept=".jpg,.png" onchange="Tests.UpdatePreview(this);"/>
                                </div>

                                <?php } else { ?>

                                <div class="profile-img-div"> 
                                    <img src="../../image/user.png" id="passport-5"/>  
                                    <input type="file" id="passport" style="display:none"   accept=".jpg,.png" onchange="Test.UpdatePreview(this);"/>
                                </div>
                            
                            <?php } ?>

               </label>	
                                 
        </fieldset>
                </div>

       <fieldset class="info_field">
            
         <legend style="text-align:left;font-weight: bold;">PERSON INFORMATION</legend>
                        <div class="individual-input">
                        <div class="title">FIRST NAME: <span>*</span></div>
                            <input  type="text" class="text_field" placeholder="ENTER YOUR FIRST NAME" value="<?php echo $s_firstname?>" name="firstname" id="firstname"  required/>
                        </div>
                      
                        <div class="individual-input">
                        <div class="title">MIDDLE NAME: <span>*</span></div>
                            <input type="text"  class="text_field" placeholder="ENTER YOUR MIDDLE NAME" value="<?php echo $s_middlename?>" name="middlename" id="middlename" required/>
                        </div>

                        <div class="individual-input">
                        <div class="title">LAST NAME: <span>*</span></div>
                            <input type="text"  class="text_field" placeholder="ENTER YOUR LAST NAME"  value="<?php echo $s_lastname?>" name="lastname" id="lastname"  required/>
                        </div>

                        <div class="individual-input">
                        <div class="title">EMAIL ADDRESS: <span>*</span></div>
                            <input type="email"  class="text_field" placeholder="ENTER YOUR EMAIL ADDRESS" value="<?php echo $s_email?>" name="email" id="email"  required/>
                        </div>

                        <div class="individual-input">
                        <div class="title">PHONE NUMBER: <span>*</span></div>
                            <input type="email"  class="text_field" placeholder="ENTER YOUR PHONE NUMBER" value="<?php echo $s_phonenumber?>" name="phonenumber" id="phonenumber"  required/>
                        </div>

                        <div class="individual-input">
									 <div class="title">GENDER: <span>*</span></div>
							<select name="gender" id="gender" class="text_field select_field">
									<option value=''selected>SELECT GENDER</option> 
									<?php if ($s_gender =='MALE'){ ?>
										<option value="<?php echo strtoupper($s_gender) ?>"selected><?php echo strtoupper($s_gender)?></option>
										<option value="FEMALE">FEMALE</option> 
										<?php } elseif ($s_gender =='FEMALE') { ?>
											<option value="<?php echo strtoupper($s_gender) ?>"selected><?php echo strtoupper($s_gender)?></option>
											<option value="MALE">MALE</option> 
									<?php } else { 
										if ($s_gender=='') { ?>
											<option value="MALE">MALE</option> 
											<option value="FEMALE">FEMALE</option>
									
								
									<?php }	} ?>
							</select>
						</div>


                        <div class="individual-input">
                        <div class="title">DATE OF BIRTH: <span>*</span></div>
                            <input type="date" class="text_field" value="<?php echo $s_dob?>" name="dob" id="dob" required/>
                        </div>

                        <div class="individual-input">
                        <div class="title">HOME ADRESS: <span>*</span></div>
                            <input type="text" class="text_field" placeholder="ENTER YOUR HOME ADDRESS" value="<?php echo $s_address?>" name="address" id="address"  required/>
                        </div>
     
                        <div class="individual-input">
                        <div class="title">SELECT COUNTRY: <span>*</span></div>
                            <select id="country_id" class="text_field select_field" title="Country" onchange="_get_states()">
                                <?php if($s_country_id==''){?>
                                <option value="" selected="selected">SELECT COUNTRY</option>
                                <?php  } else { ?>
                                <option onclick="_get_states()" value="<?php echo $s_country_id?>" selected="selected"><?php echo $adm_country_name?></option>
                                <?php }

                                $query=mysqli_query($conn,"SELECT * FROM setup_countries_tab ORDER BY country_name ASC");
                                while($fetch=mysqli_fetch_array($query)){
                                $s_country_id=$fetch['country_id'];
                                $country_name=strtoupper($fetch['country_name']);
                                ?>
                                <option value="<?php echo $s_country_id?>"><?php echo $country_name?></option>

                                <?php } ?>
                            </select>

                        </div>

                        <div class="individual-input">
                        <div class="title">SELECT STATE: <span>*</span></div>
                            <select id="state_id" class="text_field select_field" title="Province/State" >
                                <?php if($s_state_id==''){?>
                                <option value="" selected="selected">SELECT COUNTRY FIRST</option>
                                <?php  } else { ?>
                                <option value="<?php echo $s_state_id?>" selected="selected"><?php echo $adm_state_name?></option>
                                <?php } ?>


                            </select>
                        </div>

                                <?php if ($s_role_id>1){?>
                        <div class="individual-input">
                        <div class="title" >SELECT ROLE: <span>*</span></div>
                            <select id="role_id" required class="text_field select_field" title="SELECT ROLE">
                                    <?php if($s_role_id==''){?>
                                    <option value="" selected="selected">SELECT ROLE</option>     
                                    <?php  } else { ?>
                                    <option  value="<?php echo $s_role_id?>" selected="selected"><?php echo $adm_role_name?></option>
                                    <?php }

                                    $query=mysqli_query($conn,"SELECT * FROM role_tab ORDER BY role_name ASC");
                                    while($fetch=mysqli_fetch_array($query)){
                                    $role_id=$fetch['role_id'];
                                    $role_name=strtoupper($fetch['role_name']);
                                    if($role_id<3){
                                    ?>                          
                                    <option value="<?php echo $role_id?>"><?php echo $role_name?></option>
                                    <?php  } }?>
                            </select>
                        </div>


                            <div class="individual-input">
                            <div class="title">SELECT STATUS: <span>*</span></div>
                                <select id="status_id" required class="text_field select_field"   title="SELECT STATUS">
                                    <?php if($s_status_id==''){?>
                                    <?php  } else { ?>
                                    <option value="<?php echo $s_status_id?>"><?php echo $adms_status_name?></option>
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

                <button class="submit-btn" id="update_btn"  onClick="_update_profile('<?php echo $s_admin_id ?>');" title="UPDATE PROFILE" type="button"><i class="fa fa-check"></i> UPDATE</button>



        </div>

<?php } ?>












    

<?php if ($view_content=='registered_student_profile'){?>

         
<div class="view-list">
        <div class="image-back-div staff-back-div">
            <div class="cover">
                
                <div class="div-in-header">
                    <div class="div-in">
                        <div class="div-in-text">
                            <h5><i class="fa fa-user-o"></i> Staff Profile</h5><br clear="all">
                            <p>Adminstrator Portal</p>

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



        <div class="profile-back-div">
       <?php
            $check_query='view_registered_student';
            require_once 'sub-codes.php'
?>
        </div>



<?php } ?>