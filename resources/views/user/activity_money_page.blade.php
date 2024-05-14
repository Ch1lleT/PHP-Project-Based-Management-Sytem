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
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-4">
            <a href="{{ route('activity_work_page') }}" class="col-3 btn btn-primary text-white mb-3" type="button"
                id="btn" onclick="switch_plan()">แผนงาน</a>
            <div class="col-3 btn btn-success mb-3" id="btn" onclick="window.print()">PDF</div>
            <div class="col-3 btn btn-success mb-3" id="btn-csv-money" onclick="exportToCSV_M()">CSV</div>
        </div>
    </div>
    <div class="d-flex justify-content-center w-100">
        <div style="width: 20%;height:58px;">
            <select class="form-select p-0 px-3" style="height: 70%;">
                <option value="1" selected>มกราคม</option>
                <option value="2">กุมภาพันธ์</option>
                <option value="3">มีนาคม</option>
            </select>
        </div>
    </div>
    <div class="overflow-x-hidden" id="table-container">
        <table class="table display" id="tableM">
            <thead>
                <tr>
                    <th>
                        <a href="#" class="d-flex align-items-center text-decoration-none text-black"
                            data-bs-toggle="modal" data-bs-target="#add_plan">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" viewBox="0 0 48 48">
                                <circle cx="24" cy="24" r="21" fill="#4CAF50"></circle>
                                <g fill="#fff">
                                    <path d="M21 14h6v20h-6z"></path>
                                    <path d="M14 21h20v6H14z"></path>
                                </g>
                            </svg>
                        </a>
                    </th>
                    <th nowrap>ยุทธศาสตร์/โครงการ/กิจกรรม/</th>
                    <th nowrap>รวม แผน/ผกพัน/ผล</th>
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
                    <th nowrap>Edit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>subtest</td>
                    <td>subtest</td>
                    <td>subtest</td>
                    <td>
                        <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12 border-bottom" contenteditable="true">s</div>
                            <div class="col-12" contenteditable="true">s</div>
                        </div>
                    </td>

                </tr>
            </tbody>
            <tfoot>
                <tr class="table-primary">
                    <th colspan="2">รวม</th>
                    <td>แผน</td>
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
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th colspan="2"></th>
                    <td>ผูกพัน</td>
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
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th colspan="2"></th>
                    <td>ผล</td>
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
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="table-danger">
                    <th colspan="2">รวม</th>
                    <td>แผน</td>
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
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th colspan="2"></th>
                    <td>ผูกพัน</td>
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
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th colspan="2"></th>
                    <td>ผล</td>
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
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="table-warning">
                    <th colspan="2">รวม</th>
                    <td>แผน</td>
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
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th colspan="2"></th>
                    <td>ผูกพัน</td>
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
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th colspan="2"></th>
                    <td>ผล</td>
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
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="d-flex justify-content-center w-100">
        <canvas id="sCurveChart" class="w-100 h-100" style="max-width:1000px;max-height:500px;"></canvas>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>

    <script>
        new DataTable('table.display', {
            paging: false,
            scrollCollapse: true,
            scrollY: '350px'

        });

        function exportToCSV_M() {
            const table = document.getElementById('tableM');
            const rows = Array.from(table.querySelectorAll('tr'));
            const csvContent = rows.map(row => Array.from(row.children).map(cell => `"${cell.textContent.trim()}"`).join(
                ',')).join('\n');
            const blob = new Blob(["\ufeff", csvContent], {
                type: 'text/csv;charset=utf-8;'
            });
            const link = document.createElement('a');
            link.href = URL.createObjectURL(blob);
            link.setAttribute('download', 'table-Money.csv');
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
