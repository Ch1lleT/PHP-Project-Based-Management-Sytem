@extends('/layout/layout')

@section('title', 'รายการงบประมาณ')

@section('header')
    <div class="fs-5">รายการงบประมาณ</div>
@endsection

@section('content')
    {{-- start modal section --}}
    <div class="modal fade" id="add_fiscal" tabindex="-1" aria-labelledby="add_fiscalModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="add_fiscalModalLabel">เพิ่มรายการงบประมาณ</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="w-100">
                        <div class="row">
                            <label for="plan" class="col-sm-2 col-form-label p-0 pt-2 text-end">ประเภทแผนการ</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select"
                                    name="target_plan">
                                    <option selected>เลือกแผนการ</option>
                                    <option value="ผลผลิต">ผลผลิต</option>
                                    <option value="ผลลัพธ์">ผลลัพธ์</option>
                                    <option value="ผลกระทบ">ผลกระทบ</option>
                                </select>
                            </div>
                            <label for="name" class="col-sm-2 col-form-label p-0 pt-2 text-end">ชื่อ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="plan_name">
                            </div>
                            <label for="name" class="col-sm-2 col-form-label p-0 pt-2 text-end">ชื่อแผนการ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="plan_name">
                            </div>
                            <label for="name" class="col-sm-2 col-form-label p-0 pt-2 text-end">ชื่อแผนการ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="plan_name">
                            </div>
                            <label for="name" class="col-sm-2 col-form-label p-0 pt-2 text-end">ผู้ดูแล</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="plan_name">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal section --}}
    <div>
        <div class="bg-secondary p-2 text-white d-flex align-items-center w-100 justify-content-between mb-3">
            <p class="m-0 fs-5">รายการงบประมาณ</p>
            <a href="#" data-bs-toggle="modal" data-bs-target="#add_fiscal">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" viewBox="0 0 48 48">
                    <circle cx="24" cy="24" r="21" fill="#4CAF50"></circle>
                    <g fill="#fff">
                        <path d="M21 14h6v20h-6z"></path>
                        <path d="M14 21h20v6H14z"></path>
                    </g>
                </svg>
            </a>
        </div>
        <table id="myTable" class="table display">
            <thead>
                <th>
                    ชื่อยุทธศาสตร์
                </th>
                <th>
                    งบดำเนินการ/งบลงทุน
                </th>
                <th>
                    จำนวน
                </th>
                <th>
                    ผู้ดูแล
                </th>
                <th>
                    แก้ไข
                </th>
                <th>
                    ลบ
                </th>
            </thead>
            <tbody>
                <tr>
                    <td>
                        ยุทธศาสตร์ที่ 1
                    </td>
                    <td>
                        <div class="">
                            ดำเนินการ
                        </div>
                        <div class="">
                            ดำเนินการ
                        </div>
                    </td>
                    <td>
                        <div class="">
                            5000
                        </div>
                        <div class="">
                            5000
                        </div>
                    </td>
                    <td>
                        ระกำงำเงย
                    </td>
                    <td>
                        <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#edit_target">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 12 12">
                                <path fill="#000000"
                                    d="M10.443 1.56a1.914 1.914 0 0 0-2.707 0l-.55.551a.506.506 0 0 0-.075.074l-5.46 5.461a.5.5 0 0 0-.137.255l-.504 2.5a.5.5 0 0 0 .588.59l2.504-.5a.5.5 0 0 0 .255-.137l6.086-6.086a1.914 1.914 0 0 0 0-2.707M7.502 3.21l1.293 1.293L3.757 9.54l-1.618.324l.325-1.616zm2 .586L8.209 2.502l.234-.234A.914.914 0 1 1 9.736 3.56z">
                                </path>
                            </svg>
                        </a>
                    </td>
                    <td>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill: rgb(255, 0, 0);transform: ;msFilter:;">
                                <path
                                    d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                </path>
                                <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                            </svg>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        ยุทธศาสตร์ที่ 1
                    </td>
                    <td>
                        <div class="">
                            ดำเนินการ
                        </div>
                        <div class="">
                            ดำเนินการ
                        </div>
                    </td>
                    <td>
                        <div class="">
                            5000
                        </div>
                        <div class="">
                            5000
                        </div>
                    </td>
                    <td>
                        ระกำงำเงย
                    </td>
                    <td>
                        <a href="#" class="text-decoration-none" data-bs-toggle="modal"
                            data-bs-target="#edit_target">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 12 12">
                                <path fill="#000000"
                                    d="M10.443 1.56a1.914 1.914 0 0 0-2.707 0l-.55.551a.506.506 0 0 0-.075.074l-5.46 5.461a.5.5 0 0 0-.137.255l-.504 2.5a.5.5 0 0 0 .588.59l2.504-.5a.5.5 0 0 0 .255-.137l6.086-6.086a1.914 1.914 0 0 0 0-2.707M7.502 3.21l1.293 1.293L3.757 9.54l-1.618.324l.325-1.616zm2 .586L8.209 2.502l.234-.234A.914.914 0 1 1 9.736 3.56z">
                                </path>
                            </svg>
                        </a>
                    </td>
                    <td>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill: rgb(255, 0, 0);transform: ;msFilter:;">
                                <path
                                    d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                </path>
                                <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                            </svg>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        ยุทธศาสตร์ที่ 1
                    </td>
                    <td>
                        <div class="">
                            ดำเนินการ
                        </div>
                        <div class="">
                            ดำเนินการ
                        </div>
                    </td>
                    <td>
                        <div class="">
                            5000
                        </div>
                        <div class="">
                            5000
                        </div>
                    </td>
                    <td>
                        ระกำงำเงย
                    </td>
                    <td>
                        <a href="#" class="text-decoration-none" data-bs-toggle="modal"
                            data-bs-target="#edit_target">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 12 12">
                                <path fill="#000000"
                                    d="M10.443 1.56a1.914 1.914 0 0 0-2.707 0l-.55.551a.506.506 0 0 0-.075.074l-5.46 5.461a.5.5 0 0 0-.137.255l-.504 2.5a.5.5 0 0 0 .588.59l2.504-.5a.5.5 0 0 0 .255-.137l6.086-6.086a1.914 1.914 0 0 0 0-2.707M7.502 3.21l1.293 1.293L3.757 9.54l-1.618.324l.325-1.616zm2 .586L8.209 2.502l.234-.234A.914.914 0 1 1 9.736 3.56z">
                                </path>
                            </svg>
                        </a>
                    </td>
                    <td>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill: rgb(255, 0, 0);transform: ;msFilter:;">
                                <path
                                    d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                </path>
                                <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                            </svg>
                        </a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
    <script>
        new DataTable('#myTable');
    </script>
@endsection
