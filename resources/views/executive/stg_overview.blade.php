@extends('/layout/layout')
@section('title', 'ภาพรวมยุทธศาสตร์')
@section('header')
    <div class="fs-5">
        Strategies Overview
    </div>
@endsection
@section('style')
    <style>
        .google-visualization-Gauge,
        .google-visualization-Gauge-background {
            stroke: none;
            /* Remove stroke */
        }

        .chart-container {
            display: grid;
            grid-template-columns: auto auto;
            gap: 10px;
        }

        .chart-container .text-center {
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
    <div class="chart-container">
        <div class="text-center">
            <label for="chart_div1">STG 1</label>
            <div id="chart_div1" class="d-flex justify-content-center"></div>
        </div>
        <div class="text-center">
            <label for="chart_div2">STG 2</label>
            <div id="chart_div2" class="d-flex justify-content-center"></div>
        </div>
        <div class="text-center">
            <label for="chart_div3">STG 3</label>
            <div id="chart_div3" class="d-flex justify-content-center"></div>
        </div>
    </div>

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
