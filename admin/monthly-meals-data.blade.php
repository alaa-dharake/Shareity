
    
                <div class="box">
                    <div class="box-header d-flex justify-content-between align-items-center">
                        <h4 class="box-title">Meals Donated This Year</h4>
                    </div>
                    <div class="box-body ps-10 pb-0">
                        <div id="mealsChart"></div>
                    </div>
                </div>
            
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            fetch('{{ route('admin.getMonthlyMealsData') }}')
                .then(response => response.json())
                .then(data => {
                    const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                    const mealsData = Array(12).fill(0); // Initialize array with 0 for all months

                    data.forEach(item => {
                        mealsData[item.month - 1] = item.meals_count;
                    });

                    const options = {
                        series: [{
                            name: "Meals Donated",
                            data: mealsData
                        }],
                        chart: {
                            height: 224,
                            type: 'area',
                            zoom: {
                                enabled: false
                            }
                        },
                        colors: ['#FF6C6C'],
                        dataLabels: {
                            enabled: false,
                        },
                        stroke: {
                            show: true,
                            curve: 'smooth',
                            lineCap: 'butt',
                            width: 3,
                            dashArray: 0, 
                        },    
                        markers: {
                            size: 5,
                            colors: '#FF6C6C',
                            strokeColors: '#ffffff',
                            strokeWidth: 3,
                            strokeOpacity: 0.9,
                            strokeDashArray: 0,
                            fillOpacity: 1,
                            discrete: [],
                            shape: "circle",
                            radius: 5,
                            offsetX: 0,
                            offsetY: 0,
                            onClick: undefined,
                            onDblClick: undefined,
                            hover: {
                                size: undefined,
                                sizeOffset: 3
                            }
                        },  
                        grid: {
                            borderColor: '#f7f7f7', 
                            row: {
                                colors: ['transparent'],
                                opacity: 0
                            },      
                            yaxis: {
                                lines: {
                                    show: true,
                                },
                            },
                        },
                        fill: {
                            type: "gradient",
                            gradient: {
                                shadeIntensity: 1,
                                opacityFrom: 0.01,
                                opacityTo: 1,
                                stops: [0, 90, 100]
                            }
                        },
                        xaxis: {
                            categories: months,
                            labels: {
                                show: true,
                            },
                            axisBorder: {
                                show: true
                            },
                            axisTicks: {
                                show: true
                            },
                            tooltip: {
                                enabled: true,        
                            },
                        },
                        yaxis: {
                            labels: {
                                show: true,
                                formatter: function (val) {
                                    return val + " meals";
                                }
                            }
                        },
                        tooltip: {
                            theme: 'dark'
                        }
                    };

                    var chart = new ApexCharts(document.querySelector("#mealsChart"), options);
                    chart.render();
                });
        });
    </script>

