function _back_to_top(){
return event.preventDefault(),$("html, body").animate({scrollTop:0},"slow");
}

$(window).scroll(function() {
   if ($(this).scrollTop() >= 100 ){  
     $("#scroll_up").fadeIn(300).css("display", "block");
     }
     else{
       $('#scroll_up').fadeOut();
     }
   });



/// next panel div panel
function _get_reset_password_Panel(nextid){
   $('.next_div').hide();
   $('#'+nextid).fadeIn(1000);
}

/// go back div panel
function _get_div_back_Panel(nextid){
   $('.next_div').hide();
   $('#'+nextid).fadeIn(1000);
}



   //// register NEXT function
   function _get_div_next_Panel(nextid){
         var message='Fill all the neccessary things to continue';
     
        
     if (nextid=='next-2'){
        
          var FirstName = $('#FirstName').val();
          var LastName = $('#LastName').val();
          var DateOfBirth = $('#DateOfBirth').val();
          var Gender = $('#Gender').val();
     
          /// ---  || --- two vertical line means OR
     
          if ((FirstName=='') ||(LastName=='') ||(DateOfBirth=='') ||(Gender=='')){
           alert(message);
         
          }else{
             $('.next_div').hide();
             $('#'+nextid).fadeIn(1000);
          }
     }
     
     
     
     
     if (nextid=='next-3'){
        var PhoneNumber = $('#PhoneNumber').val();
        var Email = $('#Email').val();
        var HomeAddress = $('#HomeAddress').val();
      
        /// ---  || --- two vertical line means OR
     
        if ((PhoneNumber=='') ||(Email=='') ||(HomeAddress=='')){
           alert(message);
     
        }else{
           $('.next_div').hide();
           $('#'+nextid).fadeIn(1000);
        }
     }
     
     
     
     
     
     /// for user update profile
     if (nextid=='next-5'){
        var FirstName = $('#FirstName').val();
        var LastName = $('#LastName').val();
        var DateOfBirth = $('#DateOfBirth').val();
        var Gender = $('#Gender').val();
        var PhoneNumber = $('#PhoneNumber').val();
        var Email = $('#Email').val();
        var HomeAddress = $('#HomeAddress').val();
       
     if ((FirstName=='') ||(LastName=='') ||(DateOfBirth=='') ||(Gender=='') ||(PhoneNumber=='') ||(Email=='') ||(HomeAddress=='')  ){
            alert(message);
     
         }//else{
           // $('.next_div').hide();
           // $('#'+nextid).fadeIn(1000);
       //  }
     }
     
     
     
     
     }//// end function _get_div_next_Panel
     













  function _get_panel(view_content) {
    $('.overlay-back-div').html('<div class="success-back-div animated zoomIn"><img src="image/ajax_loader.gif"/></div>').fadeIn(1000);
    var action='get_panel';
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
  
  

  function _sign_up() {
 
    $('.overlay-back-div').fadeIn(0).html('<div class="success-back-div animated bounceInDown"><img src="../image/tick-2.gif" alt="success logo">REGISTRATION SUCCESSFUL </div>').fadeIn(1000).delay(3000).fadeOut(100);
    var action='sign_up';
    var dataString = 'action='+action+'&FirstName='+FirstName+'&MiddleName='+MiddleName+'&LastName='+LastName+'&Email='+Email+'&PhoneNumber='+PhoneNumber+'&HomeAddress='+HomeAddress;
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

 function _delete_up() {
 
  $('.overlay-back-div').fadeIn(0).html(' <div class="success-back-div animated bounceInDown"><img src="../image/tick-2.gif" alt="success logo">DELETE SUCCESSFUL </div>').fadeIn(1000).delay(3000).fadeOut(100);
  var action='sign_up';
  var dataString = 'action='+action+'&FirstName='+FirstName+'&MiddleName='+MiddleName+'&LastName='+LastName+'&Email='+Email+'&PhoneNumber='+PhoneNumber+'&HomeAddress='+HomeAddress;
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
 
 
 
 
