@extends('/layout/layout')

@section('title', 'ปีงบประมาณ')
@section('style')
    <style>
        /* *{
                                                                                                                                                                    padding: 0;
                                                                                                                                                                    margin: 0;
                                                                                                                                                                } */
        .my-table tbody tr td {
            background-color: #F8F9FA;
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
            <select class="form-select p-0 px-5 h-50" id="Year" style="padding: 0rem 1.7rem 0rem 1rem !important;"
                name="Year">
                @foreach ($YearAll as $Year)
                    @if (request()->query('year'))
                        <option value="{{ $Year->year }}" {{ $Year->year == request()->query('year') ? 'selected' : '' }}>
                            {{ $Year->year + 543 }}</option>
                    @else
                        <option value="{{ $Year->year }}" {{ $Year->year == date('Y') ? 'selected' : '' }}>
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
                            <h1 class="modal-title fs-5" id="add_stg_label">เพิ่มยุทธศาสตร์ ปีงบประมาณ : 2567</h1>
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
        @if ($STGAll != null)
            @foreach ($STGAll as $strategy)
                <a href="{{ route('fiscal_years', ['year' => request()->query('year'), 'stg_id' => $strategy->stg_id]) }}"
                    class="col-xl-2 col btn btn-secondary text-white">{{ $strategy->name }}</a>
            @endforeach
        @else
            No data
        @endif
        <a href="#" class="col-xl-1" data-bs-toggle="modal" data-bs-target="#add_stg">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" viewBox="0 0 48 48">
                <circle cx="24" cy="24" r="21" fill="#4CAF50"></circle>
                <g fill="#fff">
                    <path d="M21 14h6v20h-6z"></path>
                    <path d="M14 21h20v6H14z"></path>
                </g>
            </svg>
        </a>
    </div>

    <div class="modal fade" id="edit_stg" tabindex="-1" aria-labelledby="edit_stgLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="edit_stgLabel">แก้ไขชื่อยุทธศาสตร์</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">ชื่อยุทธศาสตร์ ใหม่ :</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Save Changes</button>
                </div>
            </div>
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
                            <div style="width: 100px">ยุทธศาสตร์ : </div>
                        </td>
                        <td class="fs-5 p-0">
                            {{ isset($STG->name) ? $STG->name : '' }}
                            {{-- {{$STG[0]->name}} --}}
                            @if (isset($STG))
                                <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#edit_stg">
                                    <i class='bx bx-pencil text-dark'></i>
                                </a>
                                <a href="#" class="text-decoration-none" onclick="checkDel('Strategy','{{ $STG->stg_id }}')">
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
            <div class="col-12 col-lg-5 pb-2 rounded-3" 
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
                            <td class="fs-5">
                                {{ isset($Target->target_name) ? $Target->target_name : '' }}
                            </td>
                            <td class="px-0 pt-2">
                                @if (request()->has('stg_id'))
                                    <a href="#" class="d-flex align-items-center text-decoration-none text-black"
                                        data-bs-toggle="modal" data-bs-target="#add_target">
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
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="modal fade " id="add_target" tabindex="-1" aria-labelledby="add_target_label"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <form method="POST" action="{{ url('/TGAdd/' . request('stg_id')) }}">
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
                                            <p class="m-0">{{ isset($STG->name) ? $STG->name : '' }}</p>
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
                @foreach ($TargetAtAll as $index => $target)
                    <div class="modal fade " id="edit_target_{{ $index }}" tabindex="-1"
                        aria-labelledby="edit_target_label_{{ $index }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <form method="POST" action="{{ url('/targets/update/' . $target->target_id) }}">
                                    @method('PUT')
                                    @csrf
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="edit_target_label">แก้ไขเป้าหมาย</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body row">
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
                                                class="col-sm-2 col-form-label p-0 pt-2 text-end">ชื่อเป้าหมาย</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="name"
                                                    name="target_name" value="{{ $target->target_name }}">
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
                <div class="content">
                    <table class="table display" style="width: 100%">
                        <thead>
                            <tr>
                                <th>
                                    ลำดับ
                                </th>
                                <th>
                                    ชื่อเป้าหมาย
                                </th>
                                <th>
                                    แก้ไข
                                </th>
                                <th>
                                    ลบ
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($TargetAtAll))
                                @foreach ($TargetAtAll as $TargetAt)
                                    <tr>
                                        <td style="text-align: center; vertical-align: middle;">
                                            {{ $loop->index + 1 }}
                                        </td>
                                        <td class="select">
                                            <a href="{{ route('fiscal_years', ['year' => request()->query('year'), 'stg_id' => request()->query('stg_id'), 'target_id' => $TargetAt->target_id]) }}"
                                                class="text-black text-wrap w-100">
                                                {{ $TargetAt->target_name }}
                                            </a>
                                        </td>
                                        <td class="edit">
                                            <a href="#" class="text-decoration-none" data-bs-toggle="modal"
                                                data-bs-target="#edit_target_{{ $loop->index }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 12 12">
                                                    <path fill="#000000"
                                                        d="M10.443 1.56a1.914 1.914 0 0 0-2.707 0l-.55.551a.506.506 0 0 0-.075.074l-5.46 5.461a.5.5 0 0 0-.137.255l-.504 2.5a.5.5 0 0 0 .588.59l2.504-.5a.5.5 0 0 0 .255-.137l6.086-6.086a1.914 1.914 0 0 0 0-2.707M7.502 3.21l1.293 1.293L3.757 9.54l-1.618.324l.325-1.616zm2 .586L8.209 2.502l.234-.234A.914.914 0 1 1 9.736 3.56z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </td>
                                        <td onclick="checkDel('target','{{ $TargetAt->target_id }}')" class="del">
                                            <a href="#">
                                                <i class='bx bx-trash text-danger'></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
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
                            @if (request()->has('plan_id'))
                                <td class="fs-5">{{ isset($Plan->plan_name) ? $Plan->plan_name : '' }}</td>
                            @else
                                <td class="fs-5">กรุณาเลือกแผน</td>
                            @endif
                            <td class="px-0 pt-2">
                                @if (request()->has('stg_id') and request()->has('target_id'))
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
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="modal fade " id="add_plan" tabindex="-1" aria-labelledby="add_plan_label"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <form method="POST"
                                action="{{ url('/PlanAdd/' . request('stg_id') . '/' . request('target_id')) }}">
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
                @if (isset($PlanAtAll))
                    @foreach ($PlanAtAll as $index => $plan)
                        <div class="modal fade" id="edit_plan_{{ $index }}" tabindex="-1"
                            aria-labelledby="edit_plan_label_{{ $index }}" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <form method="POST" action="{{ url('/plan/update/' . $plan->plan_id) }}">
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
                                                        <p class="m-0">{{ isset($STG->name) ? $STG->name : '' }}</p>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row ">
                                                    <label for="name"
                                                        class="col-sm-2 col-form-label p-0 pt-2 text-end">เป้าหมาย
                                                        :</label>
                                                    <div class="col-sm-10 d-flex align-items-end">
                                                        <p class="m-0">
                                                            {{ isset($Target->target_name) ? $Target->target_name : '' }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <label for="name"
                                                    class="col-sm-2 col-form-label p-0 pt-2 text-end">ชื่อแผนการ</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="name"
                                                        name="plan_name" value="{{ $plan->plan_name }}">
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
                    @endforeach
                @endif
                <div class="overflow-x-hidden plan">
                    <table class="table display" style="width: 100%" id="plantable">
                        <thead>
                            <tr>
                                <th>
                                    ลำดับ
                                </th>
                                <th>
                                    ชื่อแผนการ
                                </th>
                                <th>
                                    ประเภทแผนการ
                                </th>
                                <th>
                                    แก้ไข
                                </th>
                                <th>
                                    ลบ
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($PlanAtAll) || isset($stg_id))
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
                            @endif
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
                                        <a href="#" class="" data-bs-toggle="modal"
                                            data-bs-target="#add_project">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40"
                                                viewBox="0 0 48 48">
                                                <circle cx="24" cy="24" r="21" fill="#4CAF50"></circle>
                                                <g fill="#fff">
                                                    <path d="M21 14h6v20h-6z"></path>
                                                    <path d="M14 21h20v6H14z"></path>
                                                </g>
                                            </svg>
                                        </a>
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
                <div class="modal fade" id="add_project" tabindex="-1" aria-labelledby="add_project_label"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <form method="POST" action="{{ url('ProjectAdd/' . request('plan_id')) }}">
                                @csrf
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="add_project_label">เพิ่มโครงการ ปีงบประมาณ : 2567
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <div class="mb-3 row text-start">
                                                <label for="name" class="col-sm-3 col-form-label">ชื่อ</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="name"
                                                        name="project_name">
                                                </div>
                                            </div>
                                            <div class="mb-3 row text-start">
                                                <label for="stg" class="col-sm-3 col-form-label">ยุทธศาสตร์</label>
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
                                            <div class="mb-3 row text-start">
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
                                            <div class="mb-3 row text-start">
                                                <label for="balance" class="col-sm-3 col-form-label">งบประมาณ</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" id="balance"
                                                        name="balance">
                                                </div>
                                            </div>
                                            <div class="mb-3 row text-start">
                                                <label for="budget_type" class="col-sm-3 col-form-label">ประเภทงบ</label>
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
                                            <div class="mb-3 row text-start">
                                                <label for="budget_source" class="col-sm-3 col-form-label">งบจาก</label>
                                                <div class="col-sm-9">
                                                    <select class="form-select" id="budget_source" name="budget_source"
                                                        aria-label="Floating label select example">
                                                        <option selected>Open this select menu</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row text-start">
                                                <label for="name" class="col-sm-3 col-form-label">หน่วยงาน</label>
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
                                            <div class="mb-3 row text-start">
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
                                            <div class="mb-3 row text-start">
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
                                            <div class="mb-3 row text-start">
                                                <label for="supervisor" class="col-sm-3 col-form-label">Supervisor</label>
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
                                            <div class="mb-3 row text-start">
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
                                        <div class="col-12 col-lg-6">
                                            <div class="mb-3 row px-3">
                                                <label for="name" class="col col-form-label">ผู้ร่วมโครงการ</label>
                                                <div class="col">
                                                    <input type="text" class="form-control" id="name"
                                                        name="Project_participants">
                                                </div>
                                                <button class="col btn btn-primary"> Add</button>
                                            </div>
                                            <div class="overflow-y-scroll px-3" style="height: 500px;">
                                                <div class="row">
                                                    <label for="name" class="col col-form-label">นายศิวพล</label>
                                                    <label for="name" class="col col-form-label">ใจซื่อ</label>
                                                    <div class="col">
                                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="40" height="40" viewBox="0 0 32 32">
                                                                <path fill="#FC0005"
                                                                    d="M7.219 5.781L5.78 7.22L14.563 16L5.78 24.781l1.44 1.439L16 17.437l8.781 8.782l1.438-1.438L17.437 16l8.782-8.781L24.78 5.78L16 14.563z">
                                                                </path>
                                                            </svg></a>
                                                    </div>
                                                    <hr>
                                                </div>
                                                <div class="row">
                                                    <label for="name" class="col col-form-label">นายนันทกร</label>
                                                    <label for="name" class="col col-form-label">ธิดี</label>
                                                    <div class="col">
                                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="40" height="40" viewBox="0 0 32 32">
                                                                <path fill="#FC0005"
                                                                    d="M7.219 5.781L5.78 7.22L14.563 16L5.78 24.781l1.44 1.439L16 17.437l8.781 8.782l1.438-1.438L17.437 16l8.782-8.781L24.78 5.78L16 14.563z">
                                                                </path>
                                                            </svg></a>
                                                    </div>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="overflow-x-hidden" >
                    <table id="Project-Table" class="table display " style="width:100%">
                        <thead>
                            <tr>
                                <th>ชื่อโครงการ</th>
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
                            @if (isset($ProjectAtAll))
                                @foreach ($ProjectAtAll as $ProjectAt)
                                    <tr>
                                        <td><a class="text-black">{{ $ProjectAt->project_name }}</a></td>
                                        <td><a href="#" class="text-black">{{ $ProjectAt->project_head }}</a></td>
                                        <td>{{ $ProjectAt->budget_source }}</td>
                                        <td>{{ $ProjectAt->budget_type }}</td>
                                        <td>{{ number_format($ProjectAt->balance) }}</td>
                                        {{-- <td>{{ $ProjectAt->org_name }}</td> --}}
                                        <td>มว.</td>

                                        <td>
                                            <a href="#" class="text-decoration-none" data-bs-toggle="modal"
                                                data-bs-target="#edit_project_{{ $loop->index }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 12 12">
                                                    <path fill="#000000"
                                                        d="M10.443 1.56a1.914 1.914 0 0 0-2.707 0l-.55.551a.506.506 0 0 0-.075.074l-5.46 5.461a.5.5 0 0 0-.137.255l-.504 2.5a.5.5 0 0 0 .588.59l2.504-.5a.5.5 0 0 0 .255-.137l6.086-6.086a1.914 1.914 0 0 0 0-2.707M7.502 3.21l1.293 1.293L3.757 9.54l-1.618.324l.325-1.616zm2 .586L8.209 2.502l.234-.234A.914.914 0 1 1 9.736 3.56z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="#"
                                                onclick="checkDel('project', '{{ $ProjectAt->project_id }}' ); ">
                                                <i class='bx bx-trash text-danger'></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach



                            @endif
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


        $(document).ready(function() {
            $("#Year").change(function() {
                var selectedValue = $(this).val();
                window.location = 'fiscal_years?year=' + selectedValue
                // console.log(selectedValue);
            });
        });

        const groupSTG = (event) => {
            let data = {
                name: document.getElementById('nameSTG').value
            };

            Add('strategy', data, event);
            event.preventDefault();

        };

        const Add = (type, data) => {

            // console.log("type : " + type);
            // console.log('data:', data);
            const urlParams = new URLSearchParams(window.location.search);
            let year_code = urlParams.get('year');
            console.log(year_code);

            if (!year_code) {
                year_code = new Date().getFullYear();
                console.log(year_code);
            }






            const myHeaders = new Headers();
            myHeaders.append("Content-Type", "application/json");

            const raw = JSON.stringify({
                "nameSTG": data,
                "year": year_code
            });

            console.log("raw : " + raw);

            const requestOptions = {
                method: "POST",
                headers: myHeaders,
                body: raw,
                redirect: "follow"
            };

            fetch(APP_URL+"/api/Strategy/add", requestOptions)
                .then((response) => response.text())
                .then((result) => console.log(result))
                .catch((error) => console.error(error));
        };

        const checkDel = (type, id) => {
            let data = {
                "id": id
            };
            console.log(data);


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
                    fetch(APP_URL + '/api/' + type + '/active', {
                            method: 'PUT',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify(data)
                        })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Network response was not ok');
                            }
                            return response.json();
                        })
                        .then(data => {
                            Swal.fire({
                                    title: "Deleted!",
                                    text: "Your file has been deleted.",
                                    icon: "success",
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                                .then(() => {
                                    console.log(data);
                                    window.location.reload();
                                })
                        })
                        .catch(error => {
                            console.error('There was a problem with your fetch operation:', error);
                        });
                }
            });
        };
    </script>

@endsection
