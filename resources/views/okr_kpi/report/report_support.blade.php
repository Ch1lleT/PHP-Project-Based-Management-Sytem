@extends('/layout/layout')

@section('title', 'Report Support')

@section('header')
    <span class="test_text fs-5 mx-2 w-50-">รายงานฝ่ายสนับสนุน</span>
@endsection
@section('style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
    {{-- <style>
        tr td a{
            color: black;
        }
    </style> --}}
@endsection
@section('content')
    <div class="">
        <h4 class="mx-2">แสดงข้อมูล : ฝ่ายนโยบายและยุทธสาสตร์</h4>
        <div class="w-100 d-flex align-items-center">
            <div class="dropdown fs-6 d-flex align-items-center " style="width: 200px">
                <span class="fs-5 mx-2 w-50">หน่วยงาน</span>
                <select class="form-select p-0 px-5 h-50 w-50" id="floatingSelect"
                    style="padding: 0rem 1.7rem 0rem 1rem !important;">
                    <option value="1" selected>มว.</option>
                    <option value="2">มว.</option>
                    <option value="3">มว.</option>
                </select>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="table display" style="width:100%" id="table_report">
                <thead>
                    <tr>
                        <th scope="col">Catagory</th>
                        <th scope="col">No.</th>
                        <th scope="col">T(OKR)</th>
                        <th scope="col">A(OKR)</th>
                        <th scope="col">100%</th>
                        <th scope="col">>100%</th>
                        <th scope="col">T(KPI)</th>
                        <th scope="col">A(KPI)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">stg 1</th>
                        <td>kpi 1.0</td>
                        <td>10</td>
                        <td>10</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
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
