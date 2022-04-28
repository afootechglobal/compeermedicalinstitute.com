
   
function _expand_link(divid){
	$('#'+divid).toggle(500);
   
}

function _log_out(divid){
	$('#'+divid).toggle(500).delay(5000).fadeOut(500).toggl(500);
}

  
function close_btn(){
   $('.overlay-back-div').html('').fadeOut(600);
}

function _close(){
   $('.overlay-back-div').html('').fadeOut(600);
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





function _back_panel(nextid){
$('.next_div').hide();
$('#'+nextid).fadeIn(1000);
$('#six_program').fadeOut(0);
$('#four_program').fadeOut(0);

return event.preventDefault(),$("html, .input-div").animate({scrollTop:0},"slow");


}


function _program(){
$('#six_program').html('').fadeOut(0);
$('#four_program').html('').fadeOut(0);


}


function _four_program(){
$('#four_program').fadeIn(1000);
$('#six_program').fadeOut(0);


}


function _six_program(){
$('#six_program').fadeIn(1000);
$('#four_program').fadeOut(0);
}
  


///// TO UPLOAD IMAGE /////

$(function() {
   scan_four_years_result = {
      UpdatePreview: function(obj){
         if (!window.FileReader){
            // do nothing
         }else{
   
        
         var reader= new FileReader();
         var target= null;
         reader.onload = function(e){
            target = e.target || e.srcElement;
         $('#four_year_result').prop("src", target.result);
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





$(function(link) {
   $('li').click(function() {
      if ($('.active').removeClass('active')){
       $(this).toggleClass('active');
      }else{
         $('.active').addClass('active');
       $(this).toggleClass('active');
      }
       
       
   });  
});




  




 function _get_panel(view_content) {
   $('.dashboard-main-div ').html('<div class="success-back-div animated zoomIn"><img src="../image/ajax_loader.gif"/></div>').fadeIn(1000);
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
 
  



 function _get_Admission(view_content) {
   $('.overlay-back-div').html('<div class="loading-div  animated zoomIn"><img src="../image/ajax_loader.gif"/></div>').fadeIn(1000);
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
   $('.overlay-back-div').html('<div class="loading-div animated zoomIn"><img src="../image/ajax_loader.gif"/></div>').fadeIn(1000);
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


function _get_not_yet_admitted_status(view_content,admission_id) {
   $('.overlay-back-div').html('<div class="loading-div animated zoomIn"><img src="../image/ajax_loader.gif"/></div>').fadeIn(1000);
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


function _get_requirement(view_content) {
   $('.overlay-back-div').html('<div class="success-back-div animated zoomIn"><img src="../image/ajax_loader.gif"/></div>').fadeIn(1000);
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
 




function _profile(view_content) {
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
 

function _change_password(view_content) {
   $('.overlay-back-div').html('<div class="success-back-div animated zoomIn"><img src="../image/ajax_loader.gif"/></div>').fadeIn(1000);
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
   $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Warning" /></div><h3>THIS FIELD CANNOT BE EMPTY<h3></div').fadeIn(500).delay(3000).fadeOut(100);

} else if(new_password==''){
   $('#new_password').addClass('complain');
   $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Warning" /></div><h3>THIS FIELD CANNOT BE EMPTY<h3></div').fadeIn(500).delay(3000).fadeOut(100);


}else if(comfirmed_password==''){
   $('#comfirmed_password').addClass('complain');
   $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Warning" /></div><h3>THIS FIELD CANNOT BE EMPTY<h3></div').fadeIn(500).delay(3000).fadeOut(100);

}else if(new_password !=comfirmed_password){
   $('#new_password, #comfirmed_password').addClass('complain');
   $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Warning" /></div><h3> PASSWORD NOT MATCH <h3></div').fadeIn(500).delay(3000).fadeOut(100);

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
            $('#success-div').html('<div class="alert-logo"><img src="../image/tick-2.gif" alt="success" /></div><h3>PASSWORD CHANGE SUCCESSFUL<h3></div>').fadeIn(500).delay(3000).fadeOut(100);
            close_btn();
         }else{
   $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Warning" /></div><h3>INCORRECT OLD PASSWORD<h3></div').fadeIn(500).delay(3000).fadeOut(100);

         }
      }
   });
}
}





/////////////////////////////////////////

$(function(){
   Document_one = {
       UpdatePreview: function(obj){
         // if IE < 10 doesn't support FileReader
         if(!window.FileReader){
            // don't know how to proceed to assign src to image tag
         } else {
            _upload_result();
        
            if (document1.files[0]){
               var reader = new FileReader();
               reader.onload = function(document1) {
                   document.querySelector('#document1').setAttribute('src', document1.target.result);
               }
               reader.readAsDataURL(document1.files[0]);
           }
         }
       }
   };
});


function _upload_result(){
   var action = 'upload_result';
     var file_data = $('#document_one').prop('files')[0];
   if (file_data==''){}else{ 
     var form_data = new FormData();                  
     form_data.append('document_one', file_data);
     form_data.append('action', action);
     form_data.append('admission_id', admission_id);
     $.ajax({
         url: "config/code.php",
         type: "POST",
         data: form_data,
         contentType: false,
         cache: false,
         processData:false,
         success: function(html){
        $('#success-div').html('<div class="alert-logo"><img src="../image/tick-2.gif" alt="success" /></div><h3>PASSPORT UPDATED SUCCESSFUL<h3></div>').fadeIn(500).delay(3000).fadeOut(100);
         $('#document_one').val('');
      }
     });
   }
}


///////////////////////////////////////////////


/////////// user registration upload pix ////////////////////

$(function(){
   Test = {
       UpdatePreview: function(obj){
         // if IE < 10 doesn't support FileReader
         if(!window.FileReader){
            // don't know how to proceed to assign src to image tag
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
        $('#success-div').html('<div class="alert-logo"><img src="../image/tick-2.gif" alt="success" /></div><h3>PASSPORT UPDATED SUCCESSFUL<h3></div>').fadeIn(500).delay(3000).fadeOut(100);
         $('#passport').val('');
      }
     });
   }
}

/////////// end user registration upload pix ////////////////////







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
   $('#firstname, #lastname, #email, #phonenumber, #country_id, #state_id, #address').removeClass('complain');
  
   if(firstname==''){
         $('#firstname').addClass('complain');
      $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Warning" /></div><h3>This Field Cannot Be Empty<h3></div').fadeIn(500).delay(3000).fadeOut(100);

      }else if(lastname==''){
         $('#lastname').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Warning" /></div><h3>This Field Cannot Be Empty<h3></div').fadeIn(500).delay(3000).fadeOut(100);
   
      }else if(email.indexOf('@')<=0){
         $('#email').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Warning" /></div><h3>This Field Cannot Be Empty<h3></div').fadeIn(500).delay(3000).fadeOut(100);
   
      }else if(phonenumber==''){
         $('#phonenumber').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Warning" /></div><h3>This Field Cannot Be Empty<h3></div').fadeIn(500).delay(3000).fadeOut(100);
   
      }else if(country_id==''){
         $('#country_id').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Warning" /></div><h3>This Field Cannot Be Empty<h3></div').fadeIn(500).delay(3000).fadeOut(100);
   

      }else if(state_id==''){
         $('#state_id').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Warning" /></div><h3>This Field Cannot Be Empty<h3></div').fadeIn(500).delay(3000).fadeOut(100);
   


      }else if(address==''){
         $('#address').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Warning" /></div><h3>This Field Cannot Be Empty<h3></div').fadeIn(500).delay(3000).fadeOut(100);
   
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
               $('#success-div').html('<div class="alert-logo"><img src="../image/tick-2.gif" alt="success" /></div><h3>UPDATE SUCCESSFUL<h3></div>').fadeIn(500).delay(3000).fadeOut(100);
            }else{
             $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Warning" /></div><h3>EMAIL ALREADY EXIST!<h3></div').fadeIn(500).delay(3000).fadeOut(100);     
            }
            $('#submit_btn').html(btn_text);
				document.getElementById('submit_btn').disabled=false;
         }
      });
   }
}





function _input_check(nextid){
   var firstname=$('#firstname').val();
   var lastname=$('#lastname').val();
   var gender=$('#gender').val();
   var dob=$('#dob').val();
   var email=$('#email').val();
   var phonenumber=$('#phonenumber').val();
   var address=$('#address').val();
   var country=$('#country').val();
   

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
   
    
   
     
      }else{
         $('.next_div, .div-pro').hide();
         $('#'+nextid).fadeIn(1000);
         return event.preventDefault(),$("html, .div-pro").animate({scrollTop:0},"fadeUp");


}
}



//// apply 4 years program ///////////////////////
   
function _apply_for_four_year_admission(student_id){
   var firstname=$('#firstname').val();
   var lastname=$('#lastname').val();
   var email=$('#email').val();
   var phonenumber=$('#phonenumber').val();
   var country=$('#country').val();
   var address=$('#address').val();
  
   var year_program=$('#year_program').val();
   var four_year_result=$('#four_year').val();
   var four_year_result_pix = $('#four_year').prop('files')[0];


   var form_data = new FormData();  
   var action='apply_for_four_year_admission';

   form_data.append('action', action);
   form_data.append('student_id', student_id);

   form_data.append('firstname', firstname);
   form_data.append('lastname', lastname);
   form_data.append('email', email);
   form_data.append('phonenumber', phonenumber);
   form_data.append('country', country);
   form_data.append('address', address);
  
   form_data.append('year_program', year_program);
   form_data.append('four_year_result_pro', four_year_result);
   form_data.append('four_year_result', four_year_result_pix);
 


      var btn_text=$('#four_submit_btn').html();
      $('#four_submit_btn').html('PROCESSING...');
      document.getElementById('four_submit_btn').disabled=true;

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
             
               $('#success-div').html('<div class="alert-logo"><img src="../image/tick-2.gif" alt="success" /></div><h3> REGISTRATION SUCCESSFUL <h3></div>').fadeIn(500).delay(3000).fadeOut(100);
               close_btn();
               _get_panel('my_Admission');
            } else{
               $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Warning" /></div><h3>EMAIL ALREADY EXIST!<h3></div').fadeIn(500).delay(3000).fadeOut(100);     
               $('#email').addClass('complain');
            }
            $('#four_submit_btn').html(btn_text);
				document.getElementById('four_submit_btn').disabled=false;
         }
      });
   }


//// end apply 4 years program ///////////////////////




   //// apply 6 years program ///////////////////////

   function _apply_for_six_year_admission(student_id){
      var firstname=$('#firstname').val();
      var lastname=$('#lastname').val();
      var email=$('#email').val();
      var phonenumber=$('#phonenumber').val();
      var country=$('#country').val();
      var address=$('#address').val();
     
      var year_program=$('#year_program').val();
      var six_year_result=$('#six_year').val();
      var six_year_result_pix = $('#six_year').prop('files')[0];
   
   
      var form_data = new FormData();  
      var action='apply_for_six_year_admission';
   
      form_data.append('action', action);
      form_data.append('student_id', student_id);
   
      form_data.append('firstname', firstname);
      form_data.append('lastname', lastname);
      form_data.append('email', email);
      form_data.append('phonenumber', phonenumber);
      form_data.append('country', country);
      form_data.append('address', address);
     
      form_data.append('year_program', year_program);
      form_data.append('six_year_result_pro', six_year_result);
      form_data.append('six_year_result', six_year_result_pix);
    
   
   
         var btn_text=$('#six_submit_btn').html();
         $('#six_submit_btn').html('PROCESSING...');
         document.getElementById('six_submit_btn').disabled=true;
   
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
                
                  $('#success-div').html('<div class="alert-logo"><img src="../image/tick-2.gif" alt="success" /></div><h3> REGISTRATION SUCCESSFUL <h3></div>').fadeIn(500).delay(3000).fadeOut(100);
                  close_btn();
                  _get_panel('my_Admission');
               } else{
                  $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Warning" /></div><h3>EMAIL ALREADY EXIST!<h3></div').fadeIn(500).delay(3000).fadeOut(100);     
                  $('#email').addClass('complain');
               }
               $('#six_submit_btn').html(btn_text);
               document.getElementById('six_submit_btn').disabled=false;
            }
         });
      }
   

   //// apply 6 years program ///////////////////////















/////////// admission student upload pix ////////////////////

$(function(){
   update_student_adms_profile_pix = {
       UpdatePreview: function(obj){
         // if IE < 10 doesn't support FileReader
         if(!window.FileReader){
            // don't know how to proceed to assign src to image tag
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
            // don't know how to proceed to assign src to image tag
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



function _update_student_adms_profile(admission_id){
 
   var firstname=$('#firstname').val();
   var middlename=$('#middlename').val();
   var lastname=$('#lastname').val();
   var gender=$('#gender').val();
   var dob=$('#dob').val();
   var email=$('#email').val();
   var phonenumber=$('#phonenumber').val();
   var address=$('#address').val();
   var country=$('#country').val();
   var state=$('#state').val();
   var religious=$('#religious').val();
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
     form_data.append('country', country);
     form_data.append('state', state);
     form_data.append('religious', religious);
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
              
             $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Warning" /></div><h3>EMAIL ALREADY EXIST!<h3></div').fadeIn(500).delay(3000).fadeOut(100);     
             $('#email').addClass('complain');
         
           
            }else {
               $('#success-div').html('<div class="alert-logo"><img src="../image/tick-2.gif" alt="Warning" /></div><h3> UPDATE PROFILE SUCCESSFUL <h3></div>').fadeIn(500).delay(3000).fadeOut(100);
              
               }
            $('#update_btn').html(' <i class="fa fa-check"> UPDATE PROFILE </i>');
            document.getElementById('update_btn').disabled=false;
         }
     });
   }



/////////// end end admission student upload pix ////////////////////










   
function _update_student_document_profile(admission_id){

   var student_adms_pix=$('#student_adms_pix').val();
   var student_pro = $('#student_adms_pix').prop('files')[0];

   var result= $('#myresult').val();
   var result_pix_file = $('#myresult').prop('files')[0];

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

         form_data.append('result', result);
         form_data.append('result', result_pix_file);

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
            } 
            $('#update_btn').html(btn_text);
				document.getElementById('update_btn').disabled=false;
         }
      });
   }






