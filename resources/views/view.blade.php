@extends('layout')
@section('title', 'Sản phẩm')
@section('content')

<div class="container">

    <hr class="border border-success border-2 opacity-50">
    
    <form action="{{ route('products.search') }}" method="GET">
                <input type="text"style="width:20rem;height:2.2rem;" name="query" placeholder="Tìm kiếm sản phẩm">
                <button class="btn btn-success" type="submit">Tìm kiếm</button>
            </form>

    <h3 class="text-center">Hôm nay ăn gì</h3>
    <div class="row">
      <!-- <h3 class="text-center">Bán chạy</h3> -->

      <div class="acticle col-lg-9 col-md-8" >
        <div class="products row">
@foreach($productsview as $view)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-2 mt-2" ng-repeat="p in products" >
          <div class="card">
    
            <img src="{{asset('uploaded/'.$view->img)}}" alt="..."></a>
            <div class="card-body text-center">
              <a style="text-decoration:none" href="{{route('productsdetail',$view->id)}}"><h5 class="card-title text-black">{{$view->name}}</h5></a>
              <p class="card-text">{{number_format($view->price,0,'.',',')}}VND</p>
              <div class="btn-group" role="group" aria-label="Basic outlined example">
                <a href="{{route('productsdetail',$view->id)}}" class="btn btn-sm btn-success border">Show Detail</a>
                
                <form action="{{route('cart.add')}}" method="POST">
              @csrf
              <input type="hidden" name="product_id" value="{{ $view->id }}">
              <input type="hidden" name="product_name" value="{{ $view->name }}">
              <input type="hidden" name="product_img" value="{{ $view->img }}">
              <input type="hidden" name="product_price" value="{{ $view->price }}">
              <input type="hidden" name="quantity" value="1" min="1">
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



    <nav aria-label="Page navigation example"> 
   
       <ul class="pagination d-flex justify-content-center">
        
        {{$dssp->appends(['query'=>$kyw])->links('pagination::bootstrap-4')}}
        
      </ul>
    </nav> 



    </div>
    @endsection