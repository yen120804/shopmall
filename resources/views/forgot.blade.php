@extends('layout')
@section('title', 'Quên mật khẩu')
@section('content')

<hr class="border border-success border-2 opacity-50">
    <div class="container">
      <h3 class="text mb-3">Thông Tin Tài Khoản</h3>
      <hr/>
      <h5 class="fw-normal">Quên mật khẩu? Vui lòng nhập tên đăng nhập hoặc địa chỉ email. Bạn sẽ nhận được một liên kết tạo mật khẩu mới qua email.</h5>

    </div>
<div class="container">
  <label for="inputUser" class="form-label text-success">Nhập tên tài khoản hoặc email</label>
  <input type="password" id="inputUser" class="form-control " style="width: 20rem;" aria-describedby="userHelpBlock">
 <a href="#" class="btn btn-success mt-3">ĐẶT LẠI MẬT KHẨU</a>
</div>

    @endsection