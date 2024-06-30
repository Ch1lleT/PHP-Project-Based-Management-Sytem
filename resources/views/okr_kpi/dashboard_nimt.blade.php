@extends('/layout/layout')
@section('title', 'NIMT Dashboard')
@section('header')
    <div class="fs-5">
        NIMT Dashboard
    </div>
@endsection
@section('style')
    <style>
        .strategy-box {
            box-shadow: rgba(0, 0, 0, 0.24) 0px 1px 5px,
                rgba(0, 0, 0, 0.24) 0px 1px 5px;
        }

        tr td a {
            color: black;
        }

        .chart-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .chart-container .card-chart {
            box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px,
                rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
            border-radius: 5px;
            padding: 1rem;
            flex: 1 1 calc(33.333% - 10px);
        }

        @media (max-width: 992px) {
            .chart-container .card-chart {
                flex: 1 1 calc(50% - 10px);
            }
        }

        @media (max-width: 576px) {
            .chart-container .card-chart {
                flex: 1 1 100%;
            }
        }
    </style>
@endsection

@section('content')
<h1>เพิ่มเกจเป็นแต่ละ ยุทธ ให้มี 2 เกจ</h1>
    <div class="chart-container ">
        <div class="card-chart text-center ">
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
        <div class="card-chart text-center">
            <label for="chart_div4">STG 4</label>
            <div id="chart_div4" class="d-flex justify-content-center"></div>
        </div>
        <div class="card-chart text-center">
            <label for="chart_div5">STG 5</label>
            <div id="chart_div5" class="d-flex justify-content-center"></div>
        </div>
        <div class="card-chart text-center">
            <label for="chart_div6">STG 6</label>
            <div id="chart_div6" class="d-flex justify-content-center"></div>
        </div>
    </div>
    
@endsection

@section('script')
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        var table = $('table.display').DataTable({
            pageLength: 5,
            lengthMenu: [
                [3, 5, 10, 15, 20],
                [3, 5, 10, 15, 20]
            ]
        })
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
            var chart = new google.visualization.Gauge(document.getElementById('chart_div4'));
            chart.draw(data3, options);
            var chart = new google.visualization.Gauge(document.getElementById('chart_div5'));
            chart.draw(data3, options);
            var chart = new google.visualization.Gauge(document.getElementById('chart_div6'));
            chart.draw(data3, options);
        }
    </script>
@endsection
