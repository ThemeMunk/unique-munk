// JavaScript Document
jQuery(function($) { // DOM is now ready and jQuery's $ alias sandboxed

		$('#responsive-menu-button').sidr({
			  name: 'sidr-main',
			  source: '#site-navigation',
			  side: 'right'
	    });

		jQuery(document).ready(function () {
	    	jQuery('.top-nav').meanmenu({
				meanScreenWidth: 767,
				meanRevealPosition: "center"
		    });
		});
		
    /* Equal Height */
     $('.static-image .text_holder').matchHeight({
        byRow: true,
        property: 'height',
        target: null,
        remove: false
    });		
		
});
