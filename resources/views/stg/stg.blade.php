@extends('/layout/layout')
@section('title', 'Strategic')
@section('header')
    <div class="">
        <p class="m-0 mx-3">ปีงบประมาณ</p>
    </div>
    <div>
        <select name="" id="">
            <option value=""></option>
        </select>
    </div>
    <div>
        <p class="m-0 mx-3">ยุทธศาสตร์</p>
    </div>
    <div>
        <img src="http://nimtscurve.nimt.or.th/images/add.png" class="click" title="เพิ่มโครงการ"
            onclick="newProject(&quot;http:)">
    </div>
    <div>
        @foreach ($stg as $stgItem)
            <button type="button" class="btn btn-secondary">{{ $stgItem['name'] }}</button>
        @endforeach
    </div>
@endsection
