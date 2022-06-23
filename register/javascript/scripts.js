
function _close_reg_panel() {
   $('.overlay-back-div').html('').fadeOut(1000);
}

function _back_to_top(){
   return event.preventDefault(),$("html, body").animate({scrollTop:0},"slow");
   }
   
   
   $(window).scroll(function() {
   
     if ($(this).scrollTop() >= 100 ){ 
     $("#scroll_up").fadeIn(800).css("display", "block");
   
       }
       else {
       $('#scroll_up').fadeOut();
         
       }
     });




     function _open_menu(){
      $('.menu-back-div').animate({'margin-left':'0%'},200);
      $('.side-menu-div').animate({'margin-left':'0px'},400);
      }
      
      
      function _close_menu(){
      $('.menu-back-div').animate({'margin-left':'-100%'},400);
      $('.side-menu-div').animate({'margin-left':'-250px'},200);
      }
    
    
      function _expand_link1(){
        $('#about_us').toggle(500);
        $('#admission').fadeOut(0);
        $('#program').fadeOut(0);
      }
      
      function _expand_link2(){
        $('#admission').toggle(500);
        $('#about_us').fadeOut(0);
        $('#program').fadeOut(0);
      }
       
      function _expand_link3(){
        $('#program').toggle(500);
        $('#about_us').fadeOut(0);
        $('#admission').fadeOut(0);
      }
















///// accept number ////
function isNumber_Check(){
   var e = window.event;
   var key = e.keyCode || e.which;

	if(!((key>=48) && (key<=57) || (key==43) || (key==45))){
      if(e.preventDefault){
         e.preventDefault();
         $('#phoneno-warning-div').fadeIn(500).delay(3000).fadeOut(100); 
         $('#phonenumber').addClass('complain');
      }else{
        e.returnValue = false;
      }
	}
}

var checkpassword = function() {
   if (document.getElementById('password').value == document.getElementById('comfirmed_password').value) {
       document.getElementById('password').style.border='#1C75BC 1px solid ';
       document.getElementById('comfirmed_password').style.border='#1C75BC 1px solid ';
       document.getElementById('message').style.display = 'none';

   } else {
     document.getElementById('password').style.border='hsla(0, 100%, 40%, 0.678) 1px solid';
     document.getElementById('comfirmed_password').style.border='hsla(0, 100%, 40%, 0.678) 1px solid';
      document.getElementById('message').style.display = 'block';
     document.getElementById('message').style.color = 'hsla(0, 100%, 40%, 0.678)';
     document.getElementById('message').style.fontSize = '12px';
     document.getElementById('message').innerHTML = 'PASSWORD NOT MATCH!';
   }
 }

function _registration() {
   var firstname=$('#firstname').val();
   var lastname=$('#lastname').val();
   var email=$('#email').val();
   var address=$('#address').val();
   var country_id=$('#country_id').val();
   var phonenumber=$('#phonenumber').val();
   var password=$('#password').val();
   var comfirmed_password=$('#comfirmed_password').val();
   $('#firstname, #lastname, #email, #address, #country_id, #state, #phonenumber, #password, #comfirmed_password').removeClass('complain');
   if((firstname=='')){
      $('#firstname').addClass('complain');
      $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Hero" /></div><h3>FIRST NAME ERROR</h3><p>Fill the fields to continue</p></div').fadeIn(500).delay(3000).fadeOut(100);
      return event.preventDefault(),$("html, body").animate({scrollTop:0},"slow");
   }else if ((lastname=='')){
         $('#lastname').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Hero" /></div><h3>LAST NAME ERROR</h3><p>Fill the fields to continue</p></div').fadeIn(500).delay(3000).fadeOut(100);

         return event.preventDefault(),$("html, body").animate({scrollTop:0},"slow");

      }else if ((email=='')||($('#email').val().indexOf('@')<=0)){
         $('#email').addClass('complain');
         $('#email-warning-div').fadeIn(500).delay(3000).fadeOut(100);
         return event.preventDefault(),$("html, body").animate({scrollTop:0},"slow");

      }else if ((address=='')){
      $('#address').addClass('complain');
      $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Hero" /></div><h3>HOME ADDRESS ERROR</h3><p>Fill the fields to continue</p></div').fadeIn(500).delay(3000).fadeOut(100);

    }else if ((country_id=='')){
      $('#country_id').addClass('complain');
      $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Hero" /></div><h3>COUNTRY ERROR</h3><p>Select your country to continue</p></div').fadeIn(500).delay(3000).fadeOut(100);

    }else if ((phonenumber=='')){
      $('#phonenumber').addClass('complain');
      $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Hero" /></div><h3>PHONE NUMBER ERROR</h3><p>Fill the fields to continue</p></div').fadeIn(500).delay(3000).fadeOut(100);

    }else if ((password=='')||(comfirmed_password=='')){
         $('#password').addClass('complain');
         $('#comfirmed_password').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Hero" /></div><h3>PASSWORD ERROR !</h3><p> Fill the fields to continue</p></div').fadeIn(500).delay(3000).fadeOut(100);
   
      }else if (password!=comfirmed_password){
         $('#password').addClass('complain'); 
         $('#comfirmed_password').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Hero" /></div><h3>PASSWORD NOT MATCH !</h3><p> Fill correct password</p></div').fadeIn(500).delay(3000).fadeOut(100);
   
   } else {

   $('.overlay-back-div').html('<div class="success-back-div"><img src="../image/ajax_loader.gif"/></div>').fadeIn(1000);

   var action='registration';
   var dataString = 'action='+action+'&firstname='+firstname+'&lastname='+lastname+'&email='+email+'&address='+address+'&country_id='+country_id+'&phonenumber='+phonenumber+'&password='+password;
   $.ajax({
      type: "POST",
      url: "config/code.php",
      data: dataString,
      cache: false,
      success: function(html){
        
         $('.overlay-back-div').html(html).fadeIn(1000);
         
      }
   });
}
}








 

 
