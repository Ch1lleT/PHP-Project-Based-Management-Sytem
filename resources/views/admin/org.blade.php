@extends('/layout/layout')

@section('title', 'หน่วยงาน')

@section('header')
    <div class="fs-5">หน่วยงาน</div>
@endsection


@section('content')
    {{-- {{dd($OrgAll)}} --}}
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
                            <label for="plan" class="col-sm-2 col-form-label p-0 pt-2 text-end">ชื่อ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="plan" name="name_org">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="plane" class="col-sm-2 col-form-label p-0 pt-2 text-end">ภายใต้</label>
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
                            <label for="plan" class="col-sm-2 col-form-label p-0 pt-2 text-end">ชื่อ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="plan" name="name_org">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="plane" class="col-sm-2 col-form-label p-0 pt-2 text-end">ภายใต้</label>
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

    <div class="bg-secondary p-2 text-white d-flex align-items-center w-100 justify-content-between mb-3"
        data-bs-toggle="modal" data-bs-target="#add_user">
        <p class="m-0 fs-5">เพิ่มหน่วยงาน</p>
        <a href="#">
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
                <th style="width: 40px;">แก้ไข</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($OrgAll as $org)
                <tr>
                    {{-- {{dd($org)}} --}}

                    <td>{{ $org->org_name }}</td>
                    <td>

                        <ul class="m-0 p-0">
                            @foreach ($org->sub_org as $so)
                                <li>
                                    {{ $so->org_name }}
                                </li>
                            @endforeach
                        </ul>
                    </td>
                    <td class="">
                        <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#edit_user">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 12 12">
                                <path fill="#000000"
                                    d="M10.443 1.56a1.914 1.914 0 0 0-2.707 0l-.55.551a.506.506 0 0 0-.075.074l-5.46 5.461a.5.5 0 0 0-.137.255l-.504 2.5a.5.5 0 0 0 .588.59l2.504-.5a.5.5 0 0 0 .255-.137l6.086-6.086a1.914 1.914 0 0 0 0-2.707M7.502 3.21l1.293 1.293L3.757 9.54l-1.618.324l.325-1.616zm2 .586L8.209 2.502l.234-.234A.914.914 0 1 1 9.736 3.56z">
                                </path>
                            </svg>
                        </a>
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
            @endforeach
        </tbody>
    </table>
    <script>
        new DataTable('#myTable');
    </script>
@endsection
