(function ($) {
    "use strict";
    try {
        /* Monthly Reports Overview - Options */
        var options1 = {
            chart: {
                fontFamily: 'Poppins, sans-serif',
                height: 320,
                type: 'area',
                zoom: {
                    enabled: false
                },
                dropShadow: {
                    enabled: true,
                    opacity: 0.2,
                    blur: 5,
                    left: -7,
                    top: 22
                },
                toolbar: {
                    show: false
                }
            },
            colors: ['#009688', '#e7515a'],
            dataLabels: {
                enabled: false
            },
            markers: {
                discrete: [{
                    seriesIndex: 0,
                    dataPointIndex: 7,
                    fillColor: '#000',
                    strokeColor: '#000',
                    size: 5
                }, {
                    seriesIndex: 1,
                    dataPointIndex: 11,
                    fillColor: '#000',
                    strokeColor: '#000',
                    size: 4
                }]
            },
            subtitle: {
                text: 'Monthly Documentation',
                align: 'left',
                margin: 0,
                offsetX: -10,
                offsetY: 35,
                floating: false,
                style: {
                    fontSize: '14px',
                    color: '#888ea8'
                }
            },
            title: {
                text: 'Total Documentation and Reports: 22,053',
                align: 'left',
                margin: 0,
                offsetX: -10,
                offsetY: 0,
                floating: false,
                style: {
                    fontSize: '25px',
                    color: '#515365'
                },
            },
            stroke: {
                show: true,
                curve: 'smooth',
                width: 2,
                lineCap: 'square'
            },
            series: [{
                name: 'Total Reports',
                data: [3085, 2084, 3589, 12458, 4258, 6851, 2145, 7845, 3230, 9250, 7636, 1248]
            }, {
                name: 'Total Documents',
                data: [1000, 1856, 2415, 10568, 3542, 4856, 1000, 5869, 2000, 8596, 6999, 1025]
            }],
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            xaxis: {
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false
                },
                crosshairs: {
                    show: true
                },
                labels: {
                    offsetX: 0,
                    offsetY: 5,
                    style: {
                        fontSize: '12px',
                        fontFamily: 'Poppins, sans-serif',
                        cssClass: 'apexcharts-xaxis-title',
                    },
                }
            },
            yaxis: {
                labels: {
                    formatter: function (value, index) {
                        return (value / 1000) + 'K'
                    },
                    offsetX: -22,
                    offsetY: 0,
                    style: {
                        fontSize: '12px',
                        fontFamily: 'Poppins, sans-serif',
                        cssClass: 'apexcharts-yaxis-title',
                    },
                }
            },
            grid: {
                borderColor: '#e0e6ed',
                strokeDashArray: 8,
                xaxis: {
                    lines: {
                        show: true
                    }
                },
                yaxis: {
                    lines: {
                        show: true,
                    }
                },
                padding: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: -10
                },
            },
            legend: {
                position: 'top',
                horizontalAlign: 'right',
                offsetY: -50,
                fontSize: '13px',
                fontFamily: 'Poppins, sans-serif',
                markers: {
                    width: 10,
                    height: 10,
                    strokeWidth: 0,
                    strokeColor: '#fff',
                    fillColors: undefined,
                    radius: 12,
                    onClick: undefined,
                    offsetX: 0,
                    offsetY: 0
                },
                itemMargin: {
                    horizontal: 0,
                    vertical: 20
                }
            },
            tooltip: {
                theme: 'dark',
                marker: {
                    show: true,
                },
                x: {
                    show: false,
                }
            },
            fill: {
                type: "gradient",
                gradient: {
                    type: "vertical",
                    shadeIntensity: 1,
                    inverseColors: !1,
                    opacityFrom: .28,
                    opacityTo: .05,
                    stops: [45, 100]
                }
            },
            responsive: [{
                breakpoint: 575,
                options: {
                    legend: {
                        offsetY: -30,
                    },
                },
            }]
        };

        /* Top Reports by Category - Options */
        var options = {
            series: [65, 82, 45, 78], // Updated series values for representation
            chart: {
                height: 305,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    dataLabels: {
                        name: {
                            fontSize: '15px',
                            fontFamily: 'Poppins, sans-serif',
                            fontWeight: 700,
                        },
                        value: {
                            fontSize: '15px',
                            fontFamily: 'Poppins, sans-serif',
                            fontWeight: 700,
                        },
                        total: {
                            show: true,
                            label: 'Total',
                            color: '##515365',
                            fontWeight: 700,
                            formatter: function (w) {
                                return 23053
                            }
                        }
                    }
                }
            },
            labels: ['Environment', 'Legal', 'Financial', 'Research'],
        };


        /*************************** Render Charts Script ************************** /
        /* Reports Monthly - Render */
        document.getElementById('monthlyReportsChart').innerHTML = '';
        var chart1 = new ApexCharts(
            document.querySelector("#monthlyReportsChart"),
            options1
        );
        chart1.render();

        /* Top countries by sales - Render */
        var chart2 = new ApexCharts(
            document.querySelector("#reportsByCategoryChart"),
            options
        );
        chart2.render();



    } catch (e) {
        console.log(e);
    }
})(jQuery);