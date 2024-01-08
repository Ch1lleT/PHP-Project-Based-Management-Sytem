@extends('/layout/layout')

@section('title', 'ปีงบประมาณ')

@section('header')
    <span class="fs-5">ปีงบประมาณ</span>
    <div class="dropdown fs-6 ms-2 d-flex align-items-center">
        <button class="dropdown-toggle border border-0 rounded p-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown button
        </button>
        <ul class="dropdown-menu dropdown-menu-light">
            <li><a class="dropdown-item " href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Separated link</a></li>
        </ul>
    </div> 
    <div class="ms-2">
        <a href="#" class="d-flex align-items-center text-decoration-none text-white">
            <div class="fs-5 me-2">ยุทศาสตร์</div>
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" viewBox="0 0 48 48"><circle cx="24" cy="24" r="21" fill="#4CAF50"></circle><g fill="#fff"><path d="M21 14h6v20h-6z"></path><path d="M14 21h20v6H14z"></path></g></svg>
        </a>
    </div>
    <div class="list-stg w-100">
        <ul class="m-0 d-flex align-items-center justify-content-between">
            <li>
                <button class="btn btn-secondary">ยุทธศาสตร์ที่ 1</button>
            </li>
            <li>
                <button class="btn btn-secondary">ยุทธศาสตร์ที่ 2</button>
            </li>
            <li>
                <button class="btn btn-secondary">ยุทธศาสตร์ที่ 3</button>
            </li>
            <li>
                <button class="btn btn-secondary">ยุทธศาสตร์ที่ 4</button>
            </li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="mx-5"> 
        <div class="h4 my-3">
            ยุทธศาสตร์ :
        </div> 
        <div class="row">
            <div class="col-3">
                <div class="header d-flex justify-content-between">
                    <div class="h4">แผน</div>
                    <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" viewBox="0 0 48 48"><circle cx="24" cy="24" r="21" fill="#4CAF50"></circle><g fill="#fff"><path d="M21 14h6v20h-6z"></path><path d="M14 21h20v6H14z"></path></g></svg>
                    </a>
                </div>
                <hr>
                <div class="content">
                    <table class="table">
                        <tbody>
                          <tr>
                            <td>โครงการ</td>  
                          </tr>
                          <tr>
                            <td>โครงการ</td>  
                          </tr>
                          <tr>
                            <td>โครงการ</td>  
                          </tr>
                          <tr>
                            <td>โครงการ</td>  
                          </tr>
                        </tbody>
                    </table> 
                </div>     
            </div>
            <div class="col-9">
                <div class="header d-flex justify-content-between">
                    <div class="h4">โครงการ</div>
                    <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" viewBox="0 0 48 48"><circle cx="24" cy="24" r="21" fill="#4CAF50"></circle><g fill="#fff"><path d="M21 14h6v20h-6z"></path><path d="M14 21h20v6H14z"></path></g></svg>
                    </a>
                </div>
                <hr>
                <div class="content">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ชื่อโครงการ</th>
                            <th scope="col">ผู้ดูแลโครงการ</th>
                            <th scope="col">งบจาก</th>
                            <th scope="col">งบประเภท</th>
                            <th scope="col">งบประมาณ</th>
                            <th scope="col">หน่วยงาน</th>
                            <th scope="col">แก้ไข</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">โครงการ</th>
                            <td>ศิวพล</td>
                            <td>เมีย</td>
                            <td>เบี้ยครองชีพ</td>
                            <td>10</td>
                            <td>ครอบครัว</td>
                            <td><a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 12 12"><path fill="#000000" d="M10.443 1.56a1.914 1.914 0 0 0-2.707 0l-.55.551a.506.506 0 0 0-.075.074l-5.46 5.461a.5.5 0 0 0-.137.255l-.504 2.5a.5.5 0 0 0 .588.59l2.504-.5a.5.5 0 0 0 .255-.137l6.086-6.086a1.914 1.914 0 0 0 0-2.707M7.502 3.21l1.293 1.293L3.757 9.54l-1.618.324l.325-1.616zm2 .586L8.209 2.502l.234-.234A.914.914 0 1 1 9.736 3.56z"></path></svg>
                            </a></td>
                          </tr>
                          <tr>
                            <th scope="row">โครงการ</th>
                            <td>ศิวพล</td>
                            <td>เมีย</td>
                            <td>เบี้ยครองชีพ</td>
                            <td>10</td>
                            <td>ครอบครัว</td>
                            <td><a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 12 12"><path fill="#000000" d="M10.443 1.56a1.914 1.914 0 0 0-2.707 0l-.55.551a.506.506 0 0 0-.075.074l-5.46 5.461a.5.5 0 0 0-.137.255l-.504 2.5a.5.5 0 0 0 .588.59l2.504-.5a.5.5 0 0 0 .255-.137l6.086-6.086a1.914 1.914 0 0 0 0-2.707M7.502 3.21l1.293 1.293L3.757 9.54l-1.618.324l.325-1.616zm2 .586L8.209 2.502l.234-.234A.914.914 0 1 1 9.736 3.56z"></path></svg>
                            </a></td>
                          </tr>
                          <tr>
                            <th scope="row">โครงการ</th>
                            <td>ศิวพล</td>
                            <td>เมีย</td>
                            <td>เบี้ยครองชีพ</td>
                            <td>10</td>
                            <td>ครอบครัว</td>
                            <td><a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 12 12"><path fill="#000000" d="M10.443 1.56a1.914 1.914 0 0 0-2.707 0l-.55.551a.506.506 0 0 0-.075.074l-5.46 5.461a.5.5 0 0 0-.137.255l-.504 2.5a.5.5 0 0 0 .588.59l2.504-.5a.5.5 0 0 0 .255-.137l6.086-6.086a1.914 1.914 0 0 0 0-2.707M7.502 3.21l1.293 1.293L3.757 9.54l-1.618.324l.325-1.616zm2 .586L8.209 2.502l.234-.234A.914.914 0 1 1 9.736 3.56z"></path></svg>
                            </a></td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection