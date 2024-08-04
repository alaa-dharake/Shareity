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
            <h4 class="box-title">Chef Growth This Year</h4>
        </div>
        <div class="box-body">
            <div id="chefGrowthChart"></div>
        </div>
    </div>
      
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var chefGrowthData = @json($chefGrowthData); // Convert PHP array to JavaScript array

            var options = {
                series: [{
                    name: 'Chefs',
                    data: Object.values(chefGrowthData)
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
                    categories: Object.keys(chefGrowthData).map(month => {
                        // Assuming month is in numeric format, you can format it as needed
                        return month;
                    }),
                },
                yaxis: {
                    min: 0,
                    max: Math.max(...Object.values(chefGrowthData)) + 10, // Adjust max value for better visualization
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

            var chart = new ApexCharts(document.querySelector("#chefGrowthChart"), options);
            chart.render();
        });
    </script>
</body>
</html>
