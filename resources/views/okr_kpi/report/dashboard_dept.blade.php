@extends('/layout/layout')
@section('title', 'Dept Dashboard')
@section('header')
    <div class="fs-5">
        Dept Dashboard
    </div>
@endsection
@section('style')
    <style>
        body,
        html {
            background: #181E24;
            padding-top: 10px;
            margin: 0;
        }

        .wrapper {
            width: 99%;
            display: block;
            overflow: hidden;
            margin: 0 auto;
            /* padding: 60px 50px; */
            border-radius: 4px;
        }

        canvas {
            height: 400px;
        }

        h1 {
            font-family: 'Roboto', sans-serif;
            margin-top: 50px;
            font-weight: 200;
            text-align: center;
            display: block;
            text-decoration: none;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 col-md-12" style="text-align: center;">
            <span>ใช้สำหรับแสดงภาพ Dept Dashboard</span>
        </div>
    </div>

    <div class="mx-2">
        <div class="row row-cols-auto gap-2 my-2">
            <div class="col-12 col-lg-12 pb-2 rounded-3"
                style="
                    margin: 5px;
                    box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, 
                                rgba(0, 0, 0, 0.24) 0px 1px 2px;">
                <div class="wrapper">
                    <canvas id="myChart4"></canvas>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById("myChart4").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["<  1", "1 - 2", "3 - 4", "5 - 9", "10 - 14", "15 - 19", "20 - 24", "25 - 29", "> - 29"],
                datasets: [{
                    label: 'Employee',
                    backgroundColor: "#caf270",
                    data: [12, 59, 5, 56, 58, 12, 59, 87, 45],
                }, {
                    label: 'Engineer',
                    backgroundColor: "#45c490",
                    data: [12, 59, 5, 56, 58, 12, 59, 85, 23],
                }, {
                    label: 'Government',
                    backgroundColor: "#008d93",
                    data: [12, 59, 5, 56, 58, 12, 59, 65, 51],
                }, {
                    label: 'Political parties',
                    backgroundColor: "#2e5468",
                    data: [12, 59, 5, 56, 58, 12, 59, 12, 74],
                }],
            },
            options: {
                tooltips: {
                    displayColors: true,
                    callbacks: {
                        mode: 'x',
                    },
                },
                scales: {
                    xAxes: [{
                        stacked: true,
                        gridLines: {
                            display: false,
                        }
                    }],
                    yAxes: [{
                        stacked: true,
                        ticks: {
                            beginAtZero: true,
                        },
                        type: 'linear',
                    }]
                },
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    position: 'bottom'
                },
            }
        });
    </script>
@endsection
