<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kirimEmailController;
use App\Http\Controllers\ProductController;

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
    return view('index');
});


Route::group(['middleware' => ['Auth', 'Admin']], function () {
Route::get('/admin', function () {
    return view('admin.admin');
});
Route::get('/produk', [ProductController::class, 'index'])->name('produk');
Route::get('/produk/add',[ProductController::class,'add']);
Route::post('/produk/insert',[ProductController::class,'insert']);
Route::get('/produk/detailproduk/{id}',[ProductController::class, 'detail']);
Route::get('/produk/edit/{id}',[ProductController::class,'edit']);
Route::post('/produk/update/{id}',[ProductController::class,'update']);
Route::get('/produk/delete/{id}',[ProductController::class,'delete']);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contact', [kirimEmailController::class, 'contact'])->name('contact.show');
Route::post('/contact', [kirimEmailController::class, 'sendEmail'])->name('contact.send');
