jQuery(document).ready(function ($) {

  var $menu = $('.overlay');
  var hexNav = document.getElementById('hexNav');

  document.getElementById('menuBtn').onclick = function() {
      var className = ' ' + hexNav.className + ' ';
      if ( ~className.indexOf(' active ') ) {
          hexNav.className = className.replace(' active ', ' ');
        $menu.fadeOut();
      } else {
          hexNav.className += ' active';
        $menu.fadeIn();
      }
  };

$(function() {
    $('.toggle-nav').click(function() {
        // Calling a function in case you want to expand upon this.
    toggleNav();

    animateIt = animateIt ? false : true;

    loopAnimateForward('width');

    var SideMenu = document.getElementById('site-menu');
    // get the current value of the display property
    var displaySetting = SideMenu.style.display;

    if (displaySetting == 'block') {
      // visible. hide it
      SideMenu.style.display = 'none';
      // change button text
    }
    else {
      //  is hidden. show it
      SideMenu.style.display = 'block';
      // change button text
    }
    });
});

// window.onresize = loopAnimateForward('width');

/*========================================
=            CUSTOM FUNCTIONS            =
========================================*/

var imgToggled;
var animateIt;

var mq = window.matchMedia( "(min-width: 1000px)" );
var mw = window.matchMedia( "(max-width: 999px)" );

  var button = document.getElementById('toggle-nav'); // Assumes element with id='button'
var win = $(this);
function loopAnimateForward(type) {
  if (type == 'width' && animateIt && win.width() >= 1000) {
    $('.imgBox img').css({
    'max-width':'calc( 100% - 500px)',
    'float': 'right'
  });
 } else {
    $('.imgBox img').css({
    'width':"",
    'max-width':'100%',
    'float': ''
    });
}

}


function toggleNav() {
    if ($('#site-wrapper').hasClass('show-nav')) {
        // Do things on Nav Close
        $('#site-wrapper').removeClass('show-nav');
    } else {
        // Do things on Nav Open
        $('#site-wrapper').addClass('show-nav');
    }

    //$('#site-wrapper').toggleClass('show-nav');
}
$(document).keyup(function(e) {
    if (e.keyCode == 27) {
        if ($('#site-wrapper').hasClass('show-nav')) {
            // Assuming you used the function I made from the demo
            toggleNav();
        }
    }
});

$( window ).resize(function() {
  var win1 = $(this);
  var img = document.getElementById('singleImage');
  var height = img.clientHeight;
  if (win1.width() >= 1000 && animateIt === true) {
  $('.imgBox img').css({
  'max-width':'calc( 100% - 500px)',
  'float': 'right'

});
$('#site-menu').css({
  'height': height,
});
}
});

 $( window ).resize(function() {
   var win2 = $(this);
  var img = document.getElementById('singleImage');
  var height = img.clientHeight;
   if (win2.width() < 1000 ) {
   $('.imgBox img').css({
     'width':"",
     'max-width':'100%',
     'float': ''
 });
 $('#site-menu').css({
   'height': height,
 });
 }
 });




});
