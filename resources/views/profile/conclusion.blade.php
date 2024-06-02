@extends('/layout/layout')
@section('title', 'สรุปค่างาน')
@section('header')
    <div class="fs-5 mx-2">
        สรุปค่างาน
    </div>
@endsection
@section('style')
    <style>
        .conclusion-box {
            box-shadow: rgba(0, 0, 0, 0.24) 0px 1px 5px,
                rgba(0, 0, 0, 0.24) 0px 1px 5px;
        }
    </style>
@endsection
@section('content')
    <div class="overflow-x-auto conclusion-box p-3  rounded-3">
        <div class="w-100 d-flex align-items-center">
            <div class="dropdown fs-6 d-flex align-items-center">
                <span class="fs-5 mb-2 me-2">ปีงบประมาณ</span>
                <select class="form-select p-0 px-5 h-50" id="Year" style="padding: 0rem 1.7rem 0rem 1rem !important;"
                    name="Year">

                </select>
                {{-- <label for="floatingSelect">ปีงบประมาณ</label> --}}
            </div>

        </div>
        <table class="table display table-striped" zle="width:100%">
            <thead>
                <tr>
                    <th style="width: 70%">โครงการ</th>
                    <th style="width: 10%">ชั่วโมง</th>
                    <th style="width: 10%">รอบที่ 1</th>
                    <th style="width: 10%">รอบที่ 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">Lorem ipsum dolor sit amet consectetur adipisicingelit.
                        Laboriosam nulla voluptas adipisci cupiditate sit dolores.</td>
                    <td>10</td>
                    <th>10</th>
                    <td>10</td>
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
