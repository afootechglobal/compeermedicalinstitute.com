<?php if ($view_content=='admitted_status'){?>
<div class="payment-div admission-status-div animated zoomIn">
    <div class="payment-div-in status-div-in">
    <div class="close" alt="close" title="close" onclick="close_btn();">X</div>
        <div class="payment-icon-div status_icon animated fadeInLeft">
            <div class="img-div" >
                <img src="image/icon.png" alt="cmi logo">
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
                            <h5><i class="fa fa-dashboard"></i> Dashboard</h5><br clear="all">
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
                                <div class="picture-div">
                                <img src="../image/cmi-img.jpg" alt="picture">
                                </div>
                              <h3>Welcome Back!</h3>
                              <h2>AFOLABI TAIWO</h2>
                              <span>Last Login Date | 2021-11-04 18:52:11 </span>
                        </div>
                  

                    
                    </div>

                </div>
            </div>
        </div>


        
            <div class="dashboard-main-div">
                <div class="dash-div-in">
                <div class="main-div first-link">
                    <div class="inner-div">
                        <span class="number">5</span>
                        <div class="icon-div">
                            <i class="fa fa-user-plus"> </i>
                        </div><br>
                   Active Staff
                    </div>
                </div>

                <div class="main-div" onClick="_get_panel('student_check_list')">
                    <div class="inner-div">
                        <span class="number" >17</span>
                        <div class="icon-div">
                            <i class="fa fa-users"> </i>
                        </div><br>
                    Student
                    </div>
                </div>



                <div class="main-div ">
                    <div class="inner-div text-color">
                        <span class="number num">3</span>
                        <div class="icon-div">
                            <i class="fa fa-book"> </i>
                        </div><br>
                 Courses
                    </div>
                </div>


                <div class="main-div ">
                    <div class="inner-div text-color">
                        <span class="number num">10</span>
                        <div class="icon-div">
                            <i class="fa fa-graduation-cap"> </i>
                        </div><br>
                   Applicant Student
                    </div>
                </div>

              
                </div>
         

              
                        <div class=" notification-div animated fadeIn">
                        <h3><i class="fa fa-bell-o"></i> RECENT NOTIFICATION</h3>
                        <hr>
                        <div class="notification">
                            <span> <i class="fa fa-user-circle-o"></i> CMI ADMIN <i class="fa fa-check"></i></span>
                            <p>Success Alert: A new student was register by CMI ADMIN. Details...</p>
                            <span class="time">2021-11-04 18:52:11 </span>
                        </div>


                        <div class="notification">
                            <span> <i class="fa fa-user-circle-o"></i> CMI ADMIN <i class="fa fa-check"></i></span>
                            <p>Success Alert: A new student was register by CMI ADMIN. Details...</p>
                            <span class="time">2021-11-04 18:52:11 </span>
                        </div>
                        </div>
          
</div>




            

























<?php } ?>



    <?php if ($view_content=='all_staff'){?>


      
        <div class="view-list">

       
        <div class="image-back-div staff-back-div">
            <div class="cover">
                
                <div class="div-in-header">
                    <div class="div-in">
                        <div class="div-in-text">
                            <h5><i class="fa fa-dashboard"></i> All Adminstrator's</h5><br clear="all">
                            <p>Adminstrator Portal</p>

                            <div class="time-dash-div">
                            <h4 id="digitalclock"> <?php //echo date("h:i:s") ?> <sup> <?php //echo date("A") ?> </sup></h4>
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
                    <input type="text" class="search"placeholder="Type here to search" name="search" id="search"  >
                   
                        <div class="create-back-div">
                            <div class="create">
                                <h4><i class="fa fa-users"></i> ADMINSTRATOR'S LIST <button class="create-btn" onClick="_get_slide_panel('register_staff')" title="Create A New Admin"><i class="fa fa-plus"></i> Create A New Admin</button></h4>
                            </div>
                        </div>
                </div>
   

                <div class="list-back-div">
                    <div class="div-in-list">
                        

                             <?php
                            $check_query='view_all_staff_list';
                            require_once 'sub-codes.php';
                            ?>
                            
                
                    </div>
                </div>
               
             




        <?php } ?>



















        
    <?php if ($view_content=='active_staff'){?>

      
        <div class="view-list">
                <div class="image-back-div staff-back-div">
                    <div class="cover">
                        
                        <div class="div-in-header">
                            <div class="div-in">
                                <div class="div-in-text">
                                    <h5><i class="fa fa-dashboard"></i> Active Staff</h5><br clear="all">
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
            <input type="text" class="search"placeholder="Type here to search" name="search" id="search" " >
           
                <div class="create-back-div">
                    <div class="create">
                        <h4><i class="fa fa-users"></i> ACTIVE STAFF LIST <button class="create-btn"  onClick="_get_slide_panel('register_staff')" title="Create A New Admin"><i class="fa fa-plus"></i> Create A New Admin</button></h4>
                    </div>
                </div>
        </div>

       
            <div class="div-in-list">
                         <?php
                            $check_query='view_active_staff_list';
                            require_once 'sub-codes.php';
                            ?>
                </div>

                </div>




<?php } ?>














        
<?php if ($view_content=='suspended_staff'){?>

      
    <div class="view-list">
            <div class="image-back-div staff-back-div">
                <div class="cover">
                    
                    <div class="div-in-header">
                        <div class="div-in">
                            <div class="div-in-text">
                                <h5><i class="fa fa-dashboard"></i> Suspended Staff</h5><br clear="all">
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
            <input type="text" class="search"placeholder="Type here to search" name="search" id="search" " >
           
                <div class="create-back-div">
                    <div class="create">
                        <h4><i class="fa fa-users"></i> SUSPENDED STAFF LIST <button class="create-btn" onClick="_get_slide_panel('register_staff')" title="Create A New Admin"><i class="fa fa-plus"></i> Create A New Admin</button></h4>
                    </div>
                </div>
        </div>

        <div class="list-back-div">
             <div class="div-in-list">
                         <?php
                            $check_query='view_suspended_staff_list';
                            require_once 'sub-codes.php';
                            ?>
       
                </div>
        </div>

     




<?php } ?>










        
<?php if ($view_content=='student_check_list'){?>

      
<div class="view-list">
        <div class="image-back-div staff-back-div">
            <div class="cover">
                
                <div class="div-in-header">
                    <div class="div-in">
                        <div class="div-in-text">
                            <h5><i class="fa fa-dashboard"></i> Program</h5><br clear="all">
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
    <input type="text" class="search"placeholder="Type here to search" name="search" id="search" " >
   
        <div class="create-back-div">
            <div class="create">
                <h4><i class="fa fa-users"></i> APPLICANT CHECK LIST </h4>
            </div>
        </div>
</div>


    <div class="div-in-list">
        
    <table  cellspacing="0">
                       <tr class="tuple">
                           <th>S/N</th>
                           <th>ADMISSION ID</th>
                           <th>STUDENT NAME</th>
                           <th>EMAIL</th>
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

                    




      

    </div>
    <div>







<?php } ?>








<?php if ($view_content=='student_profile'){?>

<div class="requirement-back-div animated fadeInUp">
    <div class="header-requirement">
        <h4><i class="fa fa-user"></i>  STUDENT PROFILE  <button class="close-btn" id="close" onclick="_close()" title="Close">X</button></h4>
    </div>
       
      

    <div class="profile-back-div back-div">
  

  <div class="profile-pix-div">
                  
            <fieldset  style="width:15%;float:left;border:none;">
                            <legend>UPLOAD PICTURE <I class="fa fa-arrow-down" style="font-size:12pz;color:hsla(0, 100%, 40%, 0.774);"></I></legend>
                                
                        
                            <div class="profile-img-div">  
                                    <label>   
                                    <?php if ($passport!=''){?>
                                            <img src="../admin/uploaded_files/student_pix/<?php echo $passport; ?>" id="c"/>
                                            <?php } else { ?>

                                                <img src="../admin/uploaded_files/student_pix/user.png" id="d"/>

                                            <?php } ?>
                                            
                                    <input type="file" id="passport" style="display:none"  name="passport" accept=".jpg,.png" onchange="Test.UpdatePreview(this);"/>

                                
                                    </label>
                                </div>
                                
            </fieldset>
     </div>


     <?php
    
    $check_query='view_student_profile';
    require_once 'sub-codes.php';
        ?>

     






  </div>
</div>


<?php } ?>























<?php if ($view_content=='register_staff'){?>


    <div class="register-back-div animated fadeInRight">
                  
                  <div class="register-div-in">
                      <div class="text-back-div">
                      <h4><i class="fa fa-registered"></i> REGISTER STAFF <button class="close-btn" id="close" onclick="close_btn()" title="Close">X</button></h4>
                      </div>
                     
                      <div class="input-div">
          
                    <p>Fill all(<span>*</span>) to continue registration</p>
         
                      <div class="title">FIRST NAME: <span>*</span></div>
                      <input type="text" id="firstname" required class="text_field"  placeholder="FIRST NAME" title="FIRST NAME">
                  
                      <div class="title">LAST NAME: <span>*</span></div>
                      <input type="text"  id="lastname" required class="text_field" placeholder="LAST NAME" title="LAST NAME">
                  
                      <div class="title">EMAIL ADDRESS: <span>*</span></div>
                      <input type="email" id="email" required class="text_field"  placeholder="ENTER EMAIL ADDRESS" title="EMAIL ADDRESS">
                    
                      <div class="title">PHONE NUMBER: <span>*</span></div>
                      <input type="text" id="phonenumber"   required class="text_field" placeholder="PHONE NUMBER" title="PHONE NUMBER">
                     
                  
                      <div class="title" >ROLE: <span>*</span></div>
                          <select id="role" required class="text_field"  style="width:97%;color:#333; " title="SELECT ROLE">
                          <option value="" selected>SELECT ROLE</option>
                          <option value='ADMIN'>ADMIN</option>
                          <option value='STAFF'>STAFF</option>
          
                          </select>
                      
                  
                      
                          <div class="title">STATUS: <span>*</span></div>
                          <select id="status" required class="text_field"  style="width:97%;color:#333; " title="SELECT STATUS">
                          <option value="" selected>SELECT STATUS</option>
                          <option value='ACTIVE'>ACTIVE</option>
                          <option value='SUSPENDED'>SUSPENDED</option>
          
                          </select>
                      
                          <button class="submit-btn" type="button" onClick="_register_staff()" title="Submit"><i class="fa fa-check"></i> Submit</button>
            
                      </div>
                  </div>
          
          
          </div>
                

       


    <?php } ?>














    <?php if ($view_content=='six_years_program_reg'){?>


        <div class="register-back-div animated fadeInRight">
              
              <div class="register-div-in">
                  <div class="text-back-div">
                  <h4><i class="fa fa-registered"></i> STUDENT REGISTRATION <button class="close-btn" id="close" onclick="close_btn()" title="Close">X</button></h4>
                  </div>
                 
                  <div class="input-div">
      
                <p>Fill all(<span>*</span>) to continue student registration for 6 year's<br> medical program</p>
      
                  <div class="title">FULL NAME: <span>*</span></div>
                  <input type="email"   required class="text_field" id="Email" placeholder="FULL NAME" title="FULL NAME">
              
                  <div class="title">EMAIL ADDRESS: <span>*</span></div>
                  <input type="email"   required class="text_field" id="Email" placeholder="ENTER EMAIL ADDRESS" title="EMAIL ADDRESS">
                
                  <div class="title">PHONE NUMBER: <span>*</span></div>
                  <input type="email"   required class="text_field" id="Email" placeholder="PHONE NUMBER" title="PHONE NUMBER">
                 
                  <div class="title">HOME ADDRESS:<span>*</span></div>
                  <input type="text"  class="text_field" id="HomeAddress" placeholder="HOME ADDRESS:" title="HOME ADDRESS">
                  
                  <div class="title">PROGRAM:<span>*</span></div>
                  <input type="text"  class="text_field" id="program"  title="YEAR;S PROGRAM" >
                  
                  
                      <button class="submit-btn" title="Submit"> Proceed <i class="fa fa-arrow-right"></i></button>
                
                  </div>
              </div>
      
      
      </div>
            

   


<?php } ?>












<?php if ($view_content=='four_years_program_reg'){?>


<div class="register-back-div animated fadeInRight">
      
      <div class="register-div-in">
          <div class="text-back-div">
          <h4><i class="fa fa-registered"></i> STUDENT REGISTRATION <button class="close-btn" id="close" onclick="close_btn()" title="Close">X</button></h4>
          </div>
         
          <div class="input-div">

        <p>Fill all(<span>*</span>) to continue student registration for 4 year's<br> medical program</p>

          <div class="title">FULL NAME: <span>*</span></div>
          <input type="email"   required class="text_field" id="Email" placeholder="FULL NAME" title="FULL NAME">
      
          <div class="title">EMAIL ADDRESS: <span>*</span></div>
          <input type="email"   required class="text_field" id="Email" placeholder="ENTER EMAIL ADDRESS" title="EMAIL ADDRESS">
        
          <div class="title">PHONE NUMBER: <span>*</span></div>
          <input type="email"   required class="text_field" id="Email" placeholder="PHONE NUMBER" title="PHONE NUMBER">
         
          <div class="title">HOME ADDRESS:<span>*</span></div>
          <input type="text"  class="text_field" id="HomeAddress" placeholder="HOME ADDRESS:" title="HOME ADDRESS">
          
          <div class="title">PROGRAM:<span>*</span></div>
          <input type="text"  class="text_field" id="program"  title="YEAR;S PROGRAM" >
          
          
              <button class="submit-btn" title="Submit"> Proceed <i class="fa fa-arrow-right"></i></button>
        
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
                        
        <fieldset  style="width:15%;float:left;border:none;">
                        <legend>UPLOAD PICTURE <I class="fa fa-arrow-down" style="font-size:12pz;color:hsla(0, 100%, 40%, 0.774);"></I></legend>
                        <div class="profile-img-div">  
                        <input type="file" id="passport" style="display:none"  name="passport" accept=".jpg,.png" onchange="Test.UpdatePreview(this);"/>
                        <img src="image/cmi-img.jpg" id="MyPassport"/>
                        </div>
                              
        </fieldset>
                </div>

        <fieldset>
                        <legend>PERSONAL INFORMATION</legend>
                        <div class="individual-input">
                        <div class="title">FIRST NAME: <span>*</span></div>
                            <input type="text" class="text_field" placeholder="ENTER YOUR FIRST NAME" name="firstname" id="firstname"  required/>
                        </div>
                      
                        <div class="individual-input">
                        <div class="title">MIDDLE NAME: <span>*</span></div>
                            <input type="text"  class="text_field" placeholder="ENTER YOUR MIDDLE NAME" name="middlename" id="middlename" required/>
                        </div>

                        <div class="individual-input">
                        <div class="title">LAST NAME: <span>*</span></div>
                            <input type="text"  class="text_field" placeholder="ENTER YOUR LAST NAME" name="lastname" id="lastname"  required/>
                        </div>

                        <div class="individual-input">
                        <div class="title">EMAIL ADDRESS: <span>*</span></div>
                            <input type="email"  class="text_field" placeholder="ENTER YOUR EMAIL ADDRESS" name="email" id="email"  required/>
                        </div>

                        <div class="individual-input">
                        <div class="title">PHONE NUMBER: <span>*</span></div>
                            <input type="email"  class="text_field" placeholder="ENTER YOUR PHONE NUMBER" name="phone_no" id="phone_no"  required/>
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
                            <input type="date" class="text_field" name="dob" id="dob" required/>
                        </div>

                        <div class="individual-input">
                        <div class="title">HOME ADRESS: <span>*</span></div>
                            <input type="text" class="text_field" placeholder="ENTER YOUR HOME ADDRESS" name="address" id="address"  required/>
                        </div>
     

      
                    <div class="individual-input">
                    <div class="title">CITY: <span>*</span></div>
                    <input type="text" class="text_field" placeholder="ENTER YOUR CITY" name="city" id="city"  />
                    </div>

                    
                     <div class="individual-input">
                     <div class="title">ROLE: <span>*</span></div>
                    <select name="role" id="role" class="text_field" style="width:91%">
                    <option selected> SELECT ROLE </option>
                    <option value="ADMIN">ADMIN</option> 
                    <option value="STAFF">STAFF</option> 
                
                    </select>

                    </div>

                    <div class="individual-input">
                     <div class="title">STATUS: <span>*</span></div>
                    <select name="status" id="status" class="text_field" style="width:91%">
                    <option selected> SELECT STATUS </option>
                    <option value="ACTIVE">ACTIVE</option> 
                    <option value="SUSPENDED">SUSPENDED</option> 
                
                    </select>
                    </div>
                        

                       
                       
            </fieldset>
<br clear="all">

                <button class="submit-btn" title="UPDATE PROFILE" type="button"><i class="fa fa-check"></i> UPDATE</button>



        </div>


 


    




<?php } ?>






























    

<?php if ($view_content=='staff_profile'){?>

         
<div class="view-list">
        <div class="image-back-div staff-back-div">
            <div class="cover">
                
                <div class="div-in-header">
                    <div class="div-in">
                        <div class="div-in-text">
                            <h5><i class="fa fa-user-o"></i> Staff Profile</h5><br clear="all">
                            <p>Adminstrator Portal</p>

                            <div class="time-dash-div">
                            <span>Current Time</span>
                            <h4 id="digitalclock"></h4>
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
            $check_query='view_staff_profile';
            require_once 'sub-codes.php'
?>
        </div>



<?php } ?>