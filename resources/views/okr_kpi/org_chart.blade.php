@extends('/layout/layout')
@section('title', 'NIMT OKR Chart')
@section('header')
    <div class="fs-5">
        OKR & KPI 2566
    </div>
@endsection
@section('style')
    <style>
    </style>
@endsection
@section('content')
    <form action="">
        <div id="tree"></div>
    </form>
    <script>
        var chart = new OrgChart(document.getElementById("tree"), {
            mouseScrool: OrgChart.action.none,
            // scaleInitial: OrgChart.match.boundary,
            orientation: OrgChart.orientation.left, //ทิศทาง
            enableSearch: false,
            editForm: {
                style: {
                    backgroundColor: "#f0f0f0",
                }
            },
            generateElementsFromFields: false,
            template: "base",
            nodes: [{
                    id: "1",
                    title: "Madoohimai",
                },
                {
                    id: "2",
                    pid: "1"
                },
                {
                    id: "3",
                    pid: "1"
                },
                {
                    id: "4",
                    pid: "2"
                },
                {
                    id: "5",
                    pid: "2"
                },
                {
                    id: "6",
                    pid: "3"
                },
                {
                    id: "7",
                    pid: "3"
                }
            ]
            editUI: none
        });
        // console.log(chart.config.interactive = false); //หยุดนิ่งทุกอย่าง
        chart.config.editForm.style.backgroundColor = '#fbfb'
        console.log(chart.config.editForm.style.display);
    </script>

@endsection
