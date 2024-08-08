@extends('layout')
@section('title', 'Đăng kí')
@section('content')

<hr class="border border-success border-2 opacity-50">

<div class="container-sm py-5 p-5 ">
  <!-- <div class="col-sm-4"> -->
  <div class="card mb-3 border-success" style="width: auto;">
    <div class="row g-0">
      <div class="col-md-4 mt-auto">
        <img src="{{asset('img/registered.png')}}" class="img-fluid rounded-start p-5" alt="...">
      </div>
      <div class="col-md-8">
        <!-- <div class="card-body">
            <h6 class="card-title text-success">Sản phẩm dinh dưỡng</h6>
            <p class="card-text">Nông sản an toàn được đánh giá không chỉ an toàn và ngon mà còn có nhiều giá trị
              dinh dưỡng thiết thực hihi hahaa</p>
          </div> -->

        <div class="row dangki ">


          <form class="col-sm-9" method="POST" action="{{ route('register.post') }}">
            @csrf
            <div class="container mt-3 mb-3">
              <h1>Đăng kí</h1>
              <p>Vui lòng điền đầy đủ thông tin vào mẫu sau</p>
              <hr>
              <div>
                <label class="form-label" for="name"><b>  Họ và tên</b></label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div>
                <label class="form-label" for="email"><b>Email</b></label>
                <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div>
                <label class="form-label" for="pw"><b>Mật khẩu</b></label>
                <input type="password" class="form-control" id="pw" name="password">
                @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div>
                <label class="form-label" for="repw"><b>Nhập lại mật khẩu</b></label>
                <input type="password" class="form-control" id="repw" name="password_confirmation">
                @error('password_confirmation')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <hr>
             
              <div>
                <button type="submit" class="btn btn-success">Đăng kí</button>
              </div>

            </div>

            <div class="container signin">
              <p>Bạn đã có tài khoản? <a class="link text-success" href="{{route('login')}}">Đăng nhập</a>.</p>
            </div>
          </form>

        </div>
      </div>

    </div>
  </div>
</div>
@endsection