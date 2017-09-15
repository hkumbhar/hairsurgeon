$(function() {
	 /*--Menu Dropdown--------*/ 
	   jQuery('.nav li.dropdown').hover(function() {
		   jQuery(this).addClass('open');
	   }, function() {
		   jQuery(this).removeClass('open');
	   }); 
	   
/*-- Page Scroll To Top Section ---------------*/
		jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() > 100) {
				jQuery('.hc_scrollup').fadeIn();
			} else {
				jQuery('.hc_scrollup').fadeOut();
			}
		});
	
		jQuery('.hc_scrollup').click(function () {
			jQuery("html, body").animate({
				scrollTop: 0
			}, 600);
			return false;
		});
	
	 //Menu fixed top	
	  $('.navbar').affix({
      offset: {
        top: $('.header-top-section').height()
			  }
		});	
});
	jQuery(document).ready(function() {			
 // Aos Animation js		
	  AOS.init({
        easing: 'ease-in-out-sine'
      });	
	});		  