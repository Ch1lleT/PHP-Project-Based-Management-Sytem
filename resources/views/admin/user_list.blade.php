@extends('/layout/layout')

@section('title', 'ผู้ใช้งาน')

@section('header')
    <div class="fs-5">ผู้ใช้งาน</div>
@endsection

@section('style')
    <style>
        #org_grid {
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
                            {{-- <div class="mb-3 row">
                                <label for="email" class="col-sm-4 col-form-label p-0 pt-2 text-end">email</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="email" name="email" >
                                </div>
                            </div> --}}
                            <div class="mb-3 row">
                                <label for="level"
                                    class="col-sm-4 col-form-label p-0 pt-2 text-end">ระดับการใช้งาน</label>
                                <div class="col-sm-8">
                                    <select class="form-select form-select-md" aria-label="Large select example"
                                        name="level">
                                        <option value="1">Admin</option>
                                        <option value="2">Power user</option>
                                        <option value="3">Supervisor</option>
                                        <option value="4">Executive</option>
                                        <option value="5" selected>User</option>
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

    @foreach ($UserAll as $index => $user)
        <div class="modal fade" id="edit_user_{{ $index }}" tabindex="-1" aria-labelledby="edit_userModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="edit_userModalLabel">แก้ไขข้อมูลผู้ใช้งาน</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ url('api/user/update/' . $user->user_id) }}"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="w-100">
                                <div class="row row-cols-2 p-3">
                                    <div class="mb-3 row d-flex align-items-center">
                                        <label class="col-sm-4 col-form-label p-0 text-end">รูปโปรไฟล์</label>
                                        <div class="col-sm-8">
                                            <input type="file" class="form-control" id="image" name="image">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">

                                    </div>
                                    <div class="mb-3 row">
                                        <label for="name"
                                            class="col-sm-4 col-form-label p-0 pt-2 text-end">ชื่อ</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="name" name="first_name"
                                                value="{{ $user->first_name }}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="last_name"
                                            class="col-sm-4 col-form-label p-0 pt-2 text-end">นามสกุล</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="last_name" name="last_name"
                                                value="{{ $user->last_name }}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="username"
                                            class="col-sm-4 col-form-label p-0 pt-2 text-end">username</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="username" name="username"
                                                value="{{ $user->username }}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="password"
                                            class="col-sm-4 col-form-label p-0 pt-2 text-end">password</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="password" name="password"
                                                placeholder="New password">
                                        </div>
                                    </div>
                                    {{-- <div class="mb-3 row">
                                        <label for="email" class="col-sm-4 col-form-label p-0 pt-2 text-end">email</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="email" name="email"
                                                value="{{ $user->email }}">
                                        </div>
                                    </div> --}}
                                    <div class="mb-3 row">
                                        <label for="level"
                                            class="col-sm-4 col-form-label p-0 pt-2 text-end">ระดับการใช้งาน</label>
                                        <div class="col-sm-8">
                                            <select class="form-select form-select-md" aria-label="Large select example"
                                                name="level" value='{{ $user->role }}'>
                                                <option value="1" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin
                                                </option>
                                                <option value="2" {{ $user->role == 'powerUser' ? 'selected' : '' }}>
                                                    Power user
                                                </option>
                                                <option value="3" {{ $user->role == 'supervisor' ? 'selected' : '' }}>
                                                    Supervisor
                                                </option>
                                                <option value="4" {{ $user->role == 'executive' ? 'selected' : '' }}>
                                                    Executive
                                                </option>
                                                <option value="5" {{ $user->role == 'user' ? 'selected' : '' }}>User
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="org"
                                            class="col-sm-4 col-form-label p-0 text-start">เลือกหน่วยงาน</label>

                                        <div id="org_grid">
                                            <div class="col mt-2">
                                                @foreach ($OrgAll as $org)
                                                    <ul class="p-0 m-0">
                                                        <li>
                                                            <input type="checkbox" class="me-2" name="org"
                                                                value="{{ $org->org_id }}">{{ $org->org_name }}
                                                        </li>
                                                        @foreach ($org->sub_org as $subOrg)
                                                            <ul>
                                                                <li>
                                                                    <input type="checkbox" class="me-2" name="sub_org"
                                                                        value="{{ $subOrg->sub_org_id }}">{{ $subOrg->org_name }}
                                                                </li>
                                                            </ul>
                                                        @endforeach
                                                    </ul>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-cols-2 p-3 border-top">
                                    <div class="col-12 d-flex gap-2 p-0">
                                        <button type="button" class="btn btn-secondary ms-auto"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    {{-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div> --}}
                </div>
            </div>
        </div>
    @endforeach

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
                <th style="width: 30%;">First Name</th>
                <th>Last Name</th>
                <th style="width: 30px;">Edit</th>
                <th style="width: 30px;">status</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($UserAll as $user)
                <tr>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>
                        <div class="icon col-3 text-center">
                            <a href="#" class="text-decoration-none" data-bs-toggle="modal"
                                data-bs-target="#edit_user_{{ $loop->index }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 12 12">
                                    <path fill="#000000"
                                        d="M10.443 1.56a1.914 1.914 0 0 0-2.707 0l-.55.551a.506.506 0 0 0-.075.074l-5.46 5.461a.5.5 0 0 0-.137.255l-.504 2.5a.5.5 0 0 0 .588.59l2.504-.5a.5.5 0 0 0 .255-.137l6.086-6.086a1.914 1.914 0 0 0 0-2.707M7.502 3.21l1.293 1.293L3.757 9.54l-1.618.324l.325-1.616zm2 .586L8.209 2.502l.234-.234A.914.914 0 1 1 9.736 3.56z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </td>
                    <td>
                        @if ($user->is_active)
                            <button type="submit" class="border border-0" id="circle"
                                onclick="checkDel('{{ $user->user_id }}')"
                                style="width: 30px; height: 30px; border-radius: 100%; background-color: green;border: 1px black solid;color:green">.</button>
                        @else
                            <button type="submit" class="border border-0" id="circle"
                                onclick="checkDel('{{ $user->user_id }}')"
                                style="width: 30px; height: 30px; border-radius: 100%; background-color: red;border: 1px black solid;"></button>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    <script>
        new DataTable('#myTable');
        const APP_URL = "{{ env('APP_URL') }}";

        //this is a circle color change Active and disable
        // function toggleColor(circle) {
        //     if (circle.style.backgroundColor === 'red') {
        //         circle.style.backgroundColor = 'green';
        //     } else {
        //         circle.style.backgroundColor = 'red';
        //         circle.style.Color = 'red';
        //     }
        // }

        // image preview
        const profilePictureInput = document.getElementById('image');
        const previewImage = document.querySelector('#preview-img');
        profilePictureInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            // Check if file isn't img will show alert
            if (file) {
                if (!isValidImageFile(file)) {
                    alertFail()
                    return;
                }
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                };
                reader.readAsDataURL(file);
            } else {
                previewImage.src = "#";
            }
        });
        // alert
        function alertFail() {
            Swal.fire({
                icon: "error",
                title: "อุ๊ปส์...",
                html: `<div class="py-2">ดูเหมือนว่าที่ใส่มาจะไม่ใช่รูปภาพนะ</div>`,
                confirmButtonText: "OK",
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.reload();
                }
            })
        }
        // File Support
        function isValidImageFile(file) {
            const allowedMimeTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/svg'];
            return allowedMimeTypes.includes(file.type);
        }

        const checkDel = (id) => {
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
                confirmButtonText: "Yes, Update it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch(APP_URL + '/api/user/active', {
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
                                    title: "Update!",
                                    text: "Your file has been Update.",
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

        // const circles = document.querySelectorAll('#circle');

        // circles.forEach(circle => {
        //     circle.addEventListener("click", () => {
        //         toggleColor(circle);
        //     });
        // });
    </script>
@endsection
