@extends('/layout/layout')

@section('title', 'กิจกรรม')

@section('header')
    <div class="fs-5">กิจกรรม</div>
    <link href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        @media print {
            body * {
                visibility: hidden;
            }

            #table-container,
            #table-container * {
                visibility: visible;
            }

            #table-container {
                position: absolute;
                left: 0;
                top: 0;
            }
        }

        .activity_title,
        .activity_table,
        .graph {
            box-shadow: rgba(0, 0, 0, 0.24) 0px 1px 5px,
                rgba(0, 0, 0, 0.24) 0px 1px 5px;
        }
    </style>
@endsection
@section('content')
    {{-- Modal Secsion --}}
    {{-- Add Activity --}}
    <div class="modal fade" id="add_activity" tabindex="-1" aria-labelledby="add_activity" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="add_activity">เพิ่มกิจกรรม สำหรับรายงานเดือนมกราคม</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="">
                    <div class="modal-body">
                        <div class="row">
                            <label for="activity_modal" class="col-3 text-end">กิจกรรม :</label>
                            <textarea type="text" id="activity_modal" name="activity_modal" class="form-control d-inline-block col-8"></textarea>
                        </div>
                        <div class="row mt-3">
                            <label for="sub_activity" class="col-3 text-end">ภายใต้ :</label>
                            <select name="sub_activity" id="" class="form-select col-8">
                                <option value="" selected>--ไม่มี--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                        <div class="row mt-3">
                            <label for="weight" class="col-3 text-end">น้ำหนัก :</label>
                            <div class="col-8 p-0">
                                <input type="text" class="form-control">
                                <div class="form-check m-1">
                                    <input class="form-check-input" type="checkbox" value="" id="Procurement">
                                    <label class="form-check-label" for="Procurement">
                                        จัดซื้อจัดจ้าง
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success">Add</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    {{-- Show Detail --}}
    <div class="modal fade" id="show_detail" tabindex="-1" aria-labelledby="show_detail" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="show_detail">คำชี้แจง</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="">
                    <div class="modal-body">
                        <p name="detail" id="detail" contenteditable="true">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui dolore perspiciatis eaque
                            reprehenderit nisi cumque enim quia pariatur, facere mollitia.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    {{-- Modal Secsion --}}
    <div class="w-100  fs-5 activity_title rounded-3 p-3">
        <div style="width:100%;">
            ตาราง แผน / ผลการดำเนินงานตามแผนปฏิบัติการ ประจำปีงบประมาณ พ.ศ. 2567
            โครงการ ผลผลิตการพัฒนาระบบมาตรวิทยา
            (การเป็นหน่วยงานหลักในการเปรียบเทียบผลการวัดภายในประเทศ/การสนับสนุนกิจกรรมของชมรมมาตรวิทยาสาขาต่างๆ) 6702201
        </div>
        <div class="row mt-2">
            <div class="col-12 d-flex align-items-center">
                <a href="{{ route('activity_money_page') }}" class="btn btn-warning text-white  me-2 btn-custom"
                    type="button" id="btn" onclick="switch_plan()">แผนเงิน</a>
                <button class="btn btn-success  me-2 btn-custom" id="btn" onclick="window.print()">PDF</button>
                <button class="btn btn-success  me-2 btn-custom" id="btn-csv-work" onclick="exportToCSV_W()">CSV</button>
                <div class="" style="width: auto;">
                    <select class="form-select" style="height: 100%;">
                        <option value="1" selected>มกราคม</option>
                        <option value="2">กุมภาพันธ์</option>
                        <option value="3">มีนาคม</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="activity_table rounded-3 p-3 mt-3 overflow-x-auto" id="table-container">
        <table class="table display " id="tableW" style="width: 100%;">
            <thead>
                <tr>
                    <th>
                        <a href="#" class="d-flex align-items-center text-decoration-none text-black"
                            data-bs-toggle="modal" data-bs-target="#add_activity">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30" viewBox="0 0 48 48">
                                <circle cx="24" cy="24" r="21" fill="#4CAF50"></circle>
                                <g fill="#fff">
                                    <path d="M21 14h6v20h-6z"></path>
                                    <path d="M14 21h20v6H14z"></path>
                                </g>
                            </svg>
                        </a>
                    </th>
                    <th nowrap>ยุทธศาสตร์/โครงการ/กิจกรรม/</th>
                    <th>WF(sum)</th>
                    <th>WF(sub)</th>
                    <th>ต.ค.</th>
                    <th>พ.ย.</th>
                    <th>ธ.ค.</th>
                    <th>ม.ค.</th>
                    <th>ก.พ.</th>
                    <th>มี.ค.</th>
                    <th>เม.ย.</th>
                    <th>พ.ค.</th>
                    <th>มิ.ย.</th>
                    <th>ก.ค.</th>
                    <th>ส.ค.</th>
                    <th>ก.ย.</th>
                    <th nowrap>แผน ผล</th>
                    <th>%</th>
                    <th nowrap>ผู้รับผิดชอบ</th>
                    <th nowrap>คำชี้แจง</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>subtest</td>
                    <td>subtest</td>
                    <td>subtest</td>
                    <td>
                         <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                         <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                         <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                         <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                         <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                         <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                         <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                         <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                         <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                         <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                         <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                         <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                         <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                         <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                        lorem
                    </td>
                    <td>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#show_detail">
                            <i class='bx bxs-comment-detail'></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>subtest</td>
                    <td>subtest</td>
                    <td>subtest</td>
                    <td>
                         <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                         <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                         <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                         <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                         <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                         <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                         <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                         <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                         <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                         <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                         <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                         <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                         <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                         <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                        lorem
                    </td>
                    <td>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#show_detail">
                            <i class='bx bxs-comment-detail'></i>
                        </a>
                    </td>
                </tr>
                
            </tbody>
            <tfoot>
                <tr class="table-primary">
                    <th colspan="4" class="text-end ">
                        แผนงานถ่วงน้ำหนัก
                    </th>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>100</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="table-danger">
                    <th colspan="4" class="text-end">
                        ผลการดำเนินงาน
                    </th>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>100</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="table-success">
                    <th colspan="4" class="text-end">
                        แผนการใช้จ่ายเงิน
                    </th>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>100</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="table-info">
                    <th colspan="4" class="text-end">
                        แผนการใข้จ่ายจริง
                    </th>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>100</td>
                    <td></td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="d-flex justify-content-center graph  rounded-3 p-3 mt-3">
        <canvas id="sCurveChart" class="w-100 h-100" style="max-width:1000px;max-height:500px;"></canvas>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>

    <script>
        new DataTable('table.display', {
            paging: false,
            scrollCollapse: true,
            // scrollY: '350px',
            ordering: false

        });

        function exportToCSV_W() {
            const table = document.getElementById('tableW');
            const rows = Array.from(table.querySelectorAll('tr'));
            const csvContent = rows.map(row => Array.from(row.children).map(cell => `"${cell.textContent.trim()}"`).join(
                ',')).join('\n');
            const blob = new Blob(["\ufeff", csvContent], {
                type: 'text/csv;charset=utf-8;'
            });
            const link = document.createElement('a');
            link.href = URL.createObjectURL(blob);
            link.setAttribute('download', 'table-Work.csv');
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }
    </script>

    <script>
        const ctx = document.getElementById('sCurveChart').getContext('2d');
        const sCurveChart = new Chart(ctx, {
            type: 'line',
            data: {
                // labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                labels: ['ต.ค.', 'พ.ย.', 'ธ.ค.', 'ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.',
                    'ก.ย.'
                ],
                datasets: [{
                        label: 'Work Progress',
                        data: [10, 40, 10, 90, 10, 40, 10, 10, 10, 2, 5, 6],
                        fill: false,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        tension: 0.4
                    },
                    {
                        label: 'Money Progress',
                        data: [40, 10, 40, 0, 40, 00, 40, 5, 6, 2, 80, 100],
                        fill: false,
                        borderColor: 'rgb(192, 75, 91)',
                        tension: 0.4
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        suggestedMax: 100
                    }
                }
            }
        });
    </script>
@endsection
