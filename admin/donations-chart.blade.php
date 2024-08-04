<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donations This Week</title>
    <!-- Include jQuery and ApexCharts libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>
<body>
    <div id="donations-chart"></div>

    <script>
        $(document).ready(function() {
            $.ajax({
                url: '/api/donations-this-week',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    let categories = [];
                    let data = [];

                    // Process the response data
                    response.forEach(function(item) {
                        categories.push(item.date);
                        data.push(item.count);
                    });

                    // ApexCharts configuration with custom colors
                    var options = {
                        chart: {
                            type: 'bar',
                            height: 350,
                            toolbar: {
                                show: false // Hide the toolbar if not needed
                            }
                        },
                        series: [{
                            name: 'Donations',
                            data: data
                        }],
                        xaxis: {
                            categories: categories,
                            labels: {
                                style: {
                                    colors: '#333'
                                }
                            }
                        },
                        plotOptions: {
                            bar: {
                                colors: {
                                    ranges: [{
                                        from: 0,
                                        to: 5,
                                        color: '#4CAF50' // Green color for low range
                                    }, {
                                        from: 6,
                                        to: 10,
                                        color: '#FFC107' // Orange color for medium range
                                    }, {
                                        from: 11,
                                        to: 15,
                                        color: '#F44336' // Red color for high range
                                    }]
                                },
                                columnWidth: '80%', // Adjust the width of bars
                                distributed: true // Distribute bars evenly
                            }
                        }
                    };

                    var chart = new ApexCharts(document.querySelector("#donations-chart"), options);
                    chart.render();
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    </script>
</body>
</html>
