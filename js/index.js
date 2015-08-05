jQuery(document).ready(function( $ ) {

$('.menu-toggle').on('click', function(){
  console.log('yay');
  $('.nav-main').toggleClass('active');
});

$('.nav-link').children('a').on('click', function(e){
  var section = $(this).data('section');
  $('.section').removeClass('active');
  e.preventDefault();

  $('.nav-main').addClass('loading').removeClass('active');
  //fake loading time
  setTimeout(function(){
    $('.nav-main').removeClass('loading');
    $('.section-' + section).addClass('active');
  }, 2000);
});

})
