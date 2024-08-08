@extends('layout')
@section('title', 'Đăng nhập')
@section('content')

<hr class="border border-success border-2 opacity-50">

<div class="container-sm py-5 p-5 ">
  <!-- <div class="col-sm-4"> -->
  <div class="card mb-3 border-success" style="width: auto;">
    <div class="row g-0">
      <div class="col-md-4 mt-auto">
        <img src="{{asset('img/permission.png')}}" class="img-fluid rounded-start p-5" alt="...">
      </div>
      <div class="col-md-8">

        <div class="row dangnhap ">


          <form method="POST" action="{{route('login.post')}}" class="col-sm-9 ">
            @csrf
            <div class="container mt-3 mb-3">
              <h1>Đăng Nhập</h1>
              <p>Vui lòng điền đầy đủ thông tin vào mẫu sau</p>
              <hr>
              <div>
                <label class="form-label" for="email"><b>Email</b></label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
              <div>
                <label class="form-label" for="password"><b>Mật khẩu</b></label>
                <input type="password" class="form-control" id="password" name="password">
              </div>

              <hr>


              <div>
                <button type="submit" class="btn btn-success">Đăng nhập</a>
              </div>

            </div>

            <div class="container ">
              <p>Bạn chưa có tài khoản? <a class="link text-success" href="{{route('register')}}">Đăng Kí</a>.</p>
              <p><a class="link text-success" href="{{asset('forgot')}}">Quên mật khẩu</a>.</p>

            </div>
          </form>

        </div>
      </div>

    </div>
  </div>
</div>
@endsection