<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShopController;

use App\Models\Product;
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

Route::get('/contact-us', function () {
    return view('contact.contact');
});

Route::get('/shop', function () {
    return view('shop.shop');
});

Route::prefix('shop')->group(function () {
    Route::get('/shop', function () {
        return view('shop.shop');
    });
    Route::get('/check-out', function () {
        return view('shop.check-out');
    });
});

// Route::get('cart', [ShopController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ShopController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ShopController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ShopController::class, 'remove'])->name('remove.from.cart');


Route::prefix('product')->group(function () {
    Route::get('/C-Buckthorn-Oil', function () {
        return view('product.buckthronoil');
    });
    Route::get('/Fair-Lady-Skincare-Set', function () {
        return view('product.flskincare');
    });
});


Route::prefix('referral')->group(function () {
    Route::get('/{refer_id}', function () {
        return view('welcome');
    });
});

Route::get('login', function () {
    return view('auth.login');
});




Route::prefix('system')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    });
});

Route::get('/check', function () {
    $price = Product::findOrFail(1)->price()->where('price_level' , 'RETAIL PRICE')->first();
    dd($price->price);
});
