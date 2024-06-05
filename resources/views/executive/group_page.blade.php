@extends('/layout/layout')
@section('title', 'NIMT Grouping')
@section('header')
    <div class="fs-5">
        NIMT Grouping
    </div>
@endsection
@section('style')
    <style>
        .row .item {
            margin-bottom: 2.5rem;
        }

        .content {
            box-shadow: rgba(0, 0, 0, 0.24) 0px 1px 5px,
                rgba(0, 0, 0, 0.24) 0px 1px 5px;
        }
    </style>
@endsection

@section('content')

    <form action="">



        <div class="row row-cols-auto px-3 gap-3">
            <div class="col-12 col-lg-6 content p-3 rounded-3">
                <div class="item">
                    <label for="" class="label">ชื่อกลุ่ม</label>
                    <input type="text" class="form-control">
                </div>
                <div class="item">
                    <label class="label">เลือก Layer ที่ต้องการ Group</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="item">
                    <label class="label">Layer ก่อนหน้า</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="item">
                    <label class="label">เลือก {ดึงมาจาก DropDown} เพื่อจัดกลุ่ม</label>
                    <table class="display">
                        <thead>
                            <tr>
                                <th>Selected</th>
                                <th>No.</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"><input type="checkbox" name="" id=""></td>
                                <td>1</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod dolorem commodi
                                    corporis
                                    non
                                    ex, sunt voluptas eum tempore vel quo quaerat aspernatur recusandae quasi modi
                                    exercitationem assumenda excepturi laboriosam hic.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12 col-lg content p-3 rounded-3">
                <div class="row m-4">
                    <div class="col d-flex justify-content-end align-items-center">เพิ่มผู้มองเห็น</div>
                    <div class="col">
                        <input type="text" class="form-control" name="search" id="search">
                    </div>
                    <div class="col">
                        <button class="btn custom-button" type="submit">Add</button>
                    </div>
                </div>
                <div class="row">
                    <table class="table display">
                        <thead>
                            <th style="width: 20px">No.</th>
                            <th>ชื่อ</th>
                            <th>นามสกุล</th>
                            <th style="width: 20px">edit</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Test</td>
                                <td>Test</td>
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
                </div>
                <div class="m-4 text-center">
                    <p>กรุณาตรวจสอบข้อมูลก่อนบันทึก</p>
                </div>
                <button class="btn btn-success position-absolute bottom-0 end-0 m-3">บันทึก</button>


            </div>
        </div>
    </form>
    <script>
        var table = $('table.display').DataTable({
            pageLength: 5,
            lengthMenu: [
                [3, 5, 10, 15, 20],
                [3, 5, 10, 15, 20]
            ]
        })
    </script>
@endsection
