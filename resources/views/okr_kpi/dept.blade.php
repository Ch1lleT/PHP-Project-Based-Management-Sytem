@extends('/layout/layout')
@section('title', 'Dept')
@section('header')
    <div class="fs-5">
        <span class="border-end">
            NIMT OKR & KPI ประจำปี 2566
        </span>
        <span class="ps-2">
            ฝก. กน. อบต. กยก. คสช.
        </span>
    </div>
@endsection
@section('style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
    <style>
        tr td a{
            color: black;
        }
    </style>
@endsection
@section('content')
    <div class="p-3">
        <h4>แสดงข้อมูล : ฝ่ายนโยบายและยุทธสาสตร์</h4>
        <div class="overflow-x-auto">
            <table class="table display table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">STG</th>
                        <th scope="col">No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Target(KR)</th>
                        <th scope="col">Actual(KR)</th>
                        <th scope="col">Target(KPI)</th>
                        <th scope="col">Actual(KPI)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">stg 1</th>
                        <td>kpi 1.0</td>
                        <td><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam nulla voluptas adipisci cupiditate sit dolores.</a></td>
                        <td>10</td>
                        <td>10</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th scope="row">stg 2</th>
                        <td>kpi 1.0</td>
                        <td><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolorum, quam placeat eligendi dicta quis possimus enim quia perferendis ipsa!</a></td>
                        <td>10</td>
                        <td>10</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th scope="row">stg 3</th>
                        <td>kpi 1.0</td>
                        <td><a href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus consequatur est excepturi nihil? Veniam hic, necessitatibus consequuntur officia facere possimus, consequatur neque repellendus velit reprehenderit unde sapiente ipsam temporibus excepturi nam aliquam facilis nemo dicta ea culpa omnis nesciunt assumenda. Eius beatae aliquam voluptatibus, repellat ea nostrum blanditiis delectus vero?</a></td>
                        <td>10</td>
                        <td>10</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
    

                </tbody>
            </table>
        </div>

    </div>
    <script>
        $(document).ready(function() {
            $('table').DataTable({
                pageLength: 5,
                lengthMenu: [
                    [3, 5, 10, 15, 20],
                    [3, 5, 10, 15, 20]
                ],
                dom: 'Blfrtip',

            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
@endsection
