@extends('/layout/layout')

@section('title', 'กิจกรรม')

@section('header')
    <div class="fs-5">กิจกรรม</div>
@endsection
@section('content')
    <div>
        <table class="table">
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
                    <th>ยุทธศาสตร์/โครงการ/กิจกรรม</th>
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
                    <th>แผน ผล</th>
                    <th>%</th>
                    <th>%</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>subtest</td>
                    <td>subtest</td>
                    <td>subtest</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
