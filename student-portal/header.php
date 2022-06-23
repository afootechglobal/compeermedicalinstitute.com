<div class="overlay-back-div "  ><!--javascript content comes here--></div> 


<?php include 'alert.php' ?>



      
<div class="menu-back-div" onClick="_close_menu()">
<div class="close-div" onClick="_close_menu()"><i class="fa fa-times"></i></div>
</div>

  <div class="side-menu-div">
  <div class="menu-div-in">
                <div class="picture-div">
                <?php if ($passport!=''){?>
              <img src="../admin/a/uploaded_files/student_pix/<?php echo $passport; ?>" id="passport-2"/>
              <?php } else { ?>

              <img src="../image/user.png" id="passport-2"/>

              <?php } ?>

                </div>
                <h6> <?php echo ucwords(strtolower("$firstname $lastname")) ?></h6>
                <p> <i>ID</i><span>: <?php echo $student_id ?> </span></p>
               <button class="side-profile-btn" onclick="_profile('profile')" type="button"><i class="fa fa-edit" ></i> My Profile</button>
            </div>

        <div class="menu-list">
            <ul>
                <li class="active" id="dashboard"  onClick="_get_panel('dashboard','dashboard')" title="Dashboard"><i class="li-icon fa fa-dashboard"></i> Dashboard</li>
                <li id="admission"  onclick="_get_Admission('Admission_process','admission')" title="Apply for Admission"><i class="li-icon fa fa-check-square-o"></i> Apply for Admission</li>
                <li id="myadmission" onclick="_get_panel('my_Admission','myadmission')" title="Adminstrators"><i class="li-icon fa fa-graduation-cap" alt=" My Admission"></i> My Admission   </li>
                <li  id="requirement" onclick="_get_Admission('Admission_requirement','requirement')" title="Admission Requirement"><i class="li-icon fa fa-level-up"></i>Admission Requirement</li>
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
                    <div class="logo-div"  onClick="_get_panel('dashboard','dashboard')">
                        <img src="../image/cmi-logo.png" alt="logo">
                    </div>
        <div class="pix-div menu" title="Menu">
        <button class="menu-div" onClick="_open_menu();">  <i class="fa fa-reorder (alias)"></i></button>
        </div>
                <div class="pix-div" onclick="_log_out('log-out')" title="Sign-Out">
                    
                                    <?php if ($passport!=''){?>
                                    <img src="../admin/a/uploaded_files/student_pix/<?php echo $passport; ?>" id="passport-1"/>
                                    <?php } else { ?>

                                    <img src="../image/user.png" id="passport-1"/>

                                    <?php } ?>


                        <div class="toggle" id="log-out">
                                <div class="img-div">
                                <?php if ($passport!=''){?>
                                <img src="../admin/a/uploaded_files/student_pix/<?php echo $passport; ?>" id="passport-2"/>
                                <?php } else { ?>
                                
                                <img src="../image/user.png" id="passport-1"/>
                                
                                <?php } ?>
                                </div>
                    <div class="toggle-profile-name"><?php echo ucwords(strtolower("$firstname $lastname")) ?> </div>
                    <div class="toggle-profile-others">User ID: <?php echo $student_id; ?> <br /><?php echo $phonenumber; ?> </div>
                  
                   
                    <button class="sub-link" onclick="_profile('profile','myprofile')" title="My Profie"><i class="fa fa-user-circle"></i> My Profile </button>

                   
                    <form method="post" action="config/code.php" name="logoutform">
                    <input type="hidden" name="action" value="logout"/>  
                    <button class="sub-link sign-out" type="submit" title="Log-Out"><i class="fa fa-sign-out"></i> Log-Out </button>
                    </form>
                  

             </div>	
  
		</div>
        
        
        
        
        
        
        
        
   

           

                   <li  class="active"  id="s_dashboard" onclick="_get_panel('dashboard','dashboard')"><i class="fa fa-dashboard"></i> Dashboard</li>
                   <li id="myprofile" onclick="_profile('profile','myprofile','id_myprofile')"><i class="fa fa-user"></i> My Profile</li>
        

        </div>

    </div>



</div>
