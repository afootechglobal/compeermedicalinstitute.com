


<?php if ($view_content=='registration'){ ?>
    


  <h4><i class="fa fa-edit"></i> REGISTRATION
        <a href="../index.php"><button class="btn" type=""> <i class="fa fa-arrow-left"></i> Go-Back</button></a>
        </h4>
        <p>FILL ALL (<span>*</span>) TO CONTINUE YOUR APPLICATION...</p>


        <div class="reg-div">

        <div class="reg-div-in"> 
                <div class="title">FIRST NAME:<span>*</span></div>
                <input type="text" name="firstname" id="firstname" class="text_field"  required placeholder="ENTER YOUR FIRST NAME" title="ENTER YOUR FIRST NAME">
        </div>

        <div class="reg-div-in" > 
               <div class="title">LAST NAME:<span>*</span></div>
                <input type="text" name="lastname" id="lastname" class="text_field"  required placeholder="ENTER YOUR LAST NAME" title="ENTER YOUR LAST NAME">
                
        </div>

        <div class="reg-div-in"> 
                <div class="title">EMAIL ADDRESS:<span>*</span></div>
                <input type="email"  name="email" id="email" required class="text_field"  placeholder="ENTER YOUR EMAIL ADDRESS" title="ENTER YOUR EMAIL ADDRESS">

        </div>

        <div class="reg-div-in" > 
        <div class="title">HOME ADDRESS:<span>*</span></div>
        <input type="text"  name="address" id="address" required  class="text_field"  placeholder="ENTER YOUR HOME ADDRESS" title="ENTER YOUR HOME ADDRESS">
        </div>

        
        
        <div class="reg-div-in"> 
         <div class="title">SELECT COUNTRY:<span>*</span></div>
                <select id="country_id" class="text_field selectinput" title="Country" style="background:#fff;width:99.5%">
                <option value="" selected="selected">SELECT</option>
                <?php
                $query=mysqli_query($conn,"SELECT * FROM setup_countries_tab ORDER BY country_name ASC");
                while($fetch=mysqli_fetch_array($query)){
                $country_id=$fetch['country_id'];
                $country_name=strtoupper($fetch['country_name']);
                ?>
                <option value="<?php echo $country_id?>"><?php echo $country_name?></option>
                <?php	
                }
                ?>
                </select>


        </div>


     
    

        <div class="reg-div-in" > 
                <div class="title">PHONE NUMBER:<span>*</span></div>
                 <input type="text"  name="phonenumber" id="phonenumber" required class="text_field"  placeholder="ENTER YOUR PHONE NUMBER" title="ENTER YOUR PHONE NUMBER">
        </div>

        <div class="reg-div-in" > 
                <div class="title">CREATE PASSWORD:<span>*</span></div>
                 <input type="password"  name="password" id="password" required class="text_field"  placeholder="ENTER YOUR PASSWORD" title="ENTER YOUR PASSWORD ">
        </div>


        <div class="reg-div-in" > 
                <div class="title" style="float:left;">COMFIRMED PASSWORD:<span>*</span> <span id='message' style="float:right;margin-left:20px"></span></div>
                 <input type="password"  name="comfirmed_password" id="comfirmed_password" onkeyup="checkpassword()"  required class="text_field"  placeholder="ENTER YOUR COMFIRMED PASSWORD" title="ENTER YOUR COMFIRMED PASSWORD">
        </div>

        <button class="reg-btn" type="button" title="CANCEL"> <i class="fa fa-close"></i> CANCEL</button>
        <button class="reg-btn submit-btn" type="button" onclick="_registration();" title="SUBMIT"> <i class="fa fa-check"></i> SUBMIT</button>

        </div>


        

<?php } ?>




<?php if ($view_content=='registration_successful'){?>
        
        <div class="success-back-div animated zoomIn">
        <div class="success-div-in"><div class="success-logo">
                <img src="../image/tick-2.gif" alt="Hero" /></div>
                <h3>REGISTRATION SUCCESSFUL<h3>
                <p>kindly, check your email (<span><?php echo $email ?></span>) for more information. Thanks </p>
                <a href="../login"><button class="success-btn" type="Submit" title="CLICK HERE TO LOGIN"  onClick="_close_reg_panel()">Click here to Login</button></a>
        </div>
</div>

<?php } ?>


<?php if ($view_content=='email_exist'){?>
<div class="success-back-div animated zoomIn">
<div class="success-div-in"><div class="success-logo">
        <img src="../image/warning.gif" alt="Hero" /></div>
        <h3>ACCOUNT & EMAIL EXIST !!!<h3>
        <p>Email has been registred, kindly login with your email (<span><?php echo $email ?></span>) and your existing password to continue or <span>reset password?</span>.  Thanks </p>
        <a href="../login"><button class="success-btn" type="Submit" title="CLICK HERE TO LOGIN"  onClick="_close_reg_panel()">Click here to Login</button></a>
</div>
</div>
<?php } ?>






