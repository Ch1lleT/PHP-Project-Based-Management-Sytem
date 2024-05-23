@extends('/layout/layout')
@section('title', 'NIMT Dashboard')
@section('header')
    <div class="fs-5">
        NIMT Dashboard
    </div>
@endsection
@section('style')
    <script nonce="undefined" src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
    <style>
        .strategy-box {
            box-shadow: rgba(0, 0, 0, 0.24) 0px 1px 5px,
                rgba(0, 0, 0, 0.24) 0px 1px 5px;
        }



        tr td a {
            color: black;
        }

        .dt-buttons button:nth-child(-n+5) {
            background-color: var(--bs-primary);
            color: white;
            border: none;
            border-radius: 5px;
        }

        .dt-buttons button:hover {
            background-color: var(--bs-primary) !important;
            color: white !important;
            border: none !important;
            border-radius: 5px !important;
        }

        #DataTables_Table_0_paginate .previous,
        #DataTables_Table_0_paginate .next {
            /* color: var(--bs-primary) !important; */
            border: 1px solid rgb(189, 189, 189);
            margin: 0;
            border-radius: 5px;
        }

        #DataTables_Table_0_paginate span a {
            background-color: var(--bs-primary);
            color: white !important;
            border: none;
            border-radius: 5px;
            padding: 8px 10px;
            margin: 0;
        }

        .container {
            text-align: center;
        }

        .meter {
            position: relative;
            width: 600px;
            height: 50px;
            display: flex;
            margin: 0 auto;
            border-radius: 5px;
            overflow: hidden;
        }

        .segment {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }

        .below-average {
            background-color: #d9534f;
        }

        .average {
            background-color: #f0ad4e;
        }

        .high {
            background-color: #5cb85c;
        }

        .indicator {
            position: absolute;
            top: 0;
            bottom: 0;
            width: 2px;
            background-color: black;
            margin-left: -1px;
        }

        .labels {
            display: flex;
            justify-content: space-between;
            width: 600px;
            margin: 10px auto 0;
        }
    </style>
@endsection

@section('content')
    <div class="row mb-3">
        <div class="col-12 col-md-6 col-lg-6 mb-3 mx-0">
            <div class="strategy-box rounded-3 p-3">
                <p>ยุทธศาสตร์ที่ 2 : ยกระดับความสามารถทางการวัดเพื่อคุณภาพชีวิตและการพัฒนาที่ยั่งยืน</p>
                <div class="meter">
                    <div class="segment below-average">Below Average</div>
                    <div class="segment average">Average</div>
                    <div class="segment high">High</div>
                    <div class="indicator" style="left: 50%;">5psi</div>
                </div>
                <div class="labels">
                    <span>0psi</span>
                    <span>2psi</span>
                    <span>4psi</span>
                    <span>6psi</span>
                    <span>8psi</span>
                    <span>10psi</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 mb-3 mx-0">
            <div class="strategy-box rounded-3 p-3">
                <p>ยุทธศาสตร์ที่ 2 : ยกระดับความสามารถทางการวัดเพื่อคุณภาพชีวิตและการพัฒนาที่ยั่งยืน</p>
                <div class="meter">
                    <div class="segment below-average">Below Average</div>
                    <div class="segment average">Average</div>
                    <div class="segment high">High</div>
                    <div class="indicator" style="left: 50%;">5psi</div>
                </div>
                <div class="labels">
                    <span>0psi</span>
                    <span>2psi</span>
                    <span>4psi</span>
                    <span>6psi</span>
                    <span>8psi</span>
                    <span>10psi</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 mb-3 mx-0">
            <div class="strategy-box rounded-3 p-3">
                <p>ยุทธศาสตร์ที่ 2 : ยกระดับความสามารถทางการวัดเพื่อคุณภาพชีวิตและการพัฒนาที่ยั่งยืน</p>
                <div class="meter">
                    <div class="segment below-average">Below Average</div>
                    <div class="segment average">Average</div>
                    <div class="segment high">High</div>
                    <div class="indicator" style="left: 50%;">5psi</div>
                </div>
                <div class="labels">
                    <span>0psi</span>
                    <span>2psi</span>
                    <span>4psi</span>
                    <span>6psi</span>
                    <span>8psi</span>
                    <span>10psi</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 mb-3 mx-0">
            <div class="strategy-box rounded-3 p-3">
                <p>ยุทธศาสตร์ที่ 2 : ยกระดับความสามารถทางการวัดเพื่อคุณภาพชีวิตและการพัฒนาที่ยั่งยืน</p>
                <div class="meter">
                    <div class="segment below-average">Below Average</div>
                    <div class="segment average">Average</div>
                    <div class="segment high">High</div>
                    <div class="indicator" style="left: 50%;">5psi</div>
                </div>
                <div class="labels">
                    <span>0psi</span>
                    <span>2psi</span>
                    <span>4psi</span>
                    <span>6psi</span>
                    <span>8psi</span>
                    <span>10psi</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 mb-3 mx-0">
            <div class="strategy-box rounded-3 p-3">
                <p>ยุทธศาสตร์ที่ 2 : ยกระดับความสามารถทางการวัดเพื่อคุณภาพชีวิตและการพัฒนาที่ยั่งยืน</p>
                <div class="meter">
                    <div class="segment below-average">Below Average</div>
                    <div class="segment average">Average</div>
                    <div class="segment high">High</div>
                    <div class="indicator" style="left: 50%;">5psi</div>
                </div>
                <div class="labels">
                    <span>0psi</span>
                    <span>2psi</span>
                    <span>4psi</span>
                    <span>6psi</span>
                    <span>8psi</span>
                    <span>10psi</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 mb-3 mx-0">
            <div class="strategy-box rounded-3 p-3">
                <p>ยุทธศาสตร์ที่ 2 : ยกระดับความสามารถทางการวัดเพื่อคุณภาพชีวิตและการพัฒนาที่ยั่งยืน</p>
                <div class="meter">
                    <div class="segment below-average">Below Average</div>
                    <div class="segment average">Average</div>
                    <div class="segment high">High</div>
                    <div class="indicator" style="left: 50%;">5psi</div>
                </div>
                <div class="labels">
                    <span>0psi</span>
                    <span>2psi</span>
                    <span>4psi</span>
                    <span>6psi</span>
                    <span>8psi</span>
                    <span>10psi</span>
                </div>
            </div>
        </div>

    </div>
    {{-- <div class="p-3">
        <h4>แสดงข้อมูล : ชื่อหน่วยงาน</h4>
        

    </div> --}}
    <div class="overflow-x-auto strategy-box p-3 rounded-3">
        <P class="fs-4 ">OKR & KPI 2566</P>
        <table class="table display table-striped" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">STG</th>
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Target(KR)</th>
                    <th scope="col">Actual(KR)</th>
                    <th scope="col">Target(KPI)</th>
                    <th scope="col">Actual(KPI)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">stg 1</th>
                    <td>kpi 1.0</td>
                    <td><a href="{{ route('report') }}">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Laboriosam nulla voluptas adipisci cupiditate sit dolores.</a></td>
                    <td>10</td>
                    <td>10</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <th scope="row">stg 2</th>
                    <td>kpi 1.0</td>
                    <td><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolorum, quam
                            placeat eligendi dicta quis possimus enim quia perferendis ipsa!</a></td>
                    <td>10</td>
                    <td>10</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <th scope="row">stg 3</th>
                    <td>kpi 1.0</td>
                    <td><a href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus
                            consequatur est excepturi nihil? Veniam hic, necessitatibus consequuntur officia facere
                            possimus, consequatur neque repellendus velit reprehenderit unde sapiente ipsam temporibus
                            excepturi nam aliquam facilis nemo dicta ea culpa omnis nesciunt assumenda. Eius beatae
                            aliquam voluptatibus, repellat ea nostrum blanditiis delectus vero?</a></td>
                    <td>10</td>
                    <td>10</td>
                    <td>0</td>
                    <td>0</td>
                </tr>


            </tbody>
        </table>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('table').DataTable({
                pageLength: 5,
                lengthMenu: [
                    [3, 5, 10, 15, 20],
                    [3, 5, 10, 15, 20]
                ],
                dom: 'Blfrtip',

            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    {{-- <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script> --}}
@endsection
