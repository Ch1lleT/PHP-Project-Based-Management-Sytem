@extends('/layout/layout')

@section('title', 'เพิ่มโปรเจ็ค')
@section('header')
    <div class="fs-5">เพิ่มโครงการ</div>
@endsection

@section('content')
    <form action="">
        <div class="row">
            <div class="col ">
                <div class=" ">
                    <label for="name" class="col-form-label">ชื่อ</label>
                    <input type="text" class="form-control" id="name" name="project_name">
                </div>
                <div class="">
                    <label for="stg" class="col-form-label">ยุทธศาสตร์</label>
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="">
                    <label for="name" class=" col-form-label">ผลผลิต</label>
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="">
                    <label for="balance" class=" col-form-label">งบประมาณ</label>
                    <input type="number" class="form-control" id="balance" name="balance">
                </div>
                <div class="">
                    <label for="budget_type" class=" col-form-label">ประเภทงบ</label>
                    <select class="form-select" id="budget_type" name="budget_type"
                        aria-label="Floating label select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="">
                    <label for="budget_source" class=" col-form-label">งบจาก</label>

                    <select class="form-select" id="budget_source" name="budget_source"
                        aria-label="Floating label select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="">
                    <label for="name" class=" col-form-label">หน่วยงาน</label>
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="">
                    <label for="project_head" class=" col-form-label">หัวหน้าโครงการ</label>
                    <select class="form-select" id="project_head" name="project_head"
                        aria-label="Floating label select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="">
                    <label for="advisor" class=" col-form-label">Advisor</label>
                    <select class="form-select" id="advisor" name="advisor" aria-label="Floating label select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="">
                    <label for="supervisor" class=" col-form-label">Supervisor</label>

                    <select class="form-select" id="supervisor" name="supervisor"
                        aria-label="Floating label select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="">
                    <label for="executive" class=" col-form-label">ผู้บริหารกำกับดูแล</label>

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
    <hr class="border border-3">
    <div class="row mt-4" style="max-width: 50%;">
        <div class="col-3 text-end">
            <label for="name" class="col-form-label">ผู้เข้าร่วมโครงการ</label>
        </div>
        <div class="col">
            <input type="text" class="form-control" id="name" name="project_name">
        </div>
        <div class="col">
            <div class="btn btn-primary">Add</div>
        </div>
    </div>
    <table class="table display">
        <thead>
            <th>No.</th>
            <th>ชือ</th>
            <th>นามสกุล</th>
            <th>ลบ</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Nantakorn</td>
                <td>Thidee</td>
                <td>
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                            viewBox="0 0 32 32">
                            <path fill="#FC0005"
                                d="M7.219 5.781L5.78 7.22L14.563 16L5.78 24.781l1.44 1.439L16 17.437l8.781 8.782l1.438-1.438L17.437 16l8.782-8.781L24.78 5.78L16 14.563z">
                            </path>
                        </svg></a>
                </td>
            </tr>
        </tbody>
    </table>
    
    <script>
        var table = $('table.display').DataTable({
        })
    </script>
@endsection
