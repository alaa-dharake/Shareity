<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/echarts@5.0.2/dist/echarts.min.js"></script>
</head>
<body>
    <div class="card">
        <div class="card-header">
            Users Distribution by State
        </div>
        <div class="card-body">
            <div id="userStatePieChart" style="height: 400px;"></div>
        </div>
    </div>

    <script>
        // JavaScript code to render the pie chart using ECharts
        document.addEventListener('DOMContentLoaded', function() {
            var statesData = @json($statesData); // Convert PHP array to JavaScript array

            console.log(statesData); // Add this line to check the data in the browser console

            var userStatePieChart = echarts.init(document.getElementById('userStatePieChart'));

            // Prepare data for pie chart
            var pieData = statesData.map(function(item) {
                return { value: item.user_count, name: item.state };
            });

            var option = {
                title: {
                    text: 'Users Distribution by State',
                    subtext: 'Total Users: ' + pieData.reduce(function(sum, item) {
                        return sum + item.value;
                    }, 0),
                    left: 'center'
                },
                tooltip: {
                    trigger: 'item'
                },
                series: [{
                    name: 'Users',
                    type: 'pie',
                    radius: '50%',
                    data: pieData,
                    emphasis: {
                        itemStyle: {
                            shadowBlur: 10,
                            shadowOffsetX: 0,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    }
                }]
            };

            userStatePieChart.setOption(option);
        });
    </script>
</body>
</html>
