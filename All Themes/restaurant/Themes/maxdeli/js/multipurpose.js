
// JavaScript Document

jQuery(window).scroll(function() {
if (jQuery(this).scrollTop() > 1){  
    jQuery('header#masthead').addClass("sticky");
	  if (jQuery("header#masthead .stickylogo").attr("src") == "") {
		  	 	jQuery(".stickylogo").hide();
				jQuery(".normallogo").show();
			}
            else {
				
				jQuery(".normallogo").hide();
                jQuery(".stickylogo").show();
			}
	}
  else{
    jQuery('header#masthead').removeClass("sticky");
	jQuery(".stickylogo").hide();
	jQuery(".normallogo").show();

  }
});

jQuery(document).ready(function($){

	jQuery('.navbar-header .navbar-toggle').on('click', function(e) {
   	jQuery('#site-navigation').slideToggle("slow");
   });


//Add row-fluid  class above layout class - layout manager -sidebar and content
jQuery(".grid-row.row").wrap("<div class='row-fluid container'></div>");
//over
	jQuery(".navbar-toggle").click(function(){

    jQuery("body").toggleClass(" mobile-nav-in ");

});
	
	
	//Check to see if the window is top if not then display button
	jQuery(window).scroll(function(){
		if (jQuery(this).scrollTop() > 100) {
			jQuery('.scrollToTop').fadeIn();
		} else {
			jQuery('.scrollToTop').fadeOut();
		}
	});
	
	
	 	
	
	//Click event to scroll to top
	jQuery('.scrollToTop').click(function(){
		jQuery('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
	// Social Icon new window
	 jQuery('.social_sharing_post li a').click(function() {
		var newwindow = window.open(jQuery(this).prop('href'), '', 'height=500,width=500');
        if (window.focus) {
            newwindow.focus();
        }
        return false;
    });
	
	
	// jQuery('.dropdown-toggle').dropdown();
	 
	
});
//jQuery(window).scroll(function() {
jQuery(document).ready(function($){
//for <link> tag -removing w3validation error for media=''
//jQuery("link[rel='stylesheet']").attr("media", "all");
//document.querySelector("link").removeAttribute("media", "");
//document.querySelector("link").setAttribute("media", "all");
//$("#vc_pageable_owl-carousel-css-css").attr("media", "all");

//append search icon  to menu and remove all text
jQuery(".navbar-nav > li.menu-search > a").html('<span title="Search Across Site"><i class="fa fa-search" aria-hidden="true"></i></span>');
//replace menu search icon url
jQuery(".navbar-nav > li.menu-search > a").attr("href", "javascript:void(0)")
	
	//document.getElementsByClassName('menu-search').innerHTML = 'jgkjhkhj';
//jQuery("#searchform").appendTo("li.menu-search");  
    if ( jQuery(window).width() < 1025) {

//for search form

jQuery("#searchform").appendTo("li.menu-search"); /*append for adds to the end of the element
//jQuery("#source").prependTo("#destination");/*Prependto for adds to the beginning of the element
		
//For sliding menu*/

(function (jQuery) {

    'use strict';

    // Toggle classes in body for syncing sliding animation with other elements
    jQuery('#bs-example-navbar-collapse-1')
        .on('shown.bs.collapse', function (e) {
             //$('div.wrap_boxed').addClass(' mobile-nave-in ');
	
			jQuery('body').addClass('in');
			 
        })
       .on('hidden.bs.collapse', function (e) {

            //$('#page').removeClass(' mobile-nav-in ');
			jQuery('body').removeClass('in');
			 
        });

})(jQuery);
 
 jQuery(window).scroll(function () {
jQuery('#masthead').removeClass('sticky');
 });
    }
});





