<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <script src="https://d3js.org/d3.v6.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/c3@0.7.20/c3.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/c3@0.7.20/c3.min.css" rel="stylesheet">
    <style>
        /* Adjust the height and add scrollbars as needed */
        #campaignMealChart {
            height: 350px; /* Adjust height based on your chart's requirements */
            overflow: auto; /* Add scrollbars if content overflows */
        }
    </style>
</head>
<body>
    <div class="box">
        <div class="box-header with-border">
            <h4 class="box-title">Campaigns and Meals Today</h4>
        </div>
        <div class="box-body">
            <!-- Container for the chart -->
            <div id="campaignMealChart"></div>
        </div>
    </div>

    <!-- JavaScript for generating the chart -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var chart = c3.generate({
                bindto: '#campaignMealChart',  // Target element for the chart
                size: { height: 350, width: 350},  // Adjust chart height as needed
                data: {
                    x: 'Campaigns',  // X-axis label
                    columns: @json(array_values($campaignData)),  // Data for the chart, passed from PHP
                    type: 'bar',  // Chart type: bar chart
                    // colors: {
                    //     'Campaigns': '#ff9900'  // Custom color for 'Campaigns' bars
                    // }
                },
                axis: {
                    x: {
                        type: 'category'  // X-axis type: category
                    },
                    y: {
                        label: 'Number of Meals'  // Y-axis label
                    }
                },
                grid: { y: { show: true } }  // Show grid lines on the Y-axis
            });

            // Optionally, change bar colors to green
            d3.selectAll('.c3-bar')
                .style('fill', '#f5700a');  // Green color for bars
        });
    </script>
</body>
</html>
