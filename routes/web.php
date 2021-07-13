<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShopController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SystemController;

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

// Route::get('login', function () {
//     return view('auth.login');
// });

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
// Route::get('/system/dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


// Route::prefix('system')->group(function () {
Route::group(['prefix' => 'system', 'middleware' => ['auth']], function(){
    Route::get('/dashboard', [SystemController::class, 'index'])->name('system.index');

    Route::get('/admin', [SystemController::class, 'adminview'])->name('admin.view');
    Route::get('/admin/registration', [SystemController::class, 'adminregister'])->name('admin.register');
    Route::post('/admin/registration/create', [SystemController::class, 'admincreate'])->name('admin.create');

    Route::get('/distributor', [SystemController::class, 'distributorview'])->name('distributor.view');
    Route::get('/distributor/registration', [SystemController::class, 'distributorregister'])->name('distributor.register');
    Route::post('/distributor/registration/create', [SystemController::class, 'distributorcreate'])->name('distributor.create');
});

Route::get('/check', function () {
    return view('dashboard.test');
});