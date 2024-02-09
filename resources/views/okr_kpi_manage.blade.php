@extends('/layout/layout')

@section('title', 'OKR / KPI')

@section('header')
    <span class="test_text">เพิ่ม / ลด / กำหนดเป้า OKR</span>
@endsection

@section('style')
    <style>
        .bg tr th,.bg tr td{
            background-color:#F8F9FA;
            border: #F8F9FA;
        }
    </style>
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
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
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
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
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
        <div class="col-12 col-xl-4 p-3 rounded border border-2">
            <form action="">
                <h3>ใส่เป้า Target OKR / KPI</h3>
                <table class="table " >
                    <thead class="bg border-bottom">
                        <tr >
                            <th scope="col">
                                Dept. Name
                            </th>
                            <th scope="col" class="text-center" id="bg">
                                Target OKR
                            </th>
                            <th scope="col" class="text-center" id="bg">
                                Target KPI
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg"> 
                        <tr >
                            <th scope="row" id="bg">
                                ตรวจสอบภายใน
                            </th>
                            <td class="w-25 ">
                                <input type="text" class="form-control" id="bg">
                            </td>
                            <td class="w-25">
                                <input type="text" class="form-control" id="bg">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" id="bg">
                                ฝ่ายบริหารกลาง
                            </th>
                            <td class="w-25">
                                <input type="text" class="form-control" id="bg">
                            </td>
                            <td class="w-25">
                                <input type="text" class="form-control" id="bg">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" id="bg">
                                ฝ่ายนโยบายและยุทธสาสตร์
                            </th>
                            <td class="w-25">
                                <input type="text" class="form-control">
                            </td>
                            <td class="w-25">
                                <input type="text" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                กลุ่มงานสารบรรณและการประชุม
                            </th>
                            <td class="w-25">
                                <input type="text" class="form-control">
                            </td>
                            <td class="w-25">
                                <input type="text" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                ฝ่ายมาตรวิทยาเชิงกล
                            </th>
                            <td class="w-25">
                                <input type="text" class="form-control">
                            </td>
                            <td class="w-25">
                                <input type="text" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                ฝ่ายมาตรวิทยามิติ
                            </th>
                            <td class="w-25">
                                <input type="text" class="form-control">
                            </td>
                            <td class="w-25">
                                <input type="text" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                ฝ่ายมาตรวิทยาไฟฟ้า
                            </th>
                            <td class="w-25">
                                <input type="text" class="form-control">
                            </td>
                            <td class="w-25">
                                <input type="text" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                ฝ่ายมาตรวิทยาอุณภูมิและแสง
                            </th>
                            <td class="w-25">
                                <input type="text" class="form-control">
                            </td>
                            <td class="w-25">
                                <input type="text" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                ฝ่ายมาตรวิทยาเคมีและชีวภาพ
                            </th>
                            <td class="w-25">
                                <input type="text" class="form-control">
                            </td>
                            <td class="w-25">
                                <input type="text" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                กลุ่มงานเสียงและการสั่นสะท้อน
                            </th>
                            <td class="w-25">
                                <input type="text" class="form-control">
                            </td>
                            <td class="w-25">
                                <input type="text" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                กลุ่มงานนวัตกรรมและพัฒนาเครื่องมือวัด
                            </th>
                            <td class="w-25">
                                <input type="text" class="form-control">
                            </td>
                            <td class="w-25">
                                <input type="text" class="form-control">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-end">
                    <div class=""><button type="submit" class="btn btn-success">Save & Update</button></div>
                </div>
            </form>
            
        </div>
    </div>
@endsection
