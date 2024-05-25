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
    </style>
@endsection

@section('content')
    <div class="text-center">
        <span class="fs-5">ใช้สำหรับแสดงภาพ Grouping ยุทธศาสตร์</span>

    </div>
    <form action="">
        <div class="text-end w-100">
            <button class="btn btn-success text-end" type="submit">Save</button>
        </div>


        <div class="gap-2 ">
            <div class="row">
                <div class="col-6">
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
                <div class="col-6">
                    <div class="row m-4">
                        <div class="col d-flex justify-content-end align-items-center">เพิ่มผู้มองเห็น</div>
                        <div class="col">
                            <input type="text" class="form-control" name="search" id="search">
                        </div>
                        <div class="col">
                            <button class="btn btn-primary" type="submit">Add</button>
                        </div>
                    </div>
                    <table class="table display">
                        <thead>
                            <th>No.</th>
                            <th>ชื่อ</th>
                            <th>นามสกุล</th>
                            <th>edit</th>
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
