window.onload = function () {
    var chart = new CanvasJS.Chart("chartRainContainer",
            {
                animationEnabled: true,
                axisX: {
                    valueFormatString: "DD-MMM",
                    interval: 10,
                    intervalType: "day",
                    labelAngle: -50,
                    labelFontColor: "rgb(0,75,141)",
                    minimum: new Date(2012, 06, 10)
                },
                axisY: {
                    interlacedColor: "#F0FFFF",
                    tickColor: "azure",
                    titleFontColor: "rgb(0,75,141)",
                    valueFormatString: "#M,,.",
                    interval: 100000000
                },
                data: [
                    {
                        indexLabelFontColor: "darkSlateGray",
                        name: 'views',
                        type: "area",
                        color: "rgba(0,75,141,0.7)",
                        markerSize: 8,
                        dataPoints: [
                            {x: new Date(2012, 06, 15), y: 0, indexLabel: "Release", indexLabelOrientation: "vertical", indexLabelFontColor: "orangered", markerColor: "orangered"},
                            {x: new Date(2012, 06, 18), y: 2000000},
                            {x: new Date(2012, 06, 23), y: 6000000},
                            {x: new Date(2012, 07, 1), y: 10000000, indexLabel: "10m"},
                            {x: new Date(2012, 07, 11), y: 21000000},
                            {x: new Date(2012, 07, 23), y: 50000000},
                            {x: new Date(2012, 07, 31), y: 75000000},
                            {x: new Date(2012, 08, 04), y: 100000000, indexLabel: "100m"},
                            {x: new Date(2012, 08, 10), y: 125000000},
                            {x: new Date(2012, 08, 13), y: 150000000},
                            {x: new Date(2012, 08, 16), y: 175000000},
                            {x: new Date(2012, 08, 18), y: 200000000, indexLabel: "200m"},
                            {x: new Date(2012, 08, 21), y: 225000000},
                            {x: new Date(2012, 08, 24), y: 250000000},
                            {x: new Date(2012, 08, 26), y: 275000000},
                            {x: new Date(2012, 08, 28), y: 302000000, indexLabel: "300m"}
                        ]
                    }

                ]
            });



    var chart2 = new CanvasJS.Chart("chartCoalContainer2",
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
                        chart2.render();
                    }
                }
            });

    var chart3 = new CanvasJS.Chart("chartCoalContainer3",
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
                        chart3.render();
                    }
                }
            });
    var chart4 = new CanvasJS.Chart("chartCoalContainer4",
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
                        chart4.render();
                    }
                }
            });


    chart.render();
    chart2.render();
    chart3.render();
    chart4.render();


    var chart = new CanvasJS.Chart("chartReportContainer",
            {
                zoomEnabled: false,
                animationEnabled: true,

                data: [
                    {
                        type: "line",
                        lineThickness: 3,
                        axisYType: "secondary",
                        dataPoints: [
                            {x: new Date(2001, 0), y: 0},
                            {x: new Date(2002, 0), y: 0.001},
                            {x: new Date(2003, 0), y: 0.01},
                            {x: new Date(2004, 0), y: 0.05},
                            {x: new Date(2005, 0), y: 0.1},
                            {x: new Date(2006, 0), y: 0.15},
                            {x: new Date(2007, 0), y: 0.22},
                            {x: new Date(2008, 0), y: 0.38},
                            {x: new Date(2009, 0), y: 0.56},
                            {x: new Date(2010, 0), y: 0.77},
                            {x: new Date(2011, 0), y: 0.91},
                            {x: new Date(2012, 0), y: 0.94}


                        ]
                    },
                    {
                        type: "line",
                        axisYType: "secondary",
                        dataPoints: [
                            {x: new Date(2001, 00), y: 0.18},
                            {x: new Date(2002, 00), y: 0.2},
                            {x: new Date(2003, 0), y: 0.25},
                            {x: new Date(2004, 0), y: 0.35},
                            {x: new Date(2005, 0), y: 0.42},
                            {x: new Date(2006, 0), y: 0.5},
                            {x: new Date(2007, 0), y: 0.58},
                            {x: new Date(2008, 0), y: 0.67},
                            {x: new Date(2009, 0), y: 0.78},
                            {x: new Date(2010, 0), y: 0.88},
                            {x: new Date(2011, 0), y: 0.98},
                            {x: new Date(2012, 0), y: 1.04}


                        ]
                    },
                    {
                        type: "line",
                        dataPoints: [
                            {x: new Date(2001, 00), y: 0.16},
                            {x: new Date(2002, 0), y: 0.17},
                            {x: new Date(2003, 0), y: 0.18},
                            {x: new Date(2004, 0), y: 0.19},
                            {x: new Date(2005, 0), y: 0.20},
                            {x: new Date(2006, 0), y: 0.23},
                            {x: new Date(2007, 0), y: 0.261},
                            {x: new Date(2008, 0), y: 0.289},
                            {x: new Date(2009, 0), y: 0.3},
                            {x: new Date(2010, 0), y: 0.31},
                            {x: new Date(2011, 0), y: 0.32},
                            {x: new Date(2012, 0), y: 0.33}


                        ]
                    }



                ],
                legend: {
                    cursor: "pointer",
                    itemclick: function (e) {
                        if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                            e.dataSeries.visible = false;
                        } else {
                            e.dataSeries.visible = true;
                        }

                    }
                }
            });
    chart.render();


    var chart1 = new CanvasJS.Chart("chartPieContainer1",
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
    chart1.render();

    var chart2 = new CanvasJS.Chart("chartPieContainer2",
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
    chart2.render();
    var chart3 = new CanvasJS.Chart("chartPieContainer3",
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


    chart3.render();
}