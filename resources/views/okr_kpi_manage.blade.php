@extends('/layout/layout')

@section('title', 'OKR / KPI')

@section('header')
    <span class="test_text">เพิ่ม / ลด / กำหนดเป้า OKR</span>
@endsection

@section('content')
    <div class="row w-100 d-flex justify-content-center gap-5">
        <div class="col-12 col-xl-6 row d-flex align-self-stretch gap-4 p-0">
            <form class="d-flex">
                <div class="row gap-2 border border-2 p-3 rounded">
                    <h3>Add OKR & KPI</h3>
                        <div class="row d-flex align-items-center">
                            <div class="col-3 label">
                                <label for="No" class="form-label">No.</label>
                            </div>
                            <div class="col-9 input">
                                <input type="text" class="form-control" id="No" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-3 label">
                                <label for="OKR/KPI" class="form-label">Name OKR/KPI</label>
                            </div>
                            <div class="col-9 input">
                                <input type="text" class="form-control" id="OKR/KPI" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-3 label">
                                {{-- Dropdown --}}
                                <label for="Select Catagory" class="form-label">Select Catagory</label>
                            </div>
                            <div class="col-9 input">
                                <button class="form-control dropdown-toggle d-flex justify-content-between align-items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown button
                                  </button>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item " href="#">lorem10</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                  </ul>
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-3 label">
                                {{-- Dropdown --}}
                                <label for="Select-Type." class="form-label">Select Type</label>
                            </div>
                            <div class="col-9 input">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="kpi">
                                    <label class="form-check-label" for="inlineRadio1">KPI</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="okr">
                                    <label class="form-check-label" for="inlineRadio2">OKR</label>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-3 label">
                                {{-- <label for="Select Catagory" class="form-label">Select Catagory</label> --}}
                            </div>
                            <div class="col-9 input mt-4">
                                <button type="submit" class="btn btn-primary">Reset</button>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </div>   
                </div>
            </form>
            <form class="d-flex">
                <div class="row gap-2 border border-2 p-3 rounded ">
                    <h3>Edit and correct target</h3>
                        <div class="row d-flex align-items-center">
                            <div class="col-3 label">
                                <label for="Select-OKR/KPI" class="form-label">Select OKR/KPI</label>
                            </div>
                            <div class="col-9 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-3 label">
                                <label for="No." class="form-label">No.</label>
                            </div>
                            <div class="col-9 input">
                                <input type="text" class="form-control" id="No." aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-3 label">
                                <label for="Name-OKR/KPI" class="form-label">Name OKR/KPI</label>
                            </div>
                            <div class="col-9 input">
                                <input type="email" class="form-control" id="Name-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-3 label">
                                {{-- Dropdown --}}
                                <label for="Select-Catagory." class="form-label">Select Catagory</label>
                            </div>
                            <div class="col-9 input">
                                <button class="form-control dropdown-toggle text-start d-flex justify-content-between align-items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown button
                                  </button>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item " href="#">lorem10</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                  </ul>
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-3 label">
                                {{-- Dropdown --}}
                                <label for="Select-Type" class="form-label">Select Type</label>
                            </div>
                            <div class="col-9 input">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="kpi">
                                    <label class="form-check-label" for="inlineRadio1">KPI</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="okr">
                                    <label class="form-check-label" for="inlineRadio2">OKR</label>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-3 label">
                                {{-- <label for="Select Catagory" class="form-label">Select Catagory</label> --}}
                            </div>
                            <div class="col-9 input mt-2">
                                <button type="submit" class="btn btn-primary">Reset</button>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </div>   
                </div>
            </form>
        </div>
        <div class="col-12 col-xl-4 border border-2 p-3 rounded">
            <form>
                {{-- แก้ label --}}
                <div class="mb-3 row gap-2">
                    <h3>ใส่เป้า Target OKR / KPI</h3>
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="col-4 label">
                                <label for="Dept.-Name" class="form-label ">Dept. Name</label>
                            </div>
                            <div class="col-4 input text-center ">
                                <label for="Target-OKR" class="form-label ">Target OKR</label>
                            </div>
                            <div class="col-4 input text-center">
                                <label for="Target-KPI" class="form-label ">Target KPI</label>
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-6 label">
                                <label for="Select-OKR/KPI" class="form-label">ตรวจสอบภายใน</label>
                            </div>
                            <div class="col-3 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                            <div class="col-3 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-6 label">
                                <label for="Select-OKR/KPI" class="form-label">ฝ่ายบริหารกลาง</label>
                            </div>
                            <div class="col-3 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                            <div class="col-3 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-6 label">
                                <label for="Select-OKR/KPI" class="form-label">ฝ่ายนโยบายและยุทธสาสตร์</label>
                            </div>
                            <div class="col-3 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                            <div class="col-3 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-6 label">
                                <label for="Select-OKR/KPI" class="form-label">กลุ่มงานสื่อสารองค์การ</label>
                            </div>
                            <div class="col-3 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                            <div class="col-3 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-6 label">
                                <label for="Select-OKR/KPI" class="form-label">กลุ่มงานสารบรรณและการประชุม</label>
                            </div>
                            <div class="col-3 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                            <div class="col-3 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-6 label">
                                <label for="Select-OKR/KPI" class="form-label">ฝ่ายมาตรวิทยาเชิงกล</label>
                            </div>
                            <div class="col-3 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                            <div class="col-3 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-6 label">
                                <label for="Select-OKR/KPI" class="form-label">ฝ่ายมาตรวิทยามิติ</label>
                            </div>
                            <div class="col-3 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                            <div class="col-3 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-6 label">
                                <label for="Select-OKR/KPI" class="form-label">ฝ่ายมาตรวิทยาไฟฟ้า</label>
                            </div>
                            <div class="col-3 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                            <div class="col-3 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-6 label">
                                <label for="Select-OKR/KPI" class="form-label">ฝ่ายมาตรวิทยาอุณภูมิและแสง</label>
                            </div>
                            <div class="col-3 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                            <div class="col-3 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-6 label">
                                <label for="Select-OKR/KPI" class="form-label">ฝ่ายมาตรวิทยาเคมีและชีวภาพ</label>
                            </div>
                            <div class="col-3 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                            <div class="col-3 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-6 label">
                                <label for="Select-OKR/KPI" class="form-label">กลุ่มงานเสียงและการสั่นสะท้อน</label>
                            </div>
                            <div class="col-3 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                            <div class="col-3 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-6 label">
                                <label for="Select-OKR/KPI" class="form-label">กลุ่มงานนวัตกรรมและพัฒนาเครื่องมือวัด</label>
                            </div>
                            <div class="col-3 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                            <div class="col-3 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                        </div>
                </div>
                <div class="text-center">
                    <div class=""><button type="submit" class="btn btn-success">Save & Update</button></div>
                </div>
            </form>
        </div>
    </div>
@endsection
