/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


window.onload = function () {
    var chart = new CanvasJS.Chart("chartTimeContainer",
            {
                legend: {
                    verticalAlign: "bottom",
                    horizontalAlign: "center"
                },
                theme: "theme1",
                data: [
                    {
                        type: "pie",
                        indexLabelFontFamily: "Garamond",
                        indexLabelFontSize: 20,
                        indexLabelFontWeight: "bold",
                        startAngle: 0,
                        indexLabelFontColor: "MistyRose",
                        indexLabelLineColor: "darkgrey",
                        indexLabelPlacement: "inside",
                        toolTipContent: "{name}: {y}hrs",
                        showInLegend: true,
                        indexLabel: "#percent%",
                        dataPoints: [
                            {y: 52, name: "Time At Work", legendMarkerType: "triangle"},
                            {y: 44, name: "Time At Home", legendMarkerType: "square"},
                            {y: 12, name: "Time Spent Out", legendMarkerType: "circle"}
                        ]
                    }
                ]
            });
    chart.render();
}