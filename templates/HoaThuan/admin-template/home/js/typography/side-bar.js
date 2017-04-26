$(document).ready(function () {
    $('#btn_menu').click(function () {
        if ($('.main').hasClass('nav-sm'))
        {
            $('.main').removeClass('nav-sm');
            $('.main').addClass('nav-md');
        } else
        {
            $('.main').removeClass('nav-md');
            $('.main').addClass('nav-sm');
        }
    });

    document.getElementById("typography").style.minHeight = $('.left_col').height() + 'px';
    $('.left_col').click(function () {
        setTimeout(function () {
            document.getElementById("typography").style.minHeight = $('.left_col').height() + 'px';
        }, 100);
    });
});
$(document).ready(function () {
    $('.sidebar').tooltip();
});
