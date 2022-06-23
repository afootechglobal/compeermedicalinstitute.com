
<div class="left-sided-div animated animated fadeInLeft animated">

<!-- PROFILE INDEX -->
        <div class="profile-div">
                <div class="picture-div">
                      <?php if ($s_passport!=''){?>
                    <img src="../a/uploaded_files/staff_pix/<?php echo $s_passport; ?>" id="passport-4"/>
                    <?php } else { ?>
                    <img src="../../image/user.png" id="passport-4"/>
                    <?php } ?>
                </div>

                <h6 id="name"> <?php echo ucwords(strtolower("$s_firstname $s_lastname")) ?></h6>
                <p> <i>Role</i><span>: <?php echo $adm_role_name ?> </span></p>
            <button name="submitpassport" type="button" onclick="_profile('profile','myprofile','ad_myprofile')"><i class="fa fa-edit" ></i> Edit Profile</button></a>
        </div>
            



<!-- DASHBOARD INDEX -->
<div class="dashboard-list">

    <ul>
        <li  id="ad_dashboard" class="active"  onClick="_get_panel('dashboard', 'dashboard')" title="Dashboard"><i class="li-icon fa fa-dashboard"></i> Dashboard</li>
     <?php if ($s_role_id>1){?>
        <li  id="ad_admin" onClick="_get_panel('get_all_staff', 'admin')" title="Adminstrators"><i class="li-icon fa fa-user-circle-o" alt=" My Admission"></i> Adminstrators </li>
     <?php }?>
     <li id="ad_reg_student" onclick="_expand_link('dash_student','reg_student');"><i class="li-icon fa fa-users" alt=" My Admission"></i> Student <i class="arrow fa fa-chevron-down"></i>
      <div class="toggle" id="dash_student" style="display: none;">
       <div class="sub-link" id="ad_reg_student"  onClick="_get_panel('registered_student','reg_student')"><i class=" li-icon fa fa-users" ></i> Agent/User</div>
		<div class="sub-link" id="ad_reg_student"  onClick="_get_panel('student_check_list','reg_student')"><i class="li-icon fa fa-check"></i> Applicant Student </div></a>
		
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