jQuery(document).ready(function ($) {

$(function() {
    $('.toggle-nav').click(function() {
        // Calling a function in case you want to expand upon this.
        toggleNav();
     animateIt = animateIt ? false : true;
    loopAnimateForward('width');
    });
});


/*========================================
=            CUSTOM FUNCTIONS            =
========================================*/

var imgToggled;
var animateIt;

function loopAnimateForward(type) {
  $('body').append('<div id="isAnimating" style="position: fixed; bottom: 10px; right: 10px; text-transform: uppercase;">Is animating...</div>');
  if (type == 'width' && animateIt) {
    $('.imgBox img').css({
    'width':'calc( 100% - 500px)',
    'float': 'right'
    // $('.imgBox img').animate({
    //   "float":"right",
    //   left:""
    // }, 100 );
  }); } else {
    $('body>#isAnimating').remove();
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


});
