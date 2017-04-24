/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


window.onload = function () {
    var chart1 = new CanvasJS.Chart("chartContainer1",
            {
                animationEnabled: true,
                data: [
                    {
                        dataPoints: [
                            {label: "USA"},
                            {label: "Russia"},
                            {label: "China"},
                            {label: "India"},
                            {label: "Australia"},
                            {label: "SA"}

                        ]
                    }, {
                        dataPoints: [
                            {y: 135305, label: "USA"},
                            {y: 107922, label: "Russia"},
                            {y: 52300, label: "China"},
                            {y: 3360, label: "India"},
                            {y: 39900, label: "Australia"},
                            {y: 0, label: "SA"}

                        ]
                    }
                ]
                ,
                legend: {
                    cursor: "pointer",
                    itemclick: function (e) {
                        if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                            e.dataSeries.visible = false;
                        } else
                        {
                            e.dataSeries.visible = true;
                        }
                        chart.render();
                    }
                }
            });

    var chart2 = new CanvasJS.Chart("chartContainer2",
            {
                animationEnabled: true,
                data: [
                    {
                        dataPoints: [
                            {label: "USA"},
                            {label: "Russia"},
                            {label: "China"},
                            {label: "India"},
                            {label: "Australia"},
                            {label: "SA"}

                        ]
                    }, {
                        dataPoints: [
                            {y: 135305, label: "USA"},
                            {y: 107922, label: "Russia"},
                            {y: 52300, label: "China"},
                            {y: 3360, label: "India"},
                            {y: 39900, label: "Australia"},
                            {y: 0, label: "SA"}

                        ]
                    }
                ]
                ,
                legend: {
                    cursor: "pointer",
                    itemclick: function (e) {
                        if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                            e.dataSeries.visible = false;
                        } else
                        {
                            e.dataSeries.visible = true;
                        }
                        chart.render();
                    }
                }
            });

    var chart3 = new CanvasJS.Chart("chartContainer3",
            {
                animationEnabled: true,
                data: [
                    {
                        dataPoints: [
                            {label: "USA"},
                            {label: "Russia"},
                            {label: "China"},
                            {label: "India"},
                            {label: "Australia"},
                            {label: "SA"}

                        ]
                    }, {
                        dataPoints: [
                            {y: 135305, label: "USA"},
                            {y: 107922, label: "Russia"},
                            {y: 52300, label: "China"},
                            {y: 3360, label: "India"},
                            {y: 39900, label: "Australia"},
                            {y: 0, label: "SA"}

                        ]
                    }
                ]
                ,
                legend: {
                    cursor: "pointer",
                    itemclick: function (e) {
                        if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                            e.dataSeries.visible = false;
                        } else
                        {
                            e.dataSeries.visible = true;
                        }
                        chart.render();
                    }
                }
            });
    var chart4 = new CanvasJS.Chart("chartContainer4",
            {
                animationEnabled: true,
                data: [
                    {
                        dataPoints: [
                            {label: "USA"},
                            {label: "Russia"},
                            {label: "China"},
                            {label: "India"},
                            {label: "Australia"},
                            {label: "SA"}

                        ]
                    }, {
                        dataPoints: [
                            {y: 135305, label: "USA"},
                            {y: 107922, label: "Russia"},
                            {y: 52300, label: "China"},
                            {y: 3360, label: "India"},
                            {y: 39900, label: "Australia"},
                            {y: 0, label: "SA"}

                        ]
                    }
                ]
                ,
                legend: {
                    cursor: "pointer",
                    itemclick: function (e) {
                        if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                            e.dataSeries.visible = false;
                        } else
                        {
                            e.dataSeries.visible = true;
                        }
                        chart.render();
                    }
                }
            });

    chart1.render();
    chart2.render();
    chart3.render();
    chart4.render();
    var chart5 = new CanvasJS.Chart("chartContainer5",
            {
                animationEnabled: true,
                axisY: {
                    includeZero: false,
                },
                axisX: {
                    valueFormatString: "DD-MMM",
                },
                data: [
                    {
                        type: "rangeArea",
                        yValueFormatString: "#0.## °C",
                        dataPoints: [// Y: [Low, High]
                            {x: new Date(2014, 05, 01), y: [11, 22]},
                            {x: new Date(2014, 05, 02), y: [13, 30]},
                            {x: new Date(2014, 05, 03), y: [13, 28]},
                            {x: new Date(2014, 05, 04), y: [12, 22]},
                            {x: new Date(2014, 05, 05), y: [11, 18]},
                            {x: new Date(2014, 05, 06), y: [09, 25]},
                            {x: new Date(2014, 05, 07), y: [11, 25]},
                            {x: new Date(2014, 05, 08), y: [13, 20]},
                            {x: new Date(2014, 05, 09), y: [13, 26]},
                            {x: new Date(2014, 05, 10), y: [15, 24]},
                            {x: new Date(2014, 05, 11), y: [16, 24]},
                            {x: new Date(2014, 05, 12), y: [17, 27]},
                            {x: new Date(2014, 05, 13), y: [12, 24]},
                            {x: new Date(2014, 05, 14), y: [11, 20]},
                            {x: new Date(2014, 05, 15), y: [10, 21]},
                            {x: new Date(2014, 05, 16), y: [13, 24]},
                            {x: new Date(2014, 05, 17), y: [17, 31]},
                            {x: new Date(2014, 05, 18), y: [17, 26]},
                            {x: new Date(2014, 05, 19), y: [14, 25]},
                            {x: new Date(2014, 05, 20), y: [12, 21]},
                            {x: new Date(2014, 05, 21), y: [16, 23]},
                            {x: new Date(2014, 05, 22), y: [14, 26]},
                            {x: new Date(2014, 05, 23), y: [15, 25]},
                            {x: new Date(2014, 05, 24), y: [17, 29]},
                            {x: new Date(2014, 05, 25), y: [18, 23]},
                            {x: new Date(2014, 05, 26), y: [18, 27]},
                            {x: new Date(2014, 05, 27), y: [16, 28]},
                            {x: new Date(2014, 05, 28), y: [19, 29]},
                            {x: new Date(2014, 05, 29), y: [20, 30]},
                            {x: new Date(2014, 05, 30), y: [22, 31]}
                        ]
                    }
                ]
            });
    chart5.render();
    
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
    
    var chart = new CanvasJS.Chart("chartColumnContainer",
            {
                title: {
                    text: "Number of Users in Each Room"
                },
                animationEnabled: true,
                axisX: {
                    title: "Rooms"
                },
                axisY: {
                    title: "percentage"
                },
                data: [
                    {
                        type: "stackedColumn100",
                        name: "Boys",
                        showInLegend: "true",
                        dataPoints: [
                            {y: 40, label: "Accountant"},
                            {y: 10, label: "Technical"},
                            {y: 72, label: "Business"},
                            {y: 30, label: "Lecture Hall"},
                            {y: 21, label: "Library"}
                        ]
                    }, {
                        type: "stackedColumn100",
                        name: "Girls",
                        showInLegend: "true",
                        dataPoints: [
                            {y: 20, label: "Accountant"},
                            {y: 14, label: "Technical"},
                            {y: 40, label: "Business"},
                            {y: 43, label: "Lecture Hall"},
                            {y: 17, label: "Library"}
                        ]
                    }

                ]
            });

    chart.render();
    
}