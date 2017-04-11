/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function (e) {
    $("#collapse-link1").click(function (e) {
        e.preventDefault();
        $(".admin-content1").toggleClass("toggled");
    });
});

$(document).ready(function (e) {
    $("#collapse-link2").click(function (e) {
        e.preventDefault();
        $(".admin-content2").toggleClass("toggled");
    });
});

$(document).ready(function (e) {
    $("#collapse-link3").click(function (e) {
        e.preventDefault();
        $(".admin-content3").toggleClass("toggled");
    });
});