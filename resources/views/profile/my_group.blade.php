@extends('/layout/layout')
@section('title', 'My Group')
@section('header')
    <div class="fs-5">
        กลุ่มของฉัน
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

        .test {
            overflow: scroll;
            height: 100px !important;
            width: 200;
            line-height: 15pt;
            color: white;
            font-size: 14px;
        }

        ::-webkit-scrollbar {
            display: none;
        }
    </style>
@endsection
@section('content')
    <div class="text-center">
        <span class="fs-5">ใช้สำหรับแสดงภาพ Grouping ของบัญชีดังกล่าว</span>
    </div>
    <div style="height: 100%;">
        <div class="button-group">
            <button class="btn btn-secondary">STG 1</button>
            <button class="btn btn-secondary">STG 2</button>
            <button class="btn btn-secondary">STG 3</button>
            <button class="btn btn-secondary">STG 4</button>
        </div>
        <div id="orgchart"></div>
    </div>
    <script>
        OrgChart.templates.ana.content =
            `<foreignobject class="node " x="10" y="10" width="195" height="100">{val}</foreignobject>`;
        OrgChart.templates.ana.title =
            `<foreignobject class="node" x="10" y="10" width="230" height="100">{val}</foreignobject>`;
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
                title: "title",
                content: "content",
                // field_:
            },
            // orderBy: {field: "id", desc: true},
            // groupDottedLines: [{ from: 1, to: 5  }],
            nodeMouseClick: OrgChart.action.none,
            nodes: [{
                    id: 0,
                    title: '<div class="text-white fw-bold d-flex align-items-end justify-content-end h-100">STG 1</div>',
                    content: '<div class="test">ยุทธศาสตร์ที่ 1 : Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas molestias deserunt officiis minima facilis amet perspiciatis necessitatibus eaque vero animi!    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas molestias deserunt officiis minima facilis amet perspiciatis necessitatibus eaque vero animi!</div>',
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
