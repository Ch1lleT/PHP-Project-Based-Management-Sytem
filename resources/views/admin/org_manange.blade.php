@extends('/layout/layout')
@section('title', 'NIMT Dashboard')
@section('header')
    <div class="fs-5 m-3">
        Organize Management
    </div>
@endsection
@section('style')
    <style>

    </style>
@endsection

@section('content')

<script>
    // var sub_org = <?php echo json_encode($sub_org); ?>;

    var new_sub_org = [];
    var del_sub_org = [];


</script>
<div class=" text-end my-4">
        <a href="{{route('org')}}" class="text-decoration-none">
            <button class="btn border border-danger text-danger">กลับ / Back</button>
        </a>
        <button class="btn btn-primary" onclick="save()">บันทึก</button>
        {{-- Delete org btn will show if user click edit only --}}
        <button class="btn btn-danger" id="org-del-btn">ลบ</button>
</div>

    <div class="p-3 rounded-3"style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px,  rgba(0, 0, 0, 0.24) 0px 1px 2px;">
        <input id="org-id" type="text" style="display: none;" value="{{$org->org_id}}">
        <div action="">
            <div class="row">
                <div class="org col">
                    <label for="org-primary" class="form-label">หน่วยงานหลัก</label>
                    <input id="org-primary" type="text" class="form-control" value="{{$org->org_name}}">
                </div>
            </div>

            <label for="add-sub-org" class="form-label m-0 mt-3">หน่วยงานย่อย</label>
            <div class="row">
                <div class="col m-3 p-0">
                    <input id="add-sub-org" type="text" class="form-control" placeholder="พิมพ์ชื่อหน่วยงาน">
                </div>
                <div class="col m-3 p-0">
                    <button class="btn btn-primary" id='add-btn' type="button">เพิ่ม</button>
                </div>
            </div>
        </div>
        <div id="sub-org-list">

            @foreach ($sub_org as $sub)
            <div class="row" data-sub_org_id="{{$sub->sub_org_id}}">
                <div class="col-10 m-3 p-0">
                    <input type="text" class="form-control" placeholder="Sub" value="{{$sub->org_name}}">
                </div>
                <div class="col-1 m-3 p-0">
                    <button class="btn btn-danger delete-btn" >ลบ</button>
                </div>
            </div>
            @endforeach

        </div>
        
    </div>
    <script>
    
        $("#add-btn").on("click",function(){
            let sub_org_name = $("#add-sub-org").val();
            console.log(sub_org_name);
            $('<div class="row" id="temp'+ new_sub_org.length + '">' +
                '<div class="col-10 m-3 p-0">' +
                    '<input type="text" class="form-control" placeholder="Sub" value="'+ sub_org_name + '" >'  +
                    '</div>' +
                    '<div class="col-1 m-3 p-0">' +
                        '<button class="btn btn-danger">ลบ</button>' +
                '</div>' +
                '</div>').appendTo('#sub-org-list');
                
                new_sub_org.push({"main_org":$("#org-id").val(),"org_name":sub_org_name});
        });

        

        
    
    </script>
    <script>
    
        $(".delete-btn").on("click",function(){
            const parent = $(this).parent().parent();
            
            if(parent.data('sub_org_id') != null){
                del_sub_org.push(parent.data('sub_org_id'));
            }
            parent.remove();            
            
        });


        $("#org-del-btn").on("click",function(){
            $.ajax({
                url:'/api/org/deact/{{$org->org_id}}',
                type:"DELETE",
                success: function(res){
                    window.location.href = "{{route('org')}}";
                }
            })
        })

        

        
    
    </script>
    <script>
        
        function save(){
            var data = {};
            if(new_sub_org.length != 0) {data.new_sub_org = new_sub_org}
            if(del_sub_org.length != 0) {data.del_sub_org = del_sub_org}

            $.post(`/api/org/save/{{$org->org_id}}`,JSON.stringify(data)).done(
                (e)=>{
                    new_sub_org = []
                    del_sub_org = []
                }
            )
       }
    
    </script>
@endsection
