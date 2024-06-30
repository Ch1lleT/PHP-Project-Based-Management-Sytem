@extends('/layout/layout')

@section('title', 'เพิ่มโปรเจ็ค')
@section('header')
    <div class="fs-5">เพิ่มโครงการ</div>
@endsection
@section('style')
    <style>
        .form {
            box-shadow: rgba(0, 0, 0, 0.24) 0px 1px 5px,
                rgba(0, 0, 0, 0.24) 0px 1px 5px;
        }
    </style>
@endsection

@section('content')
    <form action="">
        <div class="row row-cols-auto px-3 gap-3">
            <div class="col-12 col-lg-6 form rounded-3 p-3">
                <div class="mb-1">
                    <label for="name" class="col-form-label">ชื่อโครงการ</label>
                    <input type="text" class="form-control" id="name" name="project_name">
                </div>
                <div class="mb-1">
                    <label for="stg" class="col-form-label">ยุทธศาสตร์</label>
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option value="1" selected>STG1</option>
                        <option value="2">STG2</option>
                        <option value="3">STG3</option>
                    </select>
                </div>
                <div class="mb-1">
                    <label for="name" class=" col-form-label">ประเภทโครงการ</label>
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option value="ผลลัพธ์" selected>ผลลัพธ์</option>
                        <option value="ผลผลิต">ผลผลิต</option>
                        <option value="ผลกระทบ">ผลกระทบ</option>
                    </select>
                    <select class="form-select mt-1" id="floatingSelect" aria-label="Floating label select example">
                        <option value="1" selected>เปิดร้านข้าวมันไก่</option>
                        <option value="2">เปิดร้านข้าวขาหมู</option>
                        <option value="3">เปิดร้านก๋วยเตี๋ยว</option>
                    </select>
                </div>
                <div class="mb-1">
                    <label for="balance" class=" col-form-label">งบประมาณ</label>
                    <input type="number" class="form-control" id="balance" name="balance">
                </div>
                <div class="mb-1">
                    <label for="budget_type" class=" col-form-label">ประเภทงบ</label>
                    <select class="form-select" id="budget_type" name="budget_type"
                        aria-label="Floating label select example">
                        <option value="งบลงทุน" selected>งบลงทุน</option>
                        <option value="งบดำเนินงาน">งบดำเนินงาน</option>
                    </select>
                </div>
                <div class="mb-1">
                    <label for="budget_source" class=" col-form-label">แหล่งทุน</label>
                    <input type="text" class="form-control" id="balance" name="balance">
                </div>
            </div>
            <div class="col-12 col-lg form rounded-3 p-3">
                <div class="mb-1">
                    <label for="name" class=" col-form-label">หน่วยงาน</label>
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-1">
                    <label for="supervisor" class=" col-form-label">Supervisor</label>
                    <select class="form-select" id="supervisor" name="supervisor"
                        aria-label="Floating label select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-1">
                    <label for="executive" class=" col-form-label">ผู้บริหารกำกับดูแล</label>
                    <select class="form-select" id="executive" name="executive" aria-label="Floating label select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mt-2 d-flex gap-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="s-curve" id="s-curve">
                        <label class="form-check-label" for="s-curve">
                            s-curve
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="kpi" id="kpi">
                        <label class="form-check-label" for="kpi">
                            kpi
                        </label>
                    </div>
                </div>
                <div class="h-50 d-flex justify-content-end align-items-end">
                    <button class="btn btn-success">Create</button>
                </div>
            </div>
        </div>
        <div class="row row-cols-auto px-3 mt-3 gap-3">
            <div class="col form rounded-3 p-3 ">
                <div class="row align-items-center mb-3">
                    <div class="col-auto">
                        <div class="d-flex justify-content-end align-items-center">เพิ่มผู้เข้าร่วมโครงการ</div>
                    </div>
                    <div class="col-4">
                        <input type="text" class="form-control" name="search" id="search"
                            placeholder="Search...">
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary" type="submit">เพิ่ม</button>
                    </div>
                    </ddiv>
                    <table class="table display">
                        <thead>
                            <th style="width: 30px">No.</th>
                            <th style="width: 30%">ชื่อ</th>
                            <th style="width: 70%">นามสกุล</th>
                            <th style="width: 30px">edit</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Test</td>
                                <td>Test</td>
                                <td>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40"
                                            height="40" viewBox="0 0 32 32">
                                            <path fill="#FC0005"
                                                d="M7.219 5.781L5.78 7.22L14.563 16L5.78 24.781l1.44 1.439L16 17.437l8.781 8.782l1.438-1.438L17.437 16l8.782-8.781L24.78 5.78L16 14.563z">
                                            </path>
                                        </svg></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- <div class="text-end my-3">
            <button class="btn btn-success">บันทึก</button>
        </div> --}}

    </form>
    <script>
        var table = $('table.display').DataTable({
            pageLength: 5,
            lengthMenu: [
                [3, 5, 10, 15, 20],
                [3, 5, 10, 15, 20]
            ]
        })
    </script>
@endsection
