@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Thêm sản phẩm</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('product.index')}}" class="btn btn-primary float-end">Danh sách sản phẩm </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('product.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Mã sản phẩm</strong>
                                <input type="text" class="form-control" name="idProd" placeholder="Nhập mã sản phẩm">
                            </div>
                            <div class="form-group">
                                <strong>Tên sản phẩm</strong>
                                <input type="text" class="form-control" name="name" placeholder="Nhập tên sản phẩm">
                            </div>
                            <div class="form-group">
                                <strong>Giá sản phẩm</strong>
                                <input type="number" class="form-control" name="price" placeholder="Nhập giá sản phẩm">
                            </div>
                            <div class="form-group">
                                <strong>Mô tả sản phẩm</strong>
                                <input type="text" class="form-control" name="description" placeholder="Nhập mô tả sản phẩm">
                            </div>
                            <div class="form-group">
                                <strong>Thể Loại</strong>
                                <input type="number" class="form-control" name="cat_id" placeholder="Nhập thể loại sản phẩm">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Lưu</button>
                </form>
            </div>
        </div>
    </div>
@endsection
