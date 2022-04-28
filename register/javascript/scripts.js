
function _close_reg_panel() {
   $('.overlay-back-div').html('').fadeOut(1000);
}

var checkpassword = function() {
   if (document.getElementById('password').value == document.getElementById('comfirmed_password').value) {
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

function _registration() {
   var firstname=$('#firstname').val();
   var lastname=$('#lastname').val();
   var email=$('#email').val();
   var address=$('#address').val();
   var country_id=$('#country_id').val();
   var phonenumber=$('#phonenumber').val();
   var password=$('#password').val();
   var comfirmed_password=$('#comfirmed_password').val();
   $('#firstname, #lastname, #email, #address, #state, #phonenumber, #password, #comfirmed_password').removeClass('complain');
   if((firstname=='')){
      $('#firstname').addClass('complain');
      $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Hero" /></div><h3>FIRST NAME ERROR!<h3></div').fadeIn(500).delay(3000).fadeOut(100);

   }else if ((lastname=='')){
         $('#lastname').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Hero" /></div><h3>LAST NAME ERROR!<h3></div').fadeIn(500).delay(3000).fadeOut(100);

      }else if ((email=='')||($('#email').val().indexOf('@')<=0)){
         $('#email').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Hero" /></div><h3>E-MAIL ERROR<h3></div').fadeIn(500).delay(3000).fadeOut(100);

      }else if ((address=='')){
      $('#address').addClass('complain');
      $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Hero" /></div><h3>ADDRESS ERROR!<h3></div').fadeIn(500).delay(3000).fadeOut(100);

    }else if ((country_id=='')){
      $('#country_id').addClass('complain');
      $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Hero" /></div><h3>SELECT STATE!<h3></div').fadeIn(500).delay(3000).fadeOut(100);

    }else if ((phonenumber=='')){
      $('#phonenumber').addClass('complain');
      $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Hero" /></div><h3>PHONE NUMBER ERROR!<h3></div').fadeIn(500).delay(3000).fadeOut(100);

    }else if ((password=='')||(comfirmed_password=='')){
         $('#password').addClass('complain');
         $('#comfirmed_password').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Hero" /></div><h3>PASSWORD ERROR !<h3></div').fadeIn(500).delay(3000).fadeOut(100);
   
      }else if (password!=comfirmed_password){
         $('#comfirmed_password').addClass('complain');
         $('#warning-div').html('<div class="alert-logo"><img src="../image/warning.gif" alt="Hero" /></div><h3>PASSWORD NOT MATCH !<h3></div').fadeIn(500).delay(3000).fadeOut(100);
   
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








 

 
