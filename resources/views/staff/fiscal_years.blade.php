@extends('/layout/layout')

@section('title', 'ปีงบประมาณ')
@section('style')
    <style>
        .my-table tbody tr td {
            border: none;
        }

        .my-table {
            display: flex;
        }

        .my-table td:nth-child(2) {
            flex-grow: 1;
        }

        .my-table td:nth-child(1),
        .my-table td:nth-child(3) {
            flex-shrink: 0;
        }

        .edit:hover,
        .del:hover,
        .select:hover {
            cursor: pointer;
        }

        .table-border {
            border: 3px solid rgb(230, 230, 230);
            border-radius: 5px;
        }

        @media screen and (max-width: 992px) {
            .plan {
                overflow: auto !important;
            }
        }
    </style>
@endsection
@section('header')
    <div class="w-100 d-flex align-items-center">
        <div class="dropdown fs-6 d-flex align-items-center">
            <span class="fs-5 mx-2">ปีงบประมาณ</span>
            <select onchange="Fis_Year(this.value)" class="form-select p-0 px-5 h-50" id="Year"
                style="padding: 0rem 1.7rem 0rem 1rem !important;" name="Year">
                @foreach ($YearAll as $Year)
                    @if (request()->query('year'))
                        <option value="{{ $Year->id }}" {{ $Year->id == request()->query('year') ? 'selected' : '' }}>
                            {{ $Year->year + 543 }}</option>
                    @else
                        <option value="{{ $Year->id }}" {{ $Year->id == date('Y') ? 'selected' : '' }}>
                            {{ $Year->year + 543 }}</option>
                    @endif
                @endforeach
            </select>
            {{-- <label for="floatingSelect">ปีงบประมาณ</label> --}}
        </div>
    </div>
@endsection

@section('content')
    <div class="mb-3">
        <div class="modal fade" id="add_stg" tabindex="-1" aria-labelledby="add_stg_label" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form onsubmit="event.preventDefault(); Add('Strategy', this.nameSTG.value)">
                        @csrf
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="add_stg_label">เพิ่มยุทธศาสตร์ ปีงบประมาณ :
                                {{ request()->query('year') }}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body row">
                            <div class="mb-3 row ">
                                <label for="nameSTG"
                                    class="col-sm-2 col-form-label p-0 pt-2 text-end">ชื่อยุทธศาสตร์</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nameSTG" name="nameSTG">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-cols-3 gap-2 px-3">
        <div class="col">
            <div id="STGAll" class="row row-cols-3 gap-2 px-3"></div>
        </div>
    </div>

    <div class="modal fade" id="edit_stg" tabindex="-1" aria-labelledby="edit_stgLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form onsubmit="event.preventDefault(); update('Strategy' , this.name.value)">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="edit_stgLabel">แก้ไขชื่อยุทธศาสตร์</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="col-form-label">ชื่อยุทธศาสตร์ ใหม่ :</label>
                            <input type="text" class="form-control" id="name">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save Changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="mx-2 mt-2">
        <div class="row row-cols-auto gap-2">
            <div class="col-12 col-lg  pb-2 rounded-3"
                style="
                    margin: 5px;
                    box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, 
                                rgba(0, 0, 0, 0.24) 0px 1px 2px;">
                <table class="table m-0 my-table" style="padding: 5px;">
                    <tbody>
                        <tr>
                            <td class="fs-5 p-0">
                                {{-- <div style="width: 100px">ยุทธศาสตร์ : </div> --}}
                                <div id="STGName" class="p-0 mp-0"> </div>
                            </td>
                            <td class="fs-5 p-0">

                                {{-- {{$STG[0]->name}} --}}
                                @if (isset($STG))
                                    <a class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#edit_stg">
                                        <i class='bx bx-pencil text-dark'></i>
                                    </a>
                                    <a class="text-decoration-none" onclick="checkDel('Strategy','{{ $STG->stg_id }}')">
                                        <i class='bx bx-trash text-danger'></i>
                                    </a>
                                @endif
                            </td>
                            <td class="px-0 d-flex justify-content-end">

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="mx-2">
        <div class="row row-cols-auto gap-2 my-2 ">
            <div class="col-12 col-lg-6 pb-2 rounded-3"
                style="
                    margin: 5px;
                    box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, 
                                rgba(0, 0, 0, 0.24) 0px 1px 2px;">
                <table class="table m-0 my-table" style="padding: 5px;">
                    <tbody>
                        <tr>
                            <td class="fs-5 px-0">
                                <div style="width: 90px">เป้าหมาย :</div>
                            </td>
                            <td class="fs-5" id="TargetName">
                            </td>
                            <td class="px-0 pt-2" id="AddTarget">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="modal fade " id="add_target" tabindex="-1" aria-labelledby="add_target_label"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <form onsubmit="event.preventDefault(); Add('Target', this.target_name.value)">
                                @csrf
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="add_target_label">เพิ่มเป้า ปีงบประมาณ : 2567</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body row">
                                    <div class="mb-3 row ">
                                        <label for="name" class="col-sm-2 col-form-label p-0 pt-2 text-end">ยุทธศาสตร์
                                            :</label>
                                        <div class="col-sm-10 d-flex align-items-end">
                                            <p class="m-0" id="STG_name">test</p>
                                        </div>
                                    </div>
                                    <div class="mb-3 row ">
                                        <label for="name"
                                            class="col-sm-2 col-form-label p-0 pt-2 text-end">ชื่อเป้าหมาย</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="name"
                                                name="target_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal fade " id="edit_target" tabindex="-1" aria-labelledby="edit_target_label"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <form onsubmit="event.preventDefault(); update('Target', [this.target_name.value , $('#edit_target').data('target_id')])">
                                @method('PUT')
                                @csrf
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="edit_target_label">แก้ไขเป้าหมาย</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body row">
                                    <div class="mb-3 row ">
                                        <label for="name" class="col-sm-2 col-form-label p-0 pt-2 text-end">ยุทธศาสตร์
                                            :</label>
                                        <div class="col-sm-10 d-flex align-items-end">
                                            <p class="m-0" id="nameSTG"></p>
                                        </div>
                                    </div>
                                    <div class="mb-3 row ">
                                        <label for="name"
                                            class="col-sm-2 col-form-label p-0 pt-2 text-end">ชื่อเป้าหมาย</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="name" name="target_name"
                                                value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <table id="TargetAtAll" class="table display" style="width: 100%">
                        <thead>
                            <tr>
                                <th style="width: 40px;">
                                    ลำดับ
                                </th>
                                <th style="width: 70%">
                                    ชื่อเป้าหมาย
                                </th>
                                <th style="width: 30px;">
                                    แก้ไข
                                </th>
                                <th style="width: 30px;">
                                    ลบ
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12 col-lg pb-2 rounded-3"
                style="
                        margin: 5px;
                        box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, 
                                    rgba(0, 0, 0, 0.24) 0px 1px 2px;">

                <table class="table m-0 my-table" style="padding: 5px;">
                    <tbody>
                        <tr>
                            <td class="fs-5 px-0">
                                <div style="width: 90px">แผนการ :</div>
                            </td>
                            <td class="fs-5" id="PlanName"></td>
                            {{-- <td class="fs-5">กรุณาเลือกแผน</td> --}}
                            <td class="px-0 pt-2">
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
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="modal fade " id="add_plan" tabindex="-1" aria-labelledby="add_plan_label"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <form method="POST" onsubmit="event.preventDefault(); update('Plan', this.target_name.value)">
                                @csrf
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="add_plan_label">เพิ่มแผนงาน ปีงบประมาณ : 2567</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body row">
                                    <div class="mb-3 row ">
                                        <div class="mb-3 row ">
                                            <label for="name"
                                                class="col-sm-2 col-form-label p-0 pt-2 text-end">ยุทธศาสตร์
                                                :</label>
                                            <div class="col-sm-10 d-flex align-items-end">
                                                <p class="m-0">{{ isset($STG->name) ? $STG->name : '' }}</p>
                                            </div>
                                        </div>
                                        <div class="mb-3 row ">
                                            <label for="name"
                                                class="col-sm-2 col-form-label p-0 pt-2 text-end">เป้าหมาย
                                                :</label>
                                            <div class="col-sm-10 d-flex align-items-end">
                                                <p class="m-0">
                                                    {{ isset($Target->target_name) ? $Target->target_name : '' }}</p>
                                            </div>
                                        </div>
                                        <label for="name"
                                            class="col-sm-2 col-form-label p-0 pt-2 text-end">ชื่อแผนการ</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="name" name="plan_name">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="type"
                                            class="col-sm-2 col-form-label p-0 pt-2 text-end">ประเภทแผนการ</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" id="type" aria-label="Floating label select"
                                                name="type">
                                                <option selected>เลือกแผนการ</option>
                                                <option value="ผลผลิต">ผลผลิต</option>
                                                <option value="ผลลัพธ์">ผลลัพธ์</option>
                                                <option value="ผลกระทบ">ผลกระทบ</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="edit_plan" tabindex="-1" aria-labelledby="edit_plan_label"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <form method="POST">
                                @method('PUT')
                                @csrf
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="edit_plan_label">แก้ไขแผนงาน</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body row">
                                    <div class="mb-3 row ">
                                        <div class="mb-3 row ">
                                            <label for="name"
                                                class="col-sm-2 col-form-label p-0 pt-2 text-end">ยุทธศาสตร์
                                                :</label>
                                            <div class="col-sm-10 d-flex align-items-end">
                                                <p class="m-0"></p>
                                            </div>
                                        </div>
                                        <div class="mb-3 row ">
                                            <label for="name"
                                                class="col-sm-2 col-form-label p-0 pt-2 text-end">เป้าหมาย
                                                :</label>
                                            <div class="col-sm-10 d-flex align-items-end">
                                                <p class="m-0">

                                                </p>
                                            </div>
                                        </div>
                                        <label for="name"
                                            class="col-sm-2 col-form-label p-0 pt-2 text-end">ชื่อแผนการ</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="name" name="plan_name"
                                                value="">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="plan"
                                            class="col-sm-2 col-form-label p-0 pt-2 text-end">ประเภทแผนการ</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" id="floatingSelect"
                                                aria-label="Floating label select" name="type">
                                                <option selected>เลือกแผนการ</option>
                                                <option value="ผลผลิต">ผลผลิต</option>
                                                <option value="ผลลัพธ์">ผลลัพธ์</option>
                                                <option value="ผลกระทบ">ผลกระทบ</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="overflow-x-hidden plan">
                    <table class="table display" style="width: 100%" id="PlanAll">
                        <thead>
                            <tr>
                                <th style="width: 40px;">
                                    ลำดับ
                                </th>
                                <th style="width:56%">
                                    ชื่อแผนการ
                                </th>
                                <th style="width:20%">
                                    ประเภทแผนการ
                                </th>
                                <th style="width: 30px;">
                                    แก้ไข
                                </th>
                                <th style="width: 30px;">
                                    ลบ
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @if (isset($PlanAtAll) || isset($stg_id))
                                @foreach ($PlanAtAll as $PlanAt)
                                    @if (is_object($PlanAt))
                                        <tr>
                                            <td style="text-align: center; vertical-align: middle;">
                                                {{ $loop->index + 1 }}
                                            </td>
                                            <td>
                                                <a href="{{ route('fiscal_years', ['year' => request()->query('year'), 'stg_id' => request()->query('stg_id'), 'target_id' => request()->query('target_id'), 'plan_id' => $PlanAt->plan_id]) }}"
                                                    class="text-black text-wrap w-100">
                                                    {{ $PlanAt->plan_name }}
                                                </a>
                                            </td>
                                            <td class="text-danger">
                                                รอคุย
                                            </td>
                                            <td>
                                                <a href="#" class="text-decoration-none" data-bs-toggle="modal"
                                                    data-bs-target="#edit_plan_{{ $loop->index }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 12 12">
                                                        <path fill="#000000"
                                                            d="M10.443 1.56a1.914 1.914 0 0 0-2.707 0l-.55.551a.506.506 0 0 0-.075.074l-5.46 5.461a.5.5 0 0 0-.137.255l-.504 2.5a.5.5 0 0 0 .588.59l2.504-.5a.5.5 0 0 0 .255-.137l6.086-6.086a1.914 1.914 0 0 0 0-2.707M7.502 3.21l1.293 1.293L3.757 9.54l-1.618.324l.325-1.616zm2 .586L8.209 2.502l.234-.234A.914.914 0 1 1 9.736 3.56z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </td>
                                            <td onclick="checkDel('plan','{{ $PlanAt->plan_id }}')">
                                                <a href="#">
                                                    <i class='bx bx-trash text-danger'></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif --}}
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12 col-lg pb-2 rounded-3"
                style="
                        margin: 5px;
                        box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, 
                                    rgba(0, 0, 0, 0.24) 0px 1px 2px;">
                <table class="table m-0 my-table" style="padding: 5px;">
                    <tbody>
                        <tr>
                            <td class="fs-5 px-0">
                                <div style="width: 120px">โครงการ : @if (request()->has('plan_id'))
                                        <a href="{{ route('addproject') }}" class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40"
                                                viewBox="0 0 48 48">
                                                <circle cx="24" cy="24" r="21" fill="#4CAF50"></circle>
                                                <g fill="#fff">
                                                    <path d="M21 14h6v20h-6z"></path>
                                                    <path d="M14 21h20v6H14z"></path>
                                                </g>
                                            </svg>
                                        </a>
                                    @endif
                                </div>
                            </td>
                            {{-- <td class="h4">{{ isset($Plan->plan_name) ? $Plan->plan_name : '' }}</td> --}}
                            <td class="px-0">

                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="overflow-x-hidden">
                    <table id="ProjectAll" class="table display " style="width:100%">
                        <thead>
                            <tr>
                                <th style="width: 57%;">ชื่อโครงการ</th>
                                <th>ผู้ดูแลโครงการ</th>
                                <th>งบจาก</th>
                                <th>งบประเภท</th>
                                <th>งบประมาณ</th>
                                <th>หน่วยงาน</th>
                                <th>แก้ไข</th>
                                <th>ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>

            </div>
            @if (isset($ProjectAtAll))
                @foreach ($ProjectAtAll as $index => $ProjectAt)
                    <div class="modal fade" id="edit_project_{{ $index }}" tabindex="-1"
                        aria-labelledby="edit_project_label_{{ $index }}" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <form method="POST" action="{{ url('projects/update/' . $ProjectAt->project_id) }}">
                                    @method('PUT')
                                    @csrf

                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="edit_project_label_{{ $index }}">
                                            แก้ไขโครงการ {{ $ProjectAt->project_name }} ปีงบประมาณ : 2567</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-3 row text-end">
                                                    <label for="name" class="col-sm-3 col-form-label">ชื่อ</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="project_name"
                                                            name="project_name" value="{{ $ProjectAt->project_name }}">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row text-end">
                                                    <label for="stg"
                                                        class="col-sm-3 col-form-label">ยุทธศาสตร์</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-select" id="floatingSelect" name="stg"
                                                            aria-label="Floating label select example">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row text-end">
                                                    <label for="name" class="col-sm-3 col-form-label">ผลผลิต</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-select" id="floatingSelect"
                                                            aria-label="Floating label select example">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row text-end">
                                                    <label for="balance" class="col-sm-3 col-form-label">งบประมาณ</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" id="balance"
                                                            name="balance" value="{{ $ProjectAt->balance }}">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row text-end">
                                                    <label for="budget_type"
                                                        class="col-sm-3 col-form-label">ประเภทงบ</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-select" id="budget_type" name="budget_type"
                                                            aria-label="Floating label select example">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row text-end">
                                                    <label for="budget_source"
                                                        class="col-sm-3 col-form-label">งบจาก</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-select" id="budget_source"
                                                            name="budget_source"
                                                            aria-label="Floating label select example">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row text-end">
                                                    <label for="org_id" class="col-sm-3 col-form-label">หน่วยงาน</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-select" id="org_id" name="org_id"
                                                            aria-label="Floating label select example">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row text-end">
                                                    <label for="project_head"
                                                        class="col-sm-3 col-form-label">หัวหน้าโครงการ</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-select" id="project_head" name="project_head"
                                                            aria-label="Floating label select example">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row text-end">
                                                    <label for="advisor" class="col-sm-3 col-form-label">Advisor</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-select" id="advisor" name="advisor"
                                                            aria-label="Floating label select example">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row text-end">
                                                    <label for="supervisor"
                                                        class="col-sm-3 col-form-label">Supervisor</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-select" id="supervisor" name="supervisor"
                                                            aria-label="Floating label select example">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row text-end">
                                                    <label for="executive"
                                                        class="col-sm-3 col-form-label">ผู้บริหารกำกับดูแล</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-select" id="executive" name="executive"
                                                            aria-label="Floating label select example">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <table class="table display">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                ชื่อ
                                                            </th>
                                                            <th>
                                                                องค์กร
                                                            </th>
                                                            <th>
                                                                สถานะ
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                test
                                                            </td>
                                                            <td>
                                                                อบต
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="form-check form-switch">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        role="switch">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    </div>

    <script>
        const APP_URL = "{{ env('APP_URL') }}";

        var table = $('table.display').DataTable({
            pageLength: 5,
            lengthMenu: [
                [3, 5, 10, 15, 20],
                [3, 5, 10, 15, 20]
            ]
        })
        const d = new Date();
        var year = d.getFullYear();


        $(document).ready(function() {
            $("#Year").change(function() {
                var selectedValue = $(this).val();

                // window.location = 'fiscal_years?year=' + selectedValue
                console.log("selectedValue : " + selectedValue);
                getAllSTG(selectedValue)
            });
        });
        const getParamValue = (param) => {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        };
        const updateURL = (paramName, paramValue) => {
            const urlParams = new URLSearchParams(window.location.search);
            urlParams.set(paramName, paramValue);
            const newUrl = `${window.location.pathname}?${urlParams.toString()}`;
            window.history.pushState({}, '', newUrl);
        }

        const getAllSTG = (data) => {
            console.log("getAllSTG : " + data)
            let settings = {
                url: "/api/All/levels/strategy",
                method: "GET",
                timeout: 0,
                data: {
                    year_code: data
                }
            };

            $.ajax(settings).done(function(response) {
                updateURL("year", data);
                const jsonDataDiv = document.getElementById('STGAll');
                const STGName = document.getElementById('STGName');
                jsonDataDiv.innerHTML = ''; // Clear previous content

                if (response['STG'] && response['STG'].length > 0) {
                    console.log(response['STG']);
                    const stg_id = getParamValue('stg_id') || response['STG'][0].stg_id;
                    const selectedStrategy = response['STG'].find(element => element.stg_id === stg_id) ||
                        response['STG'][0];
                    updateURL("stg_id", String(selectedStrategy.stg_id));

                    STGName.innerHTML = `
                        ยุทธศาสตร์ : ${selectedStrategy.name}
                        <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#edit_stg">
                            <i class='bx bx-pencil text-dark'></i>
                        </a>
                        <a href="#" class="text-decoration-none" onclick="checkDel('Strategy', '${selectedStrategy.stg_id}')">
                            <i class='bx bx-trash text-danger'></i>
                        </a>
                    `;

                    // const STG_Name = document.getElementById('STG_Name');
                    // STG_Name.innerHTML = selectedStrategy.name;

                    let fragment = document.createDocumentFragment();
                    response['STG'].forEach(strategy => {
                        const strategyLink = document.createElement('a');
                        strategyLink.className = 'col-xl-2 col btn btn-secondary text-white';
                        strategyLink.textContent = strategy.name;
                        strategyLink.onclick = function(e) {
                            getAllTarget(strategy.stg_id);
                            STGName.innerHTML = `
                        ยุทธศาสตร์ : ${strategy.name}
                        <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#edit_stg">
                            <i class='bx bx-pencil text-dark'></i>
                        </a>
                        <a href="#" class="text-decoration-none" onclick="checkDel('Strategy', '${strategy.stg_id}')">
                            <i class='bx bx-trash text-danger'></i>
                        </a>
                    `;
                        };
                        fragment.appendChild(strategyLink);
                    });

                    const newLink = document.createElement('a');
                    newLink.href = "#";
                    newLink.className = "col-xl-1";
                    newLink.setAttribute("data-bs-toggle", "modal");
                    newLink.setAttribute("data-bs-target", "#add_stg");
                    newLink.innerHTML = `
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" viewBox="0 0 48 48">
                            <circle cx="24" cy="24" r="21" fill="#4CAF50"></circle>
                            <g fill="#fff">
                                <path d="M21 14h6v20h-6z"></path>
                                <path d="M14 21h20v6H14z"></path>
                            </g>
                        </svg>
                    `;
                    fragment.appendChild(newLink);

                    jsonDataDiv.appendChild(fragment);

                    if (response['targets'] && response['targets'].length > 0) {
                        const TargetName = document.getElementById("TargetName");
                        TargetName.innerHTML = response['targets'][0].target_name;
                        const AddTarget = document.getElementById("AddTarget");
                        AddTarget.innerHTML = `                    
                            <a href="#" class="d-flex align-items-center text-decoration-none text-black" data-bs-toggle="modal" data-bs-target="#add_target">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" viewBox="0 0 48 48">
                                    <circle cx="24" cy="24" r="21" fill="#4CAF50"></circle>
                                    <g fill="#fff">
                                        <path d="M21 14h6v20h-6z"></path>
                                        <path d="M14 21h20v6H14z"></path>
                                    </g>
                                </svg>
                            </a>`;
                        updateURL("target_id", response['targets'][0].target_id);

                        let TableTarget = $("#TargetAtAll").dataTable().api();
                        TableTarget.clear();
                        response['targets'].forEach((item, index) => {
                            TableTarget.row.add(Target_row(index, item));
                        });
                        TableTarget.draw();
                    }
                    if (response['Plans'] && response['Plans'].length > 0) {
                        const plan_id = getParamValue('plan_id');
                        const PlanName = document.getElementById("PlanName");
                        if (plan_id) {
                            // PlanName.innerHTML = response['Plans']['plan_id'] == plan_id
                            PlanName.innerHTML = response['Plans'].find(plan => plan.plan_id === plan_id)[
                                'plan_name'];
                        } else {
                            PlanName.innerHTML = response['Plans'][0]['plan_name']
                        }
                        let TablePlan = $("#PlanAll").dataTable().api();
                        TablePlan.clear();
                        response['Plans'].forEach((item, index) => {
                            TablePlan.row.add(Plan_row(index, item));
                        });
                        TablePlan.draw();
                    }

                } else {
                    const noDataLink = document.createElement('a');
                    noDataLink.className = 'col-xl-2 col btn btn-outline-danger';
                    noDataLink.textContent = "No Data";
                    jsonDataDiv.appendChild(noDataLink);

                    const newLink = document.createElement('a');
                    newLink.href = "#";
                    newLink.className = "col-xl-1";
                    newLink.setAttribute("data-bs-toggle", "modal");
                    newLink.setAttribute("data-bs-target", "#add_stg");
                    newLink.innerHTML = `
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" viewBox="0 0 48 48">
                            <circle cx="24" cy="24" r="21" fill="#4CAF50"></circle>
                            <g fill="#fff">
                                <path d="M21 14h6v20h-6z"></path>
                                <path d="M14 21h20v6H14z"></path>
                            </g>
                        </svg>
                    `;
                    jsonDataDiv.appendChild(newLink);

                    STGName.innerHTML = "No data";

                    let TableTarget = $("#TargetAtAll").dataTable().api();
                    TableTarget.clear();
                    TableTarget.draw();

                    let TablePlan = $("#PlanAll").dataTable().api();
                    TablePlan.clear();
                    TablePlan.draw();
                }

            });
        };



        const getAllTarget = (id) => {

            let settings = {
                "url": "/api/All/levels/target",
                "method": "GET",
                "timeout": 0,
                "data": {
                    "stg_id": id
                },
            };

            // console.log("settings : " + settings);
            $.ajax(settings).done(function(response) {
                updateURL("stg_id", String(id))
                console.log(response);
                // getAllPlan(response);
                const TargetName = document.getElementById("TargetName");


                const target_id = getParamValue('target_id');
                if (target_id && response['targets']) {
                    var data = response['targets'].find(element => element.target_id === target_id);
                }
                if (data && response['targets']) {
                    // console.log('targets',data);
                    // getAllPlan(data);
                    if (data) {
                        TargetName.innerHTML = data.target_name;
                        updateURL("target_id", data.target_id)
                    }
                } else {
                    if (response['targets']) {
                        // getAllPlan(response[0]);
                        TargetName.innerHTML = response['targets'][0].target_name;
                    } else {
                        TargetName.innerHTML = "No data";
                    }
                }

                if (response['targets']) {
                    TargetName.innerHTML = response['targets'][0].target_name;
                    updateURL("target_id", response['targets'][0].target_id)
                    let TableTarget = $("#TargetAtAll").dataTable().api();
                    TableTarget.clear();
                    $.each(response['targets'], function(index, item) {
                        TableTarget.row.add(Target_row(index, item));
                        // console.log(index, item);
                    });
                    TableTarget.draw();
                } else {
                    let TableTarget = $("#TargetAtAll").dataTable().api();
                    TableTarget.clear();
                    TableTarget.draw();
                }

                if (response['Plans']) {
                    const PlanName = document.getElementById("PlanName");
                    PlanName.innerHTML = response['Plans'][0].plan_name;
                    let TablePlan = $("#PlanAll").dataTable().api();
                    TablePlan.clear();
                    $.each(response['Plans'], function(index, item) {
                        TablePlan.row.add(Plan_row(index, item));
                        // console.log(index, item);
                    });
                    TablePlan.draw();
                } else {
                    const PlanName = document.getElementById("PlanName");
                    PlanName.innerHTML = "No Data";
                    let TablePlan = $("#PlanAll").dataTable().api();
                    TablePlan.clear();
                    TablePlan.draw();
                }

            });
        }

        const Target_row = (index, e) => {
            let newRow = $('<tr></tr>');
            newRow.append('<td>' + (index + 1) + '</td>');

            let TargetLink = $('<td>' + e.target_name + '</td>');
            TargetLink.click(function() {
                updateURL("target_id", e.target_id);
                getAllPlan(e);
            });
            newRow.append(TargetLink);

            // Create the edit link
            let editCell = $('<td></td>');
            let editLink = $(
                '<a class="text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target="#edit_target"></a>'
            );
            let editIcon = $('<i class="bx bx-pencil text-dark"></i>');
            editLink.append(editIcon);
            editLink.click(function() {
                console.log("edit_target : " + e.target_id);

                // Set the modal fields with the data
                $('#edit_target #name').val(e.target_name);
                $('#edit_target .modal-title').text('Edit Target: ' + e.target_name);
                $('#edit_target ').data('target_id',e.target_id)
                // Show the modal
                $('#edit_target').modal('show');
            });
            editCell.append(editLink);
            newRow.append(editCell);

            // Create the delete link
            let deleteCell = $('<td></td>');
            let deleteLink = $('<a class="text-decoration-none" href="#"></a>');
            let deleteIcon = $('<i class="bx bx-trash text-danger"></i>');
            deleteLink.append(deleteIcon);
            deleteLink.click(function() {
                console.log("Click on delete link");
                checkDel("target", e.target_id);
                // Perform delete action here
            });
            deleteCell.append(deleteLink);
            newRow.append(deleteCell);

            return newRow;
        }


        const getAllPlan = (data) => {
            // console.table(data);
            const TargetName = document.getElementById("TargetName");
            const target_id = getParamValue('target_id');
            let id = ''; // ประกาศตัวแปร id ไว้นอกเหนือจากเงื่อนไข

            if (target_id !== null) {
                console.log('Year parameter value:', target_id);
                TargetName.innerHTML = data.target_name;
                id = {
                    "target_id": target_id
                }
            } else {
                console.log('Year parameter does not exist in the URL.');
                id = {
                    "target_id": data.target_id
                }
            }

            var settings = {
                "url": "/api/All/levels/plan",
                "method": "GET",
                "timeout": 0,
                "headers": {
                    "Content-Type": "application/json"
                },
                "data": id
            };
            // console.table(settings);

            $.ajax(settings).done(function(response) {
                // console.table(response);

                const PlanName = document.getElementById("PlanName");

                const plan_id = getParamValue('plan_id');
                if (plan_id && response['Plans']) {
                    const data = response['Plans'].find(element => element.plan_id === plan_id);
                    // console.table(data);
                    PlanName.innerHTML = data.plan_name;
                    // getAllPlan(data);
                } else {
                    if (response['Plans']) {
                        // getAllPlan(response[0]);
                        PlanName.innerHTML = response['Plans'][0].plan_name;
                    } else {
                        PlanName.innerHTML = "No data";
                    }
                }

                let table = $("#PlanAll").dataTable().api();
                table.clear();
                $.each(response['Plans'], function(index, item) {
                    table.row.add(Plan_row(index, item));
                    // console.log(index, item);
                });
                table.draw();
            });
        }

        const Plan_row = (index, e) => {
            let newRow = $('<tr></tr>');
            newRow.append('<td>' + (index + 1) + '</td>');

            let TargetLink = $('<td>' + e.plan_name + '</td>');
            TargetLink.click(function() {
                // console.log("target_name : " + e);
                updateURL("plan_id", e.plan_id);
                getAllProject(e.plan_id);
                // getAllPlan(e);
            });
            newRow.append(TargetLink);

            newRow.append('<td>' + e.type + '</td>');
            // สร้างลิงก์แก้ไข
            let editCell = $('<td></td>');
            let editLink = $('<a class="text-decoration-none"></a>');
            let editIcon = $('<i class="bx bx-pencil text-dark"></i>');
            editLink.append(editIcon);
            editLink.click(function() {

                console.log("edit_plan : " + e.plan_id);

                // Set the modal fields with the data
                $('#edit_plan #name').val(e.plan_name); // Assuming you have an input with id 'recipient-name'
                $('#edit_plan .modal-title').text('Edit plan: ' + e.plan_name);

                // Show the modal
                $('#edit_plan').modal('show');

                $(this).attr('data-bs-toggle', 'modal');
                $(this).attr('data-bs-target', '#edit_target');
                // console.log("edit_target_");
                // $("#myBtn").click(function() {
                //     $("#edit_target_").modal();
                // });
                // $("#edit_target_").modal();
                // ทำงานเพิ่มเติมเมื่อคลิกที่ลิงก์แก้ไข
            });
            editCell.append(editLink);
            newRow.append(editCell);

            // สร้างลิงก์ลบ
            let deleteCell = $('<td></td>');
            let deleteLink = $('<a href="#" class="text-decoration-none"></a>');
            let deleteIcon = $('<i class="bx bx-trash text-danger"></i>');
            deleteLink.append(deleteIcon);
            deleteLink.click(function() {
                // console.log("Click on delete link");
                // ทำงานเพิ่มเติมเมื่อคลิกที่ลิงก์ลบ
            });
            deleteCell.append(deleteLink);
            newRow.append(deleteCell);

            return newRow;
        }

        const getAllProject = (plan_id) => {
            var settings = {
                "url": "/api/All/levels/project",
                "method": "GET",
                "timeout": 0,
                "headers": {
                    "Content-Type": "application/json"
                },
                "data": {
                    "plan_id": plan_id
                },
            };

            $.ajax(settings).done(function(response) {
                console.log(response);
                let table = $("#ProjectAll").dataTable().api();
                table.clear();
                $.each(response['Projects'], function(index, item) {
                    table.row.add(Project_row(index, item));
                    // console.log(index, item);
                });
                table.draw();
            });
        }

        const Project_row = (index, e) => {
            let newRow = $('<tr></tr>');
            // newRow.append('<td>' + (index + 1) + '</td>');

            let ProjectLink = $('<td>' + e.project_name + '</td>');
            ProjectLink.click(function() {
                // console.log("Project_name : " + e.project_name);
                // updateURL("plan_id", e.plan_id);
                // getAllPlan(e);
            });
            newRow.append(ProjectLink);

            newRow.append('<td>' + e.supervisor + '</td>');
            newRow.append('<td>' + e.budget_source + '</td>');
            newRow.append('<td>' + e.budget_type + '</td>');
            newRow.append('<td>' + e.balance + '</td>');
            newRow.append('<td>' + e.org.org_name + '</td>');
            // สร้างลิงก์แก้ไข
            let editCell = $('<td></td>');
            let editLink = $('<a class="text-decoration-none"></a>');
            let editIcon = $('<i class="bx bx-pencil text-dark"></i>');
            editLink.append(editIcon);
            editLink.click(function() {
                $(this).attr('data-bs-toggle', 'modal');
                $(this).attr('data-bs-target', '#edit_target');
                // console.log("edit_Project_");
                // $("#myBtn").click(function() {
                //     $("#edit_Project_").modal();
                // });
                // $("#edit_Project_").modal();
                // ทำงานเพิ่มเติมเมื่อคลิกที่ลิงก์แก้ไข
            });
            editCell.append(editLink);
            newRow.append(editCell);

            // สร้างลิงก์ลบ
            let deleteCell = $('<td></td>');
            let deleteLink = $('<a href="#" class="text-decoration-none"></a>');
            let deleteIcon = $('<i class="bx bx-trash text-danger"></i>');
            deleteLink.append(deleteIcon);
            deleteLink.click(function() {
                // console.log("Click on delete link");
                // ทำงานเพิ่มเติมเมื่อคลิกที่ลิงก์ลบ
            });
            deleteCell.append(deleteLink);
            newRow.append(deleteCell);

            return newRow;
        }


        const groupSTG = (event) => {
            let data = {
                name: document.getElementById('nameSTG').value
            };

            Add('strategy', data, event);
            event.preventDefault();

        };

        const Add = (type, data) => {
            console.log("type : " + type);
            console.log('data:', data);

            let url;
            let raw;
            let modal;
            let year_code; // Declare year_code outside of the switch statement
            const myHeaders = new Headers();
            myHeaders.append("Content-Type", "application/json");

            switch (type) {
                case 'Strategy':
                    const urlParams = new URLSearchParams(window.location.search);
                    year_code = urlParams.get('year');
                    console.log(year_code);

                    if (!year_code) {
                        year_code = new Date().getFullYear();
                        console.log("year_code : ", year_code);
                    }
                    console.log("year_code : ", year_code);

                    url = "/api/" + type + "/add";
                    raw = JSON.stringify({
                        "nameSTG": data,
                        "year": year_code
                    });
                    modal = '#add_stg';
                    break;

                case 'Target':
                    let id = getParamValue('stg_id'); 
                    url = "/api/" + type + "/add";
                    raw = JSON.stringify({
                        "target_name": data ,
                        "stg_id" : id
                    });
                    modal = '#add_target';
                    break;

                default:
                    console.log("Unknown type");
                    return; // Exit the function if the type is unknown
            }

            var settings = {
                url,
                method: "POST",
                timeout: 0,
                headers: {
                    "Content-Type": "application/json"
                },
                data: raw,
            };

            $.ajax(settings).done(function(response) {
                console.log(response);
                $(modal).modal('hide');
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Your work has been saved",
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    switch (type) {
                        case "Strategy":
                            console.log("year_code : " + year_code);
                            getAllSTG(year_code); // Now year_code is defined in this scope
                            break;
                        case "Target":
                            let id = getParamValue('stg_id'); 
                            getAllTarget(id);
                            break;
                    }
                });
            });
        };

        const update = (type, data) => {
            console.log(type, data);
            let id; // Declare id outside the if block
            let obj = [];

            switch (type) {
                case "Strategy":
                    id = getParamValue('stg_id');
                    console.log(id);
                    obj = JSON.stringify({ // Convert data to JSON string
                        "name": data,
                    })
                    break;
                case "Target":
                    id = data.id;
                    console.log(id);
                    obj = JSON.stringify({ // Convert data to JSON string
                        "target_name": data.target_name,
                    })
                    break;
            }

            var settings = {
                "url": "/api/" + type + "/update/" + id,
                "method": "PUT",
                "timeout": 0,
                "headers": {
                    "Content-Type": "application/json"
                },
                "data": obj
            };

            // $.ajax(settings).done(function(response) {
            //     console.log(response);
            //     Swal.fire({
            //         position: "top-end",
            //         icon: "success",
            //         title: "Your work has been saved",
            //         showConfirmButton: false,
            //         timer: 1500
            //     }).then(() => {
            //         switch (type) {
            //             case "Strategy":
            //                 CurrentYear();
            //                 break;
            //             case "Target":
            //                 let stg_id = getParamValue('stg_id');
            //                 getAllTarget(stg_id);
            //                 break;
            //         }
            //         $('#edit_target').modal('hide');
            //     });

            // });
        };



        const checkURL = (type_params) => {
            var url = new URL(window.location.href);
            url.searchParams.delete(type_params);
            // window.location.href = url.href;
            window.history.replaceState({}, '', url.href);
        }

        const checkDel = (type, id) => {
            let data = {
                "id": id
            };
            console.log(type, id);

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {

                    var settings = {
                        "url": "/api/" + type + "/active",
                        "method": "PUT",
                        "timeout": 0,
                        "headers": {
                            "Content-Type": "application/json"
                        },
                        "data": JSON.stringify({
                            "id": id
                        }),
                    };

                    $.ajax(settings)
                        .done(function(response) {
                            console.log(response);
                            Swal.fire({
                                title: "Deleted!",
                                text: "Your " + type + " has been deleted.",
                                icon: "success",
                                showConfirmButton: false,
                                timer: 1500
                            }).then(() => {
                                let type_params = "";
                                switch (type) {
                                    case 'Strategy':
                                        type_params = 'stg_id';
                                        checkURL(type_params);
                                        CurrentYear();
                                        break;
                                    case 'target':
                                        type_params = 'target_id';
                                        checkURL(type_params);
                                        let stg_id = getParamValue('stg_id')
                                        getAllTarget(stg_id);
                                        break;
                                    case 'plan':
                                        type_params = 'plan_id';
                                        checkURL(type_params);
                                        break;
                                    default:
                                        // window.location.reload();
                                        break;
                                }
                            });
                        })
                        .fail(function(jqXHR, textStatus, errorThrown) {
                            console.error('Error:', textStatus, errorThrown);
                            Swal.fire({
                                title: 'Error!',
                                text: 'An error occurred while deleting the ' + type +
                                    '. Please try again later.',
                                icon: 'error',
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'OK'
                            });
                        });
                }
            });
        };

        const Fis_Year = function(year) {
            console.log("year : " + year);
            getAllSTG(year);
        }

        const CurrentYear = function() {
            var settings = {
                "url": "/api/current/year",
                "method": "GET",
                "timeout": 0,
            };

            $.ajax(settings).done(function(response) {
                console.log("response : " + response);
                getAllSTG(response[0].id);
            });
        }
        const yearValue = getParamValue('year');

        if (yearValue != null) {
            console.log('Year parameter value:', yearValue);
            getAllSTG(yearValue);
        } else {
            CurrentYear()
            // console.log('Year parameter does not exist in the URL.');
        }
    </script>

@endsection
