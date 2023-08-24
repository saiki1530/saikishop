<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuanTriTinController;
use App\Http\Controllers\ProductController;



use App\Http\Controllers\CartController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProductController::class, 'index']);
Route::get('/category/{idBrain}', [ProductController::class, 'category']);
Route::get('/product', [ProductController::class, 'product']);
Route::get('/blog', [ProductController::class, 'blog']);
Route::get('/detail/{id}', [ProductController::class, 'detail']);
Route::get('/contact', [ProductController::class, 'contact']);
Route::get('/search', [ProductController::class, 'search']);
Route::get('/addcart/{id_sp}', [CartController::class, 'addcart']);
// routes/web.php

Route::get('/cart', [CartController::class, 'cart'])->name('cart');

Route::get('/remove-from-cart/{id_sp}',[CartController::class,'removeFromCart'])->name('cart.remove');

Route::post('/cart/update', [CartController::class,'updateCart'])->name('cart.update');
Route::post('/calculate-shipping', [CartController::class, 'calculateShipping'])->name('calculate.shipping');




Route::get('/session', [CartController::class, 'session']);
Route::post('/session', [CartController::class, 'session']);

Route::get('/cmt{id_sp}', [CartController::class, 'cmt']);
Route::post('/cmt', [CartController::class, 'cmt']);



use App\Http\Controllers\AdminController;

Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/allsp', [AdminController::class, 'allsp'])->name('admin.allsp');
    Route::get('/restore', [AdminController::class, 'restore'])->name('admin.restore');
    Route::get('/restore_us', [AdminController::class, 'restore_us'])->name('admin.restore_us');

    Route::post('/thaydoitrangthai', [AdminController::class, 'thayDoiTrangThai']);
    Route::get('/allorder', [AdminController::class, 'donhang'])->name('admin.allorder');
    Route::get('/orderItem/{id_dh}', [AdminController::class, 'orderItem'])->name('admin.orderItem');

    Route::get('/xoa/{id}',[AdminController::class,'xoa'] );
    Route::get('/editss/{id_sp}', [AdminController::class, 'editss']);
    Route::post('/editss/{id_sp}', [AdminController::class, 'updateSanPham']);
    Route::get('/addsp',[AdminController::class,'addsp'] );
    Route::post('/addsp',[AdminController::class,'addsp_'] );

    Route::get('/allus', [AdminController::class, 'allus'])->name('admin.allus');
    Route::get('/editus/{id}', [AdminController::class, 'editus']);
    Route::post('/editus/{id}', [AdminController::class, 'updateus']);

    Route::get('/phanquyen/{id}', [AdminController::class, 'editpq']);
    Route::post('/phanquyen/{id}', [AdminController::class, 'updatepq']);



    Route::get('/addus',[AdminController::class,'addus'] );
    Route::post('/addus',[AdminController::class,'addus_'] );

});



// Route để hiển thị form chỉnh sửa sản phẩm


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/quantri', [QuanTriTinController::class, 'index'])->middleware('auth', 'Quantri');
require __DIR__ . '/auth.php';
