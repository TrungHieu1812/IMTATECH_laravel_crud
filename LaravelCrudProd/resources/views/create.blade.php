@extends('layout')

@section('content')
    <div class="container w-50">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Thêm sản phẩm</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('product.index') }}" class="btn btn-primary float-end">Danh sách sản phẩm </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('product.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Tên sản phẩm</strong>
                                <input type="text" class="form-control mt-2 mb-3" name="name"
                                    placeholder="Nhập tên sản phẩm">
                            </div>
                            <div class="form-group">
                                <strong>Giá sản phẩm</strong>
                                <input type="number" class="form-control mt-2 mb-3" name="price"
                                    placeholder="Nhập giá sản phẩm">
                            </div>
                            <div class="form-group">
                                <strong>Mô tả sản phẩm</strong>
                                <input type="text" class="form-control mt-2 mb-3" name="description"
                                    placeholder="Nhập mô tả sản phẩm">
                            </div>
                            <strong>Thể loại</strong>
                            <select class="form-select mt-2" aria-label="Default select example" name="cat_id">
                                @foreach ($categories as $item)
                                        <option value="{{$item->id}}" >{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <button type="submit" class="btn btn-success mt-2 w-50">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
