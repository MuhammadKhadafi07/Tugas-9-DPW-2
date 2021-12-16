<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;

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

// Template E-Commerce

Route::get('/home', function () {
    return view('ecommerce.home');
});

Route::get('/about', function () {
    return view('ecommerce.about');
});

Route::get('/checkout', function () {
    return view('ecommerce.checkout');
});

Route::get('/contact', function () {
    return view('ecommerce.contact');
});

Route::get('/login', function () {
    return view('ecommerce.login');
});

Route::get('/register', function () {
    return view('ecommerce.register');
});

Route::get('/sales', function () {
    return view('ecommerce.sales');
});

Route::get('/single', function () {
    return view('ecommerce.single');
});

// template admin
Route::get('beranda', [HomeController::class, 'showBeranda']);
Route::get('kategori', [HomeController::class, 'showKategori']);
Route::get('profile', [HomeController::class, 'showProfile']);

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::post('produk/filter', [ProdukController::class, 'filter']);
    Route::resource('produk', ProdukController::class);
    Route::resource('user', UserController::class);
});


Route::get('adminlogin', [AuthController::class, 'showLogin'])->name('login');
Route::post('adminlogin', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);