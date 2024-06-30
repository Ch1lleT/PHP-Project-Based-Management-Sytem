@extends('/layout/layout')
@section('title', 'สรุปประสิทธิภาพการทำงาน')
@section('header')
    <div class="fs-5 mx-2">
        ประสิทธิภาพการกำเนินงานตามแผน ประจำปี 2567
    </div>
@endsection
@section('style')
    <style>
        @media screen and (max-width: 700px) {
            #table-flow {
                overflow: auto !important;
            }
        }
        .effic-container{
            padding: 1rem;
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 1px 5px,
                rgba(0, 0, 0, 0.24) 0px 1px 5px;
        }
    </style>
@endsection
@section('content')

    <div class="effic-container overflow-x-hidden" id="table-flow">
        <table class="table display " id="table_report">
            <thead>
                <tr>
                    <th style="width: 50px">รูปโปรไฟล์</th>
                    <th style="width: 70%">ชื่อ - นามกุล</th>
                    <th style="width: 50px">รอบที่ 1</th>
                    <th style="width: 50px">รอบที่ 2</th>
                    <th style="width: 50px">ชั่วโมง/ปี</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">
                        <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="}">
                            <img style="width: 30px" id="preview-img" class="rounded-circle object-fit-cover"
                                src="{{ asset('image/defult-profile/profile.svg') }}">
                        </a>
                    </th>
                    <td>name-lastname</td>
                    </td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function() {
            $('table').DataTable({
                pageLength: 5,
                lengthMenu: [
                    [3, 5, 10, 15, 20],
                    [3, 5, 10, 15, 20]
                ],
                // dom: 'Blfrtip',

            });
        });
    </script>
@endsection
