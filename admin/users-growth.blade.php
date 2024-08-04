<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>
<body>
    <!-- Placeholder for the chart -->
    <div class="box">
        <div class="box-header">
            <h4 class="box-title">User Growth This Year</h4>
        </div>
        <div class="box-body">
            <div id="userGrowthChart"></div>
        </div>
    </div>
      
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var userGrowthData = @json($userGrowthData); // Convert PHP array to JavaScript array

            var options = {
                series: [{
                    name: 'Users',
                    data: Object.values(userGrowthData)
                }],
                chart: {
                    height: 350,
                    type: 'line',
                    zoom: {
                        enabled: false
                    }
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth'
                },
                xaxis: {
                    categories: Object.keys(userGrowthData).map(month => {
                        // Assuming month is in numeric format, you can format it as needed
                        return month;
                    }),
                },
                yaxis: {
                    min: 0,
                    max: Math.max(...Object.values(userGrowthData)) + 10, // Adjust max value for better visualization
                    tickAmount: 5, // Adjust the number of ticks on the y-axis as needed
                    labels: {
                        formatter: function (val) {
                            return Math.round(val); // Rounds the y-axis labels to integers
                        }
                    }
                },
                tooltip: {
                    theme: 'dark'
                }
            };

            var chart = new ApexCharts(document.querySelector("#userGrowthChart"), options);
            chart.render();
        });
    </script>
</body>
</html>
