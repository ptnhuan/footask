/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


window.onload = function () {
    var chart = new CanvasJS.Chart("chartSkillsContainer", {
        title: {
            text: "Skills Of User Profile",
            fontFamily: "Arial",
            fontColor: "Peru",
            fontSize: 28

        },
        animationEnabled: true,
        axisY: {
            tickThickness: 0,
            lineThickness: 0,
            valueFormatString: " ",
            gridThickness: 0
        },
        axisX: {
            tickThickness: 0,
            lineThickness: 0,
            labelFontSize: 18,
            labelFontColor: "Peru"

        },
        data: [
            {
                indexLabelFontSize: 26,
                toolTipContent: "<span style='\"'color: {color};'\"'><strong>{indexLabel}</strong></span><span style='\"'font-size: 20px; color:peru '\"'><strong>{y}</strong></span>",

                indexLabelPlacement: "inside",
                indexLabelFontColor: "white",
                indexLabelFontWeight: 600,
                indexLabelFontFamily: "Verdana",
                color: "#62C9C3",
                type: "bar",
                dataPoints: [
                    {y: 21, label: "21%", indexLabel: "C/C++"},
                    {y: 25, label: "25%", indexLabel: "Java"},
                    {y: 33, label: "33%", indexLabel: "NodeJS"},
                    {y: 36, label: "36%", indexLabel: "PHP"},
                    {y: 42, label: "42%", indexLabel: "Laravel"},
                    {y: 49, label: "49%", indexLabel: "Wordpress"},
                    {y: 50, label: "50%", indexLabel: "Joomla"},
                    {y: 55, label: "55%", indexLabel: "C#"},
                    {y: 61, label: "61%", indexLabel: "HTML/CSS"}


                ]
            }
        ]
    });

    chart.render();
}