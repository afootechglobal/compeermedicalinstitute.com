
<div class="overlay-back-div "  ><!--javascript content comes here--></div> 
<?php include 'alert.php'?>


<div class="menu-back-div" onClick="_close_menu()">
<div class="close-div" onClick="_close_menu()"><i class="fa fa-times"></i></div>
</div>
  <div class="side-menu-div">
  <div class="menu-div-in">

                <div class="picture-div">
                <?php if ($s_passport!=''){?>
                    <img src="../a/uploaded_files/staff_pix/<?php echo $s_passport; ?>" id="passport-4"/>
                    <?php } else { ?>
                    <img src="../../image/user.png" id="passport-4"/>
                    <?php } ?>
                </div>

                <h6 id="name"> <?php echo ucwords(strtolower("$s_firstname $s_lastname")) ?></h6>
                <p> <i>ROLE</i><span>: <?php echo $adm_role_name ?> </span></p>
               <button class="side-profile-btn" onclick="_profile('profile')" type="button"><i class="fa fa-edit" ></i> My Profile</button>
            </div>


    <!-- DASHBOARD INDEX -->
    <div class="dashboard-list">
        <ul>
            <li  id="dashboard" class="active"  onClick="_get_panel('dashboard', 'dashboard')" title="Dashboard"><i class="li-icon fa fa-dashboard"></i> Dashboard</li>
            <?php if ($s_role_id>1){?>
            <li  id="admin" onClick="_get_panel('get_all_staff', 'admin')" title="Adminstrators"><i class="li-icon fa fa-user-circle-o" alt=" My Admission"></i> Adminstrators </li>
            <?php }?>
            <li id="reg_student" onclick="_expand_link('student','reg_student');"><i class="li-icon fa fa-users" alt=" My Admission"></i> Student <i class="arrow fa fa-chevron-down"></i>
            <div class="toggle" id="student" style="display: none;">
            <div class="sub-link" id="reg_student"  onClick="_get_panel('registered_student','reg_student')"><i class=" li-icon fa fa-users" ></i> Agent/User</div>
            <div class="sub-link" id="reg_student"  onClick="_get_panel('student_check_list','reg_student')"><i class="li-icon fa fa-check"></i> Applicant Student </div></a>

            </div>


            </li>
            <li onClick="_get_slide_panel('backend_settings')"><i class="li-icon fa fa-gears (alias)" alt=" My Admission"></i> Settings </li>   
            <form method="post" action="config/code.php" name="logoutform">
            <input type="hidden" name="action" value="logout"/>  
            <button type="submit" class="log_out" title="Log-Out"><i class="li-icon fa fa-sign-out"></i> Log-Out</button>
            </form>
        </ul>
    </div>

</div>


















    <div class="header-div  animated fadeInDown animated animated">
    <div class="header-top-div ">
        <div class="top-div-in ">
                 <div class="logo-div" onClick="_get_panel('dashboard','dashboard')" >
                    <img src="../../image/cmi-logo.png" alt="cmi logo">
                </div>
                    <div class="pix-div menu" title="Sign-Out">
                    <button class="menu-div" onClick="_open_menu();">  <i class="fa fa-reorder (alias)"></i></button>
                    </div>

                         <div class="pix-div" onclick="_log_out('log-out')" title="Sign-Out">
                    
                                    <?php if ($s_passport!=''){?>
                                    <img src="../a/uploaded_files/staff_pix/<?php echo $s_passport; ?>" id="passport-2"/>
                                    <?php } else { ?>

                                    <img src="../../image/user.png" id="passport-2"/>

                                    <?php } ?>


                        <div class="toggle" id="log-out">
                            <div class="img-div">
                            <?php if ($s_passport!=''){?>
                                <img src="../a/uploaded_files/staff_pix/<?php echo $s_passport; ?>" id="passport-1"/>
                            <?php } else { ?>

                                <img src="../../image/user.png" id="passport-1"/>

                            <?php } ?>
                            </div>
                            <div class="toggle-profile-name"><?php echo ucwords(strtolower("$s_firstname $s_lastname")) ?> </div>
                            <div class="toggle-profile-others">Admin ID: <?php echo $s_admin_id; ?> <br /><?php echo $s_phonenumber; ?> </div>

		        	<button class="sub-link"  id="s_myprofile" onclick="_profile('profile','myprofile')" title="My Profie"><i class="fa fa-user-circle"></i> My Profile </button>
           
                    <form method="post" action="config/code.php" name="logoutform">
                    <input type="hidden" name="action" value="logout"/>  
                    <button class="sub-link sign-out" type="submit" title="Log-Out"><i class="fa fa-sign-out"></i> Log-Out </button>
                    </form>

                    </div>	
                    </div>
      
  
            <div id="mydiv">


            <li  id="s_dashboard" class="active" onclick="_get_panel('dashboard', 'dashboard','ad_dashboard')"><i class="fa fa-dashboard"></i> Dashboard</li>
            <li  id="s_admin" onclick="_get_panel('get_all_staff', 'admin','ad_admin')"><i class="fa fa-users"></i> Adminstrator</li>
            <li id="myprofile" onclick="_profile('profile','myprofile','ad_myprofile')"><i class="fa fa-user"></i> My Profile</li>

            </div>
      

        </div>

    </div>
   

</div>
