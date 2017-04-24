$(document).ready(function (e) {
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#left-col").toggleClass("active");
         //$("#right-col").toggleClass("active");
    });
});
$(document).ready(function () {
    $('.sidebar').tooltip();
});



$(document).ready(function () {
    $width_base = $('body').width();

    if ($width_base > 992)
    {
        $width_current = $width_base - 225;
    }
    else
    {
        $width_current = $width_base;
    }
    
    $(".right-col").css("width", $width_current);
    $(".footer").css("width", $width_current);
    
    $('#menu-toggle').click( function () {
        if ($width_base > 992)
        {
            if ($('#left-col').hasClass('active'))
            {
                $width_current = $width_base - 225;
                $(".right-col").css("width", $width_current);
                $(".footer").css("width", $width_current);
            }
            else
            {
               $width_current = $width_base - 70;
               $(".right-col").css("width", $width_current);
               $(".footer").css("width", $width_current);
            }
        }
        else
        {
            if ($('#left-col').hasClass('active'))
            {
                $width_current = $width_base;
                $(".right-col").css("width", $width_current);
                $(".footer").css("width", $width_current);
            }
            else
            {
                $width_current = $width_base - 70;
                $(".right-col").css("width", $width_current);
                $(".footer").css("width", $width_current);
            }
        }
    });
    $(window).resize(function() {
        $width_base = $('body').width();

        if ($width_base > 992)
        {
            if ($('#left-col').hasClass('active'))
            {
                $width_current = $width_base - 225;
                $(".right-col").css("width", $width_current);
                $(".footer").css("width", $width_current);
            }
            else
            {
               $width_current = $width_base - 70;
               $(".right-col").css("width", $width_current);
               $(".footer").css("width", $width_current);
            }
        }
        else
        {
            if ($('#left-col').hasClass('active'))
            {
                $width_current = $width_base;
               $(".right-col").css("width", $width_current);
               $(".footer").css("width", $width_current);
            }
            else
            {
                $width_current = $width_base - 70;
                $(".right-col").css("width", $width_current);
                $(".footer").css("width", $width_current);
            }
        }
    });
});