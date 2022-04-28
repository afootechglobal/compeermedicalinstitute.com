

<div class="left-sided-div animated animated fadeInLeft animated">

<!-- PROFILE INDEX -->
        <div class="profile-div">
                <div class="picture-div">
                <?php if ($passport!=''){?>
              <img src="../admin/uploaded_files/student_pix/<?php echo $passport; ?>" id="passport-4"/>
              <?php } else { ?>

              <img src="../image/user.png" id="passport-4"/>

              <?php } ?>

                </div>
                <h6> <?php echo ucwords(strtolower("$firstname $lastname")) ?></h6>
                <p> <i>ID</i><span>: <?php echo $student_id ?> </span></p>
               <button onclick="_profile('profile')" type="button"><i class="fa fa-edit" ></i> Edit Profile</button></a>
            </div>
            



<!-- DASHBOARD INDEX -->
<div class="dashboard-list">
    <ul>
    <li class="active"  onClick="_get_panel('dashboard')" title="Dashboard"><i class="li-icon fa fa-dashboard"></i> Dashboard</li>
        <li   onclick="_get_Admission('Admission_process')" title="Apply for Admission"><i class="li-icon fa fa-check-square-o"></i> Apply for Admission</li>
      <li  onclick="_get_panel('my_Admission')" title="Adminstrators"><i class="li-icon fa fa-graduation-cap" alt=" My Admission"></i> My Admission   </li>
    <li   onclick="_get_Admission('Admission_requirement')" title="Admission Requirement"><i class="li-icon fa fa-level-up"></i>Admission Requirement</li>
        <li><i class="li-icon fa fa-wechat (alias)" alt="Sign-out"></i> Live Chat</li>
        <li><i class="li-icon fa fa-sign-out" alt="Sign-out"></i> Sign-out</li>
      
    </ul>
</div>

</div>