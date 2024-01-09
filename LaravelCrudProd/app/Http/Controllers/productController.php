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
        return view('create');
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

    
    public function edit(string $id)
    {
        //
    }

   
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        //
    }
}
