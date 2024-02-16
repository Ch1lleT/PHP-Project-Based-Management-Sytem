@extends('/layout/layout')
@section('title', 'รายงานผล')
@section('header')
    <div class="d-flex align-items-center">
        <div class="fs-5 me-2">
            รายงานผล OKR/KPI
        </div>
        <div class="btn btn-secondary py-1">Back</div>
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
    </style>
@endsection
@section('content')
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
                        <div class="col-12 d-flex my-2">แนบเอกสาร <input type="file" name="" id=""
                                class="ms-3"></div>
                        <button class="col-2 btn btn-success p-0 ms-3" type="submit">upload</button>
                        <div class="col-9 pe-0">Allow File Type - pptx, xlsx, xls, docx, doc, pdf, jpg, peg, png, gif</div>
                    </div>
                </div>
            </div>
        </div>
       

        <table class="table border-top ">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Sub.(OKR/KPI)</th>
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
                    <th>Attacth file</th>
                    <th>Type</th>
                    <th>Last update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        1
                    </td>
                    <td>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse eligendi expedita quis delectus nihil consequatur.
                    </td>
                    <td>
                        20
                    </td>
                    <td>
                        <p type="number" contenteditable="true">1</p>
                    </td>
                    <td>
                        <p type="number" contenteditable="true">1</p>
                    </td>
                    <td>
                        <p type="number" contenteditable="true">1</p>
                    </td>
                    <td>
                        <p type="number" contenteditable="true">1</p>
                    </td>
                    <td>
                        <p type="number" contenteditable="true">1</p>
                    </td>
                    <td>
                        <p type="number" contenteditable="true">1</p>
                    </td>
                    <td>
                        <p type="number" contenteditable="true">1</p>
                    </td>
                    <td>
                        <p type="number" contenteditable="true">1</p>
                    </td>
                    <td>
                        <p type="number" contenteditable="true">1</p>
                    </td>
                    <td>
                        <p type="number" contenteditable="true">1</p>
                    </td>
                    <td>
                        <p type="number" contenteditable="true">1</p>
                    </td>
                    <td>
                        <p type="number" contenteditable="true">1</p>
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
                    <td>
                        <input type="file" name="" id="">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
