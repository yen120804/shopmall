@extends('layout')
@section('title', 'Chi tiết sản phẩm')
@section('content')
<div class="container">
  <hr class="border border-success border-2 opacity-50">
  <h3 class="text-center">Hôm nay ăn gì</h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="layout .html">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Rau củ sạch</li>
    </ol>
  </nav>
  <div class="row">
    <div class="acticle col-lg-9 col-md-8">
      <div class="row detail">
        <div class="col-5 img-thumbnail">
          <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset($sp->img)}}" class="d-block w-100" alt="...">
                <input type="hidden" value="{{asset($sp->img)}}" name="image">
              </div> 
              <div class="carousel-item">
                <img src="{{asset($sp->img)}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset($sp->img)}}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
              <span class="carousel-control-prev-icon bg-black" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
              <span class="carousel-control-next-icon bg-black" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        </div>
        <div class="col-7 infor">
          <div class="header">
            <h3>{{$sp->name}}</h3>
            <hr />
            <h3>{{number_format($sp->price,0,',','.')}}VND</h3>
            <form action="{{route('cart.add')}}" method="POST">
              @csrf
              <input type="hidden" name="product_id" value="{{ $sp->id }}">
              <input type="hidden" name="product_name" value="{{ $sp->name }}">
              <input type="hidden" name="product_img" value="{{ $sp->img }}">
              <input type="hidden" name="product_price" value="{{ $sp->price }}">
              <input type="number" name="quantity" value="1" min="1"><br>
              <!-- <button type="button" class="btn btn-success mt-4">Mua ngay luôn</button> -->
                <button type="submit" class="btn btn-danger mt-4">Mua ngay</button>
            </form>
              <hr />
              <h6 class="fw-light">Danh mục : rau củ sạch</h6>
          </div>
        </div>
        <div class="thongtin">
          <h3 class="text-success">1. Giá trị dinh dưỡng của Cà chua</h3>
          <p class="fw-normal">
            – Theo nghiên cứu trong cà chua tỷ lệ chiếm cao nhất là nước 95%, 5% còn lại chủ yếu bao gồm
            carbohydrate và chất xơ. Trong 100 gam cà chua sống bao gồm thành phần dinh dưỡng sau: 18 kcal, 0,9 gam
            đạm, 3,9 gam carb, 2,6 gam đường, 1,2 gam chất xơ, 0,2 gam chất béo…
          </p>
          <h3 class="text-success">2. Lợi ích cho sức khỏe của Cà chua</h3>
          <p class="fw-normal">
            + Bảo vệ Sức khỏe tim mạch<br>
            + Ngăn ngừa ung thư<br>
            + Có lợi sức khỏe làn da<br>
            + Cải thiện thị lực<br>
            + Giảm lượng đường trong máu<br>
            + Thúc đẩy giấc ngủ ngon<br>
            + Giữ xương chắc khỏe<br>
            + Chữa các bệnh mãn tính<br>
            + Tốt cho mái tóc<br>
            + Giúp giảm cân<br>
          </p>
          <h3 class="text-success">3.Các món ăn ngon từ Cà chua</h3>
          <p class="fw-normal">
            – Những quả cà chua đỏ mọng chứa đựng thành phần dưỡng chất có lợi bên trong. Cà chua cũng được sử dụng
            làm nguyên liệu nấu ăn như: Canh cà chua trứng, Nước ép cà chua, Sốt cà chua, Cá thu sốt cà chua, Trứng
            xào cà chua, Cà chua cuộn trứng chiên, Đậu phụ sốt cà chua, Xúc xích xào cà chua, Trứng chiên cà chua,
            Salad cà chua bi…
          </p>
        </div>

      </div>
    </div>
    <div class="aside col-lg-3 col-md-4 col-sm-6">
      <div class=" col-lg-12 panel panel-default m-2">
        <div class="list-group ">
          <a class="list-group-item fw-bold bg-success text-light"><i class="bi bi-list"></i>Danh mục sản phẩm</a>
          <a href="rau.html" class="list-group-item d-flex justify-content-between ">Rau củ hằng ngày<span class="badge text-bg-secondary justify-content-end ">4</span></a>
          <a href="qua.html" class="list-group-item d-flex justify-content-between">Trái cây ngon<span class="badge text-bg-secondary justify-content-end">3</span></a>
          <a href="nam.html" class="list-group-item d-flex justify-content-between">Các loại nấm<span class="badge text-bg-secondary justify-content-end">4</span></a>
          <a href="#" class="list-group-item d-flex justify-content-between">Bán chạy<span class="badge text-bg-secondary justify-content-end">5</span></a>
          <a href="#" class="list-group-item d-flex justify-content-between">Giảm giá<span class="badge text-bg-secondary justify-content-end">6</span></a>
        </div>
      </div>
    </div>
  </div>
  <hr />

  <div class="container mt-1">
    <!-- Nav pills -->
    <ul class="nav nav-pills" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-bs-toggle="pill" href="#danhgia">Đánh Giá</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="pill" href="#binhluan">Bình Luận</a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div id="danhgia" class="container tab-pane active"><br>
        <img class="">
        <h3>Nguyễn Kim Tuyền</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div id="binhluan" class="container tab-pane fade"><br>
        <h3>Menu 1</h3>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <div id="number3" class="container tab-pane fade"><br>
        <h3>Menu 2</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
      </div>
    </div>
  </div>
  <h3>Sản phẩm tương tự</h3>
  <div class="products row">
    @foreach($splq as $lq)
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card ">
        <img src="{{asset($lq->img)}}" alt="{{$lq->name}}">
        <div class="card-body text-center">
          <h5 class="card-title">{{$lq->name}}</h5>
          <p class="card-text">{{$lq->price}}</p>
          <div class="btn-group" role="group" aria-label="Basic outlined example">
            <a href="" class="btn btn-sm btn-success border">Show Detail</a>
            <a href="" class="btn btn-sm btn-success border">Add to cart</a>
          </div>
        </div>
      </div>

    </div>
    @endforeach






  </div>
  <!-- detail -->










</div>
@endsection