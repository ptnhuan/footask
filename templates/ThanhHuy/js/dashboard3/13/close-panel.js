/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function (e) {
    $("#close-link1").click(function (e) {
        e.preventDefault();
        $(".admin-panel1").toggleClass("toggled");
    });
});

$(document).ready(function (e) {
    $("#close-link2").click(function (e) {
        e.preventDefault();
        $(".admin-panel2").toggleClass("toggled");
    });
});

$(document).ready(function (e) {
    $("#close-link3").click(function (e) {
        e.preventDefault();
        $(".admin-panel3").toggleClass("toggled");
    });
});