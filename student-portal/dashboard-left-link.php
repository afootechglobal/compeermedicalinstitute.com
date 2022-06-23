

<div class="left-sided-div animated animated fadeInLeft animated">

<!-- PROFILE INDEX -->
        <div class="profile-div">
                <div class="picture-div">
                <?php if ($passport!=''){?>
              <img src="../admin/a/uploaded_files/student_pix/<?php echo $passport; ?>" id="passport-4"/>
              <?php } else { ?>

              <img src="../image/user.png" id="passport-4"/>

              <?php } ?>

                </div>
                <h6> <?php echo ucwords(strtolower("$firstname $lastname")) ?></h6>
                <p> <i>ID</i><span>: <?php echo $student_id ?> </span></p>
               <button onclick="_profile('profile','myprofile','id_myprofile')" type="button"><i class="fa fa-edit" ></i> Edit Profile</button></a>
            </div>
            



<!-- DASHBOARD INDEX -->
<div class="dashboard-list">
    <ul>
    <li class="active" id="id_dashboard"  onClick="_get_panel('dashboard','dashboard')" title="Dashboard"><i class="li-icon fa fa-dashboard"></i> Dashboard</li>
        <li id="id_admission"  onclick="_get_Admission('Admission_process','id_admission')" title="Apply for Admission"><i class="li-icon fa fa-check-square-o"></i> Apply for Admission</li>
      <li id="id_myadmission" onclick="_get_panel('my_Admission','id_myadmission')" title="Adminstrators"><i class="li-icon fa fa-graduation-cap" alt=" My Admission"></i> My Admission   </li>
    <li  id="id_requirement" onclick="_get_Admission('Admission_requirement','id_requirement')" title="Admission Requirement"><i class="li-icon fa fa-level-up"></i>Admission Requirement</li>
        <form method="post" action="config/code.php" name="logoutform">
            <input type="hidden" name="action" value="logout"/>  
        <button type="submit" class="log_out" title="Log-Out"><i class="li-icon fa fa-sign-out"></i> Log-Out</button>
          </form>
    </ul>
</div>

</div>