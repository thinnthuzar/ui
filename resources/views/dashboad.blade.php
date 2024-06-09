<base href="/public">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
.total{

}
.total:hover{
    background-color: antiquewhite;
    box-shadow: 2rem;
    /* top:20px; */
    transition: 0.5s;
    transform: translate(10%, 10%);
}
</style>


@extends('main')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-12  col-md-6 col-lg-4">
                <div class="card  total bg-danger text-white px-4 py-2 my-2">
                    <div class="">
                      <h5>Total product <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                    </svg></h4>  {{$product}}
                    </div>
                </div>
            </div>
            <div class="col-12  col-md-6 col-lg-4">
                <div class="card  total bg-danger text-white px-4 py-2 my-2">
                    <div class="">
                      <h5>Total user <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                    </svg></h4> {{$user}}
                    </div>
                </div>
            </div>
            <div class="col-12  col-md-6 col-lg-4">
                <div class="card  total bg-danger text-white px-3 py-2 my-2">
                    <div class="">
                      <h5>Total order <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                        </svg></h4>  {{$orderc}}
                    </div>
                </div>
            </div>
            <canvas id="ordersByWeekChart"></canvas>


        </div>

    </div>
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
    </script>
    @endsection

