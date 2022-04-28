<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php require_once ("links.php")?>
<!-------------------------------------------------------------->
<title>COMPEER MEDICAL INSTITUTE</title>
</head>
<body>



<?php include 'header.php' ?>
<div class="background-div">


<div class="reg-back-div animated fadeInUp animated animated">

        <h4>GET INFORMATION
        <a href="../index.php"><button class="btn" type=""> <i class="fa fa-arrow-left"></i> Go-Back</button></a>
        </h4>
        <p>Fill all (<span>*</span>) to get student's information</p>


        <div class="reg-div">

        <form>
        <div class="reg-div-in" id="next-1"> 
                <div class="title">First Name:<span>*</span></div>
                <input type="text" name="FirstName" class="text_field" id="FirstName" required placeholder="Enter Your First Name" title="Enter your First Name">
        </div>

        <div class="reg-div-in" id="next-1"> 
               <div class="title">Last Name:<span>*</span></div>
                <input type="text" name="LastName" class="text_field" id="LastName" required placeholder="Enter Your Last Name" title="Enter your Last Name">
                
        </div>

        <div class="reg-div-in" id="next-1"> 
                <div class="title">Email:<span>*</span></div>
                <input type="email"  name="Email" required class="text_field" id="Email" placeholder="Enter Your Email Address" title="Enter your Email Address">

        </div>


        <div class="reg-div-in" id="next-1"> 
         <div class="title">Stundet's Gender:<span>*</span></div>
        <select  name="Gender" required class="text_field" id="Gender" style="background:#fff; width:99%" >
        <option value="" selected class="text_field">Select Gender </option>
        <option value='MALE'>MALE</option>
        <option value='FEMALE'>FEMALE</option>
        </select>
        </div>

        <div class="reg-div-in" id="next-1"> 
         <div class="title">Country:<span>*</span></div>
        <select  name="Country" required class="text_field" id="Country" style="background:#fff; width:99%" >
        <option value="" selected class="text_field">Select Your Country </option>
        <option value='NIGERIA'>NIGERIA</option>
        <option value='UNITED STATE'>UNITED STATE</option>
        </select>
        </div>

        <div class="reg-div-in" id="next-1"> 
                <div class="title">Phone Number:<span>*</span></div>
                 <input type="text"  name="PhoneNumber" required class="text_field" id="PhoneNumber" placeholder="Enter Your Phone Number" title="Enter Your Phone Number">

        </div>


        <div class="reg-div-in" id="next-1"> 
         <div class="title">Program:<span>*</span></div>
        <select  name="Program" required class="text_field" id="Program" style="background:#fff; width:99%" >
        <option value="" selected class="text_field">Select Program </option>
        <option value='4 YEARS'>4 YEARS</option>
        <option value='6 YEARS'>6 YEARS</option>
        </select>
        </div>
     

        <div class="reg-div-in" id="next-1"> 
        <div class="title">Student's Date of Birth:<span>*</span></div>
        <input type="date"  name="studentage" required class="text_field" id="studentage"  title="Date of Birth">

        </div>


        <div class="reg-div-in" id="next-1"> 
        <div class="title">City</div>
        <input type="text"  name="City" required  class="text_field" id="City" placeholder="Enter Your City" title="Enter Your City">
        </div>

        
        <div class="reg-div-in" id="next-1"> 
        <div class="title">State/Province</div>
        <input type="text"  name="State" required  class="text_field" id="State" placeholder="Enter Your State" title="Enter Your State">
         </div>

        <div class="reg-div-in" id="next-1"> 
        <div class="title">Cumulative GPA</div>
        <input type="text"  name="gpa" required  class="text_field" id="gpa" placeholder="Enter Your Cumulative GPA" title="Enter Cumulative GPA">
        </div>
        
        <div class="reg-div-in" id="next-1"> 
        <div class="title">Science GPA</div>
        <input type="text"  name="gpa" required  class="text_field" id="gpa" placeholder="Enter Your Science GPA" title="Enter Science GPA">
      </div>
        


</form>

        <button class="reg-btn" type="button" > <i class="fa fa-close"></i> Cancel</button>
        <button class="reg-btn submit-btn" type="Submit" onClick="_sign_up()"> <i class="fa fa-check"></i> Submit</button>

        </div>

 
        </div>
</div>

<?php include 'footer.php' ?>




























<script>
    AOS.init({
    easing: 'ease-in-out-sine'
    });
</script>

</body>

</html>