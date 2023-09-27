<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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
    return view('auth.login');
});
// Route::get('s', function () {
//     return view('user.index');
// });

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('user.index');
    Route::get('/cart', [HomeController::class, 'cart'])->name('user.cart');
    Route::get('/product', [HomeController::class, 'product'])->name('user.product-list');
    Route::get('/detail', [HomeController::class, 'product_detail'])->name('user.product-detail');
    Route::get('/checkout', [HomeController::class, 'checkout'])->name('user.checkout');
    Route::get('/account', [HomeController::class, 'my'])->name('user.my-account');
    Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('user.wishlist');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});
