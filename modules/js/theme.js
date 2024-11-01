(function(jQuery) {
    "use strict"; // Start of use strict

    jQuery('#toggle-view li').on('click', function() {
        var text = jQuery(this).children('div.toggle-panel');

        if (text.is(':hidden')) {
            text.slideDown('200');
            jQuery(this).children('span').addClass("fa-angle-up").removeClass("fa-angle-down");
        } else {
            text.slideUp('200');
            jQuery(this).children('span').addClass("fa-angle-down").removeClass("fa-angle-up");
        }
    });
	
    //new WOW().init();
	
    jQuery(".tabs-menu a").on('click', function(event) {
        event.preventDefault();
        jQuery(this).parent().addClass("current");
        jQuery(this).parent().siblings().removeClass("current");
        var tab = jQuery(this).attr("href");
        jQuery(".tab-contents").not(tab).css("display", "none");
        jQuery(tab).fadeIn();
    });
	
    jQuery(".nav-trigger").on('click', function() {
        jQuery("#sidebar-wrapper").addClass("active");
        jQuery("body").addClass("sidemenu-active");
    });
	
    jQuery(".body-overlay").on('click', function() {
        jQuery("nav-trigger").removeClass("active");
        jQuery("#sidebar-wrapper").removeClass("active");
        jQuery("body").removeClass("sidemenu-active");
    });
	
	
	 jQuery(".body-overlay").on('click', function() {
        jQuery("nav-trigger").removeClass("active");
        jQuery("#sidebar-wrapper").removeClass("active");
        jQuery("body").removeClass("sidemenu-active");
    });
	
	jQuery(document).on('click', '.dropdown', function (e) {
	  e.stopPropagation();
	});

if(jQuery(".vc_col-sm-12").has(".col-md-4").length){
	jQuery(".vc_col-sm-12 .col-md-4 .post-thumb").addClass("fontsizing");
} if(jQuery(".vc_col-sm-12").has(".col-md-3").length){
	jQuery(".vc_col-sm-12 .col-md-3 .post-thumb").addClass("fontsizing");
} if(jQuery(".vc_col-sm-8").has(".col-md-6").length){
	jQuery(".vc_col-sm-8 .col-md-6 .post-thumb").addClass("fontsizing");
} if(jQuery(".vc_col-sm-8").has(".col-md-3").length){
	jQuery(".vc_col-sm-8 .col-md-3 .post-thumb").addClass("fontsizing");
} if(jQuery(".vc_col-sm-8").has(".col-md-4").length){
	jQuery(".vc_col-sm-8 .col-md-4 .post-thumb").addClass("fontsizing");
} if(jQuery(".vc_col-sm-6").has(".col-md-6").length){
	jQuery(".vc_col-sm-6 .col-md-6 .post-thumb").addClass("fontsizing");
} if(jQuery(".vc_col-sm-6").has(".col-md-4").length){
	jQuery(".vc_col-sm-6 .col-md-4 .post-thumb").addClass("fontsizing");
} if(jQuery(".vc_col-sm-6").has(".col-md-3").length){
	jQuery(".vc_col-sm-6 .col-md-3 .post-thumb").addClass("fontsizing");
}

//Add class to vc full width row
jQuery('div').each(function() {
    var myEm = jQuery(this).attr('data-vc-full-width-init');
    jQuery('div[data-vc-full-width-init = '+myEm+']').addClass('titlebg-transparent');
});

//Add class to body tag if is mobile
jQuery('body').each(function() {
    var jQuerywindow = jQuery(window),
        jQueryhtml = jQuery('body');

    function resize() {
        if (jQuerywindow.width() < 768) {
            return jQueryhtml.addClass('width_less_than_768');
        }

        jQueryhtml.removeClass('width_less_than_768');
    }

    jQuerywindow
        .resize(resize)
        .trigger('resize');
})
})(jQuery); // End of use strict