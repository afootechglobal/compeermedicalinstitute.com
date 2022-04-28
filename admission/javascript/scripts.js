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
 
 
 
 
