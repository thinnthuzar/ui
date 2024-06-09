

<!-- In your Blade template -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Orders by Week</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="ordersByWeekChart"></canvas>
    <canvas id="revenueByDayChart"></canvas>


    <script>
        var ctx = document.getElementById('ordersByWeekChart').getContext('2d');

        // Define an array of background colors
        var backgroundColors = [
            'rgba(255, 99, 132, 0.2)',   // Red
            'rgba(54, 162, 235, 0.2)',   // Blue
            'rgba(255, 206, 86, 0.2)',   // Yellow
            'rgba(75, 192, 192, 0.2)',   // Green
            'rgba(153, 102, 255, 0.2)'   // Purple
            // Add more colors if needed
        ];

        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {!! json_encode(array_keys($data)) !!},
                datasets: [{
                    label: 'Orders by Day',
                    data: {!! json_encode(array_values($data)) !!},
                    backgroundColor: backgroundColors, // Assign the array of background colors
                    borderColor: 'rgba(54, 162, 235, 1)', // Example border color
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var ctx = document.getElementById('revenueByDayChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: {!! json_encode(array_keys($data)) !!},
                datasets: [{
                    label: 'Total Revenue',
                    data: {!! json_encode(array_values($data)) !!}
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</body>
</html>

