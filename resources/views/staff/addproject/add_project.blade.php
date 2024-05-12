@extends('/layout/layout')

@section('title', 'เพิ่มโปรเจ็ค')
@section('header')
    <div class="fs-5">เพิ่มโครงการ</div>
@endsection

@section('content')
    <div class="row">
        <form action="">
            <div class="col-6">
                <div class="mb-3 ">
                    <label for="name" class="col-form-label">ชื่อ</label>
                    <input type="text" class="form-control" id="name" name="project_name">
                </div>
                <div class="mb-3 row text-start">
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
                <div class="mb-3 row text-start">
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
                <div class="mb-3 row text-start">
                    <label for="balance" class="col-sm-3 col-form-label">งบประมาณ</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="balance" name="balance">
                    </div>
                </div>
                <div class="mb-3 row text-start">
                    <label for="budget_type" class="col-sm-3 col-form-label">ประเภทงบ</label>
                    <div class="col-sm-9">
                        <select class="form-select" id="budget_type" name="budget_type"
                            aria-label="Floating label select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row text-start">
                    <label for="budget_source" class="col-sm-3 col-form-label">งบจาก</label>
                    <div class="col-sm-9">
                        <select class="form-select" id="budget_source" name="budget_source"
                            aria-label="Floating label select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3 row text-start">
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
                <div class="mb-3 row text-start">
                    <label for="project_head" class="col-sm-3 col-form-label">หัวหน้าโครงการ</label>
                    <div class="col-sm-9">
                        <select class="form-select" id="project_head" name="project_head"
                            aria-label="Floating label select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row text-start">
                    <label for="advisor" class="col-sm-3 col-form-label">Advisor</label>
                    <div class="col-sm-9">
                        <select class="form-select" id="advisor" name="advisor"
                            aria-label="Floating label select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row text-start">
                    <label for="supervisor" class="col-sm-3 col-form-label">Supervisor</label>
                    <div class="col-sm-9">
                        <select class="form-select" id="supervisor" name="supervisor"
                            aria-label="Floating label select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row text-start">
                    <label for="executive" class="col-sm-3 col-form-label">ผู้บริหารกำกับดูแล</label>
                    <div class="col-sm-9">
                        <select class="form-select" id="executive" name="executive"
                            aria-label="Floating label select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>

    </div>

@endsection
