@extends('/layout/layout')
@section('title', 'ระดับผู้ใช้งาน')
@section('header')
    <div class="fs-5">ระดับผู้ใช้งาน</div>
@endsection

@section('content')
        <table class="table" style="width: 20%; background-color:">
            <thead>
                <tr>
                    <th>ระดับผู้ใช้งาน</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Admin
                    </td>
                </tr>
                <tr>
                    <td>
                        Power user
                    </td>
                </tr>
                <tr>
                    <td>
                        Supervisor
                    </td>
                </tr>
                <tr>
                    <td>
                        Executive
                    </td>
                </tr>
                <tr>
                    <td>
                        Editer
                    </td>
                </tr>
                <tr>
                    <td>
                        User
                    </td>
                </tr>
            </tbody>
        </table>
@endsection
