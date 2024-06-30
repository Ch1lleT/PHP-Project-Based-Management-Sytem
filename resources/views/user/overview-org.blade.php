@extends('/layout/layout')

@section('title', 'ภาพรวมองกร')
@section('header')
    <span class="mx-2" style="font-size:1.25rem;width:12rem;">ภาพรวมองกรประจำปี</span>
    <select class="form-select" id="Year" style="padding: 0rem 1.7rem 0rem 1rem !important;width:5rem;" name="Year">
        <option value="2556" selected>2556</option>
        <option value="2557">2557</option>
        <option value="2558">2558</option>
    </select>
    <style>
        .all-project-container {
            padding: 1rem;
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 1px 5px,
                rgba(0, 0, 0, 0.24) 0px 1px 5px;
        }
        /* .product-container{
            height: 0;
        } */
        .stg-item,.product-item{
            padding: 0.5rem 1rem;
            border-radius: 5px;
            display: inline-block;
            width: fit-content;
            transition: 0.25s ease-in-out;
        }
        .stg-item{
            background-color: hsl(240, 97%, 69%);
            border:1px solid hsl(240, 97%, 69%);
            color: white;
            &:hover{
                border :1px solid hsl(240, 97%, 69%);
                background-color: white;
                cursor: pointer;
                color:hsl(240, 97%, 69%);
            }
        }
        .product-item{
            background-color: hsl(293, 97%, 69%);
            border:1px solid hsl(293, 97%, 69%);
            color: white;
            &:hover{
                border :1px solid hsl(293, 97%, 69%);
                background-color: white;
                cursor: pointer;
                color:hsl(293, 97%, 69%);
            }
        }
        .product-container{
            height: fit-content;
            overflow: hidden;
            transition: 0.5s ease-in-out;
        }
    </style>
@endsection
@section('content')
    <div class="overview-org-container d-flex flex-column gap-3">
        <div class="stg-container row px-3 gap-3">
            <span class="stg-item" id="stg-item" onclick="show(this) value='stg-1'">STG 1</span>
            <span class="stg-item">STG 2</span>
            <span class="stg-item">STG 3</span>
            <span class="stg-item">STG 4</span>
        </div>
        <div class="product-container row px-3 gap-3" id="product-container">
            <span class="product-item">P 1</span>
        </div>
        <div class="plan-type"></div>
        <div class="graph"></div>
    </div>
@endsection
@section('script')
    <script>
        const show = (stg) =>{
            console.log(stg.value)
        }
    </script>
@endsection