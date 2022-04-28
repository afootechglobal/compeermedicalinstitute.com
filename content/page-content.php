  <?php if ($view_content=='register_user'){?>


    <div class="register-container animated animated fadeInUp">

        <div class="registration-header">
            <h3>REGISTRATION PANEL  <button class="close-btn" onClick="_close_reg_panel()">X</button></h3>
        </div>


        <div class="profile-div">

            <div class="profile-bg"></div>

            <div class="user-pix-container">
                <label>
                    <div class="user-pix">
                    <input type="file" id="passport" style="display:none"  name="passport" accept=".jpg,.png" onchange="Test.UpdatePreview(this);"/>
                    <img src="image/user.png" id="MyPassport" alt="User Picture"/>
                    
                     
                        <!-- <img src="images/up.png" id="MyPassport"/> -->
                    
                    
                    </div>
              </label>
              
                USER REGISTRATION
            </div>

            <div class="reg-back-info">
                <div class="reg-info-container">
                    <h4>PERSONAL INFORMATION</h4>

                    <div class="reg-basic-info-div">
                        <div class="title">First Name:<span>*</span></div>
                        <input type="text" class="text_field" id="FirstName" required placeholder="First Name" title="First Name">
                    </div>

                    <div class="reg-basic-info-div">
                        <div class="title">Middle Name:<span>*</span></div>
                        <input type="text"  class="text_field" id="MiddleName" required placeholder="Middle Name" title="Middle Name">
                     </div>

                    <div class="reg-basic-info-div">
                         <div class="title">Last Name:<span>*</span></div>
                        <input type="text" class="text_field" id="LastName" required placeholder="Last Name" title="Last Name">
                    </div>

                </div>

                <div class="reg-info-container">
                        <h4>CONTACT INFORMATION</h4>

                    <div class="reg-basic-info-div">
                        <div class="title">Email:<span>*</span></div>
                        <input type="email"   required class="text_field" id="Email" placeholder="Email" title="Email">
                    </div>

                    <div class="reg-basic-info-div">
                        <div class="title">Phone Number:<span>*</span></div>
                        <input type="text"  required class="text_field" id="PhoneNumber" placeholder="Phone Number" title="Phone Number">
                    </div>

                    <div class="reg-basic-info-div">
                        <div class="title">Home Address:<span>*</span></div>
                        <input type="text"  class="text_field" id="HomeAddress" placeholder="Home Address" title="Home Address">
                    </div>

                </div>


              
                    <button class="btn-submit" type="button" title="Submit" onClick="_sign_up()" ><i class="fa fa-check"></i>Submit </button>
            </div>

        </div>  

    </div>
    

  <?php } ?>







  <?php if ($view_content=='registration_successful'){?>
    <div class="success-back-div animated zoomIn">
                      <div class="success-div-in">
                      <div class="success-logo"><img src="image/tick-2.gif" alt="Hero" /></div>
                        <h3>REGISTRATION SUCCESSFUL<h3>
                      <button class="success-btn" type="Submit" title="Ok"  onClick="_close_reg_panel()">OK, Thanks</button>
                    </div>
                </div>
<?php } ?>











<?php if ($view_content=='view_user_list'){?>


<div class="register-container">

    <div class="registration-header">
        <h3>VIEW LIST PANEL  <button class="close-btn" onClick="_close_reg_panel()">X</button></h3>
    </div>


    <div class="profile-div">

        <div class="profile-bg"></div>

        <div class="user-pix-container">
            <div class="user-pix">
                <img src="image/logo.png" alt="User Picture"/>
            </div>
          VIEW LIST
        </div>

       
        <div class="view-list-back-div">

            <div class="view-list-info">
                <div class="vlist-back-pix">
                <img src="image/user.png" alt="User Picture"/>
                </div>
               <h4> Afolabi Taiwo Abayomi </h4> 
                <span><i class="fa fa-envelope"></i>  afolabi@gmail.com</span> |  <span><i class="fa fa-phone-square"></i>  09055066744</span>  
            </div>


            <div class="view-list-info">
                <div class="vlist-back-pix">
                <img src="image/user.png" alt="User Picture"/>
                </div>
               <h4> Afolabi Taiwo Abayomi </h4> 
                <span><i class="fa fa-envelope"></i>  afolabi@gmail.com</span> |  <span><i class="fa fa-phone-square"></i>  09055066744</span>  
            </div>


            <div class="view-list-info">
                <div class="vlist-back-pix">
                <img src="image/user.png" alt="User Picture"/>
                </div>
               <h4> Afolabi Taiwo Abayomi </h4> 
                <span><i class="fa fa-envelope"></i>  afolabi@gmail.com</span> |  <span><i class="fa fa-phone-square"></i>  09055066744</span>  
            </div>


            <div class="view-list-info">
                <div class="vlist-back-pix">
                <img src="image/user.png" alt="User Picture"/>
                </div>
               <h4> Afolabi Taiwo Abayomi </h4> 
                <span><i class="fa fa-envelope"></i>  afolabi@gmail.com</span> |  <span><i class="fa fa-phone-square"></i>  09055066744</span>  
            </div>

        </div>


        
    </div>  
    

</div>
 


<?php } ?>




