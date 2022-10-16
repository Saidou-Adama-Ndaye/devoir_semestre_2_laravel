<?php

use App\Models\Order;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\Frontend\Auth\RegisterController;
use App\Http\Controllers\Frontend\CustomerController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\BackendCustomerController;

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

Route::prefix('')->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('shop', [HomeController::class, 'shopPage'])->name('shop.page');
    Route::get('single-product/{product_slug}', [HomeController::class, 'productDetails'])->name('product_detail.page');
    Route::get('shopping-cart', [CartController::class, 'cartPage'])->name('cart.page');
    Route::post('add-to-cart', [CartController::class, 'addToCart'])->name('add_to_cart');
    Route::get('remove-from-cart/{cart_id}', [CartController::class, 'removeFromCart'])->name('remove_from_cart');

    /* Authentication routes for Customer/Guest */
    Route::get('register', [RegisterController::class, 'registerPage'])->name('register.page');
    Route::post('register', [RegisterController::class, 'registerStore'])->name('register.store');
    Route::get('login', [RegisterController::class, 'loginPage'])->name('login.page');
    Route::post('login', [RegisterController::class, 'loginStore'])->name('login.store');

    /* Ajax Call */
    Route::get('/upzilla/ajax/{district_id}', [CheckoutController::class, 'loadUpazillaAjax'])->name('loadupazila.ajax');

    Route::prefix('customer/')->middleware(['auth', 'is_customer'])->group(function () {
        Route::get('dashboard', [CustomerController::class, 'dashboard'])->name('customer.dashboard');
        Route::get('logout', [RegisterController::class, 'logout'])->name('customer.logout');
        /* Coupon apply & remove */
        Route::post('cart/coupon-apply', [CartController::class, 'couponApply'])->name('coupon.apply');
        Route::get('cart/coupon-remove/{coupon_name}', [CartController::class, 'couponRemove'])->name('coupon.remove');

        /* Checkout Page */
        Route::get('checkout', [CheckoutController::class, 'checkoutPage'])->name('checkout.page');
        Route::post('placeorder', [CheckoutController::class, 'placeOrder'])->name('placeorder');

        /* Invoice Preview */
        Route::get('email', function () {
            $order = Order::whereId(4)->with(['billing', 'orderDetails'])->get();
            return view('frontend.mail.confirm-purchase', ['order_details' => $order]);
        });
    });
});

/* Admin Auth Routes */
Route::prefix('admin/')->group(function () {
    Route::get('login', [LoginController::class, 'loginPage'])->name('admin.loginpage');
    Route::post('login', [LoginController::class, 'login'])->name('admin.login');

    Route::middleware(['auth', 'is_admin'])->group(function () {
        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');

        /* Resource Controller */
        Route::resource('category', CategoryController::class);
        Route::resource('testimonial', TestimonialController::class);
        Route::resource('products', ProductController::class);
        Route::resource('coupon', CouponController::class);

        Route::get('order-list', [OrderController::class, 'index'])->name('admin.orderlist');
        Route::get('customer-list', [BackendCustomerController::class, 'index'])->name('admin.customerlist');
    });
});
/* Admin Auth Routes */
