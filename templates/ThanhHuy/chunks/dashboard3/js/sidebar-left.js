$(document).ready(function (e) {
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $(".dashboard3").toggleClass("toggled");
    });
});