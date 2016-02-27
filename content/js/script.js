// Primary nav animations
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

// Current link highlighting
window.onload = highlightCurrentLink;

function highlightCurrentLink(){
    var a = document.getElementsByClassName("nav-primary__link");
    for (var i = 0; i < a.length; i++) {
        if (a[i].href.split("#")[0] == window.location.href.split("#")[0]) {
            a[i].classList.add("current");
        }
    }
}

// Animations on loading
$(".container").addClass("load");