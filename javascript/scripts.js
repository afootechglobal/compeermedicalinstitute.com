function _back_to_top(){
return event.preventDefault(),$("html, body").animate({scrollTop:0},"slow");
}


$(window).scroll(function() {

  if ($(this).scrollTop() >= 100 ){ 
  $("#scroll_up").fadeIn(800).css("display", "block");
  $('#navbar').css("display", "none");

    }
    else{
    $('#scroll_up').fadeOut();
    $('#navbar ').css("display", "block");
      
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
      


 
