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
            Chefs Distribution by State
        </div>
        <div class="card-body">
            <div id="chefStatePieChart" style="height: 400px;"></div>
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var chefsData = @json($chefsData); // Convert PHP array to JavaScript array

            var chefStatePieChart = echarts.init(document.getElementById('chefStatePieChart'));

            // Prepare data for pie chart
            var pieData = chefsData.map(function(item) {
                return { value: item.chef_count, name: item.state };
            });

            var option = {
                title: {
                    text: 'Chefs Distribution by State',
                    subtext: 'Total Chefs: ' + pieData.reduce(function(sum, item) {
                        return sum + item.value;
                    }, 0),
                    left: 'center'
                },
                tooltip: {
                    trigger: 'item'
                },
                series: [{
                    name: 'Chefs',
                    type: 'pie',
                    radius: '50%',
                    data: pieData.map(function(item, index) {
                        return {
                            value: item.value,
                            name: item.name,
                            itemStyle: {
                                color: ['#4CAF50', '#FF5722', '#2196F3', '#FFC107', '#E91E63', '#9C27B0', '#00BCD4', '#607D8B'][index % 8]
                            }
                        };
                    }),
                    emphasis: {
                        itemStyle: {
                            shadowBlur: 10,
                            shadowOffsetX: 0,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    }
                }]
            };

            chefStatePieChart.setOption(option);
        });
    </script>
</body>
</html>
