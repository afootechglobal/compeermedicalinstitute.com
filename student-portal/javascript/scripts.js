

function _open_menu(){
   $('.menu-back-div').animate({'margin-left':'0%'},200);
   $('.side-menu-div').animate({'margin-left':'0px'},400);
   }
   
   
   function _close_menu(){
   $('.menu-back-div').animate({'margin-left':'-100%'},400);
   $('.side-menu-div').animate({'margin-left':'-250px'},200);
   }

function _get_active(divid){
   $('#s_dashboard,#myprofile,#s_admission,#s_myadmission,#s_requirement').removeClass('active');
   $('#dashboard,#admission,#myadmission,#requirement').removeClass('active');
   $('#id_dashboard,#id_admission,#id_myadmission,#id_requirement').removeClass('active');
   $('#s_'+divid).addClass('active');
   $('#id_'+divid).addClass('active');
   $('#'+divid).addClass('active');
}

function _expand_link(divid){
	$('#'+divid).toggle(500);
   
}

function _log_out(divid){
	$('#'+divid).toggle(500);
}

  
function close_btn(){
   $('.overlay-back-div').fadeOut(100);
}

function _close(){
   $('.overlay-back-div').fadeOut(600);
   _get_panel('my_Admission');
}

  
function _next_panel(nextid){
   $('.next_div').hide();
   $('#'+nextid).fadeIn(1000);   
   $('.div-pro').hide();
   $('#'+nextid).fadeIn(1000);   
   return event.preventDefault(),$("html, .input-div").animate({scrollTop:0},"slow");
}




function _next_pro(nextid){
   $('.div-pro').hide();
   $('#'+nextid).fadeIn(1000);   
   return event.preventDefault(),$("html, .div-pro,  ").animate({scrollTop:0},"fadeUp");
}
 

function _back_pro(nextid){
   $('.div-pro').hide();
   $('#'+nextid).fadeIn(1000);   
   return event.preventDefault(),$("html, .div-pro").animate({scrollTop:0},"fast");
}




 
$(window).scroll(function() {
if ($(this).scrollTop() >= 100 ){ 
$("#go-top").fadeIn(800).css("display", "block");
   }
});





function _back_panel(nextid){
$('.next_div').hide();
$('#'+nextid).fadeIn(1000);
return event.preventDefault(),$("html, .input-div").animate({scrollTop:0},"fast");
}




   function _program(){
      $('#program-1,#program-2,#program-3,#go-back-btn').hide();
      var program_id = $('#program_id').val();
      if (program_id==''){
         $('#go-back-btn').fadeIn(500);
      }else if (program_id=='PRO_4'){
         $('#program-1').fadeIn(500);
      }else if (program_id=='PRO_6'){
         $('#program-2').fadeIn(500);
      }else if (program_id=='TRANS'){
         $('#program-3').fadeIn(500);
      }
   }

///// TO UPLOAD images /////

$(function() {
   scan_ssce_img_result = {
      UpdatePreview: function(obj){
         if (!window.FileReader){
            // do nothing
         }else{  
         var reader= new FileReader();
         var target= null;
         reader.onload = function(e){
            target = e.target || e.srcElement;
         $('#ssce_img_result').prop("src", target.result);
         };
               reader.readAsDataURL(obj.files[0]);
      }
   }
   };
   });


   $(function() {
      scan_hnd_or_degree_img_result = {
         UpdatePreview: function(obj){
            if (!window.FileReader){
               // do nothing
            }else{  
            var reader= new FileReader();
            var target= null;
            reader.onload = function(e){
               target = e.target || e.srcElement;
            $('#hnd_or_degree_img_result').prop("src", target.result);
            };
                  reader.readAsDataURL(obj.files[0]);
         }
      }
      };
      });
   




      
   $(function() {
      scan_six_years_result = {
         UpdatePreview: function(obj){
            if (!window.FileReader){
               // do nothing
            }else{ 
            var reader= new FileReader();
            var target= null;
            reader.onload = function(e){
               target = e.target || e.srcElement;
            $('#six_year_result').prop("src", target.result);
            };
                  reader.readAsDataURL(obj.files[0]);
         }
      }
      };
      });
   




//// GET STATE
      function _get_states(){
			var country_id = $('#country_id').val();
			$('#state_id').html('<option value="">LOADING...</option>')
			  var action = 'get_states';
			var dataString ='action='+ action+'&country_id='+ country_id;
			$.ajax({
			type: "POST",
			url: "config/code.php",
			data: dataString,
			cache: false,
			success: function(html){
						$('#state_id').html(html);
			}
			});
	}



///////////////////////////////////
   function _fetch_student_program(){
      var program_id = $('#program_id').val();
      var action='_student_program';
      var dataString ='action='+ action+'&program_id='+program_id;
      $.ajax({
      type: "POST",
      url: "config/code.php",
      data: dataString,
      cache: false,
      success: function(html){$('#four_years_content').html(html);}
      });
   }
   
///////////////////////////////////






function showdocument_one(document1) {
   if (document1.files[0]){
       var reader = new FileReader();
       reader.onload = function(document1) {
           document.querySelector('#document1').setAttribute('src', document1.target.result);
       }
       reader.readAsDataURL(document1.files[0]);
   }
}




function showdocument_two(note) {
   if (note.files[0]){
       var reader = new FileReader();

       reader.onload = function(note) {
           document.querySelector('#document2').setAttribute('src', note.target.result);
       }
       reader.readAsDataURL(note.files[0]);
   }
}




function showdocument_three(note) {
   if (note.files[0]){
       var reader = new FileReader();

       reader.onload = function(note) {
           document.querySelector('#document3').setAttribute('src', note.target.result);
       }
       reader.readAsDataURL(note.files[0]);
   }
}





function showdocument_four(note) {
   if (note.files[0]){
       var reader = new FileReader();

       reader.onload = function(note) {
           document.querySelector('#document4').setAttribute('src', note.target.result);
       }
       reader.readAsDataURL(note.files[0]);
   }
}







 function _get_panel(view_content,divid) {
   _get_active(divid);
   $('.dashboard-main-div ').html('<div class="main-loading  animated zoomIn"><img src="images/ajax_loader.gif"/></div>').fadeIn(1000);
   var action='get_panel';
   var dataString = 'action='+action+'&view_content='+view_content;
   $.ajax({
      type: "POST",
      url: "config/code.php",
      data: dataString,
      cache: false,
      success: function(html){
         $('.right-sided-div').html(html);
       
      }
   });
}
 
  



 function _get_Admission(view_content,divid) {
    _get_active(divid);
   $('.overlay-back-div').html('<div class="loading-div  animated zoomIn"><img src="images/ajax_loader.gif"/></div>').fadeIn(1000);
   var action='Admission_process';
   var dataString = 'action='+action+'&view_content='+view_content;
   $.ajax({
      type: "POST",
      url: "config/code.php",
      data: dataString,
      cache: false,
      success: function(html){
         $('.overlay-back-div').html(html);
      }
   });
}
 

function _get_payment(view_content) {
   $('.overlay-back-div').html('<div class="loading-div animated zoomIn"><img src="images/ajax_loader.gif"/></div>').fadeIn(1000);
   var action='get_payment';
   var dataString = 'action='+action+'&view_content='+view_content;
   $.ajax({
      type: "POST",
      url: "config/code.php",
      data: dataString,
      cache: false,
      success: function(html){
         $('.overlay-back-div').html(html);
      }
   });
}


function _get_admitted_status(view_content, admission_id) {
   $('.overlay-back-div').html('<div class="loading-div animated zoomIn"><img src="images/ajax_loader.gif"/></div>').fadeIn(1000);
   var action='admitted_status';
   var dataString = 'action='+action+'&view_content='+view_content+'&admission_id='+admission_id;
   $.ajax({
      type: "POST",
      url: "config/code.php",
      data: dataString,
      cache: false,
      success: function(html){
         $('.overlay-back-div').html(html);
      }
   });
}


function _get_not_yet_admitted_status(view_content,admission_id) {
   $('.overlay-back-div').html('<div class="loading-div animated zoomIn"><img src="images/ajax_loader.gif"/></div>').fadeIn(1000);
   var action='not_yet_admitted_status';
   var dataString = 'action='+action+'&view_content='+view_content+'&admission_id='+admission_id;
   $.ajax({
      type: "POST",
      url: "config/code.php",
      data: dataString,
      cache: false,
      success: function(html){
         $('.overlay-back-div').html(html);
      }
   });
}


function _get_requirement(view_content,divid) {
   _get_active(divid);
   $('.overlay-back-div').html('<div class="loading-div animated zoomIn"><img src="images/ajax_loader.gif"/></div>').fadeIn(1000);
   var action='Admission_requirement';
   var dataString = 'action='+action+'&view_content='+view_content;
   $.ajax({
      type: "POST",
      url: "config/code.php",
      data: dataString,
      cache: false,
      success: function(html){
         $('.overlay-back-div').html(html);
      }
   });
}
 

function view_student_details(view_content,admission_id) {

   $('.overlay-back-div').html('<div class="loading-div animated zoomIn"><img src="images/ajax_loader.gif"/></div>').fadeIn(1000);
   var action='view_student_details';
   var dataString = 'action='+action+'&view_content='+view_content+'&admission_id='+admission_id;
   $.ajax({
      type: "POST",
      url: "config/code.php",
      data: dataString,
      cache: false,
      success: function(html){
         $('.overlay-back-div').html(html);

      }
   });

}
 




function _profile(view_content,divid) {
   if(divid!=''){
      _get_active(divid);

   }
   $('.dashboard-main-div ').html('<div class="main-loading animated zoomIn"><img src="images/ajax_loader.gif"/></div>').fadeIn(1000);
   var action='profile';
   var dataString = 'action='+action+'&view_content='+view_content;
   $.ajax({
      type: "POST",
      url: "config/code.php",
      data: dataString,
      cache: false,
      success: function(html){
         $('.right-sided-div').html(html);
      }
   });
}
 

function _change_password(view_content) {
   $('.overlay-back-div').html('<div class="loading-div animated zoomIn"><img src="images/ajax_loader.gif"/></div>').fadeIn(1000);
   var action='change_password';
   var dataString = 'action='+action+'&view_content='+view_content;
   $.ajax({
      type: "POST",
      url: "config/code.php",
      data: dataString,
      cache: false,
      success: function(html){
         $('.overlay-back-div').html(html);
      }
   });
}


var checkpassword = function() {
   if (document.getElementById('new_password').value == document.getElementById('comfirmed_password').value) {
       document.getElementById('comfirmed_password').style.border='#1C75BC 1px solid ';
       document.getElementById('message').style.display = 'none';

   } else {
     document.getElementById('comfirmed_password').style.border='hsla(0, 100%, 40%, 0.678) 1px solid';
      document.getElementById('message').style.display = 'block';
     document.getElementById('message').style.color = 'hsla(0, 100%, 40%, 0.678)';
     document.getElementById('message').style.fontSize = '12px';
     document.getElementById('message').innerHTML = 'PASSWORD NOT MATCH!';
   }
 }












function _update_password(student_id) {
   var old_password=$('#old_password').val();
   var new_password=$('#new_password').val();
   var comfirmed_password=$('#comfirmed_password').val();
   $('#old_password, #new_password, #comfirmed_password').removeClass('complain');

if(old_password==''){
   $('#old_password').addClass('complain');
   $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3>OLD PASSWORD ERROR</h3> <p>Fields cannot be empty.</p></div').fadeIn(500).delay(3000).fadeOut(100);

} else if(new_password==''){
   $('#new_password').addClass('complain');
   $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3>NEW PASSWORD ERROR</h3> <p>Fields cannot be empty.</p></div').fadeIn(500).delay(3000).fadeOut(100);


}else if(comfirmed_password==''){
   $('#comfirmed_password').addClass('complain');
   $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3>CONFIRM ERROR</h3> <p>Fields cannot be empty.</p></div').fadeIn(500).delay(3000).fadeOut(100);

}else if(new_password !=comfirmed_password){
   $('#new_password, #comfirmed_password').addClass('complain');
   $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3> PASSWORD NOT MATCH </h3> <p>Check the password and try again.</p></div').fadeIn(500).delay(3000).fadeOut(100);

}else{

   var action='update_password';
   var dataString = 'action='+action+'&student_id='+student_id+'&old_password='+old_password+'&new_password='+new_password;
   $.ajax({
      type: "POST",
      url: "config/code.php",
      data: dataString,
      dataType: 'json',
      cache: false,
      success: function(data){
         var scheck= data.check;
         if (scheck==1){
            $('#reset-pass-success-div').fadeIn(500).delay(3000).fadeOut(100);
            close_btn();
         }else{
   $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3>INCORRECT OLD PASSWORD</h3><p>please check your old password.</p></div').fadeIn(500).delay(3000).fadeOut(100);
   $('#old_password').addClass('complain');
         }
      }
   });
}
}





/////////// user registration upload pix ////////////////////

$(function(){
   Test = {
       UpdatePreview: function(obj){
         // if IE < 10 doesn't support FileReader
         if(!window.FileReader){
            // don't know how to proceed to assign src to images tag
         } else {
            _upload_profile_pix();
            var reader = new FileReader();
            var target = null;

            reader.onload = function(e) {
             target =  e.target || e.srcElement;
              $("#passport-1,#passport-2,#passport-3,#passport-4,#passport-5").prop("src", target.result);
            };
             reader.readAsDataURL(obj.files[0]);
         }
       }
   };
});



function _upload_profile_pix(){
   var action = 'update_profile_pix';
     var file_data = $('#passport, s_passport').prop('files')[0];
   if (file_data==''){}else{ 
     var form_data = new FormData();                  
     form_data.append('passport', file_data);
     form_data.append('action', action);
     $.ajax({
         url: "config/code.php",
         type: "POST",
         data: form_data,
         contentType: false,
         cache: false,
         processData:false,
         success: function(html){
            $('#passport-div').fadeIn(500).delay(3000).fadeOut(100);
         $('#passport').val('');
      }
     });
   }
}

/////////// end user registration upload pix ////////////////////




function _input_check(nextid){
   var firstname=$('#firstname').val();
   var lastname=$('#lastname').val();
   var gender=$('#gender').val();
   var dob=$('#dob').val();
   var email=$('#email').val();
   var phonenumber=$('#phonenumber').val();
   var address=$('#address').val();
   var country_id=$('#country_id').val();
   var state_id=$('#state_id').val();
   var schoolname=$('#schoolname').val();
   var school_country_id=$('#school_country_id').val();

  
   

   $('#firstname, #lastname, #gender, #dob, #email, #country_id, #phonenumber, #address, #country_id, #state_id, #schoolname, #school_country_profile_id').removeClass('complain');
  
   if(firstname==''){
         $('#firstname').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3>FIRST NAME ERROR</h3> <p>Fill the fields to continue</p></div').fadeIn(500).delay(3000).fadeOut(100);

      }else if(lastname==''){
         $('#lastname').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3>LAST NAME ERROR</h3> <p>Fill the fields to continue</p></div').fadeIn(500).delay(3000).fadeOut(100);
         return event.preventDefault(),$("html, #information, .input-div").animate({scrollTop:0},"fadeUp");
   
      }else if(gender==''){
         $('#gender').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3>GENDER ERROR</h3> <p>Fill the fields to continue</p></div').fadeIn(500).delay(3000).fadeOut(100);
         return event.preventDefault(),$("html, #information").animate({scrollTop:0},"fadeUp");
    
      }else if(dob==''){
         $('#dob').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3>DATE OF BIRTH ERROR</h3> <p>Fill the fields to continue</p></div').fadeIn(500).delay(3000).fadeOut(100);
    
      }else if((email.indexOf('@')<=0) || (email=='')){
         $('#email').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3>EMAIL ERROR!</h3><p>please check your email</p></div').fadeIn(500).delay(3000).fadeOut(100);
         return event.preventDefault(),$("html, #information, .input-div").animate({scrollTop:0},"fadeUp");
   
      }else if(phonenumber==''){
         $('#phonenumber').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3>PHONE NO ERROR</h3> <p>Fill the fields to continue</p></div').fadeIn(500).delay(3000).fadeOut(100);
         return event.preventDefault(),$("html, #information, .input-div").animate({scrollTop:0},"fadeUp");
     
      }else if(country_id==''){
         $('#country_id').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3>COUNTRY ERROR</h3> <p>Select your country</p></div').fadeIn(500).delay(3000).fadeOut(100);
     

      }else if(address==''){
         $('#address').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3>HOME ADDRESS ERROR</h3> <p>Fill the fields to continue</p></div').fadeIn(500).delay(3000).fadeOut(100);
         return event.preventDefault(),$("html, #information").animate({scrollTop:0},"fadeUp");
   

     
         
      }else if(state_id==''){
         $('#state_id').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3>STATE ERROR</h3> <p>Select your country first</p></div').fadeIn(500).delay(3000).fadeOut(100);
     
      }else if(schoolname==''){
         $('#schoolname').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3>INSTITUTE ERROR</h3> <p>Fill the fields to continue</p></div').fadeIn(500).delay(3000).fadeOut(100);
     
 
      }else if(school_country_id==''){
         $('#school_country_id').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3> COUNTRY ERROR</h3> <p>Select institute country</p></div').fadeIn(500).delay(3000).fadeOut(100);
     
      } else{
         $('.next_div, .div-pro').hide();
         $('#'+nextid).fadeIn(1000);
         return event.preventDefault(),$("html, .div-pro").animate({scrollTop:0},"fast");

       
}

}





function _update_profile(student_id){
   var firstname=$('#firstname').val();
   var middlename=$('#middlename').val();
   var lastname=$('#lastname').val();
   var email=$('#email').val();
   var phonenumber=$('#phonenumber').val();
   var gender=$('#gender').val();
   var dob=$('#dob').val();
   var country_id=$('#country_id').val();
   var state_id=$('#state_id').val();
   var address=$('#address').val();
   var lga=$('#lga').val();
   $('#firstname, #lastname, #email, #phonenumber, #country_id, #gender, #dob, #state_id, #address').removeClass('complain');
  
   if(firstname==''){
         $('#firstname').addClass('complain');
      $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3> FIRST NAME ERROR </h3> <p>Fields cannot be empty</p></div').fadeIn(500).delay(3000).fadeOut(100);

      }else if(lastname==''){
         $('#lastname').addClass('complain');
      $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3> LAST NAME ERROR </h3> <p>Fields cannot be empty</p></div').fadeIn(500).delay(3000).fadeOut(100);
   
      }else if((email=='')||(email.indexOf('@')<=0)){
         $('#email').addClass('complain');
      $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3> EMAIL ERROR </h3> <p>Please check your email</p></div').fadeIn(500).delay(3000).fadeOut(100);

      }else if(phonenumber==''){
         $('#phonenumber').addClass('complain');
      $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3> PHONE NUMBER ERROR </h3> <p>Fields cannot be empty</p></div').fadeIn(500).delay(3000).fadeOut(100);
   
      }else if(country_id==''){
         $('#country_id').addClass('complain');
         $('#warning-div').fadeIn(500).delay(3000).fadeOut(100);
   

      }else if(gender==''){
         $('#gender').addClass('complain');
      $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3> GENDER ERROR </h3> <p>Select your Gender</p></div').fadeIn(500).delay(3000).fadeOut(100);
   
      }else if(dob==''){
         $('#dob').addClass('complain');
      $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3> DATE OF BIRTH ERROR </h3> <p>Fields cannot be empty</p></div').fadeIn(500).delay(3000).fadeOut(100);

      }else if(state_id==''){
         $('#state_id').addClass('complain');
      $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3> STATE ERROR </h3> <p>Select your country first</p></div').fadeIn(500).delay(3000).fadeOut(100);
   

      }else if(address==''){
         $('#address').addClass('complain');
      $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3> HOME ADDRESS ERROR </h3> <p>Fields cannot be empty</p></div').fadeIn(500).delay(3000).fadeOut(100);
   
      }else{

         var btn_text=$('#submit_btn').html();
         $('#submit_btn').html('PROCESSING...');
         document.getElementById('submit_btn').disabled=true;

      var action='update_profile';
      var dataString ='action='+action+'&student_id='+student_id+'&firstname='+firstname+'&middlename='+middlename+'&lastname='+lastname+'&email='+email+'&phonenumber='+phonenumber+'&gender='+gender+'&dob='+dob+'&country_id='+country_id+'&state_id='+state_id+'&address='+address+'&lga='+lga;
      $.ajax({
         type: "POST",
         url: "config/code.php",
         data: dataString,
         dataType: 'json',
         cache: false,
         success: function(data){
            var scheck =data.check;
            if (scheck==1){
               $('#update-success-div').fadeIn(500).delay(3000).fadeOut(100);
            }else{
             $('#invalid-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3>EMAIL ALREADY EXIST!</h3><p>please your check email</p></div').fadeIn(500).delay(3000).fadeOut(100);     
             $('#email').addClass('complain');
            }
            $('#submit_btn').html(btn_text);
				document.getElementById('submit_btn').disabled=false;
         }
      });
   }
}




///// accept number ////
function isNumber_Check(){
   var e = window.event;
   var key = e.keyCode || e.which;

	if(!((key>=48) && (key<=57) || (key==43) || (key==45))){
      if(e.preventDefault){
         e.preventDefault();
         $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3>INVALID PHONE NUMBER</h3><p> Check your phone number</p></div').fadeIn(500).delay(3000).fadeOut(100); 
         $('#phonenumber').addClass('complain');
      }else{
        e.returnValue = false;
      }
	}
}

/////////////////////////////////

//// apply 4 years program ///////////////////////
   
function _apply_for_four_year_admission(student_id){
   var firstname=$('#firstname').val();
   var lastname=$('#lastname').val();
   var email=$('#email').val();
   var phonenumber=$('#phonenumber').val();
   var country_id=$('#country_id').val();
   var state_id=$('#state_id').val();
   var address=$('#address').val();
  
   var program_id=$('#program_id').val();
   var schoolname_four_years=$('#schoolname_four_years').val();

   var ssce_result=$('#four_year_ssce_result').val();
   var ssce_result_pix = $('#four_year_ssce_result').prop('files')[0];

   var hnd_or_degree_result=$('#hnd_or_degree_result').val();
   var hnd_or_degree_result_pix = $('#hnd_or_degree_result').prop('files')[0];

 
   if(schoolname_four_years==''){
      $('#schoolname_four_years').addClass('complain');
      $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3>INSTITUTE ERROR<h3><p> Fill the fields to continue</div').fadeIn(500).delay(3000).fadeOut(100);
  
   }else{
      $('#schoolname_four_years').removeClass('complain');
      var btn_text=$('#four_submit_btn').html();
      $('#four_submit_btn').html('PROCESSING...');
      document.getElementById('four_submit_btn').disabled=true;


   var form_data = new FormData();  
   var action='apply_for_four_year_admission';

   form_data.append('action', action);
   form_data.append('student_id', student_id);

   form_data.append('firstname', firstname);
   form_data.append('lastname', lastname);
   form_data.append('email', email);
   form_data.append('phonenumber', phonenumber);
   form_data.append('country_id', country_id);
   form_data.append('state_id', state_id);
   form_data.append('address', address);
  
   form_data.append('program_id', program_id);
   form_data.append('schoolname_four_years', schoolname_four_years);

   form_data.append('ssce_result_result_pro', ssce_result);
   form_data.append('ssce_result', ssce_result_pix);
 
    
   form_data.append('hnd_or_degree_result_pro', hnd_or_degree_result);
   form_data.append('hnd_or_degree_result', hnd_or_degree_result_pix);
 

    
      $.ajax({
         url: "config/code.php",
         type: "POST",
         data: form_data,
         dataType: 'json',
         contentType: false,
         cache: false,
         processData:false,
         success: function(data){
            var scheck =data.check;
            
            if (scheck==1){
             
               $('#reg-success-div').fadeIn(500).delay(3000).fadeOut(100);
               close_btn();
               _get_panel('my_Admission');
            } else{
               $('#invalid-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3>EMAIL ALREADY EXIST!</h3><p>please check your email</p></div').fadeIn(500).delay(3000).fadeOut(100);     
               $('#email').addClass('complain');
            }
            $('#four_submit_btn').html(btn_text);
				document.getElementById('four_submit_btn').disabled=false;
         }
      });
   }
}

//// end apply 4 years program ///////////////////////




   //// apply 6 years program ///////////////////////

   function _apply_for_six_year_admission(student_id){
      var firstname=$('#firstname').val();
      var lastname=$('#lastname').val();
      var email=$('#email').val();
      var phonenumber=$('#phonenumber').val();
      var country_id=$('#country_id').val();
      var state_id=$('#state_id').val();
      var address=$('#address').val();
     
      var program_id=$('#program_id').val();

      var six_year_result=$('#six_years_ssce_result').val();
      var six_year_result_pix = $('#six_years_ssce_result').prop('files')[0];

    
         
         var btn_text=$('#six_submit_btn').html();
         $('#six_submit_btn').html('PROCESSING...');
         document.getElementById('six_submit_btn').disabled=true;
   
   
      var form_data = new FormData();  
      var action='apply_for_six_year_admission';
   
      form_data.append('action', action);
      form_data.append('student_id', student_id);
   
      form_data.append('firstname', firstname);
      form_data.append('lastname', lastname);
      form_data.append('email', email);
      form_data.append('phonenumber', phonenumber);
      form_data.append('country_id', country_id);
      form_data.append('state_id', state_id);
      form_data.append('address', address);
     
      form_data.append('program_id', program_id);
      form_data.append('six_year_result_pro', six_year_result);
      form_data.append('six_year_result', six_year_result_pix);
    
   
   
         $.ajax({
            url: "config/code.php",
            type: "POST",
            data: form_data,
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            success: function(data){
               var scheck =data.check;
               if (scheck==1){           
                  $('#reg-success-div').fadeIn(500).delay(3000).fadeOut(100);
                  close_btn();
                  _get_panel('my_Admission');
               } else{
                  $('#invalid-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3>EMAIL ALREADY EXIST!</h3><p>please check your email</p></div').fadeIn(500).delay(3000).fadeOut(100);     
                  $('#email').addClass('complain');
               }
               $('#six_submit_btn').html(btn_text);
               document.getElementById('six_submit_btn').disabled=false;
            }
         });
      }
   

   //// apply 6 years program ///////////////////////






   
   //// apply for transfer student  ///////////////////////
   $(function() {
      scan_transfer_ssce_img_result = {
         UpdatePreview: function(obj){
            if (!window.FileReader){
               // do nothing
            }else{
      
           
            var reader= new FileReader();
            var target= null;
            reader.onload = function(e){
               target = e.target || e.srcElement;
            $('#transfer_ssce_img_result').prop("src", target.result);
            };
                  reader.readAsDataURL(obj.files[0]);
         }
      }
      };
      });
   

   function _apply_for_transfer(student_id){
      var firstname=$('#firstname').val();
      var lastname=$('#lastname').val();
      var email=$('#email').val();
      var phonenumber=$('#phonenumber').val();
      var country_id=$('#country_id').val();
      var state_id=$('#state_id').val();
      var address=$('#address').val();
     
      var program_id=$('#program_id').val();
      var transfer_schoolname=$('#transfer_schoolname').val();
      var transfer_level=$('#transfer_level').val();
      

      var transfer_department_name=$('#transfer_department_name').val();
      var transfer_student_id=$('#transfer_student_id').val();

      var transfer_ssce_result = $('#student_trans_ssce_result').val();
      var ssce_result_pix = $('#student_trans_ssce_result').prop('files')[0];

      $('#transfer_schoolname,#transfer_department_name,#transfer_student_id').removeClass('complain');
      if (transfer_schoolname==''){
         $('#transfer_schoolname').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3>INSTITUTE ERROR</h3> <p>Fill the fields to continue</p></div').fadeIn(500).delay(3000).fadeOut(100);
      }else if (transfer_department_name==''){
         $('#transfer_department_name').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src=".images/warning.gif" alt="Warning" /></div><h3>DEPARTMENT ERROR</h3> <p>Fill the fields to continue</p></div').fadeIn(500).delay(3000).fadeOut(100);
  
      }else if (transfer_student_id==''){
         $('#transfer_student_id').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3>STUDENT ID ERROR</h3> <p>Fill the fields to continue</p></div').fadeIn(500).delay(3000).fadeOut(100);
  
      }else{
         var btn_text=$('#submit_btn').html();
         $('#submit_btn').html('PROCESSING...');
         document.getElementById('submit_btn').disabled=true;

         
      var form_data = new FormData();  
      var action='apply_for_transfer_student';
   
  
      form_data.append('action', action);
      form_data.append('student_id', student_id);
   
      form_data.append('firstname', firstname);
      form_data.append('lastname', lastname);
      form_data.append('email', email);
      form_data.append('phonenumber', phonenumber);
      form_data.append('country_id', country_id);
      form_data.append('state_id', state_id);
      form_data.append('address', address);
     
      form_data.append('program_id', program_id);
      form_data.append('transfer_schoolname', transfer_schoolname);

      form_data.append('transfer_department_name', transfer_department_name);
      form_data.append('transfer_level', transfer_level);
      form_data.append('transfer_student_id', transfer_student_id);

      form_data.append('transfer_ssce_result_pro', transfer_ssce_result);
      form_data.append('transfer_ssce_result', ssce_result_pix);
     
         $.ajax({
            url: "config/code.php",
            type: "POST",
            data: form_data,
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            success: function(data){
               var scheck =data.check;
               
               if (scheck==1){
                
                  $('#reg-success-div').fadeIn(500).delay(3000).fadeOut(100);
                  close_btn();
                  _get_panel('my_Admission');
               } else{
                  $('#invalid-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3>EMAIL ALREADY EXIST!</h3><p>please check your email</p></div').fadeIn(500).delay(3000).fadeOut(100);     
                  $('#email').addClass('complain');
               }
               $('#submit_btn').html(btn_text);
               document.getElementById('submit_btn').disabled=false;
            }
         });
      }
   }

   //// End of transfer student  ///////////////////////















/////////// admission student upload pix ////////////////////

$(function(){
   update_student_adms_profile_pix = {
       UpdatePreview: function(obj){
         // if IE < 10 doesn't support FileReader
         if(!window.FileReader){
            // don't know how to proceed to assign src to images tag
         } else {
          
           
            var reader = new FileReader();
            var target = null;

            reader.onload = function(e) {
             target =  e.target || e.srcElement;
              $("#student_adms_passport").prop("src", target.result);
            };
             reader.readAsDataURL(obj.files[0]);
         }
       }
   };
});



$(function(){
   scan_result = {
       UpdatePreview: function(obj){
         // if IE < 10 doesn't support FileReader
         if(!window.FileReader){
            // don't know how to proceed to assign src to images tag
         } else {
          
           
            var reader = new FileReader();
            var target = null;

            reader.onload = function(e) {
             target =  e.target || e.srcElement;
              $("#result").prop("src", target.result);
            };
             reader.readAsDataURL(obj.files[0]);
         }
       }
   };
});



$(function(){
   scan_hnd_or_degree_result = {
       UpdatePreview: function(obj){
         // if IE < 10 doesn't support FileReader
         if(!window.FileReader){
            // don't know how to proceed to assign src to images tag
         } else {
          
           
            var reader = new FileReader();
            var target = null;

            reader.onload = function(e) {
             target =  e.target || e.srcElement;
              $("#document4").prop("src", target.result);
            };
             reader.readAsDataURL(obj.files[0]);
         }
       }
   };
});





//////////////////////////////////////////////



function _update_student_adms_profile(admission_id){
 
   var firstname=$('#firstname').val();
   var middlename=$('#middlename').val();
   var lastname=$('#lastname').val();
   var gender=$('#gender').val();
   var dob=$('#dob').val();
   var email=$('#email').val();
   var phonenumber=$('#phonenumber').val();
   var address=$('#address').val();
   var country_id=$('#country_id').val();
   var state_id=$('#state_id').val();
   var schoolname=$('#schoolname').val();
   var school_country_id=$('#school_country_id').val();
   var transfer_department_name=$('#transfer_department_name').val();
   var transfer_student_id=$('#transfer_student_id').val();
   var transfer_level=$('#transfer_level').val();
   var sat_or_act=$('#sat_or_act').val();
   var lga=$('#lga').val();
   
  
     var action = 'student_adms_profile';
     var form_data = new FormData();  
     form_data.append('action', action);
     form_data.append('admission_id', admission_id); 
     
     form_data.append('firstname', firstname);
     form_data.append('middlename', middlename);
     form_data.append('lastname', lastname);
     form_data.append('gender', gender);
     form_data.append('dob', dob);
     form_data.append('email', email);
     form_data.append('phonenumber', phonenumber);
     form_data.append('address', address);
     form_data.append('country_id', country_id);
     form_data.append('state_id', state_id);
     form_data.append('schoolname', schoolname);
     form_data.append('school_country_id', school_country_id);
     form_data.append('transfer_department_name', transfer_department_name);
     form_data.append('transfer_student_id', transfer_student_id);
     form_data.append('transfer_level', transfer_level);
     form_data.append('sat_or_act', sat_or_act);
     form_data.append('lga', lga);

     $.ajax({
         url: "config/code.php",
         type: "POST",
         data: form_data,
         contentType: false,
         cache: false,
         processData:false,
         success: function(data){
            var scheck =data.check;
               
            if (scheck==0){      
             $('#invalid-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3>EMAIL ALREADY EXIST!<h3><p>You already have account</p></div').fadeIn(500).delay(3000).fadeOut(100);     
             $('#email').addClass('complain');
            }else {
               $('#update-success-div').fadeIn(500).delay(3000).fadeOut(100);   
               }
            $('#update_btn').html(' <i class="fa fa-check"> UPDATE PROFILE </i>');
            document.getElementById('update_btn').disabled=false;
         }
     });
   }





////// ALLOW TO UPLOAD HND OR DEGREE RESULT ////////
   
function _update_four_years_profile(admission_id){
   var student_adms_pix=$('#student_adms_pix').val();
   var student_pro = $('#student_adms_pix').prop('files')[0];

  
   var ssce_result= $('#ssce_result').val();
   var result_pix_file = $('#ssce_result').prop('files')[0];

   var essay= $('#document_one').val();
   var essay_file = $('#document_one').prop('files')[0];

   var letter_one= $('#document_two').val();
   var letter_one_file = $('#document_two').prop('files')[0];

   var letter_two= $('#document_three').val();
   var letter_two_file = $('#document_three').prop('files')[0];
   
   var hnd_or_degree_result= $('#hnd_or_degree_result').val();
   var hnd_or_degree_result_pix = $('#hnd_or_degree_result').prop('files')[0];


   var form_data = new FormData();  
   var action='student_adms_document_profile';

         form_data.append('action', action);
         form_data.append('admission_id', admission_id);

      
         form_data.append('student_adms_img', student_adms_pix);
         form_data.append('student_adms_pix', student_pro);

         form_data.append('result', ssce_result);
         form_data.append('ssce_result', result_pix_file);

         form_data.append('essay', essay);
         form_data.append('essay', essay_file);

         form_data.append('letter_one', letter_one);
         form_data.append('letter_one', letter_one_file);

         form_data.append('letter_two', letter_two);
         form_data.append('letter_two', letter_two_file);

         form_data.append('hnd_or_degree_result', hnd_or_degree_result);
         form_data.append('hnd_or_degree_result', hnd_or_degree_result_pix);

      var btn_text=$('#update_btn').html();
      $('#update_btn').html('UPDATING...');
      document.getElementById('update_btn').disabled=true;

      $.ajax({
         url: "config/code.php",
         type: "POST",
         data: form_data,
         dataType: 'json',
         contentType: false,
         cache: false,
         processData:false,
         success: function(data){
            var scheck =data.check;     
            if (scheck==1){
               _update_student_adms_profile(admission_id);
               close_btn();
               _get_panel('my_Admission');
            } 
            $('#update_btn').html(btn_text);
				document.getElementById('update_btn').disabled=false;
         }
      });
   }

///////////////////////////////////////////////////






     
function _update_admission_student_profile(admission_id){

   var student_adms_pix=$('#student_adms_pix').val();
   var student_pro = $('#student_adms_pix').prop('files')[0];

  
   var ssce_result= $('#ssce_result').val();
   var result_pix_file = $('#ssce_result').prop('files')[0];

   var essay= $('#document_one').val();
   var essay_file = $('#document_one').prop('files')[0];

   var letter_one= $('#document_two').val();
   var letter_one_file = $('#document_two').prop('files')[0];

   var letter_two= $('#document_three').val();
   var letter_two_file = $('#document_three').prop('files')[0];
   
 
   var form_data = new FormData();  
   var action='student_adms_document_profile';
         form_data.append('action', action);
         form_data.append('admission_id', admission_id);

      
         form_data.append('student_adms_img', student_adms_pix);
         form_data.append('student_adms_pix', student_pro);

         form_data.append('result', ssce_result);
         form_data.append('ssce_result', result_pix_file);

         form_data.append('essay', essay);
         form_data.append('essay', essay_file);

         form_data.append('letter_one', letter_one);
         form_data.append('letter_one', letter_one_file);

         form_data.append('letter_two', letter_two);
         form_data.append('letter_two', letter_two_file);


      var btn_text=$('#update_btn').html();
      $('#update_btn').html('UPDATING...');
      document.getElementById('update_btn').disabled=true;

      $.ajax({
         url: "config/code.php",
         type: "POST",
         data: form_data,
         dataType: 'json',
         contentType: false,
         cache: false,
         processData:false,
         success: function(data){
            var scheck =data.check;     
            if (scheck==1){
               _update_student_adms_profile(admission_id);
               close_btn();
               _get_panel('my_Admission');
            } 
            $('#update_btn').html(btn_text);
				document.getElementById('update_btn').disabled=false;
         }
      });
   }



