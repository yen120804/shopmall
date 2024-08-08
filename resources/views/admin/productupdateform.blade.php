@extends('admin.layout')
@section('titlepage', 'Danh sách sản phẩm')
@section('content')


<section>
    <div class="container">
        <div class="col3">
            <h2>Cập nhật Sản Phẩm</h2>
            <form action="{{route('productupdate',$product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <select name="category_id" id="">
                    <option value="0" selected>Chọn danh mục</option>
                    @foreach ($categories as $item)
                    @if($item->id==$product->category_id)
                    <option value="{{$item->id}}" selected>{{$item->name}}</option>
                    @else
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endif

                    @endforeach
                </select>


                {{$product->category_id}}
                <input type="text" name="name" placeholder="Tên sản phẩm" value="{{$product->name}}">
                <input type="text" name="price" placeholder="Giá" value="{{$product->price}}">
                <input type="file" name="img">
                <img src="{{asset('uploaded/'.$product->img)}}" style="width:10rem;" alt="">
                <!-- <input type="text" placeholder="Số lượng" name="quantity" value="{{$product->quantity}}"> -->
                <textarea name="description" rows="5" style="width:100%">{{$product->description}}</textarea>
                <input type="hidden" name="id" value="{{$product->id}}">
                <input type="submit" value="Cập nhật">
            </form>

            <!-- <form>
                <input type="text" placeholder="Tên sản phẩm">
                <input type="text" placeholder="Giá">
                <input type="file" name="product_image"> 
                <input type="submit" value="Thêm">
            </form> -->
        </div>
        <div class="col9">
            <h2>Danh Sách Sản Phẩm</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Hình ảnh</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Lượt xem</th>
                        <th>Lượt bán</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $p)
                    <tr>
                        <td>{{$p->id}}</td>
                        <td><img src="{{asset('uploaded/'.$p->img)}}" alt="" style="width:4rem;"></td>
                        <td>{{$p->name}}</td>
                        <td>{{number_format($p->price,0,',','.')}}VND</td>
                        <td>{{$p->view}}</td>
                        <td>{{$p->sold}}</td>
                        <td class="action-icons">
                            <a href="{{ route ('productupdateform',$p->id)}}">EDIT</a>
                            -
                            <a href="{{ route ('productdelete', $p->id)}}">DELETE</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{$products->links('pagination::bootstrap-4')}}

        </div>
    </div>
</section>

@endsection