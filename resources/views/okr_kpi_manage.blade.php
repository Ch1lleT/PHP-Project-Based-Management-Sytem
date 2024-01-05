@extends('/layout/layout')

@section('title', 'OKR / KPI')

@section('header')
    <span class="test_text">เพิ่ม / ลด / กำหนดเป้า OKR</span>
@endsection

@section('content')
    <div class="row">
        <div class="col-6">
            <form>
                <div class="mb-3 row gap-2">
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
                                <label for="Select-Type" class="form-label">Select Type</label>
                            </div>
                            <div class="col-9 input">
                                <input type="email" class="form-control" id="Select-Type" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-3 label">
                                <label for="Select Catagory" class="form-label">Select Catagory</label>
                            </div>
                            <div class="col-9 input">
                                <input type="email" class="form-control" id="Select Catagory" aria-describedby="emailHelp">
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
            <form>
                <div class="mb-3 row gap-2">
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
                                <label for="Select-Catagory." class="form-label">Select Catagory</label>
                            </div>
                            <div class="col-9 input">
                                <input type="email" class="form-control" id="Select-Catagory." aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-3 label">
                                <label for="Select-Type" class="form-label">Select Type</label>
                            </div>
                            <div class="col-9 input">
                                <input type="email" class="form-control" id="Select-Type" aria-describedby="emailHelp">
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
        <div class="col-6">
            <form>
                {{-- แก้ label --}}
                <div class="mb-3 row gap-2">
                    <h3>ใส่เป้า Target OKR / KPI</h3>
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="col-4 label">
                                <label for="Select-OKR/KPI" class="form-label ">Select OKR/KPI</label>
                            </div>
                            <div class="col-4 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                            <div class="col-4 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-4 label">
                                <label for="Select-OKR/KPI" class="form-label">Select OKR/KPI</label>
                            </div>
                            <div class="col-4 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                            <div class="col-4 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-4 label">
                                <label for="Select-OKR/KPI" class="form-label">Select OKR/KPI</label>
                            </div>
                            <div class="col-4 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                            <div class="col-4 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-4 label">
                                <label for="Select-OKR/KPI" class="form-label">Select OKR/KPI</label>
                            </div>
                            <div class="col-4 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                            <div class="col-4 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-4 label">
                                <label for="Select-OKR/KPI" class="form-label">Select OKR/KPI</label>
                            </div>
                            <div class="col-4 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                            <div class="col-4 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-4 label">
                                <label for="Select-OKR/KPI" class="form-label">Select OKR/KPI</label>
                            </div>
                            <div class="col-4 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                            <div class="col-4 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-4 label">
                                <label for="Select-OKR/KPI" class="form-label">Select OKR/KPI</label>
                            </div>
                            <div class="col-4 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                            <div class="col-4 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-4 label">
                                <label for="Select-OKR/KPI" class="form-label">Select OKR/KPI</label>
                            </div>
                            <div class="col-4 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                            <div class="col-4 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-4 label">
                                <label for="Select-OKR/KPI" class="form-label">Select OKR/KPI</label>
                            </div>
                            <div class="col-4 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                            <div class="col-4 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-4 label">
                                <label for="Select-OKR/KPI" class="form-label">Select OKR/KPI</label>
                            </div>
                            <div class="col-4 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                            <div class="col-4 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-4 label">
                                <label for="Select-OKR/KPI" class="form-label">Select OKR/KPI</label>
                            </div>
                            <div class="col-4 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                            <div class="col-4 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-4 label">
                                <label for="Select-OKR/KPI" class="form-label">Select OKR/KPI</label>
                            </div>
                            <div class="col-4 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                            <div class="col-4 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-4 label">
                                <label for="Select-OKR/KPI" class="form-label">Select OKR/KPI</label>
                            </div>
                            <div class="col-4 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                            <div class="col-4 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-4 label">
                                <label for="Select-OKR/KPI" class="form-label">Select OKR/KPI</label>
                            </div>
                            <div class="col-4 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                            <div class="col-4 input">
                                <input type="text" class="form-control" id="Select-OKR/KPI" aria-describedby="emailHelp">
                            </div>
                        </div>
                       
                </div>
            </form>
        </div>
    </div>
@endsection
