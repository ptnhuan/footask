$(document).ready(function (e) {
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $(".e_commerce").toggleClass("toggled");
    });
});