<?php require_once 'config/connection.php'; ?>
<?php
  $array=$callclass->_get_backend_settings_detail($conn, 'BK_ID001');
	  $fetch = json_decode($array, true);
	  $support_email=$fetch[0]['support_email'];
	  $support_phonenumber=$fetch[0]['support_phonenumber'];
	  $support_address=$fetch[0]['support_address'];
      
?>		
<div class="overlay-back-div"  ><!--javascript content comes here--></div> 

<div class="menu-back-div" onClick="_close_menu()">
<div class="close-div" onClick="_close_menu()"><i class="fa fa-times"></i></div>
</div>
<div class="side-menu-div">
            <div class="icon-div">
                <img src="image/icon.png" alt="">
            </div>
            <a href="index.php"><li class="active"> <i class="fa fa-home"></i> Home Page</li></a>
        <li id="about_list" onclick="_expand_link1('about_us');"><i class="fa fa-address-card"></i>About Us <i class="fa fa-plus"></i>
        
        <div class="toggle" id="about_us" style="display: none;">
        <a href="about-us.php"> <div class="sub-link about" id="ad_reg_student"  ></i> About C.M.I</div></a>
        <div class="sub-link" id="ad_reg_student" >Why C.M.I </div>
        <div class="sub-link" id="ad_reg_student" >C.M.I Service </div>
        <div class="sub-link" id="ad_reg_student" >Affiliate Universities </div>
        </div>
        
        </li>

        <li id="admission_list" onclick="_expand_link2('admission');"><i class="fa fa-graduation-cap"></i>Admission <i class="fa fa-plus"></i>
        <div class="toggle" id="admission" style="display: none;">
        <a href="login"><div class="sub-link about"></i> Apply For Admission</div></a>
        <div class="sub-link " id="ad_reg_student" >Admission Proccess </div>
        <a href="admission-requirement.php"><div class="sub-link" id="ad_reg_student" >Admission Requirements </div></a>
        <div class="sub-link" id="ad_reg_student" >Affiliate Universities </div>
        </div>
        </li>

        <li id="program_list" onclick="_expand_link3('program');"><i class="fa fa-book"></i>Program <i class="fa fa-plus"></i>
        <div class="toggle" id="program" style="display: none;">
        <a href="program.php"><div class="sub-link about" id="ad_reg_student"  ></i> C.M.I Program</div></a>
        <a href="program.php"  ><div class="sub-link" id="ad_reg_student" >Four (4) Year's MD </div></a>
        <a href="program.php"> <div class="sub-link" id="ad_reg_student" >Six (6) Year's PREMED</div></a>
        <a href="program.php"> <div class="sub-link" id="ad_reg_student" >Student Transfer Program</div></a>
        </div>
        
        </li>
        <li><i class="fa fa-address-card-o"></i>Blogs</li>
        <li><i class="fa fa-phone"></i>Contact Us</li>
        <a href="login"><li class="portal"><i class="fa fa-user-o"></i>Student Portal</li></a>
        <a href="register"><li><i class="fa fa-edit"></i>Registration Portal</li></a>
  
</div>

    <div class="header-div " >
    <div class="header-top-div animated fadeInDown" id="navbar">
        <div class="top-div-in ">

       

                <a href="index.php"><div class="logo-div">
                    <img src="image/cmi-logo.png" alt="logo">
                </div></a>
          

                <div class=" header-contact-back-div">
               
            <button class="menu-div" onClick="_open_menu();">  <i class="fa fa-reorder (alias)"></i></button>
           
            
                <a href="login"> <button class="btn" type="">APPLY NOW</button></a>
            
             <div class="contact-icon-div" title="WhatsApp">
                        <i class="fa fa-whatsapp"></i>
                    </div>
                    <div class="contact-icon-div" title="Mail Us" id="mail-icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="contact-icon-div" title="Call" id="call">
                        <i class="fa fa-phone"></i>
                    </div>

                 <div class="header-contact mail-div">
                        <i class="fa fa-envelope"></i>
                        <h3>Mail Us </h3>
                        <p><?php echo $support_email ?></p>
                    </div>

                    <div class="header-contact contact-div">
                        <i class="fa fa-phone"></i>
                        <h3>Contact Us </h3>
                        <p><?php echo $support_phonenumber ?></p>
                    </div>
                   
                    <div class="header-contact time-div">
                        <i class="fa fa-clock-o"></i>
                        <h3>Time </h3>
                        <p>8:00am - 6:00pm</p>
                    </div>
                   
                  
                 
                </div>
                

            <!--             
            <div class="icon-div"><i class="fa fa-instagram"></i></div>
            <div class="icon-div"><i class="fa fa-linkedin"></i></div>
            <div class="icon-div"><i class="fa fa-facebook"></i></div>
            <div class="icon-div"><i class="fa fa-twitter"></i></div> -->
        </div>
    </div>

    <div class="header-bottom  animated fadeInDown" >
    <div class="nav-div ">

    <!-- <form role="" method="" action="">
                <input type="text" name="search" class="search-text" placeholder="Search..." required="">
                <button type="submit" class="search-btn">
                    <i class="fa fa-search"></i>
                </button>
      </form> -->
       
        <li class="active" id="home">HOME</li>
        <li>ABOUT US
        <div class="drop-down">
            <ul class="dp">
            <a href="about-us.php" > <li>About C.M.I</li></a>
            <a href="#"> <li>Why C.M.I</li></a>
            <a href="#"> <li>C.M.I Services</li></a>
            <a href="#"> <li>Accreditation & Approval</li></a>
            <a href="#"> <li>Affiliate Universities </li></a>
            </ul>
        </div>
        </li>
       
        <li id="admission">ADMISSION 
        <div class="drop-down">
            <ul class="dp">
            <a href="login" title="Apply For Admission"> <li>Apply For Admission</li></a>
            <a href="#" title="Admission Process"><li>Admission Process</li></a>
            <a href="admission-requirement.php" title="Admission Requirements"><li>Admission Requirements</li></a>
            <a href="#" title="Online Screening"><li>Online Screening</li></a>   
            <a href="#" title="Application Checklist"><li>Application Checklist</li></a>   
            </ul>
        </div>
        </li>

        <li id="academics">ACADEMICS
        <div class="drop-down">
            <ul class="dp">
            <a href="program.php"> <li>C.M.I Programs</li></a>
            <a href="#"> <li>Curriculum</li></a>
            <a href="#"> <li>Research</li></a>
            <a href="#"> <li>International Affiliation</li></a>
            <a href="#"> <li>Financial Services </li></a>
            </ul>
        </div>
        </li>

        <li id="clinical">CLINICAL

        <div class="drop-down">
            <ul class="dp">
            <a href="#"> <li>Clinical Programs</li></a>
            <a href="#"> <li>Hospital</li></a>
            <a href="#"> <li>Clinical Curriculum</li></a>
            <a href="#"> <li>Clinical FAQ's</li></a>
            </ul>
        </div>
        </li>

        <li id="student_life">STUDENT LIFE
        <div class="drop-down">
            <ul class="dp">
            <a href="#"> <li>Life in Ibadan</li></a>
            <a href="#"> <li>About Ibadan</li></a>
            <a href="#"> <li>Students Testimonial</li></a>
            <a href="#"> <li>Parents Testimonial</li></a>
            <a href="#"> <li>Video Testimonial</li></a>
          
             </ul>
        </div>

        </li>
        <li id="mentorship">MENTORSHIP
        <div class="drop-down">
            <ul class="dp">
            <a href="#"> <li>From Currrent School</li></a>
            <a href="#"> <li>From Graduate</li></a>
            </ul>
        </div>
        </li>

        <li id="graduates">GRADUATES
        <div class="drop-down">
            <ul class="dp">
            <a href="#"> <li>Information for Upcoming Graduate</li></a>
            <a href="#"> <li>Residencies</li></a>
            </ul>

        </div>
        </li>

        <li id="webinar">WEBINAR
        <div class="drop-down">
            <ul class="dp">
            <a href="#"> <li>Session Info</li></a>
            <a href="#"> <li>Webinar Archive</li></a>
            </ul>
        </div>
        </li>


        <li id="publication">PUBLICATION
        <div class="drop-down">
            <ul class="dp">
            <a href="#"> <li>Videos</li></a>
            <a href="#"> <li>News & Blogs</li></a>
            </ul>
        </div>
        </li>

                
    </div>
       


    </div>




</div>
