@extends('/layout/layout')

@section('title', 'หน่วยงาน')

@section('header')
    <div class="fs-5">หน่วยงาน</div>
@endsection
@section('style')
@endsection
@section('content')
    <div class="modal fade" id="add_user" tabindex="-1" aria-labelledby="add_userModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="add_userModalLabel">เพิ่มหน่วยงาน</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="w-100">
                            <div class="mb-3 row">
                                <label for="plane" class="col-sm-2 col-form-label p-0 pt-2 text-end">ชื่อ</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="plane">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="plane"
                                    class="col-sm-2 col-form-label p-0 pt-2 text-end">ภายใต้</label>
                                <div class="col-sm-10">
                                    <select class="form-select form-select-md" aria-label="Large select example">
                                        <option value="1" selected>-</option>
                                        <option value="2">one</option>
                                        <option value="3">two</option>
                                    </select>
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
    
    <div class="modal fade" id="edit_user" tabindex="-1" aria-labelledby="edit_userModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="edit_userModalLabel">แก้ไขหน่วยงาน</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="w-100">
                            <div class="mb-3 row">
                                <label for="plane" class="col-sm-2 col-form-label p-0 pt-2 text-end">ชื่อ</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="plane">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="plane"
                                    class="col-sm-2 col-form-label p-0 pt-2 text-end">ภายใต้</label>
                                <div class="col-sm-10">
                                    <select class="form-select form-select-md" aria-label="Large select example">
                                        <option value="1" selected>-</option>
                                        <option value="2">one</option>
                                        <option value="3">two</option>
                                    </select>
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

    <div class="bg-secondary p-2 text-white d-flex align-items-center w-100 justify-content-between mb-3" data-bs-toggle="modal" data-bs-target="#add_user">
        <p class="m-0 fs-5">เพิ่มหน่วยงาน</p>
        <a href="#" >
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" viewBox="0 0 48 48">
                <circle cx="24" cy="24" r="21" fill="#4CAF50"></circle>
                <g fill="#fff">
                    <path d="M21 14h6v20h-6z"></path>
                    <path d="M14 21h20v6H14z"></path>
                </g>
            </svg>
        </a>
    </div>
    <table id="myTable" class="table" style="width:100%">
        <thead>
            <tr>
                <th>หน่วยงาน</th>
                <th>หน่วยงานย่อย</th>
                <th>แก้ไข</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>กฟผ.</td>
                <td>
                    <ul class="m-0 p-0">
                        <li>
                            หน่วยงานย่อยที่ 1
                        </li>
                        <li>
                            หน่วยงานย่อยที่ 2
                        </li>
                        <li>
                            หน่วยงานย่อยที่ 3
                        </li>
                    </ul>
                </td>
                <td>
                    <div class="icon col-3 text-end">
                        <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#edit_user">
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
    <script>
        new DataTable('#myTable');
    </script>
@endsection
