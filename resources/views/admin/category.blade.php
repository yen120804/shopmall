@extends('admin.layout')
@section('titlepage', 'Danh mục sản phẩm')
@section('content')


<section>
    <div class="container">
        <div class="col3">
            <h2>Thêm Mới Danh Mục</h2>
            <form action="{{route('categoryadd')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <label for="">Tên danh mục</label>
                <input type="text" placeholder="Tên danh mục" name="name">
                <button type="submit" class="btn btn-success">Thêm danh mục</button>
            </form>
        </div>
        <div class="col9">
            <h2>Danh Sách Danh Mục</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên Danh Mục</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($category as $cat)
                    <tr>
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->name}}</td>
                        <td>{{$cat->products->count()}}</td>

                        <td class="action-icons">
                            <a href="{{ route('categoryedit', $cat->id)}}">EDIT</a>
                            <!-- <a href="{{ route('categorydelete', $cat->id)}}">DELETE</a> -->
                            <a href="">
                            @if ($cat->hidden === 1)
                        <form action="{{ route('categoryunhide', ['id' => $cat->id]) }}" method="POST" style="display:inline">
                          @csrf
                          @method('PUT')
                          <button type="submit" class="" data-toggle="tooltip" data-original-title="Unhide category" style="border: none; background: none;">
UNHIDE                          </button>
                        </form>
                      @else
                        <form action="{{ route('categoryhide', ['id' => $cat->id]) }}" method="POST" style="display:inline">
                          @csrf
                          @method('PUT')
                          <button type="submit" class="" data-toggle="tooltip" data-original-title="Hide category" style="border: none; background: none;">
                            HIDE
                          </button>
                        </form>
                        </a>
                      @endif
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
</section>

@endsection