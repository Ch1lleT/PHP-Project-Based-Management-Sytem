@extends('/layout/layout')

@section('title', 'แก้ไขข้อมูล')

@section('header')
    <div class="fs-5">แก้ไขข้อมูลส่วนตัว</div>
@endsection

@section('content')
<div class="w-50">
    <span>
        แก้ไขข้อมูลส่วนตัว
    </span>
    <div class="my-3 row">
        <label for="name" class="col-sm-2 col-form-label p-0 pt-2 text-end">ชื่อ</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" id="name">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="last_name" class="col-sm-2 col-form-label p-0 pt-2 text-end">นามสกุล</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="last_name">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="Email" class="col-sm-2 col-form-label p-0 pt-2 text-end">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="Email">
        </div>
    </div>
    <div class="text-end">
        <div class="btn btn-primary text-end" type="submit">Save</div>
    </div>
    <hr>
    <span>
        เปลี่ยนรหัสผ่าน
    </span>
    <div class="my-3 row">
        <label for="old_pass" class="col-sm-2 col-form-label p-0 pt-2 text-end">รหัสเก่า</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="old_pass">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="new_pass" class="col-sm-2 col-form-label p-0 pt-2 text-end">รหัสใหม่</label>
        <div class="col-sm-10">
            <input type="password" name="password" id="password" />
            <i class="bi bi-eye-slash" id="togglePassword"></i>
        </div>
    </div>
    <div class="text-end">
        <div class="btn btn-primary text-end" type="submit">Save</div>
    </div>
</div>

@endsection