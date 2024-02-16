@extends('/layout/layout')

@section('title', 'ผู้ใช้งาน')

@section('header')
    <div class="fs-5">ผู้ใช้งาน</div>
@endsection

@section('style')
    <style>
        #org_grid{
            display: grid;
            grid-template-columns: auto auto auto auto auto;
        }
    </style>
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
                    <div class="w-100">
                        <div class="row row-cols-2 p-3">
                            <div class="mb-3 row d-flex align-items-center">
                                <label class="col-sm-4 col-form-label p-0 text-end">รูปโปรไฟล์</label>
                                <div class="col-sm-8">
                                    <input type="file" placeholder="เลือกไฟล์" name="profile">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                
                            </div>
                            <div class="mb-3 row">
                                <label for="name" class="col-sm-4 col-form-label p-0 pt-2 text-end">ชื่อ</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="name" name="first_name">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="last_name" class="col-sm-4 col-form-label p-0 pt-2 text-end">นามสกุล</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="last_name" name="last_name">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="username" class="col-sm-4 col-form-label p-0 pt-2 text-end">username</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="username" name="username">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="password" class="col-sm-4 col-form-label p-0 pt-2 text-end">password</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="password" name="password">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="email" class="col-sm-4 col-form-label p-0 pt-2 text-end">email</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="level"
                                    class="col-sm-4 col-form-label p-0 pt-2 text-end">ระดับการใช้งาน</label>
                                <div class="col-sm-8">
                                    <select class="form-select form-select-md" aria-label="Large select example" name="level">
                                        <option value="1" selected>One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="org" class="col-sm-4 col-form-label p-0 text-start">เลือกหน่วยงาน</label>
                                
                                <div id="org_grid">
                                    <div class="col mt-2">
                                        <input type="checkbox" class="me-2" name="org">กฟผ
                                        <ul>
                                            <li>
                                                <input type="checkbox" class="me-2" name="sub_org">กกน
                                            </li>
                                        </ul>
                                    </div>
                                </div>
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
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="edit_userModalLabel">แก้ไขข้อมูลผู้ใช้งาน</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="w-100">
                        <div class="row row-cols-2 p-3">
                            <div class="mb-3 row d-flex align-items-center">
                                <label class="col-sm-4 col-form-label p-0 text-end">รูปโปรไฟล์</label>
                                <div class="col-sm-8">
                                    <input type="file" placeholder="เลือกไฟล์" name="profile">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                
                            </div>
                            <div class="mb-3 row">
                                <label for="name" class="col-sm-4 col-form-label p-0 pt-2 text-end">ชื่อ</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="name" name="first_name">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="last_name" class="col-sm-4 col-form-label p-0 pt-2 text-end">นามสกุล</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="last_name" name="last_name">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="username" class="col-sm-4 col-form-label p-0 pt-2 text-end">username</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="username" name="username">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="password" class="col-sm-4 col-form-label p-0 pt-2 text-end">password</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="password" name="password">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="email" class="col-sm-4 col-form-label p-0 pt-2 text-end">email</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="level"
                                    class="col-sm-4 col-form-label p-0 pt-2 text-end">ระดับการใช้งาน</label>
                                <div class="col-sm-8">
                                    <select class="form-select form-select-md" aria-label="Large select example" name="level">
                                        <option value="1" selected>One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="org" class="col-sm-4 col-form-label p-0 text-start">เลือกหน่วยงาน</label>
                                
                                <div id="org_grid">
                                    <div class="col mt-2">
                                        <input type="checkbox" class="me-2" name="org">กฟผ
                                        <ul>
                                            <li>
                                                <input type="checkbox" class="me-2" name="sub_org">กกน
                                            </li>
                                        </ul>
                                    </div>
                                </div>
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
    <div class="bg-secondary p-2 text-white d-flex align-items-center w-100 justify-content-between mb-3">
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
    <table id="myTable" class="table" style="width:100%">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Edit</th>
                <th>status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Howard</td>
                <td>Hatfield</td>
                <td>
                    <div class="icon col-3 text-end">
                        <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#edit_user">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 12 12">
                                <path fill="#000000"
                                    d="M10.443 1.56a1.914 1.914 0 0 0-2.707 0l-.55.551a.506.506 0 0 0-.075.074l-5.46 5.461a.5.5 0 0 0-.137.255l-.504 2.5a.5.5 0 0 0 .588.59l2.504-.5a.5.5 0 0 0 .255-.137l6.086-6.086a1.914 1.914 0 0 0 0-2.707M7.502 3.21l1.293 1.293L3.757 9.54l-1.618.324l.325-1.616zm2 .586L8.209 2.502l.234-.234A.914.914 0 1 1 9.736 3.56z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </td>
                <td>
                    <span class="d-flex justify-content-center">
                        <div id="circle"
                            style="width: 30px; height: 30px; border-radius: 100%; background-color: green;border: 1px black solid;">
                        </div>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Howard</td>
                <td>Hatfield</td>
                <td>
                    <div class="icon col-3 text-end">
                        <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#edit_user">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 12 12">
                                <path fill="#000000"
                                    d="M10.443 1.56a1.914 1.914 0 0 0-2.707 0l-.55.551a.506.506 0 0 0-.075.074l-5.46 5.461a.5.5 0 0 0-.137.255l-.504 2.5a.5.5 0 0 0 .588.59l2.504-.5a.5.5 0 0 0 .255-.137l6.086-6.086a1.914 1.914 0 0 0 0-2.707M7.502 3.21l1.293 1.293L3.757 9.54l-1.618.324l.325-1.616zm2 .586L8.209 2.502l.234-.234A.914.914 0 1 1 9.736 3.56z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </td>
                <td>
                    <span class="d-flex justify-content-center">
                        <div id="circle"
                            style="width: 30px; height: 30px; border-radius: 100%; background-color: green;border: 1px black solid;">
                        </div>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Howard</td>
                <td>Hatfield</td>
                <td>
                    <div class="icon col-3 text-end">
                        <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#edit_user">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 12 12">
                                <path fill="#000000"
                                    d="M10.443 1.56a1.914 1.914 0 0 0-2.707 0l-.55.551a.506.506 0 0 0-.075.074l-5.46 5.461a.5.5 0 0 0-.137.255l-.504 2.5a.5.5 0 0 0 .588.59l2.504-.5a.5.5 0 0 0 .255-.137l6.086-6.086a1.914 1.914 0 0 0 0-2.707M7.502 3.21l1.293 1.293L3.757 9.54l-1.618.324l.325-1.616zm2 .586L8.209 2.502l.234-.234A.914.914 0 1 1 9.736 3.56z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </td>
                <td>
                    <span class="d-flex justify-content-center">
                        <div id="circle"
                            style="width: 30px; height: 30px; border-radius: 100%; background-color: green;border: 1px black solid;">
                        </div>
                    </span>
                </td>
            </tr>
         
        </tbody>
    </table>
    </div>
    <script>
        new DataTable('#myTable');

        //this is a circle color change Active and disable
        function toggleColor(circle) {
            if (circle.style.backgroundColor === 'red') {
                circle.style.backgroundColor = 'green';
            } else {
                circle.style.backgroundColor = 'red';
            }
        }

        const circles = document.querySelectorAll('#circle');

        circles.forEach(circle => {
            circle.addEventListener("click", () => {
                toggleColor(circle);
            });
        });
    </script>
@endsection
