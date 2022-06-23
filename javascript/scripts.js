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
  

// function scrolltodiv(divid, margintop){
  // $('html, body').animate({scrollTop: $("#"+divid).offset().top - margintop}, 500);
// }

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
   
