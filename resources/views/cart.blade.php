@extends('layout')
@section('title', 'Giỏ hàng')
@section('content')

<hr class="border border-success border-2 opacity-50">
<h3 class="my-4 text-center">Giỏ Hàng</h3>
<div class="container">

  <div class="row giohang">
    <div class="col">
      <div class="row sanpham">
        <table class="table">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">SẢN PHẨM</th>
              <th scope="col">GIÁ</th>
              <th scope="col">SỐ LƯỢNG</th>
              <th scope="col">TẠM TÍNH</th>
            </tr>
          </thead>
          <tbody>
            @if($cart !== null)
            @php
            $total = 0;
            @endphp
            @foreach(session('cart') as $productId => $item)
            <tr>
              <td>
                <form method="post" action="{{ route('cart.remove', ['id' => $productId]) }}">
                  @csrf
                  <button class="btn btn-danger btn-sm" type="submit"><i class="bi bi-x-circle"></i></button>
                </form>
              </td>
              <th scope="row">

                <img class="img-thumbnail" src="{{asset('uploaded/'.$item['product_img'])}}" width="70px">
                <a href="detail.html" class="text-decoration-none text-success fw-normal">{{$item['product_name']}}</a>
              </th>
              <td>{{ number_format($item['product_price'], 0, ',', '.') }} VND</td>
              <td><input type="number" value="{{$item['quantity']}}" min="1"></td>
              <td>{{number_format($item['product_price'] * $item['quantity'], 0 , ',' , '.')}} VND</td>

            </tr>
            <tr>

              @php
              $total += $item['product_price'] * $item['quantity']; // Tính tổng giá trị
              @endphp
              @endforeach
              @else
              <td>Giỏ hàng trống</td>
              @endif
            </tr>
            <tr>
              <td colspan="6" style="text-align: right;" >
                Tổng đơn hàng : {{number_format( $total ?? 0 , 0 , ',' , '.')}} VND
                <a class="btn btn-success" href="{{route ('checkout')}}">THANH TOAN</a>
              </td>
            </tr>
            <td colspan="6">
              <a class="text-decoration-none text-success " href="{{ route('cart.destroy') }}"><i class="bi bi-trash"></i>Xóa tất cả sản phẩm</button>
            </td>
            <tr>
              <td colspan="6">
                <a class="continue-shopping text-decoration-none text-success " href="{{route('home')}}"><i class="bi bi-arrow-left"></i>Tiếp tục mua hàng</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>












</div>


@endsection