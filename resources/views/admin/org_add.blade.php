@extends('/layout/layout')
@section('title', 'NIMT Dashboard')
@section('header')
    <div class="fs-5 m-3">
        Organize Management
    </div>
@endsection
@section('style')
    <style>

    </style>
@endsection

@section('content')
    <div class=" text-end my-4">
        <button class="btn border border-danger text-danger">กลับ / Back</button>
        <button class="btn btn-primary">บันทึก</button>
    </div>

    <div class="p-3 rounded-3"style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px,  rgba(0, 0, 0, 0.24) 0px 1px 2px;">

        <form action="">
            <div class="row">
                <div class="org col">
                    <label for="org-primary" class="form-label">หน่วยงานหลัก</label>
                    <input id="org-primary" type="text" class="form-control">
                </div>
            </div>

            <label for="add-sub-org" class="form-label m-0 mt-3">หน่วยงานย่อย</label>
            <div class="row">
                <div class="col m-3 p-0">
                    <input id="add-sub-org" type="text" class="form-control" placeholder="พิมพ์ชื่อหน่วยงาน">
                </div>
                <div class="col m-3 p-0">
                    <button class="btn btn-primary">เพิ่ม</button>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-10 m-3 p-0">
                <input type="text" class="form-control" placeholder="Sub">
            </div>
            <div class="col-1 m-3 p-0">
                <button class="btn btn-danger">ลบ</button>
            </div>
        </div>
        <div class="row">
            <div class="col-10 m-3 p-0">
                <input type="text" class="form-control" placeholder="Sub">
            </div>
            <div class="col-1 m-3 p-0">
                <button class="btn btn-danger">ลบ</button>
            </div>
        </div>
        <div class="row">
            <div class="col-10 m-3 p-0">
                <input type="text" class="form-control" placeholder="Sub">
            </div>
            <div class="col-1 m-3 p-0">
                <button class="btn btn-danger">ลบ</button>
            </div>
        </div>
        <div class="row">
            <div class="col-10 m-3 p-0">
                <input type="text" class="form-control" placeholder="Sub">
            </div>
            <div class="col-1 m-3 p-0">
                <button class="btn btn-danger">ลบ</button>
            </div>
        </div>

    </div>

@endsection
