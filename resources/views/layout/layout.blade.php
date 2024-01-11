<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400&family=Roboto:ital,wght@0,100;0,500;0,700;1,100&family=Sarabun:wght@100;200&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    {{-- meter grade --}}
    <script src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
    <script src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.candy.js"></script>
    <style>
        html,
        body {
            height: 100%;
            font-family: 'Sarabun', sans-serif;
        }

        .mynav {
            color: #fff;
        }

        .mynav li a {
            color: #fff;
            text-decoration: none;
            width: 100%;
            display: block;
            border-radius: 5px;
            padding: 8px 5px;
        }

        .mynav li a.active {
            background: rgba(255, 255, 255, 0.2);
        }

        .mynav li a:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .mynav li a i {
            width: 25px;
            text-align: center;
        }

        .notification-badge {
            background-color: rgba(255, 255, 255, 0.7);
            float: right;
            color: #222;
            font-size: 14px;
            padding: 0px 8px;
            border-radius: 2px;
        }

        .col-9 p {
            padding: 0;
            margin: 0;
            font-size: 11px;
        }

        .col-9 p:nth-child(1) {
            padding: 0;
            margin: 0;
            font-weight: 800;
            font-size: 17px;

        }

        h5 {
            font-weight: bold;
        }

        li a p {
            padding-left: 1.5rem;
            margin: 0;
        }

        .dropdown-container {
            display: none;
            padding-left: 8px;
            transition-delay: 1s;
        }

        li {
            list-style: none;
        }

        .collapse ul li a {
            color: white;
            /* padding-left: 3rem; */
        }

        .test_text {
            font-size: 20px;
        }

    </style>
</head>

<body>
    <div class="container-fluid p-0 d-flex min-vh-100 ">
        <div id="bdSidebar"
            class="d-flex flex-column flex-shrink-0 p-3 bg-dark text-white offcanvas-xl offcanvas-start">
            <a href="#" class="navbar-brand row d-flex align-items-center">
                <div class="col-3 ps-3">
                    <svg width="50" height="71" viewBox="0 0 50 71" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.1913 0.0884052L32.2501 29.404L0.146058 29.2902L11.7315 18.8429L25.1913 0.0884052Z"
                            fill="#EA1B21" />
                        <path d="M24.9842 58.541L0.146599 29.1624L32.2507 29.2762L27.6793 43.9053L24.9842 58.541Z"
                            fill="#EA1B21" />
                        <path d="M6.41956 18.6322L4.53911 27.8981L0.146107 29.2894L6.41956 18.6322Z" fill="#EA1B21" />
                        <path d="M9.54737 15.8932L7.66691 25.1591L3.27391 26.5504L9.54737 15.8932Z" fill="#EA1B21" />
                        <path d="M12.6748 13.2184L10.7944 22.4843L6.40136 23.8756L12.6748 13.2184Z" fill="#EA1B21" />
                        <path d="M25.0635 0.0881084L17.797 29.3529L49.9011 29.4667L38.39 18.9376L25.0635 0.0881084Z"
                            fill="#2E3192" />
                        <path d="M24.8561 58.5405L49.9014 29.3388L17.7973 29.225L22.2649 43.8861L24.8561 58.5405Z"
                            fill="#2E3192" />
                        <path d="M43.7032 18.7645L45.518 28.0435L49.901 29.4659L43.7032 18.7645Z" fill="#2E3192" />
                        <path d="M40.595 16.0035L42.4097 25.2825L46.7927 26.7049L40.595 16.0035Z" fill="#2E3192" />
                        <path d="M37.4866 13.3065L39.3013 22.5855L43.6843 24.0079L37.4866 13.3065Z" fill="#2E3192" />
                        <path d="M25.1913 0.0884095L35.8322 29.3847L14.343 29.3085L25.1913 0.0884095Z" fill="white" />
                        <path d="M24.9842 58.5407L14.3434 29.2445L35.8325 29.3206L24.9842 58.5407Z" fill="white" />
                        <path
                            d="M23.1505 31.0911C22.7718 31.0898 22.4654 31.0167 22.2313 30.8718C22.0025 30.727 21.8404 30.5425 21.7452 30.3181L21.6812 30.3179L21.5508 31.0054L20.6388 31.0022L20.6543 26.6182L21.8543 26.6225L21.8469 28.7185C21.8458 29.0225 21.8796 29.2732 21.9482 29.4708C22.0169 29.6631 22.1177 29.8074 22.2507 29.9039C22.3837 30.0004 22.5435 30.0489 22.7302 30.0496C22.9542 30.0504 23.1251 29.9843 23.2429 29.8514C23.3607 29.7185 23.4201 29.5054 23.4212 29.212L23.4303 26.6281L24.6303 26.6323L24.6202 29.4803C24.619 29.827 24.562 30.1201 24.4491 30.3597C24.3416 30.5993 24.1783 30.7827 23.9591 30.91C23.74 31.0319 23.4705 31.0922 23.1505 31.0911ZM26.9063 31.1284C26.6343 31.1274 26.3784 31.0945 26.1386 31.0297C25.8988 30.9702 25.6751 30.884 25.4675 30.7713L25.7906 29.9004C25.9077 29.9702 26.0488 30.032 26.214 30.086C26.3791 30.1399 26.5417 30.1671 26.7017 30.1677C27.0003 30.1687 27.2381 30.0576 27.4149 29.8342C27.5917 29.6055 27.6809 29.2645 27.6825 28.8111C27.684 28.3845 27.5972 28.0588 27.4219 27.8342C27.2467 27.6096 26.9725 27.4966 26.5991 27.4953C26.4231 27.4947 26.2417 27.5207 26.0549 27.5734C25.868 27.6207 25.7131 27.6815 25.5902 27.7557L25.5937 26.7717C25.7593 26.6977 25.9462 26.6396 26.1543 26.5977C26.3625 26.5558 26.5839 26.5352 26.8185 26.5361C27.3092 26.5378 27.7089 26.6299 28.0176 26.8123C28.3263 26.9948 28.552 27.2569 28.6948 27.5987C28.8376 27.9352 28.9082 28.3408 28.9065 28.8155C28.9038 29.5728 28.7284 30.1482 28.3804 30.5416C28.0323 30.9351 27.5409 31.1307 26.9063 31.1284Z"
                            fill="black" />
                        <path
                            d="M20.1402 61.3306L20.1201 67.0181L19.0419 67.0143L16.638 63.0604L16.624 67.0057L15.5498 67.0019L15.5699 61.3144L16.6441 61.3182L19.0559 65.276L19.0699 61.3268L20.1402 61.3306ZM22.3785 61.3385L22.3583 67.026L21.2841 67.0222L21.3043 61.3347L22.3785 61.3385ZM24.0074 61.3443L24.9371 61.3476L26.4766 65.6344L28.0425 61.3586L28.9761 61.3619L26.8427 67.0419L26.0966 67.0393L24.0074 61.3443ZM23.5386 61.3427L24.4488 61.3459L24.5989 65.28L24.5927 67.0339L23.5185 67.0301L23.5386 61.3427ZM28.5308 61.3604L29.4448 61.3636L29.4247 67.0511L28.3505 67.0473L28.3567 65.2934L28.5308 61.3604ZM32.8628 61.3757L32.8426 67.0632L31.7723 67.0594L31.7925 61.3719L32.8628 61.3757ZM34.6284 61.382L34.6254 62.2296L30.0434 62.2134L30.0464 61.3657L34.6284 61.382Z"
                            fill="white" />
                    </svg>
                </div>
                <div class="col-9 text-end p-0 ">
                    <p>สถาบันมาตรวิทยาแห่งชาติ</p>
                    <p>National Institute of Metrology (Thailand)</p>
                </div>
            </a>
            <hr>
            <ul class="mynav nav nav-pills flex-column mb-auto">
                <hr>
                <h5>Project base management</h5>
                <li class="mb-1">
                    <a href="" class="nav-item rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#admin-collapse" aria-expanded="false">
                        <p>สำหรับผู้ดูแลระบบ</p>
                    </a>
                    <div class="collapse" id="admin-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ps-5 small">
                            <li><a href="#" class="rounded">ระดับผู้ใช้งาน</a></li>
                            <li><a href="#" class="rounded">หน่วยงาน</a></li>
                            <li><a href="#" class="rounded">ผู้ใช้งาน</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <a href="" class="nav-item rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#executive-collapse" aria-expanded="false">
                        <p>สำหรับผู้บริหาร</p>
                    </a>
                    <div class="collapse" id="executive-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ps-5 small">
                            <li><a href="#" class="rounded">ภาพรวมยุทธศาสตร์</a></li>
                            <li><a href="#" class="rounded">สรุปประสิทธิภาพการทำงาน</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <a href="" class="nav-item rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#staff-collapse" aria-expanded="false">
                        <p>สำหรับเจ้าหน้าที่</p>
                    </a>
                    <div class="collapse" id="staff-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ps-5 small">
                            <li><a href="#" class="rounded">ปีงบประมาณ</a></li>
                            <li><a href="#" class="rounded">เพิ่มโครงการ</a></li>
                        </ul>
                    </div>
                </li>

                <h5>OKR/ KPI</h5>
                <li class="mb-1">
                    <a href="" class="nav-item rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#report-collapse" aria-expanded="false">
                        <p>Report</p>
                    </a>
                    <div class="collapse" id="report-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ps-5 small">
                            <li><a href="#" class="rounded">Overview</a></li>
                            <li><a href="#" class="rounded">Updates</a></li>
                            <li><a href="#" class="rounded">Reports</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <a href="" class="nav-item rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#okr-collapse" aria-expanded="false">
                        <p>OKR / KPI Manage</p>
                    </a>
                    <div class="collapse" id="okr-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ps-5 small">
                            <li><a href="#" class="rounded">เพิ่ม/ลด/กำหนดเป้า OKR</a></li>
                        </ul>
                    </div>
                </li>
                <hr>
                <div class="d-flex">
                    <span>
                        <h6 class="mt-1 mb-0">NIMT</h6>
                        <small>NIMT@NIMT.COM</small>
                    </span>
                </div>
        </div>
        <div class="bg-light w-100">
            <div class="p-2 d-md d-flex text-white align-items-center w-100"
                style="height: 3.5rem; background-color: #a3a3a3;">
                <a href="#" class=" align-items-center" data-bs-toggle="offcanvas"
                    data-bs-target="#bdSidebar">
                    <i class='bx bx-menu-alt-left text-white d-xl-none me-2' style="font-size: 1.85rem;"></i>
                </a>
                <div class="fs-3 d-flex align-items-center m-0 w-100">
                    @yield('header')
                </div>
            </div>
            <main class="min-vh-100 p-3 w-100">
                @yield('content')
            </main>
        </div>
        @yield('script')
</body>

</html>
