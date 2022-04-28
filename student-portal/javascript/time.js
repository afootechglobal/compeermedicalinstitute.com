$(document).ready(function() {
    setInterval(function(){ _get_PHP_current_time() }, 1000);
    });
    
    function _get_PHP_current_time(){
    $.ajax({
    url: "config/time.php?time=date_time",
    success: function(html){
    $("#datetime").html(html);
    }});
    }
    