//[Master Javascript]

//Project:	Yoga Club - Responsive Multipurpose Corporate WordPress Theme
//Version:	1.0
//Last change:	10/01/2017 [fixed bug]
//Primary use:	Yoga Club - Responsive Multipurpose Corporate WordPress Theme 


//theme script here

jQuery(document).ready(function($){
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    jQuery('a.page-scroll').on('click', function(event) {
        var $anchor = jQuery(this);
        jQuery('html, body').stop().animate({
            scrollTop: (jQuery($anchor.attr('href')).offset().top - 70)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    jQuery('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 71
    });

    // Offset for Main Navigation
    jQuery('#mainNav').affix({
        offset: {
            top: 100
        }
    });

    // Highlight the top nav as scrolling occurs
    jQuery('body').scrollspy({
        target: '.top-bar',
        offset: 71
    });
    
    // Offset for Main Navigation
    jQuery('#topbar').affix({
        offset: {
            top: 100
        }
    })
    
    
    // Initialize and Configure Scroll Reveal Animation
	
    window.sr = ScrollReveal();
    sr.reveal('.sr-icons', {
        duration: 600,
        scale: 0.3,
        distance: '0px'
    }, 200);
    sr.reveal('.sr-button', {
        duration: 1000,
        delay: 200
    });
    sr.reveal('.sr-contact', {
        duration: 600,
        scale: 0.3,
        distance: '0px'
    }, 300);
	    
	
	
	// End of use strict
	
	jQuery('.flexslider').flexslider({
		animation: "fade",
		controlNav: false,
		directionNav: false,
	});

   // jQuery(".vc_grid-item:nth-child(even) div.vc_gitem-animated-block ").insertAfter(jQuery(".vc_grid-item:nth-child(even) .blog_content_bottom"));

   jQuery(document).ready(function($){
        jQuery('.main-navigation li.megamenu-contact-info a').removeAttr('title');
    });

}); // End of use strict