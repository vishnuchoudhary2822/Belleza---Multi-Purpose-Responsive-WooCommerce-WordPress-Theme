jQuery(document).ready(function() {
    jQuery( '<div class="nav-close"><a href="#" class="nav-class-toggle-nav-close" aria-hidden="true"><i class="fa fa-times"></i></a></div>' ).prependTo( "div#bs-example-navbar-collapse-1" );

    if (jQuery(window).width() >= 767) {
    (function() {
        [].slice.call(document.querySelectorAll('.tabs')).forEach(function(el) {
            new CBPFWTabs(el);
        });
    })();
    jQuery('#fullpage').fullpage({
        'verticalCentered': true,
        'easing': 'easeInOutCirc',
        'css3': false,
        'scrollingSpeed': 900,
        'slidesNavigation': true,
        'slidesNavPosition': 'bottom',
        'easingcss3': 'ease',
        'navigation': true,
        'anchors': ['About', 'Services', 'Business', 'Team','Portfolios', 'Contact'],
        'navigationPosition': 'left'
    });
}
else{
 // alert("Hello..");
}
  });
  jQuery(window).load(function() {
    jQuery('#preloader').fadeOut();
  });
