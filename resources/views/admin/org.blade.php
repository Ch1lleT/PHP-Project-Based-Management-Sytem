@extends('/layout/layout')

@section('title', 'หน่วยงาน')

@section('header')
    <div class="fs-5 m-3">หน่วยงาน</div>

@endsection


@section('content')
    {{-- {{dd($OrgAll)}} --}}

    <div class="col-12 col-lg p-3 rounded-3"
        style="
            margin: 5px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 1px 5px,
                rgba(0, 0, 0, 0.24) 0px 1px 5px;">
        <div class="d-flex justify-content-between mb-3">
            {{-- <p class="">หน่วยงาน</p> --}}
            <a class="btn custom-button text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">เพิ่มหน่วยงาน</a>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">เพิ่มหน่วยงาน</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="modal-body row">
                                <div class="mb-3 row ">
                                    <label for="nameSTG"
                                        class="col-sm-2 col-form-label p-0 pt-2 text-end">ชื่อหน่วยงาน</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nameSTG" name="nameSTG">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                        <button type="button" class="btn btn-primary">บันทึก</button>
                    </div>
                </div>
            </div>
        </div>
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
                                    <div class="custom-button px-3 text-white rounded">
                                        {{ $so->org_name }}
                                    </div>
                                @endforeach
                            </div>
                        </td>
                        <td class="">
                            <a href="{{ route('org.manange', ['id' => $org->org_id]) }}" class="text-decoration-none">
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
