@extends('layout')
@section('title', 'Giỏ hàng')
@section('content')

<hr class="border border-success border-2 opacity-50">
<h3 class="my-4 text-center">Giỏ Hàng</h3>
<div class="row">
    <div class="col-6">
    <h3>Thông tin người dùng</h3>

<!-- Form nhập thông tin người mua hàng -->
<form method="post" action="{{ route('checkout.process') }}">
    @csrf
    <div class="mb-4">
      <label for="name" class="form-label">Tên:</label>
      <input type="text" id="name" name="name" class="form-control"
        value="{{ Auth::user()?->name }}">
    </div>
   
    <div class="mb-4">
      <label for="email" class="form-label">Email:</label>
      <input type="text" id="email" name="email" class="form-control"
      value="{{ Auth::user()?->email }}"
      >
    </div>

    <div class="mb-4">
      <label for="phone" class="form-label">Dien Thoai:</label>
      <input type="text" id="phone" name="phone" class="form-control"
      value="{{ Auth::user()?->phone }}"
      >
    </div>

    <div class="mb-4">
      <label for="address" class="form-label">Dia Chi:</label>
      <input type="text" id="address" name="address" class="form-control"
      value="{{ Auth::user()?->address }}"
      >
    </div>
    <button class="btn btn-success mt-3" type="submit">Xác nhận thanh toán</button>
</form>
</div>
<div class="col-6">
<!-- Hiển thị giỏ hàng -->
<h3>Giỏ hàng</h3>

<table class="table">
          <thead>
            <tr>
              <th scope="col">SẢN PHẨM</th>
              <th scope="col">GIÁ</th>
              <th scope="col">SỐ LƯỢNG</th>
              <th scope="col">TẠM TÍNH</th>
            </tr>
          </thead>
          <tbody>
          @foreach($cart as $item)

            <tr>
              <th scope="row">

                <img class="img-thumbnail" src="{{asset('uploaded/'.$item['product_img'])}}" width="70px">
                <a href="detail.html" class="text-decoration-none text-success fw-normal">{{$item['product_name']}}</a>
              </th>
              <td>{{$item['product_price']}}</td>
              <td>{{$item['quantity']}}</td>
              <td>{{$item['product_price'] * $item['quantity']}}</td>

            </tr>
            @endforeach

           
          
            </tr>
          </tbody>
        </table>

</div>

@endsection
</div>