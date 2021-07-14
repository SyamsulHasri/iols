<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShopController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\ReferralController;

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

// LANDING PAGE ROUTE
Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact-us', function () {
    return view('contact.contact');
});

Route::prefix('product')->group(function () {
    Route::get('/C-Buckthorn-Oil', function () {
        return view('product.buckthronoil');
    });
    Route::get('/Fair-Lady-Skincare-Set', function () {
        return view('product.flskincare');
    });
});

Route::prefix('/shop')->group(function () {
    Route::get('/shop', function () {
        return view('shop.shop');
    });
    Route::get('/cart', function () {
        return view('shop.cart');
    });
});

// ADD-TO-CARD ROUTE(LANDING PAGE)
Route::get('add-to-cart/{id}', [ShopController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ShopController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ShopController::class, 'remove'])->name('remove.from.cart');

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


// REFERRAL LINK
Route::prefix('referral')->group(function () {
    Route::get('/{refer_id}', [ReferralController::class, 'index'])->name('refer.index');

    // REGISTER FROM REFERRAL LINK
    Route::get('/registration/{refer_id}', [AuthController::class, 'registration'])->name('register');
    Route::post('/post-registration/{refer_id}', [AuthController::class, 'postRegistration'])->name('register.post'); 

    Route::get('/contact-us/{refer_id}', [ReferralController::class, 'contact'])->name('refer.contact');
    
    Route::prefix('product')->group(function () {
        Route::get('/C-Buckthorn-Oil/{refer_id}', [ReferralController::class, 'buckthron'])->name('refer.buckthron');
        // Route::get('/C-Buckthorn-Oil/{refer_id}', function () {
        //     return view('product.buckthronoil');
        // });
        Route::get('/Fair-Lady-Skincare-Set/{refer_id}', [ReferralController::class, 'flskincare'])->name('refer.flskincare');
        // Route::get('/Fair-Lady-Skincare-Set/{refer_id}', function () {
        //     return view('product.flskincare');
        // });
    });
    
    Route::prefix('/shop')->group(function () {
        Route::get('/shop/{refer_id}', [ReferralController::class, 'shop'])->name('refer.shop');
        // Route::get('/shop/{refer_id}', function () {
        //     return view('shop.shop');
        // });
        Route::get('/cart/{refer_id}', [ReferralController::class, 'cart'])->name('refer.cart');
        // Route::get('/cart/{refer_id}', function () {
        //     return view('shop.cart');
        // });
    });
});


// DASHBOARD SYSTEM
Route::group(['prefix' => 'system', 'middleware' => ['auth']], function(){
    Route::get('/dashboard', [SystemController::class, 'index'])->name('system.index');

    Route::get('/profile', [SystemController::class, 'profile'])->name('profile.view');

    Route::get('/admin', [SystemController::class, 'adminview'])->name('admin.view');
    Route::get('/admin/registration', [SystemController::class, 'adminregister'])->name('admin.register');
    Route::post('/admin/registration/create', [SystemController::class, 'admincreate'])->name('admin.create');

    Route::get('/distributor', [SystemController::class, 'distributorview'])->name('distributor.view');
    Route::get('/distributor/registration', [SystemController::class, 'distributorregister'])->name('distributor.register');
    Route::post('/distributor/registration/create', [SystemController::class, 'distributorcreate'])->name('distributor.create');
});

// CHECKING & TESTING
Route::get('/check', function () {
    return view('dashboard.test');
});