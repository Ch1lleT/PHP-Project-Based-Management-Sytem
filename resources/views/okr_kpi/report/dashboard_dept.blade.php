@extends('/layout/layout')
@section('title', 'Dept Dashboard')
@section('header')
    <div class="fs-5">
        Dept Dashboard
    </div>
@endsection
@section('style')
    <style>
        #myChart4 {
            height: 400px;

        }

        .chart-airea {
            padding: 1.5rem;
        }

        
        .chart-container {
            display: grid;
            grid-template-columns: auto auto;
            gap: 10px;
        }

        .chart-container .card-chart {
            box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px,
                rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
            border-radius: 5px;
            padding: 1rem;
        }

        @media only screen and (max-width:700px) {
            .chart-container {
                grid-template-columns: auto;
            }
        }
    </style>
@endsection

@section('content')
    <div class="header-content mb-3">
        <h2 class="mb-3">KR & KPI</h2>
        <div class="org-group gap-2 d-flex mb-3">
            <button class="btn btn-secondary">กฟผ</ก>
            <button class="btn btn-secondary">กฟผ</ก>
            <button class="btn btn-secondary">กฟผ</ก>
            <button class="btn btn-secondary">กฟผ</ก>
        </div>
        <p>แสดงข้อมูลหน่วยงาน : การไฟฟ้าฝ่ายผลิตแห่งประเทศไทยและยุทธศาสตร์</p>
    </div>
    <div class="chart-container mb-3">
        <div class="card-chart text-center">
            <label for="chart_div1">STG 1</label>
            <div id="chart_div1" class="d-flex justify-content-center"></div>
        </div>
        <div class="card-chart text-center">
            <label for="chart_div2">STG 2</label>
            <div id="chart_div2" class="d-flex justify-content-center"></div>
        </div>
        <div class="card-chart text-center">
            <label for="chart_div3">STG 3</label>
            <div id="chart_div3" class="d-flex justify-content-center"></div>
        </div>
    </div>

   <div class="h5 text-center mt-5 mb-3">ใช้สำหรับแสดงภาพ Dept Dashboard</div>
   {{-- After click will go dept page of org selected--}}
   <a href="{{route('dept')}}"> 
    <div class="mx-2 rounded-3"
        style="margin: 5px; box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
        <div class="chart-airea">
            <canvas id="myChart4"></canvas>
        </div>
    </div>
   </a>


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
                            display: true,
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
                onClick: function(evt, activeElements) {
                    if (activeElements.length > 0) {
                        var datasetIndex = activeElements[0]._datasetIndex;
                        var index = activeElements[0]._index;
                        var label = myChart.data.labels[index];
                        var datasetLabel = myChart.data.datasets[datasetIndex].label;
                        
                        // Define your URLs here
                        var urls = {
                            'Employee': [
                                'https://example.com/employee-1',
                                'https://example.com/employee-2',
                                'https://example.com/employee-3',
                                'https://example.com/employee-4',
                                'https://example.com/employee-5',
                                'https://example.com/employee-6',
                                'https://example.com/employee-7',
                                'https://example.com/employee-8',
                                'https://example.com/employee-9'
                            ],
                            'Engineer': [
                                'https://example.com/engineer-1',
                                'https://example.com/engineer-2',
                                'https://example.com/engineer-3',
                                'https://example.com/engineer-4',
                                'https://example.com/engineer-5',
                                'https://example.com/engineer-6',
                                'https://example.com/engineer-7',
                                'https://example.com/engineer-8',
                                'https://example.com/engineer-9'
                            ],
                            'Government': [
                                'https://example.com/government-1',
                                'https://example.com/government-2',
                                'https://example.com/government-3',
                                'https://example.com/government-4',
                                'https://example.com/government-5',
                                'https://example.com/government-6',
                                'https://example.com/government-7',
                                'https://example.com/government-8',
                                'https://example.com/government-9'
                            ],
                            'Political parties': [
                                'https://example.com/political-1',
                                'https://example.com/political-2',
                                'https://example.com/political-3',
                                'https://example.com/political-4',
                                'https://example.com/political-5',
                                'https://example.com/political-6',
                                'https://example.com/political-7',
                                'https://example.com/political-8',
                                'https://example.com/political-9'
                            ]
                        };
                        
                        // Redirect to the URL
                        var url = urls[datasetLabel][index];
                        window.location.href = url;
            }}
        }});
    </script>

<script src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['gauge']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data1 = google.visualization.arrayToDataTable([
            ['Label', 'Value'],
            ['', 55] // Replace with your data value (0-100)
        ]);

        var options = {
            width: 400,
            height: 300,
            redFrom: 0,
            redTo: 40,
            yellowFrom: 40,
            yellowTo: 80,
            greenFrom: 80,
            greenTo: 100,
            minorTicks: 10

        };

        var data2 = google.visualization.arrayToDataTable([
            ['Label', 'Value'],
            ['', 70]
        ]);
        var options2 = {
            width: 200,
            height: 200,
            redFrom: 0,
            redTo: 70,
            yellowFrom: 70,
            yellowTo: 90,
            greenFrom: 90,
            greenTo: 100,
            blueFrom: 100,
            blueTo: 120,
        };
        var data3 = google.visualization.arrayToDataTable([
            ['Label', 'Value'],
            ['', 70]
        ]);
        var options2 = {
            width: 200,
            height: 200,
            redFrom: 0,
            redTo: 70,
            yellowFrom: 70,
            yellowTo: 90,
            greenFrom: 90,
            greenTo: 100,
            blueFrom: 100,
            blueTo: 120,
        };


        var chart = new google.visualization.Gauge(document.getElementById('chart_div1'));
        chart.draw(data1, options);
        var chart = new google.visualization.Gauge(document.getElementById('chart_div2'));
        chart.draw(data2, options);
        var chart = new google.visualization.Gauge(document.getElementById('chart_div3'));
        chart.draw(data3, options);
    }
</script>
@endsection
