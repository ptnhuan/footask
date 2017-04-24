$(document).ready(function (e) {
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#left-col").toggleClass("active");
    });
});
$(document).ready(function () {
    $('.sidebar').tooltip();
});