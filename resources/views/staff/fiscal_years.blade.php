@extends('/layout/layout')

@section('title', 'ปีงบประมาณ')

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
        <a href="#" class="d-flex align-items-center text-decoration-none text-black" data-bs-toggle="modal"
            data-bs-target="#add_stg">
            <div class="h4 me-3 my-0">
                ยุทธศาสตร์
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" viewBox="0 0 48 48">
                <circle cx="24" cy="24" r="21" fill="#4CAF50"></circle>
                <g fill="#fff">
                    <path d="M21 14h6v20h-6z"></path>
                    <path d="M14 21h20v6H14z"></path>
                </g>
            </svg>
        </a>
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
                            <div class="mb-3 row">
                                <label for="plan" class="col-sm-2 col-form-label p-0 pt-2 text-end">แผนการ</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select" name="target_plan">
                                        <option selected>เลือกแผนการ</option>
                                        <option value="ผลผลิต">ผลผลิต</option>
                                        <option value="ผลลัพธ์">ผลลัพธ์</option>
                                        <option value="ผลกระทบ">ผลกระทบ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row text-end">
                                <label for="cost" class="col-sm-2 col-form-label p-0 pt-2">งบประมาณ</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="cost" name="cost">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
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


    <div class="h4 my-3">
        ยุทธศาสตร์ : {{ isset($STG->name) ? $STG->name : '' }}
    </div>        
    <div class="row row-cols-auto">
        <div class="col-12 col-lg-6 ">
            <div class="header d-flex justify-content-between align-items-center">
                <div class="h4 m-0">เป้า : </div>
                @if (request()->has('stg_id'))
                    <a href="" data-bs-toggle="modal" data-bs-target="#add_target">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" viewBox="0 0 48 48">
                            <circle cx="24" cy="24" r="21" fill="#4CAF50"></circle>
                            <g fill="#fff">
                                <path d="M21 14h6v20h-6z"></path>
                                <path d="M14 21h20v6H14z"></path>
                            </g>
                        </svg>
                    </a>
                @endif
            </div>
            <div class="modal fade " id="add_target" tabindex="-1" aria-labelledby="add_target_label" aria-hidden="true">
                <div class="modal-dialog">
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
                                    <label for="name" class="col-sm-2 col-form-label p-0 pt-2 text-end">ชื่อเป้า</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="target_name">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
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
                                ชื่อเป้า
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
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-12 col-lg-6 ">
            <div class="header d-flex justify-content-between align-items-center">
                <div class="h4 m-0">แผน : </div>
                @if (request()->has('target_id'))
                    <a href="" data-bs-toggle="modal" data-bs-target="#add_plan">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" viewBox="0 0 48 48">
                            <circle cx="24" cy="24" r="21" fill="#4CAF50"></circle>
                            <g fill="#fff">
                                <path d="M21 14h6v20h-6z"></path>
                                <path d="M14 21h20v6H14z"></path>
                            </g>
                        </svg>
                    </a>
                @endif
            </div>
            <div class="modal fade " id="add_plan" tabindex="-1" aria-labelledby="add_plan_label" aria-hidden="true">
                <div class="modal-dialog">
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
                                    <label for="name" class="col-sm-2 col-form-label p-0 pt-2 text-end">ชื่อแผน</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="plan_name">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="plan" class="col-sm-2 col-form-label p-0 pt-2 text-end">แผนการ</label>
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
                                <button type="submit" class="btn btn-primary">Save changes</button>
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
                                ชื่อแผน
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
                                            <a href="{{ route('fiscal_years', ['stg_id' => request()->query('stg_id'),'target_id' => request()->query('stg_id'),'plan_id' => $PlanAt->plan_id]) }}" class="text-black text-wrap w-100">
                                                {{ $PlanAt->plan_name }}
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
            <div class="header d-flex justify-content-between align-items-center">
                <div class="h4 m-0">โครงการ : </div>
                @if (request()->has('plan_id'))
                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_project">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" viewBox="0 0 48 48">
                            <circle cx="24" cy="24" r="21" fill="#4CAF50"></circle>
                            <g fill="#fff">
                                <path d="M21 14h6v20h-6z"></path>
                                <path d="M14 21h20v6H14z"></path>
                            </g>
                        </svg>
                    </a>
                @endif
            </div>
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
                                            <label for="name" class="col-sm-3 col-form-label">งบประมาณ</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" id="balance" name="balance">
                                            </div>
                                        </div>
                                        <div class="mb-3 row text-start">
                                            <label for="budget_type" class="col-sm-3 col-form-label">ประเภทงบ</label>
                                            <div class="col-sm-9">
                                                <select class="form-select" id="budget_type"  name="budget_type"
                                                    aria-label="Floating label select example">
                                                    <option selected>Open this select menu</option>
                                                    <option value="งบลงทุน">งบลงทุน</option>
                                                    <option value="งบลงเล">งบลงเล</option>
                                                    <option value="งบลงใจ">งบลงใจ</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row text-start">
                                            <label for="budget_source" class="col-sm-3 col-form-label">งบจาก</label>
                                            <div class="col-sm-9">
                                                <select class="form-select" id="budget_source" name="budget_source"
                                                    aria-label="Floating label select example">
                                                    <option selected>Open this select menu</option>
                                                    <option value="มว">มว</option>
                                                    <option value="รฟ">รฟ</option>
                                                    <option value="คซ">คซ</option>
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
                                                <label for="name" class="col-sm-5 col-form-label">นายศิวพล</label>
                                                <label for="name" class="col-sm-5 col-form-label">ใจซื่อ</label>
                                                <div class="col-sm-2">
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
                                                <label for="name" class="col-sm-5 col-form-label">นายนันทกร</label>
                                                <label for="name" class="col-sm-5 col-form-label">ธิดี</label>
                                                <div class="col-sm-2">
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
                                <button type="submit" class="btn btn-success">Create</button>
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#edit_project_{{ $loop->index }}" >
                                        <svg class="d-flex align-items-center" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                            <path fill="#000000" d="m11.4 18.161l7.396-7.396a10.289 10.289 0 0 1-3.326-2.234a10.29 10.29 0 0 1-2.235-3.327L5.839 12.6c-.577.577-.866.866-1.114 1.184a6.556 6.556 0 0 0-.749 1.211c-.173.364-.302.752-.56 1.526l-1.362 4.083a1.06 1.06 0 0 0 1.342 1.342l4.083-1.362c.775-.258 1.162-.387 1.526-.56c.43-.205.836-.456 1.211-.749c.318-.248.607-.537 1.184-1.114m9.448-9.448a3.932 3.932 0 0 0-5.561-5.561l-.887.887l.038.111a8.754 8.754 0 0 0 2.092 3.32a8.754 8.754 0 0 0 3.431 2.13z"></path>
                                        </svg>
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
                                                <h1 class="modal-title fs-5" id="edit_project_label_{{ $index }}">แก้ไขโครงการ ... ปีงบประมาณ : 2567</h1>
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
                                                            <button class="col-sm-2 btn btn-primary"> Add</button>
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
