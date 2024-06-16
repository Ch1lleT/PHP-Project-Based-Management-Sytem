@extends('/layout/layout')

@section('title', 'งบประมาณ')

@section('header')
    <span class="mx-2" style="font-size:1.25rem;width:11rem;">รายการงบประมาณ</span>
    <select class="form-select" id="Year" style="padding: 0rem 1.7rem 0rem 1rem !important;width:5rem;" name="Year">
        <option value="2556" selected>2556</option>
        <option value="2557">2557</option>
        <option value="2558">2558</option>
    </select>
@endsection

@section('content')
    <div class="text-end mb-2">
        <button class="btn btn-primary">เพิ่ม</button>
    </div>
    <table class="table display">
        <thead>
            <th class="text-center" style="width:5%;">
                No.
            </th>
            <th class="w-50">
                ยุทธศาสตร์
            </th>
            <th>
                งบดำเนินงาน
            </th>
            <th>
                งบลงทุน
            </th>
            <th>
                ผู้ดูแล
            </th>
            <th>
                ลบ / แก้ไข
            </th>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">
                    1
                </td>
                <td>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat dolorum aliquid eius eveniet veritatis
                    distinctio facilis cumque unde, ullam, eos fugiat deleniti quidem illum officia totam obcaecati hic
                    culpa facere?
                </td>
                <td>
                    50000
                </td>
                <td>
                    50000
                </td>
                <td>
                    <span class="btn btn-success">
                        P'Tik
                    </span>
                </td>
                <td>
                    <span class="btn btn-danger">
                        delete
                    </span>
                    <span class="btn btn-secondary">
                        edit
                    </span>
                </td>
            </tr>
        </tbody>
    </table>
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
