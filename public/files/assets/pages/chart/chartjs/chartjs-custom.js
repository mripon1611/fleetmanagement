"use strict";
$(document).ready(function(){
    var serviceCost = $( "#service_cost" ).val();
    var tyreCost = $( "#tyre_cost" ).val();
    var batteryCost = $( "#battery_cost" ).val();
    var normalCost = $( "#normal_cost" ).val();
    var majorCost = $( "#major_cost" ).val();
    var ministration_cost = parseInt(serviceCost) + parseInt(tyreCost) + parseInt(batteryCost) + parseInt(normalCost) + parseInt(majorCost);
    var mTotal = "Total : " + ministration_cost;
    $("#ministration_cost").text(mTotal);

    var octaneCost = $( "#octane_cost" ).val();
    var petrolCost = $( "#petrol_cost" ).val();
    var dieselCost = $( "#diesel_cost" ).val();
    var fuel_cost = parseInt(octaneCost) + parseInt(petrolCost) + parseInt(dieselCost);
    var fTotal = "Total : " + fuel_cost;
    $("#fuel_cost").text(fTotal);

    var inTotal = ministration_cost + fuel_cost;
    inTotal = "Total : "+ inTotal;
    $("#in_total").text(inTotal);



    /*Doughnut chart*/
    var ctx = document.getElementById("myChart");
    var data = {
        labels: [
            "Servecing", "Tyre Change", "Battery Change", "Normal Works", "Major Works"
        ],
        datasets: [{
            data: [serviceCost, tyreCost, batteryCost, normalCost,majorCost],
            backgroundColor: [
                "#7E81CB",
                "#1ABC9C",
                "#B8EDF0",
                "#B4C1D7",
                "#01C0C8"
            ],
            borderWidth: [
                "0px",
                "0px",
                "0px",
                "0px",
                "0px"
            ],
            borderColor: [
                "#a1a4ec",
                "#2adab7",
                "#a7e7ea",
                "#a5b0c3",
                "#10e6ef"

            ]
        }]
    };

    var myDoughnutChart = new Chart(ctx, {
        type: 'doughnut',
        data: data
    });

    /*All cost chart*/
    var pieElem = document.getElementById("allCostChart");
    var data20 = {
        labels: [
            "Ministration Cost",
            "Fuel Cost"
        ],
        datasets: [{
            data: [ministration_cost, fuel_cost],
            backgroundColor: [
                "#01C0C8",
                "#FB9A7D"
            ],
            hoverBackgroundColor: [
                "#0dedf7",
                "#ffb59f"
            ]
        }]
    };
    var myAllCostChart = new Chart(pieElem, {
        type: 'pie',
        data: data20
    });

    /*Fuel cost chart*/
    var ctx = document.getElementById("fuelCostChart");
    var data21 = {
        labels: [
            "Octane", "Petrol", "Diesel"
        ],
        datasets: [{
            data: [octaneCost, petrolCost, dieselCost],
            backgroundColor: [
                "#25A6F7",
                "#FB9A7D",
                "#B8EDF0"
            ],
            borderWidth: [
                "0px",
                "0px",
                "0px"
            ],
            borderColor: [
                "#6cc4fb",
                "#ffb59f",
                "#a7e7ea"

            ]
        }]
    };

    var myFuelCostChart = new Chart(ctx, {
        type: 'doughnut',
        data: data21
    });


    /*Bar chart*/
    var data1 = {
        labels: [0, 1, 2, 3, 4, 5, 6, 7],
        datasets: [{
            label: "My First dataset",
            backgroundColor: [
                'rgba(95, 190, 170, 0.99)',
                'rgba(95, 190, 170, 0.99)',
                'rgba(95, 190, 170, 0.99)',
                'rgba(95, 190, 170, 0.99)',
                'rgba(95, 190, 170, 0.99)',
                'rgba(95, 190, 170, 0.99)',
                'rgba(95, 190, 170, 0.99)'
            ],
            hoverBackgroundColor: [
                'rgba(26, 188, 156, 0.88)',
                'rgba(26, 188, 156, 0.88)',
                'rgba(26, 188, 156, 0.88)',
                'rgba(26, 188, 156, 0.88)',
                'rgba(26, 188, 156, 0.88)',
                'rgba(26, 188, 156, 0.88)',
                'rgba(26, 188, 156, 0.88)'
            ],
            data: [65, 59, 80, 81, 56, 55, 50],
        }, {
            label: "My second dataset",
            backgroundColor: [
                'rgba(93, 156, 236, 0.93)',
                'rgba(93, 156, 236, 0.93)',
                'rgba(93, 156, 236, 0.93)',
                'rgba(93, 156, 236, 0.93)',
                'rgba(93, 156, 236, 0.93)',
                'rgba(93, 156, 236, 0.93)',
                'rgba(93, 156, 236, 0.93)'
            ],
            hoverBackgroundColor: [
                'rgba(103, 162, 237, 0.82)',
                'rgba(103, 162, 237, 0.82)',
                'rgba(103, 162, 237, 0.82)',
                'rgba(103, 162, 237, 0.82)',
                'rgba(103, 162, 237, 0.82)',
                'rgba(103, 162, 237, 0.82)',
                'rgba(103, 162, 237, 0.82)'
            ],
            data: [60, 69, 85, 91, 58, 50, 45],
        }]
    };

    // var bar = document.getElementById("barChart").getContext('2d');
    // var myBarChart = new Chart(bar, {
    //     type: 'bar',
    //     data: data1,
    //     options: {
    //         barValueSpacing: 20
    //     }
    // });


    /*Radar chart*/
    // var radarElem = document.getElementById("radarChart");

    // var data2 = {
    //     labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
    //     datasets: [{
    //         label: "My First dataset",
    //         backgroundColor: "rgba(100, 221, 187, 0.52)",
    //         borderColor: "rgba(72, 206, 168, 0.88)",
    //         pointBackgroundColor: "rgba(51, 175, 140, 0.88)",
    //         pointBorderColor: "rgba(44, 130, 105, 0.88)",
    //         pointHoverBackgroundColor: "rgba(44, 130, 105, 0.88)",
    //         pointHoverBorderColor: "rgba(107, 226, 193, 0.98)",
    //         data: [65, 59, 90, 81, 56, 55, 40]
    //     }, {
    //         label: "My Second dataset",
    //         backgroundColor: "rgba(255, 204, 189, 0.95)",
    //         borderColor: "rgba(255, 165, 138, 0.95)",
    //         pointBackgroundColor: "rgba(255, 116, 22, 0.94)",
    //         pointBorderColor: "rgba(251, 142, 109, 0.95)",
    //         pointHoverBackgroundColor: "rgba(251, 142, 109, 0.95)",
    //         pointHoverBorderColor: "rgba(255, 165, 138, 0.95)",
    //         data: [28, 48, 40, 19, 96, 27, 100]
    //     }]
    // };
    // var myRadarChart = new Chart(radarElem, {
    //     type: 'radar',
    //     data: data2,
    //     options: {
    //         scale: {
    //             reverse: true,
    //             ticks: {
    //                 beginAtZero: true
    //             }
    //         }
    //     }
    // });

    /*Polar chart*/
    // var polarElem = document.getElementById("polarChart");

    // var data3 = {
    //     datasets: [{
    //         data: [
    //             11,
    //             16,
    //             7,
    //             3,
    //             14
    //         ],
    //         backgroundColor: [
    //             "#7E81CB",
    //             "#1ABC9C",
    //             "#B8EDF0",
    //             "#B4C1D7",
    //             "#01C0C8"
    //         ],
    //         hoverBackgroundColor: [
    //             "#a1a4ec",
    //             "#2adab7",
    //             "#a7e7ea",
    //             "#a5b0c3",
    //             "#10e6ef"
    //         ],
    //         label: 'My dataset' // for legend
    //     }],
    //     labels: [
    //         "Blue",
    //         "Green",
    //         "Light Blue",
    //         "grey",
    //         "Sea Green"
    //     ]
    // };

    // new Chart(polarElem, {
    //     data: data3,
    //     type: 'polarArea',
    //     options: {
    //         elements: {
    //             arc: {
    //                 borderColor: ""
    //             }
    //         }
    //     }
    // });

    /*Pie chart*/
    // var pieElem = document.getElementById("pieChart");
    // var data4 = {
    //     labels: [
    //         "Blue",
    //         "Orange",
    //         "Sea Green"
    //     ],
    //     datasets: [{
    //         data: [30, 30, 40],
    //         backgroundColor: [
    //             "#25A6F7",
    //             "#FB9A7D",
    //             "#01C0C8"
    //         ],
    //         hoverBackgroundColor: [
    //             "#6cc4fb",
    //             "#ffb59f",
    //             "#0dedf7"
    //         ]
    //     }]
    // };

    // var myPieChart = new Chart(pieElem, {
    //     type: 'pie',
    //     data: data4
    // });

    //bubble chart
    // var bubblechart = document.getElementById("bubblechart");
    // var data = {
    //     datasets: [{
    //         label: 'First Dataset',
    //         data: [{
    //             x: 20,
    //             y: 15,
    //             r: 15
    //         }, {
    //             x: 10,
    //             y: 15,
    //             r: 10
    //         }, {
    //             x: 25,
    //             y: 11,
    //             r: 8
    //         }, {
    //             x: 15,
    //             y: 13,
    //             r: 8
    //         }, {
    //             x: 35,
    //             y: 18,
    //             r: 6
    //         }, {
    //             x: 40,
    //             y: 10,
    //             r: 10
    //         }],
    //         backgroundColor: "#FF6384",
    //         hoverBackgroundColor: "#FF6384"
    //     }]
    // };
    // var myBubbleChart = new Chart(bubblechart, {
    //     type: 'bubble',
    //     data: data,
    //     options: {
    //         elements: {
    //             points: {
    //                 borderWidth: 1,
    //                 borderColor: 'rgb(0, 0, 0)'
    //             }
    //         }
    //     }
    // });

    //Scales chart
    // var stancechart = document.getElementById("stancechart");
    // var chartInstance = new Chart(stancechart, {
    //     type: 'line',
    //     data: data,
    //     options: {
    //         scales: {
    //             xAxes: [{
    //                 type: 'logarithmic',
    //                 position: 'bottom',
    //                 ticks: {
    //                     min: 1,
    //                     max: 1000
    //                 }
    //             }]
    //         }
    //     }
    // });
    //Time Scale
    // var timescalechart = document.getElementById("timescalechart");
    // var chartInstance1 = new Chart(timescalechart, {
    //     type: 'line',
    //     data: data,
    //     options: {
    //         scales: {
    //             yAxes: [{
    //                 time: {
    //                     unit: 'day'
    //                 }
    //             }]
    //         }
    //     }
    // })

});
