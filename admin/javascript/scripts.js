
   
   
function _expand_link(divid){
	$('#'+divid).toggle(500);
   $('#sdashboard,#myprofile').removeClass('active');
   $('#dashboard,#admin').removeClass('active');
   $('#'+divid).addClass('active');
    $('#s'+divid).addClass('active');
   
   }


function _log_out(divid){
	$('#'+divid).toggle(500);

}

  
function close_btn(){
   $('.overlay-back-div').html('').fadeOut(600);
   _get_panel('student_check_list');
}

  
function _get_active(divid){
   $('#sdashboard,#sadmin,#myprofile').removeClass('active');
   $('#dashboard,#admin').removeClass('active');
   $('#'+divid).addClass('active');
    $('#s'+divid).addClass('active');
}

function _close(){
   $('.overlay-back-div').html('').fadeOut(600);
   _get_panel('student_check_list');
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
   return event.preventDefault(),$("html, .div-pro").animate({scrollTop:0},"fadeUp");
}
 

function _back_pro(nextid){
   $('.div-pro').hide();
   $('#'+nextid).fadeIn(1000);  
   return event.preventDefault(),$("html, .div-pro").animate({scrollTop:0},"fadeUp");
}




 
$(window).scroll(function() {
if ($(this).scrollTop() >= 100 ){ 
$("#go-top").fadeIn(800).css("display", "block");
   }
});



  

function _input_check(nextid){
   var firstname=$('#firstname').val();
   var lastname=$('#lastname').val();
   var gender=$('#gender').val();
   var dob=$('#dob').val();
   var email=$('#email').val();
   var phonenumber=$('#phonenumber').val();
   var address=$('#address').val();
   var country=$('#country').val();
   var sat_or_act=$('#sat_or_act').val();

   $('#firstname, #lastname, #gender, #dob, #email, #country, #phonenumber, #address, #country, #sat_or_act').removeClass('complain');
  
   if(firstname==''){
         $('#firstname').addClass('complain');
      $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Warning" /></div><h3>THIS FIELD CANNOT BE EMPTY<h3></div').fadeIn(500).delay(3000).fadeOut(100);
      return event.preventDefault(),$("html, #information, .input-div").animate({scrollTop:0},"fadeUp");

      }else if(lastname==''){
         $('#lastname').addClass('complain');
      $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Warning" /></div><h3>THIS FIELD CANNOT BE EMPTY<h3></div').fadeIn(500).delay(3000).fadeOut(100);
         return event.preventDefault(),$("html, #information, .input-div").animate({scrollTop:0},"fadeUp");
   
      }else if(gender==''){
         $('#gender').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Warning" /></div><h3>THIS FIELD CANNOT BE EMPTY<h3></div').fadeIn(500).delay(3000).fadeOut(100);
         return event.preventDefault(),$("html, #information").animate({scrollTop:0},"fadeUp");
    
      }else if(dob==''){
         $('#dob').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Warning" /></div><h3>THIS FIELD CANNOT BE EMPTY<h3></div').fadeIn(500).delay(3000).fadeOut(100);
         return event.preventDefault(),$("html, #information").animate({scrollTop:0},"fadeUp");
    
      }else if(email.indexOf('@')<=0){
         $('#email').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Warning" /></div><h3>EMAIL ERROR!<h3></div').fadeIn(500).delay(3000).fadeOut(100);
         return event.preventDefault(),$("html, #information, .input-div").animate({scrollTop:0},"fadeUp");
   
      }else if(phonenumber==''){
         $('#phonenumber').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Warning" /></div><h3>THIS FIELD CANNOT BE EMPTY<h3></div').fadeIn(500).delay(3000).fadeOut(100);
         return event.preventDefault(),$("html, #information, .input-div").animate({scrollTop:0},"fadeUp");
   
      }else if(address==''){
         $('#address').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Warning" /></div><h3>THIS FIELD CANNOT BE EMPTY<h3></div').fadeIn(500).delay(3000).fadeOut(100);
         return event.preventDefault(),$("html, #information").animate({scrollTop:0},"fadeUp");
   

      }else if(country==''){
         $('#country').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Warning" /></div><h3>THIS FIELD CANNOT BE EMPTY<h3></div').fadeIn(500).delay(3000).fadeOut(100);
   
    
      }else if(sat_or_act==''){
         $('#sat_or_act').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Warning" /></div><h3>THIS FIELD CANNOT BE EMPTY<h3></div').fadeIn(500).delay(3000).fadeOut(100);

   
     
      }else{
         $('.next_div, .div-pro').hide();
         $('#'+nextid).fadeIn(1000);
         return event.preventDefault(),$("html, .div-pro").animate({scrollTop:0},"fadeUp");


}
}
  
  
  function _get_panel(view_content,divid) {
   _get_active(divid);
    $('.dashboard-main-div ').html('<div class="loading-div animated zoomIn"><img src="image/ajax_loader.gif"/></div>').fadeIn(1000);
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
  



 function _get_slide_panel(view_content) {
    
   $('.overlay-back-div').html('<div class="loading-div animated zoomIn"><img src="../image/ajax_loader.gif"/></div>').fadeIn('fast');
   var action='slide_panel';
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





function _register_staff() {
   var firstname=$('#firstname').val();
   var lastname=$('#lastname').val();
   var email=$('#email').val();
   var phonenumber=$('#phonenumber').val();
   var role=$('#role').val();
   var status=$('#status').val();

   var action='register_staff';
   var dataString = 'action='+action+'&firstname='+firstname+'&lastname='+lastname+'&email='+email+'&phonenumber='+phonenumber+'&role='+role+'&status='+status;
   $.ajax({
      type: "POST",
      url: "config/code.php",
      data: dataString,
      cache: false,
      success: function(html){
         close_btn();
         $('#success-div').html('<div class="alert-logo"><img src="../image/tick-2.gif" alt="Hero" /></div><h3>REGISTRATION SUCCESSFUL<h3></div>').fadeIn(500).delay(3000).fadeOut(100);
         _get_panel('all_staff');
      }
   });
}




function _view_staff_list(){
   _get_active(divid);
    $('.dashboard-main-div ').html('<div class="loading-div animated zoomIn"><img src="../image/ajax_loader.gif"/></div>').fadeIn(1000);
   var action='view_staff_list';
   var dataString ='action='+ action;
   $.ajax({
   type: "POST",
   url: local_url,
   data: dataString,
   cache: false,
   success: function(html){
      $('right-sided-div').html(html);
   }
   });
}











function _profile(view_content,divid) {
   if(divid!=''){
      _get_active(divid);

   }
   $('.dashboard-main-div ').html('<div class="success-back-div animated zoomIn"><img src="../image/ajax_loader.gif"/></div>').fadeIn(1000);
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
 

function _staff_profile(view_content,staff_id) {
   $('.profile-back-div ').html('<div class="success-back-div animated zoomIn"><img src="../image/ajax_loader.gif"/></div>').fadeIn(1000);
   var action='staff_profile';
   var dataString = 'action='+action+'&view_content='+view_content+'&staff_id='+staff_id;
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
 

function _update_profile(staff_id,complain){
   var firstname=$('#firstname').val();
   var middlename=$('#middlename').val();
   var lastname=$('#lastname').val();
   var email=$('#email').val();
   var gender=$('#gender').val();
   var dob=$('#dob').val();
   var phonenumber=$('#phonenumber').val();
   var state=$('#state').val();
   var address=$('#address').val();
   var religious=$('#religious').val();
   var role=$('#role').val();
   var status=$('#status').val();
   
   if ((firstname=='')||(lastname=='')||(email.indexOf('@')<=0)||(phonenumber=='')||(address=='')){
      $('#warning-div').html('<div class="alert-logo"><img src="image/warning.gif" alt="Hero" /></div><h3>This Field Cannot Be Empty<h3></div').fadeIn(500).delay(3000).fadeOut(100);
      
   } else {
      var action='update_profile';
      var dataString ='action='+action+'&staff_id='+staff_id+'&firstname='+firstname+'&middlename='+middlename+'&lastname='+lastname+'&email='+email+'&gender='+gender+'&dob='+dob+'&phonenumber='+phonenumber+'&state='+state+'&address='+address+'&religious='+religious+'&role='+role+'&status='+status;
      $.ajax({
         type: "POST",
         url: "config/code.php",
         data: dataString,
         cache: false,
         success: function(html){
            $('#success-div').html('<div class="alert-logo"><img src="../image/tick-2.gif" alt="Hero" /></div><h3>UPDATE SUCCESSFUL<h3></div>').fadeIn(500).delay(3000).fadeOut(100);
            _staff_profile('staff_profile',staff_id);
         }
      });
   }
}


   


 

function view_student_details(view_content,admission_id) {
   $('.overlay-back-div').html('<div class="success-back-div animated zoomIn"><img src="../image/ajax_loader.gif"/></div>').fadeIn(1000);
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
 




function _get_admitted_status(view_content,admission_id) {
   $('.overlay-back-div').html('<div class="loading-div animated zoomIn"><img src="../image/ajax_loader.gif"/></div>').fadeIn(1000);
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


function _get_admitted_student(admission_id) {
   var btn_text=$('#admit').html();
   $('#admit').html('ADMITTING...');
   document.getElementById('admit').disabled=true;

   var action='admitted_student';
   var dataString = 'action='+action+'&admission_id='+admission_id;
   $.ajax({
      type: "POST",
      url: "config/code.php",
      data: dataString,
      dataType: 'json',
      cache: false,
      success: function(data){
         var scheck= data.check;
         if (scheck==1){
            $('#success-div').html('<div class="alert-logo"><img src="../image/tick-2.gif" alt="Warning" /></div><h3>ADMITTED SUCCESSFUL<h3></div>').fadeIn(500).delay(3000).fadeOut(100);
            _get_admitted_status('admitted_status',admission_id);
         }

         $('#admit').html(btn_text);
         document.getElementById('admit').disabled=false;
         }
   });
}





function _cancel_admitted_student(admission_id) {
   var btn_text=$('#admit').html();
   $('#admit').html('CANCELING...');
   document.getElementById('admit').disabled=true;

   var action='cancel_admitted_student';
   var dataString = 'action='+action+'&admission_id='+admission_id;
   $.ajax({
      type: "POST",
      url: "config/code.php",
      data: dataString,
      dataType: 'json',
      cache: false,
      success: function(data){
         var scheck= data.check;
         if (scheck==1){
            $('#success-div').html('<div class="alert-logo"><img src="../image/tick-2.gif" alt="Warning" /></div><h3>ADMITTED CANCELED SUCCESSFUL<h3></div>').fadeIn(500).delay(3000).fadeOut(100);
            _get_admitted_status('admitted_status',admission_id);
         }

         $('#admit').html(btn_text);
         document.getElementById('admit').disabled=false;
         }
   });
}