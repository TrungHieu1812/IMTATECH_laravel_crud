<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
  
    public function index()
    {
        $product = DB::table('products')
        ->join('categories', 'products.cat_id', '=', 'categories.id')
        ->select('products.*', 'categories.name AS category_name')
        ->get();
        return view('index',compact('product'))->with('i',(request()->input('page',1)-1)*5);
    }

    public function create()
    {
        $categories = DB::table('categories')->get();
        return view('create',compact('categories'));

    }

   
    public function store(Request $request)
    {
        Products::create($request->all());
        return redirect()->route('product.index')->with('thongbao','Thêm sản phẩm thành công!');
    }

   
    public function show(string $id)
    {
        //
    }

    
    public function edit(Products $product)
    {
        return view('edit', compact('product'));
    }

   
    public function update(Request $request,Products $product)
    {
        $product->update($request->all());
        return redirect()->route('product.index')->with('thongbao','Cập nhật sản phẩm thành công!');
    }

    
    public function destroy(Products $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('thongbao','Xóa sản phẩm thành công!');
    }
}
