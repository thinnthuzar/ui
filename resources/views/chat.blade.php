<!-- In your Blade template -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Registrations</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="userRegistrationsChart"></canvas>
    <script>
        var ctx = document.getElementById('userRegistrationsChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {!! json_encode(array_keys($data)) !!},
                datasets: [{
                    label: 'User Registrations',
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
