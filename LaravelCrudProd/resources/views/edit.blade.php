@extends('layout')

@section('content')
    <div class="container w-50">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Sửa sản phẩm</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('product.index')}}" class="btn btn-primary float-end">Danh sách sản phẩm </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('product.update',$product->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Tên sản phẩm</strong>
                                <input type="text" value="{{$product->name}}" class="form-control mt-2 mb-3" name="name" placeholder="Nhập tên sản phẩm">
                            </div>
                            <div class="form-group">
                                <strong>Giá sản phẩm</strong>
                                <input type="number" value="{{$product->price}}" class="form-control mt-2 mb-3" name="price" placeholder="Nhập giá sản phẩm">
                            </div>
                            <div class="form-group">
                                <strong>Mô tả sản phẩm</strong>
                                <input type="text" value="{{$product->description}}"  class="form-control mt-2 mb-3" name="description" placeholder="Nhập mô tả sản phẩm">
                            </div>
                            <div class="form-group">
                                <strong>Thể Loại</strong>
                                <input type="number" value="{{$product->cat_id}}"  class="form-control mt-2 mb-3" name="cat_id" placeholder="Nhập thể loại sản phẩm">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-success mt-2 w-50">Cập nhật</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
