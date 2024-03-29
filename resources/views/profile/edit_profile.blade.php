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
    </style>
@endsection

@section('content')
<div class="row row-cols-auto">

    <div class="col profile_data">
        <span class="fw-bolder">
            แก้ไขข้อมูลส่วนตัว
        </span>
        <div class="my-3 row form">
            <label for="name" class="col-sm-2 col-form-label p-0 pt-2">รูปโปรไฟล์</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="image" value="{{ $User['image'] }}">
            </div>
        </div>
        <div class="my-3 row form">
            <label for="name" class="col-sm-2 col-form-label p-0 pt-2">ชื่อ</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" value="{{ $User['fname'] }}">
            </div>
        </div>
        <div class="mb-3 row form">
            <label for="last_name" class="col-sm-2 col-form-label p-0 pt-2 ">นามสกุล</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="last_name" value="{{ $User['lname'] }}">
            </div>
        </div>
        <div class="mb-3 row form">
            <label for="Email" class="col-sm-2 col-form-label p-0 pt-2">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="Email" value="{{ $User['email'] }}">
            </div>
        </div>
        <div class="text-end">
            <div class="btn btn-primary text-end" type="submit">Save</div>
        </div>

        <hr>
        <span class="fw-bold">
            เปลี่ยนรหัสผ่าน
        </span>
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
            <div class="btn btn-primary text-end" type="submit">Save</div>
        </div>
    </div>
    <div class="col">
        <div class="img d-flex justify-content-center">
            <img src="{{ asset('image/defult-profile/profile.svg') }}" alt="" style="height: 500px; width:500px; ">
        </div>
    </div>
</div>

    <script>
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
    </script>
@endsection
