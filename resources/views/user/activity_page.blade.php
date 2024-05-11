@extends('/layout/layout')

@section('title', 'กิจกรรม')

@section('header')
    <div class="fs-5">กิจกรรม</div>
    <link href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        #money {
            display: none;
        }

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
            <div class="col-3 btn btn-warning text-white mb-3" id="btn" onclick="switch_plan()">แผนเงิน</div>
            <div class="col-3 btn btn-success mb-3" id="btn" onclick="window.print()">PDF</div>
            <div class="col-3 btn btn-success mb-3" id="btn-csv-money" onclick="exportToCSV('table')">CSV</div>
        </div>
    </div>
    <div class="overflow-x-hidden" id="table-container">
        <div class="d-flex justify-content-center w-100">
            <canvas id="sCurveChart" class="w-100 h-100" style="max-width:1500px;max-height:500px;"></canvas>
        </div>
        <div id="work">
            work
            <table class="table" id="table">
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
                        <th nowrap> ยุทธศาสตร์/โครงการ/กิจกรรม</th>
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
                        <td>subtest</td>
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
                            ssss
                        </td>
                        <td contenteditable="true">
                            ssss
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="money">
            money
            <table class="table" id="table">
                <thead>
                    <tr>
                        <th>
                            <a href="#" class="d-flex align-items-center text-decoration-none text-black"
                                data-bs-toggle="modal" data-bs-target="#add_plan">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40"
                                    viewBox="0 0 48 48">
                                    <circle cx="24" cy="24" r="21" fill="#4CAF50"></circle>
                                    <g fill="#fff">
                                        <path d="M21 14h6v20h-6z"></path>
                                        <path d="M14 21h20v6H14z"></path>
                                    </g>
                                </svg>
                            </a>
                        </th>
                        <th nowrap> ยุทธศาสตร์/โครงการ/กิจกรรม</th>
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
                        <td>subtest</td>
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
                            ssss
                        </td>
                        <td contenteditable="true">
                            ssss
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
    <script>
        new DataTable('.table', {});

        function switch_plan() {
            const work = document.getElementById('work');
            const money = document.getElementById('money');
            if (work.style.display === "none") {
                work.style.display = "block";
                money.style.display = "none";
                document.getElementById('btn').classList.add('btn-warning');
                document.getElementById('btn').classList.remove('btn-primary');
                document.getElementById('btn').innerHTML = 'แผนเงิน';
            } else {
                work.style.display = "none";
                money.style.display = "block";
                document.getElementById('btn').classList.remove('btn-warning');
                document.getElementById('btn').classList.add('btn-primary');
                document.getElementById('btn').innerHTML = 'แผนงาน';
            }
        }

        function exportToCSV(plan) {
            const table = document.getElementById('table');
            const rows = Array.from(table.querySelectorAll('tr'));
            const csvContent = rows.map(row => Array.from(row.children).map(cell => `"${cell.textContent.trim()}"`).join(
                ',')).join('\n');
            const blob = new Blob(["\ufeff", csvContent], {
                type: 'text/csv;charset=utf-8;'
            }); // Set UTF-8 encoding
            const link = document.createElement('a');
            link.href = URL.createObjectURL(blob);
            link.setAttribute('download', 'table-export.csv');
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
                labels: ['ต.ค.','พ.ย.','ธ.ค.','ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.'],
                datasets: [{
                        label: 'Work Progress',
                        data: [10, 40, 10, 90, 10, 40, 10, 40, 10, 90, 10, 40, 10],
                        fill: false,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        tension: 0.4
                    },
                    {
                        label: 'Money Progress',
                        data: [0, 40, 10, 50, 20, 30, 60, 70, 50, 40, 30, 70, 100],
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
