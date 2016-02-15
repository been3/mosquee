(function($) {
    var nav = $("#nav-primary");
    nav.find("li").each(function() {
        if ($(this).find("ul").length > 0) {
            $(this).mouseenter(function() {
                $(this).find("ul").stop(true, true).slideDown();
            });
            $(this).mouseleave(function() {
                $(this).find("ul").stop(true, true).slideUp();
            });
        }
    });
})(jQuery);
