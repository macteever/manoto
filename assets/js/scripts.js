(function ($, root, undefined) {

		$(document).ready(function(){

    // RESIZE HEADER SCROLLTOP

    $(window).scroll(function(){
      var $header = $('.header');
			var $menu_section = $('.menu-section');
      var $logo_img = $('.logo-img');
      if ($(this).scrollTop() > 40){
        if(!$header.hasClass('resize-menu') && !$logo_img.hasClass('resize-logo')) {
            $header.addClass('resize-menu');
						$menu_section.css({"height": 60});
            $logo_img.addClass('resize-logo');
        }
      }
      else{
        if($header.hasClass('resize-menu') || $logo_img.hasClass('resize-logo')) {
            $header.removeClass('resize-menu');
            $logo_img.removeClass('resize-logo');
        }
      }
    });

    // PAGE LOADER

    $(document).ready(function(){
        $(".page-loader").fadeOut(1000,'swing');
     });

    // MARGIN NEGATIVE DYNAMIC

    $( window ).resize(function() {
        var marg_neg = $('.p-b-80').height() + $('.test-slider').height() + $('.img-slider').height();

        $('#tarifs').css('margin-top', -marg_neg);
    });


    // MENU BURGER
      // Object variables for event handlers
      var triggers = ({
          menuBtn : $('#menu-btn')/*,*/
          // Add here...
      });

      triggers.menuBtn.click(function() {
        $("body").toggleClass("responsive");
        $(".nav-mobile").fadeToggle("slow");
        $("#header-sticky").css('background-color','transparent');
        $(this).toggleClass('open');
        $(this).find("button").toggleClass('menu-open');

        });

      // ADD class anim with Delay
          $('#menu-btn').click(function() {
              if ( $('body').hasClass( "responsive" ) ) {
                  $('.nav-mobile li').removeClass('animation-fade-out')
                  var delay = 0;
                   $('.nav-mobile li').each(function() {
                     var $li = $(this);
                     setTimeout(function() {
                       $li.addClass('animation-fade-up');
                     }, delay+=100); // delay 100 ms
                   });
              }
              else {
                  setTimeout(function() {
                      $('.nav-mobile li').removeClass('animation-fade-up');
                  }, 800);

              }
          });
          $('ul>li>a').click(function() {
           // $('body').removeClass('responsive');
           $('.nav-mobile').css('display', 'none');
           $('#menu-btn > button').toggleClass('menu-open');
          });

			 // START RESIZE
      	$(window).on("load resize", function () {

          //**** TRAVAUX PAGE ****/
			 // ROW 1
          var about_img_height = $('.archive-row1 ').height() + 30 + 'px';
          var about_img_width = $('.archive-row1 img').outerWidth();

          $('.archive-cadre3').css('width', about_img_width);
          $('.archive-cadre3').css('height', about_img_height);
			 // ROW 2
			 var about_img_height = $('.archive-row2 ').height() + 30 + 'px';
          var about_img_width = $('.archive-row2 img').outerWidth();

          $('.archive-cadre2').css('width', about_img_width);
          $('.archive-cadre2').css('height', about_img_height);

			 // ROW 3
			 var about_img_height = $('.archive-row3 ').height() + 30 + 'px';
          var about_img_width = $('.archive-row3 img').outerWidth();

          $('.archive-cadre1').css('width', about_img_width);
          $('.archive-cadre1').css('height', about_img_height);

			 // ANIM CADRE TRAVAUX

			 $(".archive-row").hover(
			  function () {
			    $(this).addClass('archive-hover');
			 },
			 function () {
			   $(this).removeClass('archive-hover');
			 });

			 // A PROPOS

			 // ABOUT CATEGORY
			 var about_cat_width = $('.about-cat-content').outerWidth();

			 $('.about-cat-cadre').css('width', about_cat_width);

			 // ABOUT EXPERIENCES

			 var about_exp_width = $('.about-exp-content').outerWidth();
			 var about_exp_height = $('.about-exp-content').outerHeight() + 40 + 'px';

			 $('.about-exp-cadre').css('width', about_exp_width);
			 $('.about-exp-cadre').css('height', about_exp_height);

			 // CONTACT

 			 var contact_cadre_width = $('.contact-form-content').outerWidth();
 			 var contact_cadre_height = $('.contact-form-content').outerHeight();

 			 $('.contact-cadre').css('width', contact_cadre_width);
 			 $('.contact-cadre').css('height', contact_cadre_height);




      }).resize();
		// END RESIZE

		$(".back-top-page").click(function() {
		  $("html, body").animate({ scrollTop: 0 }, "slow");
		  return false;
		});

		$(window).scroll(function(){
        var $header = $('.header');
  			var $backTopBtn = $('.back-top');
        if ($(this).scrollTop() > 600){
  				$backTopBtn.css({"-webkit-transform":"translateY(-250px)"});
        }
        else{
  				$backTopBtn.css({"-webkit-transform":"translateY(0px)"});
        }
      });

		// SMOOTH SCROLL

  //       var $root = $("html, body");
  //       $("a").click(function() {
  //           var href = $.attr(this, "href");
  //           $root.animate({
  //               scrollTop: $(href).offset().top
  //           }, 700, function () {
  //               window.location.hash = href;
  //           });
  //           return false;
  //       });

		});
})(jQuery, this);
