//[Master Javascript]

//Project:	We Love - Responsive Multipurpose Corporate WordPress Theme
//Version:	1.0
//Last change:	10/01/2017 [fixed bug]
//Primary use:	We Love - Responsive Multipurpose Corporate WordPress Theme 


//theme script here

jQuery(document).ready(function($){
    "use strict"; // Start of use strict

    jQuery(document).ready(function($){
        jQuery('.main-navigation li.megamenu-contact-info a').removeAttr('title');
    });

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

}); // End of use strict

// countdown

(function($) {
    /**
    * Set your date here  (YEAR, MONTH (0 for January/11 for December), DAY, HOUR, MINUTE, SECOND)
    * according to the GMT+0 Timezone
    **/
    var launch = new Date(2018, 02, 14, 09, 00);
    /**
    * The script
    **/
    
    var days = $('#days');
    var hours = $('#hours');
    var minutes = $('#minutes');
    var seconds = $('#seconds');
    
    setDate();
    function setDate(){
        var now = new Date();
        if( launch < now ){
            days.html('<h1>0</H1><p>Day</p>');
            hours.html('<h1>0</h1><p>Hour</p>');
            minutes.html('<h1>0</h1><p>Minute</p>');
            seconds.html('<h1>0</h1><p>Second</p>');
        }
        else{
            var s = -now.getTimezoneOffset()*60 + (launch.getTime() - now.getTime())/1000;
            var d = Math.floor(s/86400);
            days.html('<h1>'+d+'</h1><p>Day'+(d>1?'s':''),'</p>');
            s -= d*86400;

            var h = Math.floor(s/3600);
            hours.html('<h1>'+h+'</h1><p>Hour'+(h>1?'s':''),'</p>');
            s -= h*3600;

            var m = Math.floor(s/60);
            minutes.html('<h1>'+m+'</h1><p>Minute'+(m>1?'s':''),'</p>');

            s = Math.floor(s-m*60);
            seconds.html('<h1>'+s+'</h1><p>Second'+(s>1?'s':''),'</p>');
            setTimeout(setDate, 1000);
        }
    }
})(jQuery);