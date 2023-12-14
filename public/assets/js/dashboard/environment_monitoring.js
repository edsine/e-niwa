(function ($) {
    "use strict";
    $(function () {
        try {
            /* Revenue - Options */
            var options1 = {
                series: [
                    {
                        name: "Current Year",
                        type: "area",
                        data: [
                            6800, 5500, 5100, 4700, 3100, 4300, 5000, 4100,
                            3100, 4700, 3003, 5000,
                        ],
                    },
                    {
                        name: "Previous Year",
                        type: "line",
                        data: [
                            5500, 6900, 4500, 6100, 4300, 5400, 3700, 5200,
                            4400, 6001, 4003, 4200,
                        ],
                    },
                ],
                chart: {
                    type: "line",
                    fontFamily: "Poppins, sans-serif",
                    height: 320,
                    dropShadow: {
                        enabled: true,
                        opacity: 0.1,
                        blur: 5,
                        left: -7,
                        top: 22,
                    },
                    toolbar: {
                        show: false,
                    },
                },
                colors: ["#009688", "#e2a03f"],
                stroke: {
                    curve: "smooth",
                },
                fill: {
                    type: "solid",
                    opacity: [0.35, 1],
                },
                labels: [
                    "JAN",
                    "FEB",
                    "MAR",
                    "APR",
                    "MAY",
                    "JUN",
                    "JUL",
                    "AUG",
                    "SEP",
                    "OCT",
                    "NOV",
                    "DEC",
                ],
                markers: {
                    size: 0,
                },
                xaxis: {
                    axisBorder: {
                        show: false,
                    },
                    axisTicks: {
                        show: false,
                    },
                    crosshairs: {
                        show: true,
                    },
                    labels: {
                        offsetX: 0,
                        offsetY: 5,
                        style: {
                            fontSize: "12px",
                            fontFamily: "Poppins, sans-serif",
                            cssClass: "apexcharts-xaxis-title",
                        },
                    },
                },
                yaxis: {
                    labels: {
                        formatter: function (value, index) {
                            return value / 1000 + "M";
                        },
                        offsetX: -22,
                        offsetY: 0,
                        style: {
                            fontSize: "12px",
                            fontFamily: "Poppins, sans-serif",
                            cssClass: "apexcharts-yaxis-title",
                        },
                    },
                },
                legend: {
                    position: "top",
                    horizontalAlign: "right",
                    offsetY: -50,
                    fontSize: "13px",
                    fontFamily: "Poppins, sans-serif",
                    markers: {
                        width: 10,
                        height: 10,
                        strokeWidth: 0,
                        strokeColor: "#fff",
                        fillColors: undefined,
                        radius: 12,
                        onClick: undefined,
                        offsetX: 0,
                        offsetY: 0,
                    },
                    itemMargin: {
                        horizontal: 0,
                        vertical: 20,
                    },
                },
                tooltip: {
                    theme: "dark",
                    marker: {
                        show: true,
                    },
                    x: {
                        show: false,
                    },
                },
            }

            /*************************** Render Charts Script **************************/
            /* Revenue - Render */
            var chart1 = new ApexCharts(
                document.querySelector("#revenue"),
                options1
            );
            chart1.render();
            /* Target VS Actual - Render */
            var chart = new ApexCharts(
                document.querySelector("#targetvsactual"),
                options3
            );
            chart.render();
        } catch (e) {
            console.log(e);
        }
    });
})(jQuery);

