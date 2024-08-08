@extends('layout')
@section('title', 'Trang chủ')
@section('content')

<div class="banner">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('img/banner1.jpg')}}" class="d-block w-100" alt="...">

        </div>
        <div class="carousel-item">
          <img src="{{asset('img/banner2.jpg')}}" class="d-block w-100" alt="...">

        </div>
        <div class="carousel-item">
          <img src="{{asset('img/banner3.jpg')}}" class="d-block w-100" alt="...">

        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
<div class="">

  <hr class="border border-success border-2 opacity-50">
 
  <h3 class="text-center">Sản phẩm new</h3>


  <div class="row" >
    <div class="acticle col-lg-9 col-md-8" >
      <div class="products row" >
      @foreach($products as $p)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-2 mt-2" ng-repeat="p in products" >
          <div class="card">
            <img src="{{asset('uploaded/'.$p->img)}}" alt="..."></a>
            <div class="card-body text-center">
              
            <a style="text-decoration:none" href="{{asset('/products/' . $p->id)}}"><h5 class="card-title text-black">{{$p->name}}</h5></a>
              <p class="card-text">{{number_format($p->price,0,',','.')}}VND</p>
              <div class="btn-group" role="group" aria-label="Basic outlined example">
                <a href="{{route('productsdetail',$p->id)}}" class="btn btn-sm btn-success border">Show Detail</a>
                
                <form action="{{route('cart.add')}}" method="POST">
              @csrf
              <input type="hidden" name="product_id" value="{{ $p->id }}">
              <input type="hidden" name="product_name" value="{{ $p->name }}">
              <input type="hidden" name="product_img" value="{{ $p->img }}">
              <input type="hidden" name="product_price" value="{{ $p->price }}">
              <input type="hidden" name="quantity" value="1" min="1">
              <button type="submit" class="btn btn-sm btn-success border">Mua ngay</button>
            </form>

              
              
              </div>
            </div>
          </div>
          </div>
      @endforeach
       
    
        <h3 class="text-center">Sản phẩm bestseller</h3>

      @foreach($productsbest as $best)
      <div class="col-lg-3 col-md-4 col-sm-6 mb-2 mt-2" ng-repeat="p in products" >
          <div class="card">
            <img src="{{asset('uploaded/'.$best->img)}}" alt="..."></a>
            <div class="card-body text-center">
              <a style="text-decoration:none" href="{{asset('/products/detail')}}"><h5 class="card-title text-black">{{$best->name}}</h5></a>
              <p class="card-text">{{number_format($best->price,0,',','.')}}VND</p>
              <div class="btn-group" role="group" aria-label="Basic outlined example">
                <a href="{{route('productsdetail',$best->id)}}" class="btn btn-sm btn-success border">Show Detail</a>
                
                <form action="{{route('cart.add')}}" method="POST">
              @csrf
              <input type="hidden" name="product_id" value="{{ $best->id }}">
              <input type="hidden" name="product_name" value="{{ $best->name }}">
              <input type="hidden" name="product_img" value="{{ $best->img }}">
              <input type="hidden" name="product_price" value="{{ $best->price }}">
              <button type="submit" class="btn btn-sm btn-success border">Mua ngay</button>
            </form>

              </div>
            </div>
          </div>
          </div>
      @endforeach
      <h3 class="text-center">Sản phẩm view</h3>

      @foreach($productsview as $view)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-2 mt-2" >
          <div class="card">
            <img src="{{asset('uploaded/'.$view->img)}}" alt="..."></a>
            <div class="card-body text-center">
              <a style="text-decoration:none" href="{{asset('/products/detail')}}"><h5 class="card-title text-black">{{$view->name}}</h5></a>
              <p class="card-text">{{number_format($view->price,0,',','.')}}</p>
              <div class="btn-group" role="group" aria-label="Basic outlined example">
                <a href="{{route('productsdetail',$view->id)}}" class="btn btn-sm btn-success border">Show Detail</a>
                
                <form action="{{route('cart.add')}}" method="POST">
              @csrf
              <input type="hidden" name="product_id" value="{{ $view->id }}">
              <input type="hidden" name="product_name" value="{{ $view->name }}">
              <input type="hidden" name="product_img" value="{{ $view->img }}">
              <input type="hidden" name="product_price" value="{{ $view->price }}">
              <button type="submit" class="btn btn-sm btn-success border">Mua ngay</button>
            </form>

              </div>
            </div>
          </div>
        </div>
      @endforeach

      </div>
    </div>
  
    <div class="aside col-lg-3 col-md-4 col-sm-6">
      <div class=" col-lg-12 panel panel-default m-2">
      <div class="list-group ">
          <a class="list-group-item fw-bold bg-success text-light"><i class="bi bi-list"></i>Danh mục sản phẩm</a>
            @foreach($dsdm as $dm)
            <a href="{{route('productsByCategoryId',$dm->id)}}" class="list-group-item d-flex justify-content-between">{{ $dm->name }}<span class="badge text-bg-secondary justify-content-end">4</span></a>
         @endforeach
         <ul class="list-group">
  <a href="{{asset('/best')}}" class="list-group-item">Bán chạy</a>
  <a href="{{asset('/view')}}" class="list-group-item">Nhiều lượt xem</a>
</ul> 
          </div>
      </div>
    </div>
  </div>


  
  <div class="row page">
    <div class="col-sm-4">
      <div class="card mb-3 border-success" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4 mt-auto">
            <img src="{{asset('img/holding-hand.png')}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h6 class="card-title text-success">Nguồn giống tiêu chuẩn</h6>
              <p class="card-text">Nguồn giống khỏe giúp cây trồng đạt năng suất và chất lượng tốt. Giống mới lạ đem
                đến trải nghiệm mới cho thực khách</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card mb-3 border-success" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4 mt-auto">
            <img src="{{asset('img/trimming.png')}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h6 class="card-title text-success">Tiêu chuẩn chất lượng</h6>
              <p class="card-text">Các vườn nông sản của Suni được ứng dụng nuôi trồng theo các tiêu chí an toàn hữu
                cơ tối thiểu theo chứng nhận của VietGap</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card mb-3 border-success" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4 mt-auto">
            <img src="{{asset('img/trees.png')}}" class="img-fluid rounded-start " alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h6 class="card-title text-success">Sản phẩm dinh dưỡng</h6>
              <p class="card-text">Nông sản an toàn được đánh giá không chỉ an toàn và ngon mà còn có nhiều giá trị
                dinh dưỡng thiết thực hihi hahaa</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>










</div>
@endsection