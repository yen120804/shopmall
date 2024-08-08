@extends('admin.layout')
@section('titlepage', 'Danh mục sản phẩm')
@section('content')


<section>
    <div class="container">
        <div class="col3">
            <h2>Sửa Danh Mục</h2>
            <form action="{{route('categoryupdate',$category->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label for="name">Tên danh mục:</label>
                <input type="text" id="name" name="name" value="{{ $category->name }}">
                @error('name')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
                <button type="submit" class="btn btn-success">Cập nhật</button>
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
                    @foreach($categories as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td class="action-icons">
                            <a href="{{ route('categoryedit', $item->id)}}">EDIT</a>
                            <a href="{{ route('categorydelete', $item->id)}}">DELETE</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</section>

@endsection