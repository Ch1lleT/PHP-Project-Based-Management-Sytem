@extends('/layout/layout')
@section('title','Strategic')
@section('nav')
<div class="">
    <p class="m-0 mx-3">ปีงบประมาณ</p>
</div>
{{-- <a href="#" class=" align-items-center" data-bs-toggle="offcanvas" data-bs-target="#bdSidebar">
    <i class='bx bx-menu-alt-left text-white d-md-none' style="font-size: 1.85rem;"></i>
</a> --}}
<div>
    <select name="" id="">
        <option value=""></option>
    </select>
</div>
<div>
    <p class="m-0 mx-3">ยุทธศาสตร์</p> 
</div>
<div class=">
    <img src="http://nimtscurve.nimt.or.th/images/add.png" class="click" title="เพิ่มโครงการ" onclick="newProject(&quot;http:)">
</div>
<div>
    {{-- @@foreach ($star as $stg) --}}
        <button type="button" class="btn btn-secondary">ยุทธศาสตร์ที่ 1 </button>
    {{-- @endforeach --}}
</div>
@endsection