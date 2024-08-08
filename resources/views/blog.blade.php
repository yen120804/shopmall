@extends('layout')
@section('title', 'Tin Tức')
@section('content')

<hr class="border border-success border-2 opacity-50">
<div class="container">
  <h3>Nấu ăn ngon cùng thực phẩm sạch</h3>
  <div class="row">
    <article class="col-sm-7">
<div class="row">
  <div class="card" style="width: 48rem;">
    <a href="ttchitiet.html"><img src="{{asset('img/mon1.png')}}" class="card-img-top" alt="..."></a>
    <div class="card-body">
      <a href="ttchitiet.html" class="text-decoration-none text-success"><h5 class="card-title">Học cách chế biến món canh ngao dứa cà chua thanh mát, ngon ngọt</h5></a>
      <p class="card-text">Thời tiết mùa hè oi bức khiến khẩu vị thưởng thức món ăn của bạn không còn ngon hơn trước, để điều chỉnh lại vị giác của...</p>
      <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
    </div>
  </div>
  <div class="row py-5">
    <div class="col-sm-4">
      <div class="card" style="width: 15rem;">
        <img src="{{asset('img/mon2.jpg')}}" class="card-img-top" alt="..." >
        <div class="card-body">
          <h5 class="card-title">Tham khảo cách làm món Sò lụa hấp sả thơm ngon, bổ dưỡng ăn là ghiền
          </h5>
          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
          <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card" style="width: 15rem;">
        <img src="{{asset('img/mon3.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Món Bò hầm sả ngon ngọt công thức chuẩn từ Bếp Thực Phẩm Nhanh</h5>
          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
          <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card" style="width: 15rem;">
        <img src="{{asset('img/mon4.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Canh mít non bổ dưỡng giải nhiệt trong mùa nắng nóng</h5>
          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
          <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
        </div>
      </div>
    </div>
    
  </div>

  </div>


<!-- <div class="row"></div> -->


</article>  

<aside class="col-sm-5">

    <!-- <div class=" col-lg-3 col-md-4 col-sm-6"> -->
      <div class=" col-lg-12 panel panel-default m-2">
        <div class="list-group ">
          <a class="list-group-item fw-bold bg-success text-light text-center"><i class="bi bi-list"></i>Tin tức mới nhất</a>
          <a href="rau.html" class="list-group-item ">Học cách chế biến món canh ngao dứa cà chua thanh mát, ngon ngọt</a>
          <a href="qua.html" class="list-group-item">Sườn cốt lết chiên sả ớt cực hao cơm, ngon bá cháy</a>
          <a href="nam.html" class="list-group-item">Tham khảo cách làm món Sò lụa hấp sả thơm ngon, bổ dưỡng ăn là ghiền</a>
          <a href="#" class="list-group-item">Món chay nấm hương nhồi đậu hũ sốt cà ngọt tuyệt trong ngày mùng 1</a>
          <a href="#" class="list-group-item">Món Bò hầm sả ngon ngọt công thức chuẩn từ Bếp Thực Phẩm Nhanh</a>
        <!-- </div> -->
      </div>
    </div>
</aside>

</div>

</div>
@endsection