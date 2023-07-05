<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kirimEmailController;

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

Route::get('/admin', function () {
    return view('admin.admin');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contact', [kirimEmailController::class, 'contact'])->name('contact.show');
Route::post('/contact', [kirimEmailController::class, 'sendEmail'])->name('contact.send');
