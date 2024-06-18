@extends('/layout/layout')

@section('title', 'งบประมาณ')

@section('header')
    <span class="mx-2" style="font-size:1.25rem;width:11rem;">รายการงบประมาณ</span>
    <select class="form-select" id="Year" style="padding: 0rem 1.7rem 0rem 1rem !important;width:5rem;" name="Year">
        <option value="2556" selected>2556</option>
        <option value="2557">2557</option>
        <option value="2558">2558</option>
    </select>
@endsection

@section('content')
    {{-- Modal --}}
    {{-- Add budget list --}}
    <div class="modal fade" id="Add_budget" tabindex="-1" aria-labelledby="Add_budgetModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="Add_budgetModalLabel">เพิ่มรายการงบประมาณ</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <label for="STG-Select">เลือกยุทธศาสตร์</label>
                        <select name="STG-Select" id="STG-Select" class="form-select">
                            <option value="">STG1</option>
                            <option value="">STG2</option>
                            <option value="">STG3</option>
                        </select>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="operate-budget">งบดำเนินงาน</label>
                                <input id="operate-budget" name="operate-budget" type="number" class="form-control"
                                    value="0">
                            </div>
                            <div class="col">
                                <label for="investment-budget">งบลงทุน</label>
                                <input id="investment-budget" name="investment-budget" type="number" class="form-control"
                                    value="0">
                            </div>
                        </div>
                        {{-- <label for="advisor">ผู้ดูแล</label>
                    <input type="text" class="form-control"> --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Add</button>
                </div>
                </form>

            </div>
        </div>
    </div>

    {{-- Edit budget list --}}
    <div class="modal fade" id="edit_budget" tabindex="-1" aria-labelledby="edit_budgetModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="edit_budgetModalLabel">แก้ไขรายการงบประมาณ</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">

                        <label for="STG-Select">เลือกยุทธศาสตร์</label>
                        <select name="STG-Select" id="STG-Select" class="form-select">
                            <option value="">STG1</option>
                            <option value="">STG2</option>
                            <option value="">STG3</option>
                        </select>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="operate-budget">งบดำเนินงาน</label>
                                <input id="operate-budget" name="operate-budget" type="number" class="form-control"
                                    value="0">
                            </div>
                            <div class="col">
                                <label for="investment-budget">งบลงทุน</label>
                                <input id="investment-budget" name="investment-budget" type="number" class="form-control"
                                    value="0">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-between w-100">
                        <button type="submit" class="btn btn-outline-danger text-start" onclick="confirm()">delete</button>
                        <div class="">
                            <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Modal --}}
    <div class="text-end mb-2">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#Add_budget">เพิ่ม</button>
    </div>
    <table class="table display">
        <thead>
            <th class="text-center" style="width:5%;">
                No.
            </th>
            <th class="w-50">
                ยุทธศาสตร์
            </th>
            <th>
                งบดำเนินงาน
            </th>
            <th>
                งบลงทุน
            </th>
            <th>
                ผู้ดูแล
            </th>
            <th>
                ลบ / แก้ไข
            </th>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">
                    1
                </td>
                <td>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat dolorum aliquid eius eveniet veritatis
                    distinctio facilis cumque unde, ullam, eos fugiat deleniti quidem illum officia totam obcaecati hic
                    culpa facere?
                </td>
                <td>
                    50000
                </td>
                <td>
                    50000
                </td>
                <td>
                    <span class="btn btn-success">
                        P'Tik
                    </span>
                </td>
                <td>

                    <span class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#edit_budget">
                        edit
                    </span>
                </td>
            </tr>
        </tbody>
    </table>
    <script>
        var table = $('table.display').DataTable({
            pageLength: 5,
            lengthMenu: [
                [3, 5, 10, 15, 20],
                [3, 5, 10, 15, 20]
            ]
        })
    </script>
    <script>
        const confirm = () => {

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    });
                }
            });
        }
    </script>
@endsection
