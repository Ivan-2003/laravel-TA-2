<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Auth::routes();

// Route::get('/',function(){
//     return view('auth/login');
// });

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/')->group(function(){
    Route::get('admin', 'HelmetCustom\Admin\LoginAdminController@LoginAdmin');
    Route::get('customer', 'HelmetCustom\Customer\LoginCustomerController@LoginCustomer');
});

Route::get('/customer/home', 'Auth\CustomerLoginController@index')->middleware('auth:customer');
Route::get('/customer/login', 'Auth\CustomerLoginController@showLoginForm')->name('customer.loginform');
Route::get('/customer/register', 'Auth\CustomerLoginController@showRegisterForm')->name('customer.registerform');
Route::post('/customer/login', 'Auth\CustomerLoginController@Login')->name('customer.login');
Route::post('/customer/register', 'Auth\CustomerLoginController@register')->name('customer.register');
Route::get('/customer/logout', 'Auth\CustomerLoginController@logout')->name('customer.logout');


// ADMIN DASBOARD
// Route::group(['middleware' => 'auth'], function(){
    Route::prefix('adminhelmetcustom')->group(function(){
        Route::get('/dashboard','HelmetCustom\Admin\HomeAdminController@homeadmin');
        Route::resource('warna','HelmetCustom\Admin\WarnaController');
        Route::resource('metodetransaksi','HelmetCustom\Admin\MetodeTransaksiController');
        Route::resource('produk','HelmetCustom\Admin\ProdukController');
        Route::resource('status', 'HelmetCustom\Admin\StatusProdukController');
        Route::resource('order', 'HelmetCustom\Customer\OrderController');
        Route::resource('kodepos', 'HelmetCustom\Admin\KodePosController');
        Route::resource('province', 'HelmetCustom\Admin\ProvinceController');
        Route::resource('customer', 'HelmetCustom\Customer\CustomerDataController');
        // Route::resource('invoice', 'HelmetCustom\Customer\InvoiceContoller');
        Route::resource('carousel', 'HelmetCustom\Admin\CarouselController');
        Route::get('/footer-create','HelmetCustom\Admin\FooterController@create')->name('footer-create');
        Route::post('/footer-store','HelmetCustom\Admin\FooterController@store')->name('footer-store');
        Route::get('/footer','HelmetCustom\Admin\FooterController@index')->name('footer');
        Route::delete('/footer-delete/{footer}','HelmetCustom\Admin\FooterController@destroy')->name('footer-delete');
    
    });
// });

// ADMIN CUSTOMER
Route::prefix('helmetcustom')->group(function(){    
    Route::get('/homehelmet','HelmetCustom\Customer\homefrontendController@homeFrontend')->name('homefrontend');
    Route::resource('customer', 'HelmetCustom\Customer\CustomerDataController');
    // Route::resource('invoice', 'HelmetCustom\Customer\InvoiceContoller');
    Route::resource('order', 'HelmetCustom\Customer\OrderController');
    Route::get('/cart','CartController@index')->name('cart');
    Route::post('/cart/store/{id}','CartController@store')->name('store');
    Route::patch('/cart/{id}','CartController@update')->name('update');
});
