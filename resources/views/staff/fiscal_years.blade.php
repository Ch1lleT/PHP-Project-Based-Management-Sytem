@extends('/layout/layout')

@section('title', 'ปีงบประมาณ')
@section('style')
    <style>
        .my-table tbody tr td{
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
    </style>
@endsection
@section('header')

    <div class="w-100 d-flex align-items-center">
        <div class="dropdown fs-6 d-flex align-items-center">
            <span class="fs-5 mx-2">ปีงบประมาณ</span>
            <select class="form-select p-0 px-5 h-50" id="floatingSelect" style="padding: 0rem 1.7rem 0rem 1rem !important;">
                {{-- <option >Open this select menu</option> --}}
                <option value="1" selected>2565</option>
                <option value="2">2564</option>
                <option value="3">2563</option>
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
                    <form method="POST" action="{{ url('/STGAdd') }}">
                        @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="add_stg_label">เพิ่มยุทธศาสตร์ ปีงบประมาณ : 2567</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body row">
                        <div class="mb-3 row ">
                            <label for="name" class="col-sm-2 col-form-label p-0 pt-2 text-end">ชื่อยุทธศาสตร์</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name">
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
        @foreach($STGAll as $strategy)
            <a href="{{ route('fiscal_years', ['stg_id' => $strategy['stg_id']]) }}" class="col-xl-2 col btn btn-secondary text-white">{{ $strategy['name'] }}</a>
        @endforeach
    </div>


    <table class="table mt-3 mb-0 my-table" >
        <tbody >
            <tr >
                <td class="h4 px-0">
                    <div style="width: 124px">ยุทธศาสตร์:</div>
                </td>
                <td class="h4">{{ isset($STG->name) ? $STG->name : '' }}</td>
                <td class="px-0 d-flex justify-content-end">
                    <a href="#" class="d-flex align-items-center text-decoration-none text-black"
                        data-bs-toggle="modal" data-bs-target="#add_stg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" viewBox="0 0 48 48">
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
    <div class="row row-cols-auto">
        <div class="col-12 col-lg-6 ">
            <table class="table mt-3 my-table" >
                <tbody >
                    <tr >
                        <td class="h4 px-0">
                            <div style="width: 124px">เป้าหมาย:</div>
                        </td>
                        <td class="h4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit itaque dolores dolore
                            veniam cum? Cupiditate!</td>
                        <td class="px-0">
                            @if (request()->has('stg_id'))
                            <a href="#" class="d-flex align-items-center text-decoration-none text-black"
                                data-bs-toggle="modal" data-bs-target="#add_target">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" viewBox="0 0 48 48">
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
            <div class="modal fade " id="add_target" tabindex="-1" aria-labelledby="add_target_label" aria-hidden="true">
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
                                <label for="name" class="col-sm-2 col-form-label p-0 pt-2 text-end">ยุทธศาสตร์ :</label>
                                <div class="col-sm-10 d-flex align-items-end">
                                    <p class="m-0">ยุทธศาสตร์ ที่ 1</p>
                                </div>
                            </div>
                            <div class="mb-3 row ">
                                <label for="name" class="col-sm-2 col-form-label p-0 pt-2 text-end">ชื่อเป้าหมาย</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="target_name">
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
            <div class="modal fade " id="edit_target" tabindex="-1" aria-labelledby="edit_target_label" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form method="POST" action="{{ url('/TGAdd/' . request('stg_id')) }}">
                            @csrf
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="edit_target_label">แก้ไขเป้าหมาย</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body row">
                            <div class="mb-3 row ">
                                <label for="name" class="col-sm-2 col-form-label p-0 pt-2 text-end">ยุทธศาสตร์ :</label>
                                <div class="col-sm-10 d-flex align-items-end">
                                    <p class="m-0">ยุทธศาสตร์ ที่ 1</p>
                                </div>
                            </div>
                            <div class="mb-3 row ">
                                <label for="name" class="col-sm-2 col-form-label p-0 pt-2 text-end">ชื่อเป้าหมาย</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="target_name">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Change</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>

            <hr>
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
                        @if(isset($TargetAtAll))
                            @foreach($TargetAtAll as $TargetAt)
                                <tr>
                                    <td style="text-align: center; vertical-align: middle;">
                                        {{$loop->index + 1}}
                                    </td>
                                    <td>
                                        <a href="{{ route('fiscal_years', ['stg_id' => request()->query('stg_id'),'target_id' => $TargetAt->target_id]) }}" class="text-black text-wrap w-100">
                                            {{ $TargetAt->target_name }}
                                        </a>
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
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 0, 0);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm4.207 12.793-1.414 1.414L12 13.414l-2.793 2.793-1.414-1.414L10.586 12 7.793 9.207l1.414-1.414L12 10.586l2.793-2.793 1.414 1.414L13.414 12l2.793 2.793z"></path></svg>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-12 col-lg-6 ">
            <table class="table mt-3 my-table" >
                <tbody >
                    <tr >
                        <td class="h4 px-0">
                            <div style="width: 124px">แผนการ:</div>
                        </td>
                        <td class="h4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit itaque dolores dolore
                            veniam cum? Cupiditate!</td>
                        <td class="px-0">
                            @if (request()->has('target_id'))
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
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="modal fade " id="add_plan" tabindex="-1" aria-labelledby="add_plan_label" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form method="POST" action="{{ url('/PlanAdd/' . request('stg_id').'/'.request('target_id')) }}">
                            @csrf
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="add_plan_label">เพิ่มแผนงาน ปีงบประมาณ : 2567</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body row">
                            <div class="mb-3 row ">
                                <div class="mb-3 row ">
                                    <label for="name" class="col-sm-2 col-form-label p-0 pt-2 text-end">ยุทธศาสตร์ :</label>
                                    <div class="col-sm-10 d-flex align-items-end">
                                        <p class="m-0">ยุทธศาสตร์ ที่ 1</p>
                                    </div>
                                </div>
                                <div class="mb-3 row ">
                                    <label for="name" class="col-sm-2 col-form-label p-0 pt-2 text-end">เป้าหมาย :</label>
                                    <div class="col-sm-10 d-flex align-items-end">
                                        <p class="m-0">เป้าหมาย ที่ 1</p>
                                    </div>
                                </div>
                                <label for="name" class="col-sm-2 col-form-label p-0 pt-2 text-end">ชื่อแผนการ</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="plan_name">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="plan" class="col-sm-2 col-form-label p-0 pt-2 text-end">ประเภทแผนการ</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select" name="target_plan">
                                        <option selected>เลือกแผนการ</option>
                                        <option value="ผลผลิต">ผลผลิต</option>
                                        <option value="ผลลัพธ์">ผลลัพธ์</option>
                                        <option value="ผลกระทบ">ผลกระทบ</option>
                                    </select>
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
            <div class="modal fade " id="edit_plan" tabindex="-1" aria-labelledby="edit_plan_label" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form method="POST">
                            @csrf
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="edit_plan_label">แก้ไขแผนงาน</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body row">
                            <div class="mb-3 row ">
                                <div class="mb-3 row ">
                                    <label for="name" class="col-sm-2 col-form-label p-0 pt-2 text-end">ยุทธศาสตร์ :</label>
                                    <div class="col-sm-10 d-flex align-items-end">
                                        <p class="m-0">ยุทธศาสตร์ ที่ 1</p>
                                    </div>
                                </div>
                                <div class="mb-3 row ">
                                    <label for="name" class="col-sm-2 col-form-label p-0 pt-2 text-end">เป้าหมาย :</label>
                                    <div class="col-sm-10 d-flex align-items-end">
                                        <p class="m-0">เป้าหมาย ที่ 1</p>
                                    </div>
                                </div>
                                <label for="name" class="col-sm-2 col-form-label p-0 pt-2 text-end">ชื่อแผนการ</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="plan_name">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="plan" class="col-sm-2 col-form-label p-0 pt-2 text-end">ประเภทแผนการ</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select" name="target_plan">
                                        <option selected>เลือกแผนการ</option>
                                        <option value="ผลผลิต">ผลผลิต</option>
                                        <option value="ผลลัพธ์">ผลลัพธ์</option>
                                        <option value="ผลกระทบ">ผลกระทบ</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Change</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <hr>
            <div class="content">
                <table class="table display" style="width: 100%">
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
                        @if(isset($PlanAtAll) || isset($stg_id))
                            @foreach($PlanAtAll as $PlanAt)
                                @if(is_object($PlanAt))
                                    <tr>
                                        <td style="text-align: center; vertical-align: middle;">
                                            {{ $loop->index + 1 }}
                                        </td>
                                        <td>
                                            <a href="{{ route('fiscal_years', ['stg_id' => request()->query('stg_id'),'target_id' => request()->query('target_id'),'plan_id' => $PlanAt->plan_id]) }}" class="text-black text-wrap w-100">
                                                {{ $PlanAt->plan_name }}
                                            </a>
                                        </td>
                                        <td class="text-danger">
                                            รอคุย
                                        </td>
                                        <td>
                                            <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#edit_plan">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 12 12">
                                                    <path fill="#000000"
                                                        d="M10.443 1.56a1.914 1.914 0 0 0-2.707 0l-.55.551a.506.506 0 0 0-.075.074l-5.46 5.461a.5.5 0 0 0-.137.255l-.504 2.5a.5.5 0 0 0 .588.59l2.504-.5a.5.5 0 0 0 .255-.137l6.086-6.086a1.914 1.914 0 0 0 0-2.707M7.502 3.21l1.293 1.293L3.757 9.54l-1.618.324l.325-1.616zm2 .586L8.209 2.502l.234-.234A.914.914 0 1 1 9.736 3.56z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 0, 0);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm4.207 12.793-1.414 1.414L12 13.414l-2.793 2.793-1.414-1.414L10.586 12 7.793 9.207l1.414-1.414L12 10.586l2.793-2.793 1.414 1.414L13.414 12l2.793 2.793z"></path></svg>
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
        
        <div class="col-12 col-lg-12 ">
            <table class="table mt-3 my-table" >
                <tbody >
                    <tr >
                        <td class="h4 px-0">
                            <div style="width: 124px">โครงการ:</div>
                        </td>
                        <td class="h4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit itaque dolores dolore
                            veniam cum? Cupiditate!</td>
                        <td class="px-0">
                            @if (request()->has('plan_id'))
                            <a href="#" class="d-flex align-items-center text-decoration-none text-black"
                                data-bs-toggle="modal" data-bs-target="#add_project">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" viewBox="0 0 48 48">
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
            <div class="modal fade" id="add_project" tabindex="-1" aria-labelledby="add_project_label"
                aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <form method="POST" action="{{ url('ProjectAdd/' . request('plan_id')) }}">
                            @csrf
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="add_project_label">เพิ่มโครงการ ปีงบประมาณ : 2567</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="mb-3 row text-start">
                                        <label for="name" class="col-sm-3 col-form-label">ชื่อ</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="name" name="project_name">
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
                                            <input type="number" class="form-control" id="balance" name="balance">
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
                                        <label for="project_head" class="col-sm-3 col-form-label">หัวหน้าโครงการ</label>
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
                                        <label for="executive" class="col-sm-3 col-form-label">ผู้บริหารกำกับดูแล</label>
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
                                            <input type="text" class="form-control" id="name" name="Project_participants">
                                        </div>
                                        <button class="col btn btn-primary"> Add</button>
                                    </div>
                                    <div class="overflow-y-scroll px-3" style="height: 500px;">
                                        <div class="row">
                                            <label for="name" class="col col-form-label">นายศิวพล</label>
                                            <label for="name" class="col col-form-label">ใจซื่อ</label>
                                            <div class="col">
                                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40"
                                                        height="40" viewBox="0 0 32 32">
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
                                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40"
                                                        height="40" viewBox="0 0 32 32">
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Add</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <hr>

            @if (isset($success))
                {{$success}}
            @endif
            <table id="Project-Table" class="table display" style="width:100%">
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
                    @if(isset($ProjectAtAll))
                        @foreach($ProjectAtAll as $ProjectAt)
                            <tr>
                                <td><a href="#" class="text-black">{{ $ProjectAt->project_name }}</a></td>
                                <td><a href="#" class="text-black">{{ $ProjectAt->project_head }}</a></td>                                
                                <td>{{ $ProjectAt->budget_source }}</td>
                                <td>{{ $ProjectAt->budget_type }}</td>
                                <td>{{ number_format($ProjectAt->balance) }}</td>
                                {{-- <td>{{ $ProjectAt->org_name }}</td> --}}
                                <td>มว.</td>
    
                                <td>
                                    <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#edit_project_{{$loop->index}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 12 12">
                                            <path fill="#000000"
                                                d="M10.443 1.56a1.914 1.914 0 0 0-2.707 0l-.55.551a.506.506 0 0 0-.075.074l-5.46 5.461a.5.5 0 0 0-.137.255l-.504 2.5a.5.5 0 0 0 .588.59l2.504-.5a.5.5 0 0 0 .255-.137l6.086-6.086a1.914 1.914 0 0 0 0-2.707M7.502 3.21l1.293 1.293L3.757 9.54l-1.618.324l.325-1.616zm2 .586L8.209 2.502l.234-.234A.914.914 0 1 1 9.736 3.56z">
                                            </path>
                                        </svg>
                                    </a>
                                </td>
                                <td>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 0, 0);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm4.207 12.793-1.414 1.414L12 13.414l-2.793 2.793-1.414-1.414L10.586 12 7.793 9.207l1.414-1.414L12 10.586l2.793-2.793 1.414 1.414L13.414 12l2.793 2.793z"></path></svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                
                        @foreach($ProjectAtAll as $index => $ProjectAt)
                            <div class="modal fade" id="edit_project_{{ $index }}" tabindex="-1" aria-labelledby="edit_project_label_{{ $index }}" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <form action="{{ route('project.update', $ProjectAt->project_id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                        
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="edit_project_label_{{ $index }}">แก้ไขโครงการ {{ $ProjectAt->project_name }} ปีงบประมาณ : 2567</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="mb-3 row text-end">
                                                            <label for="name" class="col-sm-3 col-form-label">ชื่อ</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" id="project_name" name="project_name" value="{{ $ProjectAt->project_name }}">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row text-end">
                                                            <label for="stg" class="col-sm-3 col-form-label">ยุทธศาสตร์</label>
                                                            <div class="col-sm-9">
                                                                <select class="form-select" id="floatingSelect" name="stg" aria-label="Floating label select example">
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
                                                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                                                    <option selected>Open this select menu</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row text-end">
                                                            <label for="name" class="col-sm-3 col-form-label">งบประมาณ</label>
                                                            <div class="col-sm-9">
                                                                <input type="number" class="form-control" id="balance" value="{{ $ProjectAt->balance }}">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row text-end">
                                                            <label for="name" class="col-sm-3 col-form-label">ประเภทงบ</label>
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
                                                            <label for="name" class="col-sm-3 col-form-label">งบจาก</label>
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
                                                        <div class="mb-3 row text-end">
                                                            <label for="name" class="col-sm-3 col-form-label">หัวหน้าโครงการ</label>
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
                                                            <label for="name" class="col-sm-3 col-form-label">Advisor</label>
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
                                                            <label for="name" class="col-sm-3 col-form-label">Supervisor</label>
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
                                                            <label for="name"
                                                                class="col-sm-3 col-form-label">ผู้บริหารกำกับดูแล</label>
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
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-3 row px-3">
                                                            <label for="name" class="col-sm-3 col-form-label">ผู้ร่วมโครงการ</label>
                                                            <div class="col-sm-7">
                                                                <input type="text" class="form-control" id="name">
                                                            </div>
                                                            <button type="button" class="col-sm-2 btn btn-primary"> Add</button>
                                                        </div>
                                                        <div class="overflow-y-scroll px-3" style="height: 500px;">
                                                            <div class="row">
                                                                <label for="name" class="col-sm-5 col-form-label">นายศิวพล</label>
                                                                <label for="name" class="col-sm-5 col-form-label">ใจซื่อ</label>
                                                                <div class="col-sm-2">
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
                                                                <label for="name" class="col-sm-5 col-form-label">นายนันทกร</label>
                                                                <label for="name" class="col-sm-5 col-form-label">ธิดี</label>
                                                                <div class="col-sm-2">
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
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    @endif
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
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
