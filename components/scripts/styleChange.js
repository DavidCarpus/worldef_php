var $;

$ = require('jquery');

var $logo = $('#mainMenuHeader');

$(document).scroll(function() {
//    $logo.css({display: $(this).scrollTop()>100 ? "none":"block"});
    $logo.css({'background-color': $(this).scrollTop()>100 ? "black":"transparent"});
    $logo.css({height: $(this).scrollTop()>100 ? "130px":""});
    $logo.css({'color': $(this).scrollTop()>100 ? "white":""});
});

//background-color: red;