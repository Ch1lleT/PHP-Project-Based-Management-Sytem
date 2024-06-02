@extends('/layout/layout')
@section('title', 'อนุมัติปิด')
@section('header')
    <div class="fs-5 mx-2">
        อนุมัติปิด
    </div>
    <style>
        .conclusion-box {
            box-shadow: rgba(0, 0, 0, 0.24) 0px 1px 5px,
                rgba(0, 0, 0, 0.24) 0px 1px 5px;
        }
    </style>
@endsection
@section('content')
    <div class="overflow-x-auto conclusion-box p-3  rounded-3">
        <table class="table display table-striped" zle="width:100%">
            <thead>
                <tr>
                    <th style="width: 70%">ชื่อ</th>
                    <th style="width: 10%">ลำดับ</th>
                    <th style="width: 10%">ยอมรับ</th>
                    <th style="width: 10%">ปฏิเสธ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">Lorem ipsum dolor sit amet consectetur adipisicingelit.
                        Laboriosam nulla voluptas adipisci cupiditate sit dolores.</td>
                    <td>
                        <p class="btn btn-warning fw-bold"> 
                            โครงการ
                        </p>
                    </td>
                    <th>
                        <button class="btn btn-success">Accept</button>
                    </th>
                    <td>
                        <button class="btn btn-danger">Reject</button>
                    </td>
                </tr>
               
                <tr>
                    <td scope="row">Lorem ipsum dolor sit amet consectetur adipisicingelit.
                        Laboriosam nulla voluptas adipisci cupiditate sit dolores.</td>
                    <td>
                        <p class="btn btn-primary fw-bold"> 
                            กิจกรรม
                        </p>
                    </td>
                    <th>
                        <button class="btn btn-success">Accept</button>
                    </th>
                    <td>
                        <button class="btn btn-danger">Reject</button>
                    </td>
                </tr>
               
            </tbody>
        </table>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        var table = $('table.display').DataTable({
            pageLength: 5,
            lengthMenu: [
                [3, 5, 10, 15, 20],
                [3, 5, 10, 15, 20]
            ]
        })
    </script>
@endsection
