

    <div class="box overflow-hidden bg-primary">
        <div class="box-body p-0">
            <div class="px-30 pt-20">
                <h4 class="text-white mb-0" id="total-donations">0</h4>
                <p class="text-white-50">Donations this week</p>
            </div>
            <div id="donations-chart"></div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        fetch('/admin/weekly-donations')
            .then(response => response.json())
            .then(data => {
                let donationsData = new Array(7).fill(0);
                let totalDonations = 0;

                data.forEach(donation => {
                    // Adjust day_of_week to match Monday to Sunday
                    let dayIndex = (donation.day_of_week + 5) % 7;
                    donationsData[dayIndex] = donation.total_amount;
                    totalDonations += donation.total_amount;
                });

                document.getElementById('total-donations').textContent = totalDonations.toFixed(2);

                var options = {
                    series: [{
                        name: 'Donations',
                        data: donationsData
                    }],
                    chart: {
                        type: 'area',
                        height: 145,
                        sparkline: {
                            enabled: true
                        }
                    },
                    stroke: {
                        curve: 'smooth',
                        width: 3
                    },
                    fill: {
                        opacity: 1
                    },
                    yaxis: {
                        min: 0
                    },
                    xaxis: {
                        categories: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']
                    },
                    colors: ['#fb3d4e']
                };

                var chart = new ApexCharts(document.querySelector("#donations-chart"), options);
                chart.render();
            });
    });
</script>
