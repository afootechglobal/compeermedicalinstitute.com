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

        <h4>REGISTRATION
        <a href="../index.php"><button class="btn" type=""> <i class="fa fa-arrow-left"></i> Go-Back</button></a>
        </h4>
        <p>Fill all (<span>*</span>) to continue your Application</p>


        <div class="reg-div">

        <form>
        <div class="reg-div-in" id="next-1"> 
                <div class="title">First Name:<span>*</span></div>
                <input type="text" name="FirstName" class="text_field" id="FirstName" required placeholder="First Name" title="First Name">
        </div>

        <div class="reg-div-in" id="next-1"> 
                <div class="title">Middle Name:<span>*</span></div>
                <input type="text" name="MiddleName" class="text_field" id="MiddleName" required placeholder="Middle Name" title="Middle Name">
                        
        </div>

        <div class="reg-div-in" id="next-1"> 
               <div class="title">Last Name:<span>*</span></div>
                <input type="text" name="LastName" class="text_field" id="LastName" required placeholder="Last Name" title="Last Name">
                
        </div>

        <div class="reg-div-in" id="next-1"> 
                <div class="title">Email:<span>*</span></div>
                <input type="email"  name="Email" required class="text_field" id="Email" placeholder="Email" title="Email">

        </div>

        <div class="reg-div-in" id="next-1"> 
                <div class="title">Phone Number:<span>*</span></div>
                 <input type="text"  name="PhoneNumber" required class="text_field" id="PhoneNumber" placeholder="Phone Number" title="Phone Number">

        </div>

        <div class="reg-div-in" id="next-1"> 
         <div class="title">Gender:<span>*</span></div>
        <select  name="Gender" required class="text_field" id="Gender" style="background:#fff; width:99%" >
        <option value="" selected class="text_field">SELECT GENDER </option>
        <option value='MALE'>MALE</option>
        <option value='FEMALE'>FEMALE</option>
        </select>
        </div>

        <div class="reg-div-in" id="next-1"> 
        <div class="title">Create Password:<span>*</span></div>
        <input type="password"  name="CreatePassword" required class="text_field" id="CreatePassword" placeholder="Create Password" title="Create Password">

        </div>


        <div class="reg-div-in" id="next-1"> 
        <div class="title">Confirmed Password:<span>*</span></div>
        <input type="password"  name="ConfirmedPassword" required  class="text_field" id="ConfirmedPassword" placeholder="Confirmed Password" title="Confirmed Password">

        </div>


</form>

        <button class="reg-btn" type="button" > <i class="fa fa-close"></i> Cancel</button>
        <button class="reg-btn submit-btn" type="button" onClick="_sign_up()"> <i class="fa fa-check"></i> Apply</button>

        </div>

 
        </div>
</div>

<?php include '../footer.php' ?>




























<script>
    AOS.init({
    easing: 'ease-in-out-sine'
    });
</script>

</body>

</html>