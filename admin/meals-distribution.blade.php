
    
                <h3>Meals Distribution by Category</h3>
                <canvas id="mealsDistributionChart"></canvas>
       


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            fetch('{{ route('admin.getMealsDistribution') }}')
                .then(response => response.json())
                .then(data => {
                    const categories = data.map(item => item.category_name);
                    const mealCounts = data.map(item => item.meal_count);

                    const ctx = document.getElementById('mealsDistributionChart').getContext('2d');
                    new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: categories,
                            datasets: [{
                                data: mealCounts,
                                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40'],
                            }]
                        },
                        options: {
                            responsive: true,
                            plugins: {
                                legend: {
                                    position: 'top',
                                },
                                title: {
                                    display: true,
                                    text: 'Distribution of Meals by Category'
                                }
                            }
                        }
                    });
                });
        });
    </script>
