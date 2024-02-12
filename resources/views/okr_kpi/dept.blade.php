@extends('/layout/layout')
@section('title', 'Dept')
@section('header')
    <div class="fs-5">
        <span class="border-end">
            NIMT OKR & KPI ประจำปี 2566
        </span>
        <span class="ps-2">
            ฝก. กน. อบต. กยก. คสช.
        </span>
    </div>
@endsection
@section('style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
    <style>
        .dt-buttons {
            border: red;
        }
    </style>
@endsection
@section('content')
    <div class="p-3">
        <h4>แสดงข้อมูล : ฝ่ายนโยบายและยุทธสาสตร์</h4>
        <div class="overflow-x-auto">
            <table class="table display" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">ชื่อโครงการ</th>
                        <th scope="col">ผู้ดูแลโครงการ</th>
                        <th scope="col">งบจาก</th>
                        <th scope="col">จบประเภท</th>
                        <th scope="col">งบประมาณ</th>
                        <th scope="col">หน่วยงาน</th>
                        <th scope="col">แก้ไข</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><a href="#" class="text-black">โปรเจค</a></th>
                        <td><a href="#" class="text-black">นันทกร</a></td>
                        <td>มว</td>
                        <td>ลงทุน</td>
                        <td>1150</td>
                        <td>กฟอ.</td>
                        <td>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_project">
                                <svg class="d-flex align-items-center" xmlns="http://www.w3.org/2000/svg" width="20"
                                    height="20" viewBox="0 0 24 24">
                                    <path fill="#000000"
                                        d="m11.4 18.161l7.396-7.396a10.289 10.289 0 0 1-3.326-2.234a10.29 10.29 0 0 1-2.235-3.327L5.839 12.6c-.577.577-.866.866-1.114 1.184a6.556 6.556 0 0 0-.749 1.211c-.173.364-.302.752-.56 1.526l-1.362 4.083a1.06 1.06 0 0 0 1.342 1.342l4.083-1.362c.775-.258 1.162-.387 1.526-.56c.43-.205.836-.456 1.211-.749c.318-.248.607-.537 1.184-1.114m9.448-9.448a3.932 3.932 0 0 0-5.561-5.561l-.887.887l.038.111a8.754 8.754 0 0 0 2.092 3.32a8.754 8.754 0 0 0 3.431 2.13z">
                                    </path>
                                </svg>
                            </a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>
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
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
@endsection
