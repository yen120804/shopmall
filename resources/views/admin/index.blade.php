@extends('admin.layout')
@section('titlepage', 'Control Panel')
@section('content')


<div class="container">
    <div class="grid" >
        <div class="card">
            <h2>Doanh số bán hàng</h2>
            <canvas id="salesChart" width="400" height="200"></canvas>
        </div>
        <div class="card">
            <h2>Đơn hàng mới</h2>
            <p>100</p>
        </div>
        <div class="card">
            <h2>Sản phẩm bán chạy</h2>
            <p>50</p>
        </div>
    </div>
    <div class="grid" >
        <div class="card">
            <h2>Danh sách sản phẩm</h2>
            
        </div>
        <div class="card">
            <h2>Bình luận</h2>
            <p>100</p>
        </div>
        <div class="card">
            <h2>Khách hàng mới</h2>
            <p>50</p>
        </div>
    </div>
</div>

@endsection