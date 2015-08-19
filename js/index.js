// jQuery(document).ready(function( $ ) {
//
// $('.menu-toggle').on('click', function(){
//   console.log('yay');
//   $('.nav-main').toggleClass('active');
// });
//
// $('.nav-link').children('a').on('click', function(e){
//   var section = $(this).data('section');
//   $('.section').removeClass('active');
//   e.preventDefault();
//
//   $('.nav-main').addClass('loading').removeClass('active');
//   //fake loading time
//   setTimeout(function(){
//     $('.nav-main').removeClass('loading');
//     $('.section-' + section).addClass('active');
//   }, 2000);
// });
//
// })

jQuery(document).ready(function( $ ) {
///// App - Founded JS

// $(function() {
//     $('#Gallery-Toggle').click(function() {
//       console.log('yay');
//         // Calling a function in case you want to expand upon this.
//         APP = {
//             initial_run: !0,
//             isotope_is_setup: !1,
//             all_blocks: null ,
//             progress: {
//                 start: function() {},
//                 done: function() {}
//             },
//             common: {
//                 init: function() {
//                     jQuery.extend(jQuery.easing, {
//                         def: "easeInOutQuint",
//                         easeInOutQuint: function(e, t, n, r, i) {
//                             return (t /= i / 2) < 1 ? r / 2 * t * t * t * t * t + n : r / 2 * ((t -= 2) * t * t * t * t + 2) + n;
//                         }
//                     });
//                     var e = $(window);
//                     APP.window = $(window);
//                     $(window).resetBreakpoints();
//                     $(window).setBreakpoints({
//                         distinct: !0,
//                         breakpoints: [640, 1100, 1440]
//                     });
//                     var t = 0;
//                     APP.LoadBehavior();
//                     if (APP.initial_run) {
//                         require(["ajaxify"], function(e) {}
//                         );
//                         APP.common.init_loader();
//                     }
//                     APP.common.menu();
//                     APP.common.mobile();
//                     APP.common.init_projects();
//                     APP.common.init_intro();
//                     }
//                   }
//                 };

 $( window ).resize(function() {
                    var e = $(window).width(),
                    t = Math.floor(e / 3) * 3,
                    n = Math.floor(t / 3),
                    r = Math.floor(t / 3 * (9 / 16)),
                    i = Math.floor(t / 2 * (9 / 16));
                    $(".block").css("height", r + "px");
                    if ($(window).width() < 640) {
                      console.log('640');
                        $(".block").attr("style", "");
                        $(".block.two-thirds").css("height", r * 2 + "px");
                        $(".block.full").css("height", r * 3 + "px");
                        $(".block.one-third-double-height").css("height", r * 2 + "px");
                        $(".block.two-thirds-double-height").css("height", r * 4 + "px");
                        $(".block.full-double-height").css("height", r * 6 + "px");
                        $(".block.one-third-push-down").css("height", r + "px").css("margin-top", r + "px");
                        $(".block.one-third-bottom-left").css("height", r + "px").css("margin-top", "-" + r + "px").css("left", 0).css("z-index", "9").css("float", "left");
                        $(".block.half").css("height", i + "px");
                        $(".block.half-double-height").css("height", i * 2 + "px");
                    } else if ($(window).width() >= 640 && $(window).width() < 1100) {
                      console.log('1100');
                        $(".block").css("margin-top", "0px");
                        $(".block.medium-two-thirds").css("height", r * 2 + "px");
                        $(".block.medium-full ").css("height", r * 3 + "px");
                        $(".block.medium-one-third-double-height").css("height", r * 2 + "px");
                        $(".block.medium-two-thirds-double-height").css("height", r * 4 + "px");
                        $(".block.medium-full-double-height").css("height", r * 6 + "px");
                        $(".block.medium-one-third-push-down").css("height", r + "px").css("margin-top", r + "px");
                        $(".block.medium-one-third-bottom-left").css("height", r + "px").css("margin-top", "-" + r + "px").css("left", 0).css("z-index", "9").css("float", "left");
                        $(".block.medium-half").css("height", i + "px");
                        $(".block.medium-half-double-height").css("height", i * 2 + "px");
                    } else if ($(window).width() >= 1100) {
                      console.log('large');
                        $(".block.large-two-thirds").css("height", r * 2 + "px");
                        $(".block.large-full").css("height", r * 3 + "px");
                        $(".block.large-one-third-double-height").css("height", r * 2 + "px");
                        $(".block.large-two-thirds-double-height").css("height", r * 4 + "px");
                        $(".block.large-full-double-height").css("height", r * 6 + "px");
                        $(".block.large-one-third-push-down").css("height", r + "px").css("margin-top", r + "px");
                        $(".block.large-one-third-bottom-left").css("height", r + "px").css("margin-top", "-" + r + "px").css("left", 0).css("z-index", "9").css("float", "left");
                        $(".block.large-half").css("height", i + "px");
                        $(".block.large-half-double-height").css("height", i * 2 + "px");
                    }
});
    // });
});
