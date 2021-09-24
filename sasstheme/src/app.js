jQuery(document).ready(function()
{
jQuery('.menu ul.sub-menu').mouseenter(function() {
        jQuery(this).parent().addClass("selected");
});
jQuery('.menu ul.sub-menu').mouseleave(function() {

        jQuery(this).parent().removeClass("selected");
});
});
