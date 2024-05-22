@extends('/layout/layout')

@section('title', 'หน่วยงาน')

@section('header')
    <div class="fs-5 m-3">หน่วยงาน</div>

@endsection


@section('content')
    {{-- {{dd($OrgAll)}} --}}
    <div class="p-2 d-flex justify-content-end mb-3">
        <a href="{{ route('org_manange') }}" class="btn btn-primary ">เพิ่มหน่วยงาน</a>
    </div>
    <div class="col-12 col-lg p-3 rounded-3"
        style="
            margin: 5px;
            box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, 
                        rgba(0, 0, 0, 0.24) 0px 1px 2px;">
        <table id="myTable" class="table" style="padding:5px;">
            <thead>
                <tr>
                    <th>หน่วยงาน</th>
                    <th>หน่วยงานย่อย</th>
                    <th style="width: 40px;">แก้ไข</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($OrgAll as $org)
                    <tr>
                        {{-- {{dd($org)}} --}}

                        <td>{{ $org->org_name }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                @foreach ($org->sub_org as $so)
                                <div class="bg-primary px-3 text-white rounded">
                                    {{ $so->org_name }}
                                </div>
                                @endforeach
                            </div>
                        </td>
                        <td class="">
                            <a href="{{ route('org_manange') }}" class="text-decoration-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 12 12">
                                    <path fill="#000000"
                                        d="M10.443 1.56a1.914 1.914 0 0 0-2.707 0l-.55.551a.506.506 0 0 0-.075.074l-5.46 5.461a.5.5 0 0 0-.137.255l-.504 2.5a.5.5 0 0 0 .588.59l2.504-.5a.5.5 0 0 0 .255-.137l6.086-6.086a1.914 1.914 0 0 0 0-2.707M7.502 3.21l1.293 1.293L3.757 9.54l-1.618.324l.325-1.616zm2 .586L8.209 2.502l.234-.234A.914.914 0 1 1 9.736 3.56z">
                                    </path>
                                </svg>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        new DataTable('#myTable');
    </script>
@endsection
