
<div class="alert-div  animated bounceInDown" id="success-div">  
        <div class="alert-logo"><img src="../image/tick-2.gif" alt="Hero" /></div>
        <h3>REGISTRATION SUCCESSFUL</h3>
        </div>

        <div class="alert-div  animated bounceInDown" id="warning-div">  
        <div class="alert-logo"><img src="../image/tick-2.gif" alt="Hero" /></div>
        <h3>E-MAIL ERROR</h3>
        </div>


<div class="overlay-back-div "  ><!--javascript content comes here--></div> 



    <div class="header-div  animated fadeInDown animated animated">
    <div class="header-top-div ">
        <div class="top-div-in ">
                <div class="logo-div">
                    <img src="../image/cmi-logo.png" alt="logo">
                </div>

                   
                    <div class="pix-div" onclick="_log_out('log-out')" title="Sign-Out">
                    
                                    <?php if ($passport!=''){?>
                                    <img src="../admin/uploaded_files/student_pix/<?php echo $passport; ?>" id="passport-1"/>
                                    <?php } else { ?>

                                    <img src="../image/user.png" id="passport-1"/>

                                    <?php } ?>


                <div class="toggle" id="log-out">
                    <div class="img-div">

                <?php if ($passport!=''){?>
                <img src="../admin/uploaded_files/student_pix/<?php echo $passport; ?>" id="passport-2"/>
                <?php } else { ?>

                    <img src="../image/user.png" id="passport-1"/>

                <?php } ?>
                
                </div>
                   
                    <span><?php echo ucwords(strtolower("$firstname $lastname")) ?></span>
                    <p>PIN: <?php echo $reg_pin ?></p>
                    <p><?php echo $phonenumber ?></p>

			<button class="sub-link" title="My Profie"><i class="fa fa-user-circle"></i> My Profile </button>
           
            <form method="post" action="config/code.php" name="logoutform">
            <input type="hidden" name="action" value="logout"/>  
            <button class="sub-link sign-out" type="submit" title="Log-Out"><i class="fa fa-sign-out"></i> Log-Out </button>
            </form>
       
        </div>	
		</div>
        <div id="mydiv">

       
                   <li  class="active" onclick="_get_panel('dashboard')"><i class="fa fa-dashboard"></i> Dashboard</li>
                   <li onclick="_profile('profile')"><i class="fa fa-user"></i> My Profile</li>
        
                   </div>
        </div>
    </div>

   

</div>
