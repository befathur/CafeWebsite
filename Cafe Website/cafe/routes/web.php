<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use App\Models\Dashboard;
use App\Models\Supplier;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SupplierController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('cafe.dashboard');
});

Route::get('/formproduk', function () {
    return view('cafe.formproduk');
});

Route::get('/formsupplier', function () {
    return view('cafe.formsupplier');
});

Route::get('/produk', function () {
    return view('cafe.produk');
});

Route::get('/supplier', function () {
    return view('cafe.supplier');
});

Route::get('/tampilanproduk', function () {
    return view('cafe.tampilanproduk');
});

Route::resource('dashboard', DashboardController::class);
Route::resource('produk', ProductController::class);
Route::resource('supplier', SupplierController::class);
// Route::resource('products', ProductController::class);
