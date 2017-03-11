var $;

$ = require('jquery');

var $logo = $('#mainMenuHeader').find('.caption');

$(document).scroll(function() {
  var $scrolltop = $(this).scrollTop();
  var toggleScroll = 400;
//    $logo.css({display: $(this).scrollTop()>100 ? "none":"block"});
    $logo.css({'background-color': $scrolltop>toggleScroll ? "black":"transparent"});
    // $logo.css({height: $scrolltop>toggleScroll ? "130px":""});
    // $logo.css({height: $scrolltop>toggleScroll ? "80px":""});
    $logo.css({'color': $scrolltop>toggleScroll ? "white":""});
});

toggleTeamThumbnailCaption=function(elem, val){
  $(elem).next().css("color", val==1?'white':'black');
  $(elem).css("opacity", val==1?'1':'0.5');
}

toggleCaption=function(elem, val){
  $(elem).css("color", val==1?'white':'black');
   $(elem).prev().css("opacity", val==1?'1':'0.5');
}

var opts = {
  auto :  {
  speed : 5000,
  pauseOnHover : true
  },
  fullScreen : false,
  swipe : false
};
makeBSS('.bss-slides', opts);
