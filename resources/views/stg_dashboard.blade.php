@extends('/layout/layout')

@section('title', 'Dashboard')

@section('header')
    <h3 class="font-weight-bold">Dashboard</h3>
@endsection
@section('content')
    <div class="row gap-3 justify-content-center" id="grap">
        <div class="col-md-5 h-20px">
            <div id="chart-container"></div>
        </div>
        <div class="col-md-5 h-20px">
            <div id="chart-container"></div>
        </div>
    </div>
    <div class="" id="detail">
        <table>

        </table>
    </div>
@endsection
@section('script')

@endsection
