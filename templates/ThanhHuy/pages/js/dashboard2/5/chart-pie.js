/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


window.onload = function () {
    var chart = new CanvasJS.Chart("chartPieContainer",
            {
                data: [
                    {
                        type: "pie",
                        showInLegend: false,
                        dataPoints: [
                            {y: 10, name: "Android", color: "red"},
                            {y: 30, name: "IOS", color: "blue"},
                            {y: 20, name: "Blackberry", color: "black"},
                            {y: 15, name: "Symbian", color: "gray"},
                            {y: 30, name: "Other", color: "orange"}
                        ]
                    }
                ]
            });
    chart.render();
}