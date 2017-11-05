$(document).ready(function() {
    var $header = $("header"),
        $clone = $header.before($header.clone().addClass("clone"));

    $(window).on("scroll", function() {
        var fromTop = $(window).scrollTop();
        $("body").toggleClass("down", (fromTop > 105.6));
    });
});
var shiftWindow = function() { scrollBy(0, -80) };
if (location.hash) shiftWindow();
window.addEventListener("hashchange", shiftWindow);
