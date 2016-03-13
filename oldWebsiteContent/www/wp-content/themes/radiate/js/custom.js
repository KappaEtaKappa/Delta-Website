jQuery(document).ready(function() {

    if (radiateScriptParam.radiate_image_link == '') {
        var divheight = jQuery('.header-wrap').height() + 'px';
        jQuery('body').css({
            "margin-top": divheight
        });
    }

    jQuery(".header-search-icon").click(function() {
        jQuery("#masthead .search-form").toggle('slow');
    });

    jQuery(window).bind('scroll', function(e) {
        header_image_effect();
    });
    // jQuery('.digit').each(function() {
    //     console.log(jQuery(this));
    //     jQuery(this).css("left", Math.floor((Math.random() * 100)) + "%");
    //     jQuery(this).css("top", Math.floor((Math.random() * 100)) + "%");
    // });
});


function header_image_effect() {
    var scrollPosition = jQuery(window).scrollTop();
    // jQuery('#parallax-bg').css('top', (0 - (scrollPosition * .2)) + 'px');
    // jQuery('#content').css('background-position', "0px " + ((scrollPosition * 1)) + 'px');
    jQuery('.header-image img').css('top', (0 + (scrollPosition * (.5))) + 'px');
    jQuery('.fardigit').css('top', (0 - (scrollPosition * (.3))) + 'px');
    jQuery('.closedigit').css('top', (0 - (scrollPosition * (.7))) + 'px');
}