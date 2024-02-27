@extends('/layout/layout')
@section('title', 'รายงานผล')
@section('header')
    <div class="d-flex align-items-center">
        <div class="fs-5 me-2">
            รายงานผล OKR/KPI
        </div>
        <a class="btn btn-secondary py-1" href="{{route('fiscal_years')}}">Back</a>
    </div>
@endsection
@section('style')
    <style>
        @media screen and (max-width: 617px) {
            #sub-box {
                display: block;
            }

            #editable-text {
                border: none;
            }

            .contrain {
                width: 100%;
            }
        }

        label {
            cursor: pointer;
            display: flex;
            align-items: center;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .table thead tr th{
            padding:0 5px;
            /* display: flex; */
        }
    </style>
@endsection
@section('content')
    {{-- start modal --}}
    <div class="modal fade" id="comment" tabindex="-1" aria-labelledby="comment_label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="POST" action="{{ url('/STGAdd') }}">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="add_stg_label">เพิ่มยุทธศาสตร์ ปีงบประมาณ : 2567</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body row">
                        <div class="mb-3 row ">
                            <label for="name" class="col-sm-2 col-form-label p-0 pt-2 text-end">ชื่อยุทธศาสตร์</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end modal --}}
    <div class="p-3">
        <h4>Name : KPI 1.3 Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt odit quis ab quo assumenda
            nostrum!</h4>
        <div class="p-3">
            <div class="row row-cols-lg-2 justify-content-center" id="box-head">
                <div class="col-4 border-end">
                    <div class="row row-cols-2 " id="sub-box">
                        <div>Target(OKR : 10)</div>
                        <div>Target(KPI : 0)</div>
                        <div>Target(OKR : 10)</div>
                        <div>Target(KPI : 0)</div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="row row-cols-3 align-items-center">
                        <div class="col-12">จำนวนรายการที่สำเร็จ : 1</div>
                        <div class="col-12 d-flex my-2 align-items-center">
                            <label for="fileInput">
                                <span>
                                    แนบไฟล์
                                    <i class='bx bxs-file-blank'></i>
                                </span>
                            </label>
                            <input type="file" id="fileInput" style="display: none;">
                        </div>
                        <button class="col-2 btn btn-success p-0 ms-3" type="submit">upload</button>
                        <div class="col-9 pe-0">Allow File Type - pptx, xlsx, xls, docx, doc, pdf, jpg, peg, png, gif</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 overflow-x-auto">
            <table class="table border-top ">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>
                            <div class="text-center" style="width: 200px">
                                Sub.(OKR/KPI)
                            </div>
                        </th>
                        <th>Target</th>
                        <th>Oct</th>
                        <th>Nov</th>
                        <th>Dec</th>
                        <th>Jan</th>
                        <th>Feb</th>
                        <th>Mar</th>
                        <th>Apr</th>
                        <th>May</th>
                        <th>June</th>
                        <th>July</th>
                        <th>Aug</th>
                        <th>Sep</th>
                        <th>Total(100%)</th>
                        <th>Tatol(>100%)</th>
                        <th>Grand Tatol</th>
                        <th>Last update</th>
                        <th>Attacth file</th>
                        <th>Type</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            แผนการใช้จ่ายงบประมาณ ตามมาตรการของสำนักงบประมาณ ประจำปี 2565 (งบดำเนินงาน)
                        </td>
                        <td>
                            20
                        </td>
                        <td>
                            <p type="number" contenteditable="true">1</p>
                            <div><i class='bx bxs-envelope'></i></div>
                        </td>
                        <td>
                            <p type="number" contenteditable="true">1</p>
                            <div><i class='bx bxs-envelope'></i></div>

                        </td>
                        <td>
                            <p type="number" contenteditable="true">1</p>
                            <div><i class='bx bxs-envelope'></i></div>

                        </td>
                        <td>
                            <p type="number" contenteditable="true">1</p>
                            <div><i class='bx bxs-envelope'></i></div>

                        </td>
                        <td>
                            <p type="number" contenteditable="true">1</p>
                            <div><i class='bx bxs-envelope'></i></div>

                        </td>
                        <td>
                            <p type="number" contenteditable="true">1</p>
                            <div><i class='bx bxs-envelope'></i></div>

                        </td>
                        <td>
                            <p type="number" contenteditable="true">1</p>
                            <div><i class='bx bxs-envelope'></i></div>

                        </td>
                        <td>
                            <p type="number" contenteditable="true">1</p>
                            <div><i class='bx bxs-envelope'></i></div>

                        </td>
                        <td>
                            <p type="number" contenteditable="true">1</p>
                            <div><i class='bx bxs-envelope'></i></div>

                        </td>
                        <td>
                            <p type="number" contenteditable="true">1</p>
                            <div><i class='bx bxs-envelope'></i></div>

                        </td>
                        <td>
                            <p type="number" contenteditable="true">1</p>
                            <div><i class='bx bxs-envelope'></i></div>

                        </td>
                        <td>
                            <p type="number" contenteditable="true">1</p>
                            <div><i class='bx bxs-envelope'></i></div>

                        </td>
                        <td>
                            <p>20 (100%)</p>
                        </td>
                        <td>
                            <p>0 (100%)</p>
                        </td>
                        <td>
                            <p type="number" contenteditable="true">0</p>
                        </td>
                        <td style="width: 100px">
                            <span>พี่ติ๊ก ชีโร่</span>
                        </td>
                        <td>
                            <label for="fileInput" class="d-flex justify-content-center">
                                <span>
                                    <i class='bx bxs-file-blank'></i>
                                </span>
                            </label>
                        </td>
                        <td style="width: 100px">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select"
                                name="target_plan">
                                <option selected value="KPI">KPI</option>
                                <option value="OKR">OKR</option>
                            </select>
                        </td>

                        <td>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                    viewBox="0 0 32 32">
                                    <path fill="#FC0005"
                                        d="M7.219 5.781L5.78 7.22L14.563 16L5.78 24.781l1.44 1.439L16 17.437l8.781 8.782l1.438-1.438L17.437 16l8.782-8.781L24.78 5.78L16 14.563z">
                                    </path>
                                </svg>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    <script>
        const fileInput = document.getElementById("fileInput");
        const label = document.querySelector("label");

        label.addEventListener("click", () => {
            fileInput.click();
        });
    </script>

@endsection
