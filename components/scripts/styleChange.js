var $;

$ = require('jquery');

var $logo = $('#mainMenuHeader').find('.caption');

$(document).scroll(function() {
  var $scrolltop = $(this).scrollTop();
  var toggleScroll = 400;
//    $logo.css({display: $(this).scrollTop()>100 ? "none":"block"});
    $logo.css({'background-color': $scrolltop>toggleScroll ? "black":"transparent"});
    $logo.css({height: $scrolltop>toggleScroll ? "130px":""});
    $logo.css({'color': $scrolltop>toggleScroll ? "white":""});
});

var opts = {
  auto :  {
  speed : 5000,
  pauseOnHover : true
  },
  fullScreen : false,
  swipe : false
};
makeBSS('.bss-slides', opts);

// auto :  {
// speed : 1000,
// pauseOnHover : false
// },
//background-color: red;
