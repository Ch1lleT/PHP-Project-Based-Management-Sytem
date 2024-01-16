@extends('/layout/layout')

@section('title', 'ปีงบประมาณ')

@section('header')

    <div class="w-100 d-flex align-items-center">
        <div class="dropdown fs-6 d-flex align-items-center">
            <span class="fs-5 mx-2">ปีงบประมาณ</span>

            <select class="form-select p-0 px-5 h-50" id="floatingSelect">
                {{-- <option >Open this select menu</option> --}}
                <option value="1" selected>One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
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
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="add_stg_label">เพิ่มยุทธศาสตร์ ปีงบประมาณ : 2567</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body row">
                        <div class="mb-3 row ">
                            <label for="name" class="col-sm-2 col-form-label p-0 pt-2 text-end">ชื่อ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="plane" class="col-sm-2 col-form-label p-0 pt-2 text-end">แผนการ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="plane">
                            </div>
                        </div>
                        <div class="mb-3 row text-end">
                            <label for="cost" class="col-sm-2 col-form-label p-0 pt-2">งบประมาณ</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="cost">
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
    </div>
    <div class="">
        <ul class="row p-0 m-0 d-flex gap-2  ">
            <li class="col-xs-6 col-md-4 col-lg-2 d-flex align-items-center fs-6">
                <a class="btn btn-secondary w-100">ยุทธศาสตร์ที่ 1</a>
            </li>
            <li class="col-xs-6 col-md-4 col-lg-2 d-flex align-items-center fs-6">
                <a class="btn btn-secondary w-100">ยุทธศาสตร์ที่ 1</a>
            </li>
            <li class="col-xs-6 col-md-4 col-lg-2 d-flex align-items-center fs-6">
                <a class="btn btn-secondary w-100">ยุทธศาสตร์ที่ 1</a>
            </li>
            <li class="col-xs-6 col-md-4 col-lg-2 d-flex align-items-center fs-6">
                <a class="btn btn-secondary w-100">ยุทธศาสตร์ที่ 1</a>
            </li>
            <li class="col-xs-6 col-md-4 col-lg-2 d-flex align-items-center fs-6">
                <a class="btn btn-secondary w-100">ยุทธศาสตร์ที่ 1</a>
            </li>
            <li class="col-xs-6 col-md-4 col-lg-2 d-flex align-items-center fs-6">
                <a class="btn btn-secondary w-100">ยุทธศาสตร์ที่ 1</a>
            </li>
            <li class="col-xs-6 col-md-4 col-lg-2 d-flex align-items-center fs-6">
                <a class="btn btn-secondary w-100">ยุทธศาสตร์ที่ 1</a>
            </li>
            <li class="col-xs-6 col-md-4 col-lg-2 d-flex align-items-center fs-6">
                <a class="btn btn-secondary w-100">ยุทธศาสตร์ที่ 1</a>
            </li>
            <li class="col-xs-6 col-md-4 col-lg-2 d-flex align-items-center fs-6">
                <a class="btn btn-secondary w-100">ยุทธศาสตร์ที่ 1</a>
            </li>
            <li class="col-xs-6 col-md-4 col-lg-2 d-flex align-items-center fs-6">
                <a class="btn btn-secondary w-100">ยุทธศาสตร์ที่ 1</a>
            </li>

        </ul>
    </div>
    <div class="h4 my-3">
        ยุทธศาสตร์ :
    </div>
    <div class="row">
        <div class="col-3">
            <div class="header d-flex justify-content-between align-items-center">
                <div class="h4 m-0">แผน</div>
                <a href="" data-bs-toggle="modal"
                data-bs-target="#add_plane">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" viewBox="0 0 48 48">
                        <circle cx="24" cy="24" r="21" fill="#4CAF50"></circle>
                        <g fill="#fff">
                            <path d="M21 14h6v20h-6z"></path>
                            <path d="M14 21h20v6H14z"></path>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="modal fade" id="add_plane" tabindex="-1" aria-labelledby="add_plane_label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="add_plane_label">เพิ่มแผนงาน ปีงบประมาณ : 2567</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body row">
                            <div class="mb-3 row ">
                                <label for="name" class="col-sm-2 col-form-label p-0 pt-2 text-end">ชื่อ</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="plane" class="col-sm-2 col-form-label p-0 pt-2 text-end">แผนการ</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="plane">
                                </div>
                            </div>
                            <div class="mb-3 row text-end">
                                <label for="cost" class="col-sm-2 col-form-label p-0 pt-2">งบประมาณ</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="cost">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="content">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>โครงการ</td>
                        </tr>
                        <tr>
                            <td>โครงการ</td>
                        </tr>
                        <tr>
                            <td>โครงการ</td>
                        </tr>
                        <tr>
                            <td>โครงการ</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-9">
            <div class="header d-flex justify-content-between align-items-center">
                <div class="h4 m-0">โครงการ</div>
                <a href="#" data-bs-toggle="modal" data-bs-target="#add_project">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" viewBox="0 0 48 48">
                        <circle cx="24" cy="24" r="21" fill="#4CAF50"></circle>
                        <g fill="#fff">
                            <path d="M21 14h6v20h-6z"></path>
                            <path d="M14 21h20v6H14z"></path>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="modal fade" id="add_project" tabindex="-1" aria-labelledby="add_project_label"
                aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="add_project_label">เพิ่มโครงการ ปีงบประมาณ : 2567</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3 row text-end">
                                        <label for="name" class="col-sm-3 col-form-label">ชื่อ</label>
                                        <div class="col-sm-9" >
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                    </div>
                                    <div class="mb-3 row text-end">
                                        <label for="stg" class="col-sm-3 col-form-label">ยุทธศาสตร์</label>
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
                                                <input type="number" class="form-control" id="name">
                                        </div>
                                    </div>
                                    <div class="mb-3 row text-end">
                                        <label for="name" class="col-sm-3 col-form-label">ประเภทงบ</label>
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
                                        <label for="name" class="col-sm-3 col-form-label">งบจาก</label>
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
                                        <label for="name" class="col-sm-3 col-form-label">หน่วยงาน</label>
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
                                        <label for="name" class="col-sm-3 col-form-label">หัวหน้าโครงการ</label>
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
                                        <label for="name" class="col-sm-3 col-form-label">Advisor</label>
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
                                        <label for="name" class="col-sm-3 col-form-label">Supervisor</label>
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
                                        <label for="name" class="col-sm-3 col-form-label">ผู้บริหารกำกับดูแล</label>
                                        <div class="col-sm-9">
                                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
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
                                            <label for="name" class="col-sm-5 col-form-label">นายสมหมอย</label>
                                            <label for="name" class="col-sm-5 col-form-label">นำหอยหมี</label>
                                            <div class="col-sm-2">
                                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32"><path fill="#FC0005" d="M7.219 5.781L5.78 7.22L14.563 16L5.78 24.781l1.44 1.439L16 17.437l8.781 8.782l1.438-1.438L17.437 16l8.782-8.781L24.78 5.78L16 14.563z"></path></svg></a>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="row">
                                            <label for="name" class="col-sm-5 col-form-label">นายสมหมอย</label>
                                            <label for="name" class="col-sm-5 col-form-label">นำหอยหมี</label>
                                            <div class="col-sm-2">
                                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32"><path fill="#FC0005" d="M7.219 5.781L5.78 7.22L14.563 16L5.78 24.781l1.44 1.439L16 17.437l8.781 8.782l1.438-1.438L17.437 16l8.782-8.781L24.78 5.78L16 14.563z"></path></svg></a>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="row">
                                            <label for="name" class="col-sm-5 col-form-label">นายสมหมอย</label>
                                            <label for="name" class="col-sm-5 col-form-label">นำหอยหมี</label>
                                            <div class="col-sm-2">
                                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32"><path fill="#FC0005" d="M7.219 5.781L5.78 7.22L14.563 16L5.78 24.781l1.44 1.439L16 17.437l8.781 8.782l1.438-1.438L17.437 16l8.782-8.781L24.78 5.78L16 14.563z"></path></svg></a>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="row">
                                            <label for="name" class="col-sm-5 col-form-label">นายสมหมอย</label>
                                            <label for="name" class="col-sm-5 col-form-label">นำหอยหมี</label>
                                            <div class="col-sm-2">
                                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32"><path fill="#FC0005" d="M7.219 5.781L5.78 7.22L14.563 16L5.78 24.781l1.44 1.439L16 17.437l8.781 8.782l1.438-1.438L17.437 16l8.782-8.781L24.78 5.78L16 14.563z"></path></svg></a>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="row">
                                            <label for="name" class="col-sm-5 col-form-label">นายสมหมอย</label>
                                            <label for="name" class="col-sm-5 col-form-label">นำหอยหมี</label>
                                            <div class="col-sm-2">
                                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32"><path fill="#FC0005" d="M7.219 5.781L5.78 7.22L14.563 16L5.78 24.781l1.44 1.439L16 17.437l8.781 8.782l1.438-1.438L17.437 16l8.782-8.781L24.78 5.78L16 14.563z"></path></svg></a>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="row">
                                            <label for="name" class="col-sm-5 col-form-label">นายสมหมอย</label>
                                            <label for="name" class="col-sm-5 col-form-label">นำหอยหมี</label>
                                            <div class="col-sm-2">
                                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32"><path fill="#FC0005" d="M7.219 5.781L5.78 7.22L14.563 16L5.78 24.781l1.44 1.439L16 17.437l8.781 8.782l1.438-1.438L17.437 16l8.782-8.781L24.78 5.78L16 14.563z"></path></svg></a>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="row">
                                            <label for="name" class="col-sm-5 col-form-label">นายสมหมอย</label>
                                            <label for="name" class="col-sm-5 col-form-label">นำหอยหมี</label>
                                            <div class="col-sm-2">
                                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32"><path fill="#FC0005" d="M7.219 5.781L5.78 7.22L14.563 16L5.78 24.781l1.44 1.439L16 17.437l8.781 8.782l1.438-1.438L17.437 16l8.782-8.781L24.78 5.78L16 14.563z"></path></svg></a>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="row">
                                            <label for="name" class="col-sm-5 col-form-label">นายสมหมอย</label>
                                            <label for="name" class="col-sm-5 col-form-label">นำหอยหมี</label>
                                            <div class="col-sm-2">
                                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32"><path fill="#FC0005" d="M7.219 5.781L5.78 7.22L14.563 16L5.78 24.781l1.44 1.439L16 17.437l8.781 8.782l1.438-1.438L17.437 16l8.782-8.781L24.78 5.78L16 14.563z"></path></svg></a>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="row">
                                            <label for="name" class="col-sm-5 col-form-label">นายสมหมอย</label>
                                            <label for="name" class="col-sm-5 col-form-label">นำหอยหมี</label>
                                            <div class="col-sm-2">
                                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32"><path fill="#FC0005" d="M7.219 5.781L5.78 7.22L14.563 16L5.78 24.781l1.44 1.439L16 17.437l8.781 8.782l1.438-1.438L17.437 16l8.782-8.781L24.78 5.78L16 14.563z"></path></svg></a>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="row">
                                            <label for="name" class="col-sm-5 col-form-label">นายสมหมอย</label>
                                            <label for="name" class="col-sm-5 col-form-label">นำหอยหมี</label>
                                            <div class="col-sm-2">
                                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32"><path fill="#FC0005" d="M7.219 5.781L5.78 7.22L14.563 16L5.78 24.781l1.44 1.439L16 17.437l8.781 8.782l1.438-1.438L17.437 16l8.782-8.781L24.78 5.78L16 14.563z"></path></svg></a>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="row">
                                            <label for="name" class="col-sm-5 col-form-label">นายสมหมอย</label>
                                            <label for="name" class="col-sm-5 col-form-label">นำหอยหมี</label>
                                            <div class="col-sm-2">
                                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32"><path fill="#FC0005" d="M7.219 5.781L5.78 7.22L14.563 16L5.78 24.781l1.44 1.439L16 17.437l8.781 8.782l1.438-1.438L17.437 16l8.782-8.781L24.78 5.78L16 14.563z"></path></svg></a>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="content overflow-x-scroll">
                <table class="table ">
                    <thead>
                        <tr>
                            <th scope="col">ชื่อโครงการ</th>
                            <th scope="col">ผู้ดูแลโครงการ</th>
                            <th scope="col">งบจาก</th>
                            <th scope="col">งบประเภท</th>
                            <th scope="col">งบประมาณ</th>
                            <th scope="col">หน่วยงาน</th>
                            <th scope="col">แก้ไข</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">โครงการ</th>
                            <td>ศิวพล</td>
                            <td>เมีย</td>
                            <td>เบี้ยครองชีพ</td>
                            <td>10</td>
                            <td>ครอบครัว</td>
                            <td><a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                        viewBox="0 0 12 12">
                                        <path fill="#000000"
                                            d="M10.443 1.56a1.914 1.914 0 0 0-2.707 0l-.55.551a.506.506 0 0 0-.075.074l-5.46 5.461a.5.5 0 0 0-.137.255l-.504 2.5a.5.5 0 0 0 .588.59l2.504-.5a.5.5 0 0 0 .255-.137l6.086-6.086a1.914 1.914 0 0 0 0-2.707M7.502 3.21l1.293 1.293L3.757 9.54l-1.618.324l.325-1.616zm2 .586L8.209 2.502l.234-.234A.914.914 0 1 1 9.736 3.56z">
                                        </path>
                                    </svg>
                                </a></td>
                        </tr>
                        <tr>
                            <th scope="row">โครงการ</th>
                            <td>ศิวพล</td>
                            <td>เมีย</td>
                            <td>เบี้ยครองชีพ</td>
                            <td>10</td>
                            <td>ครอบครัว</td>
                            <td><a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                        viewBox="0 0 12 12">
                                        <path fill="#000000"
                                            d="M10.443 1.56a1.914 1.914 0 0 0-2.707 0l-.55.551a.506.506 0 0 0-.075.074l-5.46 5.461a.5.5 0 0 0-.137.255l-.504 2.5a.5.5 0 0 0 .588.59l2.504-.5a.5.5 0 0 0 .255-.137l6.086-6.086a1.914 1.914 0 0 0 0-2.707M7.502 3.21l1.293 1.293L3.757 9.54l-1.618.324l.325-1.616zm2 .586L8.209 2.502l.234-.234A.914.914 0 1 1 9.736 3.56z">
                                        </path>
                                    </svg>
                                </a></td>
                        </tr>
                        <tr>
                            <th scope="row">โครงการ</th>
                            <td>ศิวพล</td>
                            <td>เมีย</td>
                            <td>เบี้ยครองชีพ</td>
                            <td>10</td>
                            <td>ครอบครัว</td>
                            <td><a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                        viewBox="0 0 12 12">
                                        <path fill="#000000"
                                            d="M10.443 1.56a1.914 1.914 0 0 0-2.707 0l-.55.551a.506.506 0 0 0-.075.074l-5.46 5.461a.5.5 0 0 0-.137.255l-.504 2.5a.5.5 0 0 0 .588.59l2.504-.5a.5.5 0 0 0 .255-.137l6.086-6.086a1.914 1.914 0 0 0 0-2.707M7.502 3.21l1.293 1.293L3.757 9.54l-1.618.324l.325-1.616zm2 .586L8.209 2.502l.234-.234A.914.914 0 1 1 9.736 3.56z">
                                        </path>
                                    </svg>
                                </a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
