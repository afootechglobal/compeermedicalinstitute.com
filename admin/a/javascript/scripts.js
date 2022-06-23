
   
   
function _open_menu(){
    $('.menu-back-div').animate({'margin-left':'0%'},200);
    $('.side-menu-div').animate({'margin-left':'0px'},400);
    }
    
    
    function _close_menu(){
    $('.menu-back-div').animate({'margin-left':'-100%'},400);
    $('.side-menu-div').animate({'margin-left':'-250px'},200);
    }
    
 function _expand_link(divid){
     $('#'+divid).toggle(500);
  
    }
 function _log_out(divid){
     $('#'+divid).toggle(500);
 }
 
   
 function close_btn(){
    $('.overlay-back-div').html('').fadeOut(600);
 }
 
 function close_adms(){
    $('.overlay-back-div').html('').fadeOut(500);
    _get_panel('student_check_list');
 }
 
 
   
 
 function _get_active(divid){
    $('#s_dashboard,#s_admin,#s_myprofile,#s_myadmission,#s_requirement').removeClass('active');
    $('#dashboard,#admin,#myprofile,#reg_student,#app_student').removeClass('active');
    $('#ad_dashboard,#ad_admin,#ad_myprofile,#ad_reg_student,#ad_app_student').removeClass('active');
    $('#s_'+divid).addClass('active');
    $('#ad_'+divid).addClass('active');
    $('#'+divid).addClass('active');
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
 
 
 
 
 
 
 ///// accept number ////
 function isNumber_Check(){
    var e = window.event;
    var key = e.keyCode || e.which;
 
     if(!((key>=48) && (key<=57) || (key==43) || (key==45))){
       if(e.preventDefault){
          e.preventDefault();
          $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3>PHONE NUMBER ERROR</h3><p>Invalid phone number</p></div').fadeIn(500).delay(3000).fadeOut(100); 
          $('#phonenumber').addClass('complain');
       }else{
         e.returnValue = false;
       }
     }
 }
   
 
 function _next(nextid){
            $('.next_div, .div-pro').hide();
          $('#'+nextid).fadeIn(1000);
          return event.preventDefault(),$("html, .div-pro").animate({scrollTop:0},"fadeUp");
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
 
 
 
 $(function(){
    scan_hnd_or_degree_result = {
        UpdatePreview: function(obj){
          // if IE < 10 doesn't support FileReader
          if(!window.FileReader){
             // don't know how to proceed to assign src to image tag
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
 
 
   
   function _get_panel(view_content,divid) {
    _get_active(divid);
 
     $('.dashboard-main-div ').html('<div class="loading-div animated zoomIn"><img src="images/ajax_loader.gif"/></div>').fadeIn(1000);
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
   
 
 
 
  function _get_slide_panel(view_content){ 
    $('.overlay-back-div').html('<div class="loading-div animated zoomIn"><img src="images/ajax_loader.gif"/></div>').fadeIn('fast');
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
    var role_id=$('#role_id').val();
    var status_id=$('#status_id').val();
 
    $('#firstname, #lastname, #email, #phonenumber,#role_id,#status_id').removeClass('complain');
    if (firstname==''){
          $('#firstname').addClass('complain');
       $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3> FIRST NAME ERROR </h3><p>Fill This Fields To Continue</p></div').fadeIn(500).delay(3000).fadeOut(100);
 
    }else if(lastname==''){
       $('#lastname').addClass('complain');
       $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3> LAST NAME ERROR </h3><p>Fill This Fields To Continue</p></div').fadeIn(500).delay(3000).fadeOut(100);
 
    }else if((email=='')||(email.indexOf('@')<=0)){
       $('#email').addClass('complain');
       $('#invalid-div').fadeIn(500).delay(3000).fadeOut(100);
          
    }else if(phonenumber==''){
       $('#phonenumber').addClass('complain');
       $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3> PHONE NUMBER ERROR </h3><p>Fill This Fields To Continue</p></div').fadeIn(500).delay(3000).fadeOut(100);
   
       
    }else if(role_id==''){
       $('#role_id').addClass('complain');
       $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3> SELECT ROLE </h3><p>Fill This Fields To Continue</p></div').fadeIn(500).delay(3000).fadeOut(100);
   
       
    }else if(status_id==''){
       $('#status_id').addClass('complain');
       $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3> SELECT STATUS </h3><p>Fill This Fields To Continue</p></div').fadeIn(500).delay(3000).fadeOut(100);
   
    }else{
 
       $('#register_btn').html('PROCESSING...');
       document.getElementById('register_btn').disabled=true;
 
    var action='register_staff';
    var dataString = 'action='+action+'&firstname='+firstname+'&lastname='+lastname+'&email='+email+'&phonenumber='+phonenumber+'&role_id='+role_id+'&status_id='+status_id;
    $.ajax({
       type: "POST",
       url: "config/code.php",
       dataType: 'json',
       data: dataString,
       cache: false,
       success: function(data){
          var scheck= data.check;
          if (scheck==1){
          $('#reg-success-div').fadeIn(500).delay(3000).fadeOut(100);
          close_btn();
          _get_panel('get_all_staff');
       }else{
          $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3>EMAIL ALREADY EXIST!</h3><p>Email has been used</p></div').fadeIn(500).delay(3000).fadeOut(100);
       
       } 
       $('#register_btn').html('<i class="fa fa-check"></i> SUBMIT');
             document.getElementById('register_btn').disabled=false;   
       }
    });
 }
 }   
 
 
 
 
 
 
 
 
 function _profile(view_content,divid) {
    if(divid!=''){
       _get_active(divid);
    }
    $('.dashboard-main-div ').html('<div class="loading-div animated zoomIn"><img src="images/ajax_loader.gif"/></div>').fadeIn(1000);
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
  
 
 //// GET STATE /////////
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
 
 
 
 
 
 
 
 function _staff_profile(view_content,adm_staff) {
    $('.profile-back-div ').html('<div class="loading-div animated zoomIn"><img src="images/ajax_loader.gif"/></div>').fadeIn(1000);
    var action='admin_profile';
    var dataString = 'action='+action+'&view_content='+view_content+'&adm_staff='+adm_staff;
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
    $('.overlay-back-div').html('<div class="success-back-div animated zoomIn"><img src="images/ajax_loader.gif"/></div>').fadeIn(1000);
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
          document.getElementById('new_password').style.border='#1C75BC 1px solid ';
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
 
 
    function _update_password(admin_id) {
       var old_password=$('#old_password').val();
       var new_password=$('#new_password').val();
       var comfirmed_password=$('#comfirmed_password').val();
       $('#old_password, #new_password, #comfirmed_password').removeClass('complain');
 
       if(old_password==''){
       $('#old_password').addClass('complain');
       $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3> OLD PASSWORD ERROR </h3><p>Fill This Fields To Continue</p></div').fadeIn(500).delay(3000).fadeOut(100);
 
       } else if(new_password==''){
          $('#new_password').addClass('complain');
       $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3> NEW PASSWORD ERROR </h3><p>Fill This Fields To Continue</p></div').fadeIn(500).delay(3000).fadeOut(100);
 
       }else if(comfirmed_password==''){
          $('#comfirmed_password').addClass('complain');
       $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3> CONFIRM PASSWORD ERROR </h3><p>Fill This Fields To Continue</p></div').fadeIn(500).delay(3000).fadeOut(100);
 
       }else if(new_password !=comfirmed_password){
          $('#new_password, #comfirmed_password').addClass('complain');
          $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3> PASSWORD ERROR </h3><p>Check, Password Not Match</p></div').fadeIn(500).delay(3000).fadeOut(100);
 
       }else{
       var action='update_password';
       var dataString = 'action='+action+'&admin_id='+admin_id+'&old_password='+old_password+'&new_password='+new_password;
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
          $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3>ERROR!</h3><p>Incorrect Old Password</p></div').fadeIn(500).delay(3000).fadeOut(100);
          $('#old_password').addClass('complain');
          }
       }
    });
 }
 }
 

  
  /////////////////////////////////


$(function() {
   Tests = {
      UpdatePreview: function(obj){
         if (!window.FileReader){
            // do nothing
         }else{
            _upload_profile_pix();
         var reader = new FileReader();
         var target = null;

         reader.onload = function(e){
            target = e.target || e.srcElement;
            $("#passport-1,#passport-2,#passport-3,#passport-4,#passport-5").prop("src", target.result);
         };
               reader.readAsDataURL(obj.files[0]);
      }
   }
   };
   });


function _upload_profile_pix(){
   var action = 'update_profile_pix';
     var file_data = $('#passport').prop('files')[0];
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


  
 
 
 
 
 
 function _update_profile(admin_id){
    var firstname=$('#firstname').val();
    var middlename=$('#middlename').val();
    var lastname=$('#lastname').val();
    var email=$('#email').val();
    var phonenumber=$('#phonenumber').val();
    var address=$('#address').val();
    var gender=$('#gender').val();
    var dob=$('#dob').val();
    var country_id=$('#country_id').val();
    var state_id=$('#state_id').val();
    var role_id=$('#role_id').val();
    var status_id=$('#status_id').val();
 
    var btn_text=$('#update_btn').html();
    $('#update_btn').html('PROCESSING...');
    document.getElementById('update_btn').disabled=true;
 
    var action='update_profile';
    var dataString ='action='+action+'&admin_id='+admin_id+'&firstname='+firstname+'&middlename='+middlename+'&lastname='+lastname+'&email='+email+'&phonenumber='+phonenumber+'&address='+address+'&gender='+gender+'&dob='+dob+'&country_id='+country_id+'&state_id='+state_id+'&role_id='+role_id+'&status_id='+status_id;
    $.ajax({
       type: "POST",
       url: "config/code.php",
       dataType: 'json',
       data: dataString,
       cache: false,
       success: function(data){
          var scheck = data.check;
          if (scheck==1){
             $('#update-success-div').fadeIn(500).delay(3000).fadeOut(100);
          }else{
       $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3>EMAIL ERROR!</h3> <p>Email has been used</p></div').fadeIn(500).delay(3000).fadeOut(100);
          }
          $('#update_btn').html(btn_text);
          document.getElementById('update_btn').disabled=false;
       }
    });
 }
 
 
    
 
 
 

 
 
 
 
 
 
 
 
 
 
                                                                                                                                                                                                                                                                                                                      
 
 
 
 
 
 function _registered_student_profile(view_content,student_id) {
    $('.profile-back-div ').html('<div class="loading-div animated zoomIn"><img src="image/ajax_loader.gif"/></div>').fadeIn(1000);
    var action='registered_student_profile';
    var dataString = 'action='+action+'&view_content='+view_content+'&student_id='+student_id;
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
 
 
 
 /////////////////////////////
 
 function _fetch_student_list(){
    var search_txt = $('#search_txt').val();
 $('#search-content').html('<div class="loading-div animated zoomIn"><img src="image/ajax_loader.gif"/></div>').fadeIn(500);
    var action='fetch_student_list';
    var dataString ='action='+ action+'&search_txt='+search_txt;
    $.ajax({
    type: "POST",
    url: "config/code.php",
    data: dataString,
    cache: false,
    success: function(html){$('#search-content').html(html);}
    });
 }
 
 
 
 function _fetch_student_adms_list(){
    var status_id = $('#status_id').val();
    var search_txt = $('#search_txt').val();
 $('#search-content').html('<div class="loading-div animated zoomIn"><img src="image/ajax_loader.gif"/></div>').fadeIn(500);
    var action='student_adms_list';
    var dataString ='action='+ action+'&search_txt='+search_txt+'&status_id='+status_id;
    $.ajax({
    type: "POST",
    url: "config/code.php",
    data: dataString,
    cache: false,
    success: function(html){$('#search-content').html(html);}
    });
 }
 
 
 
 
 
 
 
 
 
 
 
 
 function _fetch_admin_list(){
    var status_id = $('#status_id').val();
    var search_txt = $('#search_txt').val();
 $('#search-content').html('<div class="loading-div animated zoomIn"><img src="images/ajax_loader.gif"/></div>').fadeIn(500);
    var action='fetch_admin_list';
    var dataString ='action='+ action+'&search_txt='+ search_txt+'&status_id='+ status_id;
    $.ajax({
    type: "POST",
    url: "config/code.php",
    data: dataString,
    cache: false,
    success: function(html){$('#search-content').html(html);}
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
               
              $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3>EMAIL ALREADY EXIST!<h3></div').fadeIn(500).delay(3000).fadeOut(100);     
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
                _get_panel('student_check_list');
             } 
             $('#update_btn').html(btn_text);
                 document.getElementById('update_btn').disabled=false;
          }
       });
    }
 
 
 
 
 
    
      
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
                _get_panel('student_check_list');
             } 
             $('#update_btn').html(btn_text);
                 document.getElementById('update_btn').disabled=false;
          }
       });
    }
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 function _get_admitted_status(view_content,admission_id) {
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
 
 
 function _get_admitted_student(admission_id) {
    var btn_text=$('#admit').html();
    $('#admit').html('PROCCESSING...');
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
             $('#reg-success-div').html('<div class="alert-logo"><img src="images/success.gif" alt="Success" /></div><h3>ADMITTED SUCCESSFUL</h3></div>').fadeIn(500).delay(3000).fadeOut(100);
             _get_admitted_status('admitted_status',admission_id);
          }else{
             $('#warning-div').html('<div class="alert-logo"><img src="images/warning.gif" alt="Warning" /></div><h3>CANNOT ADMIT YET</h3><p>Applicant profile not completed</p></div>').fadeIn(500).delay(3000).fadeOut(100);
             _get_admitted_status('admitted_status',admission_id)
          }
 
          $('#admit').html(btn_text);
          document.getElementById('admit').disabled=false;
          }
    });
 }
 
 
 
 
 
 function _cancel_admitted_student(admission_id) {
    var btn_text=$('#cancel').html();
    $('#cancel').html('PROCESSING...');
    document.getElementById('cancel').disabled=true;
 
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
             $('#reg-success-div').html('<div class="alert-logo"><img src="images/success.gif" alt="Warning" /></div><h3>ADMITTED CANCELED SUCCESSFUL</h3></div>').fadeIn(500).delay(3000).fadeOut(100);
             _get_admitted_status('admitted_status',admission_id);
          }
 
          $('#cancel').html(btn_text);
          document.getElementById('cancel').disabled=false;s
          }
    });
 }








 
 function _update_backend_setting(){
   var bankname=$('#bankname').val();
   var accountname=$('#accountname').val();
   var accountnumber=$('#accountnumber').val();
   var support_phonenumber=$('#support_phonenumber').val();
   var support_address=$('#support_address').val();
   var support_email=$('#support_email').val();
   var admission_form_fee=$('#admission_form_fee').val();
   var sendername=$('#sendername').val();
   var smtphost=$('#smtphost').val();
   var smtpusername=$('#smtpusername').val();
   var smtppassword=$('#smtppassword').val();
   var smtpport=$('#smtpport').val();

   var btn_text=$('#update_btn').html();
   $('#update_btn').html('PROCESSING...');
   document.getElementById('update_btn').disabled=true;

   var action='update_backend_setting';
   var dataString ='action='+action+'&bankname='+bankname+'&accountname='+accountname+'&accountnumber='+accountnumber+'&support_phonenumber='+support_phonenumber+'&support_address='+support_address+'&support_email='+support_email+'&admission_form_fee='+admission_form_fee+'&sendername='+sendername+'&smtphost='+smtphost+'&smtpusername='+smtpusername+'&smtppassword='+smtppassword+'&smtpport='+smtpport;

   $.ajax({
      type: "POST",
      url: "config/code.php",
      dataType: 'json',
      data: dataString,
      cache: false,
      success: function(data){
         var scheck = data.check;
         if (scheck==1){
            $('#update-success-div').html('<div class="alert-logo"><img src="images/success.gif" alt="Warning" /></div><h3>SETTING UPDATED</h3><p>Successful</p></div>').fadeIn(500).delay(3000).fadeOut(100);
            close_btn();
         }
         $('#update_btn').html(btn_text);
         document.getElementById('update_btn').disabled=false;
      }
   });
}

