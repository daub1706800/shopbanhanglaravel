<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
//frontend
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/trang-chu','App\Http\Controllers\HomeController@index')->name('home');

Route::post('/tim-kiem','App\Http\Controllers\HomeController@search')->name('home');

Route::post('/autocomplete-ajax','App\Http\Controllers\HomeController@autocomplete_ajax')->name('home');
//lien he trang
Route::get('/lien-he','App\Http\Controllers\HomeController@lien_he')->name('home');
//Danh mục sản phẩm trang chủ
Route::get('/danh-muc-san-pham/{category_id}','App\Http\Controllers\CategoryProduct@show_category_home')->name('home');
Route::get('/thuong-hieu/{brand_id}','App\Http\Controllers\BrandProduct@show_brand_home')->name('home');
Route::get('/chi-tiet-san-pham/{product_id}','App\Http\Controllers\ProductController@details_product')->name('home');

//backend

Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('home');

Route::get('/dashboard', 'App\Http\Controllers\AdminController@show_dashboard')->name('home');

Route::get('/logout', 'App\Http\Controllers\AdminController@logout')->name('home');

Route::post('/admin-dashboard', 'App\Http\Controllers\AdminController@dashboard')->name('home');
Route::get('/filter-by-date', 'App\Http\Controllers\AdminController@filter_by_date')->name('home');
Route::post('/dashboard-filter', 'App\Http\Controllers\AdminController@dashboard_filter')->name('home');

Route::post('/days-order', 'App\Http\Controllers\AdminController@days-order')->name('home');


//login google,facebook
Route::get('/login-customer-google','App\Http\Controllers\AdminController@login_customer_google')->name('home');
Route::get('/customer/google/callback','App\Http\Controllers\AdminController@callback_customer_google')->name('home');

Route::get('/login-customer-facebook','App\Http\Controllers\AdminController@login_customer_facebook')->name('home');
Route::get('/customer/facebook/callback','App\Http\Controllers\AdminController@callback_customer_facebook')->name('home');


//Category Product
Route::get('/add-category-product', 'App\Http\Controllers\CategoryProduct@add_category_product')->name('home');
Route::get('/all-category-product', 'App\Http\Controllers\CategoryProduct@all_category_product')->name('home');

Route::get('/edit-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@edit_category_product')->name('home');
Route::get('/delete-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@delete_category_product')->name('home');

Route::get('/unactive-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@unactive_category_product')->name('home');
Route::get('/active-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@active_category_product')->name('home');

Route::post('/save-category_product', 'App\Http\Controllers\CategoryProduct@save_category_product')->name('home');
Route::post('/update-category_product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@update_category_product')->name('home');
//send mail
Route::get('/send-mail', 'App\Http\Controllers\HomeController@send_mail')->name('home');

//login-google
//Route::get('/login-google', 'App\Http\Controllers\AdminController@login_google')->name('home');
//Route::get('/google/callback', 'App\Http\Controllers\AdminController@callback_google')->name('home');

//Brand Product
Route::get('/add-brand-product', 'App\Http\Controllers\BrandProduct@add_brand_product')->name('home');
Route::get('/all-brand-product', 'App\Http\Controllers\BrandProduct@all_brand_product')->name('home');

Route::get('/edit-brand-product/{brand_product_id}', 'App\Http\Controllers\BrandProduct@edit_brand_product')->name('home');
Route::get('/delete-brand-product/{brand_product_id}', 'App\Http\Controllers\BrandProduct@delete_brand_product')->name('home');

Route::get('/unactive-brand-product/{brand_product_id}', 'App\Http\Controllers\BrandProduct@unactive_brand_product')->name('home');
Route::get('/active-brand-product/{brand_product_id}', 'App\Http\Controllers\BrandProduct@active_brand_product')->name('home');

Route::post('/save-brand_product', 'App\Http\Controllers\BrandProduct@save_brand_product')->name('home');
Route::post('/update-brand-product/{brand_product_id}', 'App\Http\Controllers\BrandProduct@update_brand_product')->name('home');

//Product


Route::get('/add-product', 'App\Http\Controllers\ProductController@add_product')->name('home');
Route::get('/all-product', 'App\Http\Controllers\ProductController@all_product')->name('home');

Route::get('/edit-product/{product_id}', 'App\Http\Controllers\ProductController@edit_product')->name('home');
Route::get('/delete-product/{product_id}', 'App\Http\Controllers\ProductController@delete_product')->name('home');

Route::get('/unactive-product/{product_id}', 'App\Http\Controllers\ProductController@unactive_product')->name('home');
Route::get('/active-product/{product_id}', 'App\Http\Controllers\ProductController@active_product')->name('home');

Route::post('/save-product', 'App\Http\Controllers\ProductController@save_product')->name('home');
Route::post('/update-product/{product_id}', 'App\Http\Controllers\ProductController@update_product')->name('home');
Route::post('/insert-raiting','App\Http\Controllers\ProductController@insert_raiting')->name('home');

Route::POST('/quickview/{product_id}','App\Http\Controllers\ProductController@quickview')->name('home');

//ma giam gia
Route::post('/check-coupon', 'App\Http\Controllers\CartController@check_coupon')->name('home');

//ma giam gia trang admin
Route::get('/insert-coupon', 'App\Http\Controllers\CouponController@insert_coupon')->name('home');
Route::get('/list-coupon', 'App\Http\Controllers\CouponController@list_coupon')->name('home');
Route::post('/insert-coupon-code', 'App\Http\Controllers\CouponController@insert_coupon_code')->name('home');

Route::get('/delete-coupon/{coupon_id}', 'App\Http\Controllers\CouponController@delete_coupon')->name('home');
// cart
Route::post('/save-cart', 'App\Http\Controllers\CartController@save_cart')->name('home');
Route::post('/update-cart-quantity', 'App\Http\Controllers\CartController@update_cart_quantity')->name('home');
Route::get('/show-cart','App\Http\Controllers\CartController@show_cart')->name('home');
Route::get('delete-to-cart/{rowId}', 'App\Http\Controllers\CartController@delete_to_cart')->name('home');
Route::post('/add-cart-ajax', 'App\Http\Controllers\CartController@add_cart_ajax')->name('home');
Route::get('/gio-hang', 'App\Http\Controllers\CartController@gio_hang')->name('home');

//checkout

Route::get('/login-checkout', 'App\Http\Controllers\CheckoutController@login_checkout')->name('home');
Route::get('/logout-checkout', 'App\Http\Controllers\CheckoutController@logout_checkout')->name('home');
Route::post('/add-customer', 'App\Http\Controllers\CheckoutController@add_customer')->name('home');
Route::post('/order-place', 'App\Http\Controllers\CheckoutController@order_place')->name('home');
Route::post('/login-customer', 'App\Http\Controllers\CheckoutController@login_customer')->name('home');
Route::get('/checkout', 'App\Http\Controllers\CheckoutController@checkout')->name('home');
Route::get('/payment', 'App\Http\Controllers\CheckoutController@payment')->name('home');
Route::post('/save-checkout-customer', 'App\Http\Controllers\CheckoutController@save_checkout_customer')->name('home');

Route::get('/show-customer', 'App\Http\Controllers\CheckoutController@show_customer')->name('home');
Route::post('/confirm-order', 'App\Http\Controllers\CheckoutController@confirm_order')->name('home');
//order
Route::get('/manage-order', 'App\Http\Controllers\OrderController@manage_order')->name('home');
Route::get('/view-order/{orderId}', 'App\Http\Controllers\OrderController@view_order')->name('home');

Route::get('/print-order/{checkout_code}', 'App\Http\Controllers\OrderController@print_order')->name('home');
// Route::get('/manage-order', 'App\Http\Controllers\CheckoutController@manage_order')->name('home');
// Route::get('/view-order/{orderId}', 'App\Http\Controllers\CheckoutController@view_order')->name('home');
// Route::get('/delete-order/{orderId}', 'App\Http\Controllers\CheckoutController@delete_order')->name('home');
Route::get('/history', 'App\Http\Controllers\OrderController@history')->name('home');
Route::get('/view-history-order/{orderId}', 'App\Http\Controllers\OrderController@view_history_order')->name('home');

Route::post('/update-order-qty', 'App\Http\Controllers\OrderController@update_order_qty')->name('home');
Route::post('/update-qty', 'App\Http\Controllers\OrderController@update_qty')->name('home');
Route::post('/huy-don-hang', 'App\Http\Controllers\OrderController@huy_don_hang')->name('home');
//banner

Route::get('/manage-banner', 'App\Http\Controllers\SliderController@manage_banner')->name('home');
Route::get('/add-slider', 'App\Http\Controllers\SliderController@add_slider')->name('home');
Route::post('/insert-slider', 'App\Http\Controllers\SliderController@insert_slider')->name('home');
Route::get('/delete-slider/{slider_id}', 'App\Http\Controllers\SliderController@delete_slider')->name('home');
Route::get('/unactive-slider/{slider_id}', 'App\Http\Controllers\SliderController@unactive_slider')->name('home');
Route::get('/active-slider/{slider_id}', 'App\Http\Controllers\SliderController@active_slider')->name('home');

//Auth
Route::get('/register-auth', 'App\Http\Controllers\AuthController@register_auth')->name('home');
Route::post('/register', 'App\Http\Controllers\AuthController@register')->name('home');
Route::get('/login-auth', 'App\Http\Controllers\AuthController@login_auth')->name('home');

//video
Route::get('/video', 'App\Http\Controllers\Videocontroller@video')->name('home');
Route::get('/video-shop', 'App\Http\Controllers\Videocontroller@video_shop')->name('home');

Route::post('/select-video', 'App\Http\Controllers\Videocontroller@select_video')->name('home');
Route::post('/insert-video', 'App\Http\Controllers\Videocontroller@insert_video')->name('home');
Route::post('/update-video', 'App\Http\Controllers\Videocontroller@update_video')->name('home');
Route::post('/delete-video', 'App\Http\Controllers\Videocontroller@delete_video')->name('home');
Route::post('/watch-video', 'App\Http\Controllers\Videocontroller@watch_video')->name('home');

Route::get('/users', 'App\Http\Controllers\UserController@index')->name('home');
Route::get('/add_users', 'App\Http\Controllers\UserController@add_users')->name('home');
Route::post('/store-users', 'App\Http\Controllers\UserController@store_users')->name('home');
Route::post('/assign-roles', 'App\Http\Controllers\UserController@assign_roles')->name('home');


