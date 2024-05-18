@extends('/layout/layout')
@section('title', 'NIMT OKR Chart')
@section('header')
    <div class="fs-5">
        OKR & KPI 2566
    </div>
@endsection
@section('style')
    <script src="https://balkan.app/js/OrgChart.js"></script>

    <style>
        .node.level-1 rect {
            fill: aqua;
            stroke: none;
        }

        .node.level-2 rect {
            fill: rgb(145, 255, 0);
            stroke: none;
            overflow-wrap: break-word;
        }

        /* #orgchart{
                    height: 100vh;
                    width: 100vw;
                } */
    </style>
@endsection
@section('content')
    <div class="bg-danger" style="height: 100%;">
        {{-- ... --}}
        <div id="orgchart"></div>
    </div>
    <script>
        const chart = new OrgChart(document.getElementById("orgchart"), {
            mouseScrool: OrgChart.action.none,
            orientation: OrgChart.orientation.left,
            enableSearch: false,
            toolbar: {
                zoom: true,
                fit: true,
                expandAll: true,
            },
            collapse: {
                level: 2,
            },
            menu: {
                csv: {
                    text: "Export CSV"
                },
            },
            nodeBinding: {
                field_0: "id",
                // field_:
            },
            // orderBy: {field: "id", desc: true},
            // groupDottedLines: [{ from: 1, to: 5  }],
            nodeMouseClick: OrgChart.action.none,
            nodes: [{
                    id: 0
                },
                {
                    id: 1,
                    pid: 0,
                    tags: ["level-1"]
                },
                {
                    id: 2,
                    pid: 0,
                    tags: ["level-1"]
                },
                {
                    id: 3,
                    pid: 1,
                    tags: ["level-2"]
                },
                {
                    id: 4,
                    pid: 2,
                    tags: ["level-2"]
                },
                {
                    id: 5,
                    pid: 1,
                    tags: ["level-2"]
                },
                {
                    id: 6,
                    pid: 2,
                    tags: ["level-2"]
                },
            ],
        });
    </script>
@endsection
