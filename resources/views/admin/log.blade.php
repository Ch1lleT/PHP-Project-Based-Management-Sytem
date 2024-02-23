@extends('/layout/layout')

@section('title', 'Log')

@section('header')
    <div class="fs-5">Log</div>
@endsection
@section('content')
    <div>
        <table class="table display">
            <thead>
                <tr>
                    <th>
                        FisrtName
                    </th>
                    <th>
                        LastName
                    </th>
                    <th>
                        Time
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        1
                    </td>
                    <td>
                        TTTT
                    </td>
                    <td>
                        TTTT
                    </td>
                    <td>
                        TTTT
                    </td>

                </tr>
                <tr>
                    <td>
                        1
                    </td>
                    <td>
                        TTTT
                    </td>
                    <td>
                        TTTT
                    </td>
                    <td>
                        TTTT
                    </td>

                </tr>
                <tr>
                    <td>
                        TTTT
                    </td>
                    <td>
                        2
                    </td>
                    <td>
                        TTTT
                    </td>
                    <td>
                        TTTT
                    </td>

                </tr>
            </tbody>
        </table>
    </div>
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