@extends('/layout/layout')

@section('title', 'หน่วยงาน')

@section('header')
    <div class="fs-5">หน่วยงาน</div>
@endsection

@section('content')
    <div class="w-50">
        <div class="bg-secondary p-2 text-white d-flex align-items-center w-100 justify-content-between">
            <p class="m-0 fs-5">หน่วยงาน</p>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" viewBox="0 0 48 48">
                    <circle cx="24" cy="24" r="21" fill="#4CAF50"></circle>
                    <g fill="#fff">
                        <path d="M21 14h6v20h-6z"></path>
                        <path d="M14 21h20v6H14z"></path>
                    </g>
                </svg>
            </a>
        </div>
        <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="edit" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="edit">แก้ไขหน่วยงาน : </h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        <ul class="user-list p-3 " style="background-color : rgb(224, 221, 221);">
            <li class="user row">
                <div class="fisrt_name col-9">
                    <p class="fs-5">คสช</p>
                </div>
                <div class="icon col-3 text-end">
                    <a href="#" class="text-decoration-none "data-bs-toggle="modal" data-bs-target="#edit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 12 12">
                            <path fill="#000000"
                                d="M10.443 1.56a1.914 1.914 0 0 0-2.707 0l-.55.551a.506.506 0 0 0-.075.074l-5.46 5.461a.5.5 0 0 0-.137.255l-.504 2.5a.5.5 0 0 0 .588.59l2.504-.5a.5.5 0 0 0 .255-.137l6.086-6.086a1.914 1.914 0 0 0 0-2.707M7.502 3.21l1.293 1.293L3.757 9.54l-1.618.324l.325-1.616zm2 .586L8.209 2.502l.234-.234A.914.914 0 1 1 9.736 3.56z">
                            </path>
                        </svg>
                    </a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24">
                            <path fill="#FC0005" d="M19 4h-3.5l-1-1h-5l-1 1H5v2h14M6 19a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7H6z">
                            </path>
                        </svg>
                    </a>
                </div>
                <ul>
                    <li class="row ps-5">
                        <div class="fisrt_name col-9">
                            <p class="fs-5">อบต</p>
                        </div>
                        <div class="icon col-3 text-end">
                            <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#edit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 12 12">
                                    <path fill="#000000"
                                        d="M10.443 1.56a1.914 1.914 0 0 0-2.707 0l-.55.551a.506.506 0 0 0-.075.074l-5.46 5.461a.5.5 0 0 0-.137.255l-.504 2.5a.5.5 0 0 0 .588.59l2.504-.5a.5.5 0 0 0 .255-.137l6.086-6.086a1.914 1.914 0 0 0 0-2.707M7.502 3.21l1.293 1.293L3.757 9.54l-1.618.324l.325-1.616zm2 .586L8.209 2.502l.234-.234A.914.914 0 1 1 9.736 3.56z">
                                    </path>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24">
                                    <path fill="#FC0005"
                                        d="M19 4h-3.5l-1-1h-5l-1 1H5v2h14M6 19a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7H6z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </li>
                </ul>
                <hr class="px-3">
            </li>
        </ul>
    </div>
@endsection
