@extends('/layout/layout')

@section('title', 'ผู้ใช้งาน')

@section('header')
    <div class="fs-5">ผู้ใช้งาน</div>
@endsection

@section('content')
    <div class="modal fade" id="add_user" tabindex="-1" aria-labelledby="add_userModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="add_userModalLabel">เพิ่มรายชื่อผู้ใช้งาน</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row w-100">
                        <div class="col-6 border-end">
                            <div class="mb-3 row d-flex align-items-center">
                                <label for="plane" class="col-sm-4 col-form-label p-0 text-end">รูปโปรไฟล์</label>
                                <div class="col-sm-8">
                                    <input type="file" placeholder="เลือกไฟล์">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="plane" class="col-sm-4 col-form-label p-0 pt-2 text-end">ชื่อ</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="plane">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="plane" class="col-sm-4 col-form-label p-0 pt-2 text-end">นามสกุล</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="plane">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="plane" class="col-sm-4 col-form-label p-0 pt-2 text-end">usernamer</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="plane">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="plane" class="col-sm-4 col-form-label p-0 pt-2 text-end">password</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="plane">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="plane" class="col-sm-4 col-form-label p-0 pt-2 text-end">email</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="plane">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="plane" class="col-sm-4 col-form-label p-0 pt-2 text-end">ระดับการใช้งาน</label>
                                <div class="col-sm-8">
                                    <select class="form-select form-select-md" aria-label="Large select example">
                                        <option value="1" selected>One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                           
                        </div>
                        <div class="col-6 row">
                            <label for="plane" class="col-sm-4 col-form-label p-0 text-end">เลือกหน่วยงาน</label>
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
    <div class="w-70">
        <div class="w-100 row mb-3">
            <label for="name" class="col-sm-1 col-form-label">ชื่อ</label>
            <div class="col-sm-3">
                <input type="password" class="form-control" id="name">
            </div>
            <label for="username" class="col-sm-1 col-form-label">Username</label>
            <div class="col-sm-3">
                <input type="password" class="form-control" id="uername">
            </div>
            <label for="agency" class="col-sm-2 col-form-label text-end">หน่วยงาน</label>
            <div class="col-sm-2">
                <select class="form-select form-select-md" aria-label="Large select example">
                    <option value="1" selected>One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            {{-- <label for="floatingSelect">ปีงบประมาณ</label> --}}
        </div>
        <div class="bg-secondary p-2 text-white d-flex align-items-center w-100 justify-content-between">
            <p class="m-0 fs-5">รายชื่อผู้ใช้งาน</p>
            <a href="#" data-bs-toggle="modal" data-bs-target="#add_user">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" viewBox="0 0 48 48">
                    <circle cx="24" cy="24" r="21" fill="#4CAF50"></circle>
                    <g fill="#fff">
                        <path d="M21 14h6v20h-6z"></path>
                        <path d="M14 21h20v6H14z"></path>
                    </g>
                </svg>
            </a>
        </div>
        <table class="table">
            <tbody>
                <tr>
                    <td>Mark</td>
                    <td>Nakuy</td>
                    <td>
                        <div class="icon col-3 text-end">
                            <a href="#" class="text-decoration-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 12 12">
                                    <path fill="#000000"
                                        d="M10.443 1.56a1.914 1.914 0 0 0-2.707 0l-.55.551a.506.506 0 0 0-.075.074l-5.46 5.461a.5.5 0 0 0-.137.255l-.504 2.5a.5.5 0 0 0 .588.59l2.504-.5a.5.5 0 0 0 .255-.137l6.086-6.086a1.914 1.914 0 0 0 0-2.707M7.502 3.21l1.293 1.293L3.757 9.54l-1.618.324l.325-1.616zm2 .586L8.209 2.502l.234-.234A.914.914 0 1 1 9.736 3.56z">
                                    </path>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24">
                                    <path fill="#FC0005"
                                        d="M19 4h-3.5l-1-1h-5l-1 1H5v2h14M6 19a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7H6z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Jacob</td>
                    <td>nangHee</td>
                    <td>
                        <div class="icon col-3 text-end">
                            <a href="#" class="text-decoration-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 12 12">
                                    <path fill="#000000"
                                        d="M10.443 1.56a1.914 1.914 0 0 0-2.707 0l-.55.551a.506.506 0 0 0-.075.074l-5.46 5.461a.5.5 0 0 0-.137.255l-.504 2.5a.5.5 0 0 0 .588.59l2.504-.5a.5.5 0 0 0 .255-.137l6.086-6.086a1.914 1.914 0 0 0 0-2.707M7.502 3.21l1.293 1.293L3.757 9.54l-1.618.324l.325-1.616zm2 .586L8.209 2.502l.234-.234A.914.914 0 1 1 9.736 3.56z">
                                    </path>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24">
                                    <path fill="#FC0005"
                                        d="M19 4h-3.5l-1-1h-5l-1 1H5v2h14M6 19a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7H6z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Larry the Bird</td>
                    <td>Heedok</td>
                    <td>
                        <div class="icon col-3 text-end">
                            <a href="#" class="text-decoration-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 12 12">
                                    <path fill="#000000"
                                        d="M10.443 1.56a1.914 1.914 0 0 0-2.707 0l-.55.551a.506.506 0 0 0-.075.074l-5.46 5.461a.5.5 0 0 0-.137.255l-.504 2.5a.5.5 0 0 0 .588.59l2.504-.5a.5.5 0 0 0 .255-.137l6.086-6.086a1.914 1.914 0 0 0 0-2.707M7.502 3.21l1.293 1.293L3.757 9.54l-1.618.324l.325-1.616zm2 .586L8.209 2.502l.234-.234A.914.914 0 1 1 9.736 3.56z">
                                    </path>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24">
                                    <path fill="#FC0005"
                                        d="M19 4h-3.5l-1-1h-5l-1 1H5v2h14M6 19a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7H6z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        {{-- <div class="icon col-3 text-end">
                    <a href="#" class="text-decoration-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 12 12">
                            <path fill="#000000"
                                d="M10.443 1.56a1.914 1.914 0 0 0-2.707 0l-.55.551a.506.506 0 0 0-.075.074l-5.46 5.461a.5.5 0 0 0-.137.255l-.504 2.5a.5.5 0 0 0 .588.59l2.504-.5a.5.5 0 0 0 .255-.137l6.086-6.086a1.914 1.914 0 0 0 0-2.707M7.502 3.21l1.293 1.293L3.757 9.54l-1.618.324l.325-1.616zm2 .586L8.209 2.502l.234-.234A.914.914 0 1 1 9.736 3.56z">
                            </path>
                        </svg>
                    </a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24">
                            <path fill="#FC0005" d="M19 4h-3.5l-1-1h-5l-1 1H5v2h14M6 19a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7H6z">
                            </path>
                        </svg>
                    </a>
                </div> --}}
    </div>
@endsection
