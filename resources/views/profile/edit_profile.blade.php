@extends('/layout/layout')

@section('title', 'แก้ไขข้อมูล')

@section('header')
    <div class="fs-5">แก้ไขข้อมูลส่วนตัว</div>
@endsection

@section('style')
    <style>
        @media screen and (max-width: 600px) {
            label {
                justify-content: start;
                margin-left: 16px;
            }

            .contrain {
                width: 100%;
            }
        }

        @media screen and (min-width: 600px) {
            label {
                display: flex;
                justify-content: end;
            }

            .contrain {
                width: 50%;
            }
        }

        #preview-img {
            width: 400px;
            height: 400px;
        }

        @media screen and (max-width: 992px) {
            #preview-img {
                width: 250px;
                height: 250px;
            }
        }
    </style>
@endsection

@section('content')
    <div class="row row-cols-auto">

        <div class="col-12 col-lg-6 profile_data">
            <span class="fw-bolder">
                แก้ไขข้อมูลส่วนตัว
            </span>
            <div class="overflow-x-hidden ">
                <form action="{{route('edit_profile.profile')}}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <input style="display:none" name="id" value="{{auth()->user()->user_id}}">
                    <div class="my-3 row form">
                        <label for="image" class="col-sm-2 col-form-label p-0 pt-2">รูปโปรไฟล์</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="image" name="image" >
                        </div>
                    </div>
                    <div class="my-3 row form">
                        <label for="first_name" class="col-sm-2 col-form-label p-0 pt-2">ชื่อ</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="first_name" name="first_name" value="{{ auth()->user()->first_name }}">
                        </div>
                    </div>
                    <div class="mb-3 row form">
                        <label for="last_name" class="col-sm-2 col-form-label p-0 pt-2 ">นามสกุล</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ auth()->user()->last_name }}">
                        </div>
                    </div>
                    {{-- <div class="mb-3 row form">
                        <label for="Email" class="col-sm-2 col-form-label p-0 pt-2">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="Email" name="email" value="{{ auth()->user()->email }}">
                        </div>
                    </div> --}}
                    <div class="text-end">
                        <button class="btn btn-primary text-end" type="submit">Save</button>
                    </div>
                
                </form>
                <hr>
                <span class="fw-bold">
                    เปลี่ยนรหัสผ่าน
                </span>
                <form action="{{route('edit_profile.change_password')}}" method="POST">
                    @csrf
                    <div class="my-3 row form">
                        <label for="old_pass" class="col-sm-2 col-form-label p-0 pt-2 ">รหัสเก่า</label>
                        <div class="col-sm-10">
                        <input type="password" id="password_old" class="form-control" id="old_pass">
                    </div>
                    </div>
                        <div class="mb-3 row form">
                            <label for="new_pass" class="col-sm-2 col-form-label p-0 pt-2 ">รหัสใหม่</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" id="password_new" class="form-control" />
                                <div class="mt-1">
                                    <input type="checkbox" class="me-2" onclick="show()">Show Password
                                </div>
                            </div>
                        </div>
                    <div class="text-end">
                        <button class="btn btn-primary text-end" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-12 col-lg-6 ">
            <div class="img h-100 d-flex align-items-center justify-content-center">
                <img id="preview-img" class="rounded-circle object-fit-cover" 
                @if (auth()->user()->image == null)
                    src="{{ asset('image/defult-profile/profile.svg') }}"
                @else
                    src="{{ asset(auth()->user()->image) }}"
                @endif
                >
                {{ asset(auth()->user()->image) }}
            </div>
        </div>
    </div>

    <script>
        // show and hide password
        function show() {
            var new_pass = document.getElementById("password_new");
            var old_pass = document.getElementById("password_old");
            if (new_pass.type === "password") {
                new_pass.type = "text";
                old_pass.type = "text";
            } else {
                new_pass.type = "password";
                old_pass.type = "password";
            }
        }
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
        // After Check will run this func
        const success = (text) => {
            Swal.fire({
                position: "center",
                icon: "success",
                title: `${text}`,
                showConfirmButton: false,
                timer: 1500
            });
        }
    </script>

@endsection
