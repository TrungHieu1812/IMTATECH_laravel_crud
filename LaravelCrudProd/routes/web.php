<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('/product',productController::class);

// Route::get('/products', function () {
//     return view('welcome');
// });
