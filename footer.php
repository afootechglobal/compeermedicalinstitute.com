
<?php
  $array=$callclass->_get_backend_settings_detail($conn, 'BK_ID001');
	  $fetch = json_decode($array, true);
	  $support_email=$fetch[0]['support_email'];
	  $support_phonenumber=$fetch[0]['support_phonenumber'];
	  $support_address=$fetch[0]['support_address'];
      
?>
<footer class="">
            <div class="footer-back-div" id="back_div">
            <div class="footer-div-in aos-animate" id="about_us" data-aos="fade-up" data-aos-duration="700">
                <h4>About Us</h4>
                <hr>
                <a href="about-us.php"> <li>About C.M.I</li></a>
            <a href="#"> <li>Why C.M.I</li></a>
            <a href="#"> <li>C.M.I Services</li></a>
            <a href="#"> <li>Accreditation & Approval</li></a>
            <a href="#"> <li>Affiliate Universities </li></a>
            </div> 
            <div class="footer-div-in aos-animate" id="admission" data-aos="fade-up" data-aos-duration="800">
                <h4>Admission</h4>
                <hr>
                <a href="login" title="Apply For Admission"> <li>Apply For Admission</li></a>
            <a href="#" title="Admission Process"><li>Admission Process</li></a>
            <a href="admission-requirement.php" title="Admission Requirements"><li>Admission Requirements</li></a>
            <a href="#" title="Online Screening"><li>Online Screening</li></a>   
            <a href="#" title="Application Checklist"><li>Application Checklist</li></a>   
            
            </div>
            <div class="footer-div-in aos-animate" id="academics" data-aos="fade-up" data-aos-duration="900">
                <h4>ACADEMICS</h4>
                <hr>
            <a href="program.php"><li>C.M.I Programs</li></a>
            <a href="#"> <li>Curriculum</li></a>
            <a href="#"> <li>Research</li></a>
            <a href="#"> <li>International Affiliation</li></a>
            <a href="#"> <li>Financial Services </li></a>
            </div>
            <div class="footer-div-in aos-animate" id="student_life" data-aos="fade-up" data-aos-duration="1000">
                <h4>STDENT LIFE</h4>
                <hr>
            <a href="#"> <li>Students Testimonial</li></a>
            <a href="#"> <li>Parents Testimonial</li></a>
            <a href="#"> <li>Video Testimonial</li></a>
            </div>
            
            </div>

            <div class="footer-back-div footer-bottom-div">
            <div class="footer-div-in aos-animate" id="footer_about_us" data-aos="fade-up" data-aos-duration="700">
                    <h4>About M.C.I</h4>
                    <hr>
                    <p>The Institution, Compeer Medical Institute was incorporated as a higher education on the 8th August,
                    2018 with Corporate Affairs Commission and has since maintained its norms. The company intends to operate a polytechnic running National Diploma (ND) and Higher National Diploma (HND) Programmes.</p>
            </div>

            <div class="footer-div-in div aos-animate" id="contact_us" data-aos="fade-up" data-aos-duration="700">
                    <h4>CONTACT US</h4>
                    <hr>
                    <div class="footersub-div"> <p> <i class="fa fa-map-marker"></i>  <?php echo $support_address ?></p></div>
                    <div class="footersub-div">  <p><i class="fa fa-phone"></i>  <?php echo $support_phonenumber ?> <br>  +353-852-567-394</p></div>
                    <div class="footersub-div"> <p><i class="fa fa-envelope-open"></i> <?php echo $support_email ?> </p></div>

            </div>

             <div class="footer-div-in div aos-animate" id="social_media" data-aos="fade-up" data-aos-duration="700">
                        <h4>SOCIAL MEDIA</h4>
                        <hr>
                        <div class="media-link-div">
                            <i class="fa fa-facebook" title="facebook"></i> 
                            <i class="fa fa-twitter" title="twitter"></i> 
                            <i class="fa fa-instagram" title="instagram"></i> 
                        </div>

                           
                </div>

            </div>

            <div class="bottom-div">
                <div class="left-div">
                <p>Copyright ©2020 All rights reserved. <br><span>Developed By: AfooTECH Global I.T Solution (08131252996)</span></p>

                </div>
               
              
              
                  
            </div>




        </footer>

