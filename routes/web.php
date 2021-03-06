<?php

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

//Build in Routes for Auth
Auth::routes();

// HOMEPAGE
Route::get('/', 'Frontend\HomeController@index')->name('landing');

// Auth Frontend
Route::get('/login', 'Auth\LoginController@login')->name('login');
Route::post('/signin', 'Auth\LoginController@authenticate')->name('signin');

// Product
Route::get('product/category/{categoryId}-{categoryName}', 'Frontend\ProductController@products')->name('products');
Route::get('product-detail/{id}', 'Frontend\ProductController@ProductShow')->name('product-detail');
Route::get('search/{key}', 'Frontend\ProductController@search')->name('product-search');
Route::get('example/product/list', 'Frontend\ProductController@exampleProducts');
Route::get('example/product/detail', 'Frontend\ProductController@exampleProduct');

// Cart
Route::get('cart', 'Frontend\CartController@index')->name('cart-list');
Route::post('/add-cart', [
    'uses' => 'Frontend\CartController@AddToCart',
    'as' => 'cart-add'
]);
Route::get('delete-cart/{cartId}', 'Frontend\CartController@DeleteCart')->name('delete-cart');
Route::post('/edit-cart', [
    'uses' => 'Frontend\CartController@EditQuantityCart',
    'as' => 'cart-edit-qty'
]);

// Payment
Route::prefix('payment/purchase')->group(function(){
    Route::get('/step1', 'Frontend\PaymentController@step1')->name('step1');
    Route::post('/step1/submit', [
        'uses' => 'Frontend\PaymentController@step1Submit',
        'as' => 'step1-submit'
    ]);
    Route::get('/step2', 'Frontend\PaymentController@step2')->name('step2');
    Route::get('/success/{id}', 'MidtransController@success')->name('checkout-step-success');
    Route::get('/payment/notification/{id}', 'MidtransController@notification');
    Route::get('/failed/{id}', 'MidtransController@failed')->name('checkout-step-failed');
    Route::get('/step2/bank', 'Frontend\PaymentController@step2Bank')->name('step2-bank');
    Route::post('/checkout-bank-submit', [
        'uses' => 'Frontend\PaymentController@CheckoutProcessBankSubmit',
        'as' => 'checkoutBankSubmit'
    ]);
    Route::post('/checkout-mid', [
        'uses' => 'MidtransController@checkoutMidtrans',
        'as' => 'checkoutMid'
    ]);
    Route::post('/checkout-notification', [
        'uses' => 'MidtransController@notification',
        'as' => 'checkoutNotification'
    ]);
});

// Bank Transfer Confirm
Route::prefix('confirm/transfer')->group(function(){
    Route::get('/{id}', 'Frontend\PaymentController@bankConfirm')->name('bank-confirm');
    Route::post('/submit', 'Frontend\PaymentController@bankConfirmSubmit');
});

// User Data
Route::prefix('user')->group(function(){
    Route::get('/', 'Frontend\UserController@index')->name('user-profile-show');
    Route::get('/edit', 'Frontend\UserController@edit')->name('user-profile-edit');
    Route::post('/edit/save', 'Frontend\UserController@update');
    Route::get('/password/edit', 'Frontend\UserController@passwordChange')->name('password-edit');
    Route::post('/password/save', 'Frontend\UserController@passwordUpdate');
});

// User Address
Route::prefix('user/address')->group(function(){
    Route::get('/', 'Frontend\UserAddressController@index')->name('user-address-show');
    Route::get('/create', 'Frontend\UserAddressController@create')->name('user-address-create');
    Route::post('/create', 'Frontend\UserAddressController@store')->name('user-address-store');
    Route::get('/edit', 'Frontend\UserAddressController@edit')->name('user-address-edit');
    Route::post('/edit/save', 'Frontend\UserAddressController@update')->name('user-address-update');
});

Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');

// Transaction
Route::prefix('transaction')->group(function(){
   Route::get('/payment', 'Frontend\TransactionController@payment')->name('user-payment-list');
    Route::get('/order', 'Frontend\TransactionController@order')->name('user-order-list');
    Route::get('/history', 'Frontend\TransactionController@history')->name('user-order-history-list');
});
Route::get('invoice/{id}','Frontend\TransactionController@invoice')->name('invoice-view');

// Rajaongkir
Route::get('rajaongkir/city/{provinceId}', 'Frontend\UserAddressController@getCity');
Route::get('rajaongkir/subdistrict/{cityId}', 'Frontend\UserAddressController@getSubdistrict');

// End Frontend Routing

// Backend Routing
Route::get('/admin', 'Admin\DashboardController@dashboardShow')->name('admin-dashboard');

Route::get('/admin/login', function (){
    return view('admin/login');
})->name('login-admin');

Route::get('/lowids/login/{failed}', function ($failed){
    $msg = "Not Found!";
    return view('admin/login')->with('msg', $msg);
})->name('login-admin-failed');

// User
Route::get('/admin/customer', 'Admin\CustomerController@index')->name('customer-list');
Route::get('/admin/{customerId}/transactions', 'Admin\TransactionController@indexCustomer')->name('customer-transaction-list');
Route::post('/admin', 'Auth\LoginAdminController@login');
Route::get('/admin', 'Admin\DashboardController@index')->name('admin-dashboard');
Route::get('/admin/logout', 'Auth\LoginAdminController@logout')->name('admin-logout');

// Product
Route::prefix('/admin/product')->group(function (){
    Route::get('/', 'Admin\ProductController@index')->name('product-list');
    Route::post('/', 'Admin\ProductController@store');
    Route::get('/create', 'Admin\ProductController@create')->name('product-create');
    Route::get('/edit/{id}', 'Admin\ProductController@edit')->name('product-edit');
    Route::post('/{id}', 'Admin\ProductController@update');
});

// Transaction
Route::prefix('admin/transaction')->group(function(){
    Route::get('/', 'Admin\TransactionController@index')->name('transaction-list');
    Route::get('/detail/{id}', 'Admin\TransactionController@detail')->name('transaction-detail');
});
Route::get('/admin/neworder', 'Admin\TransactionController@newOrder')->name('new-order-list');
Route::get('/admin/neworder/accept/{id}', 'Admin\TransactionController@acceptOrder')->name('new-order-accept');
Route::post('/admin/neworder/reject', 'Admin\TransactionController@rejectOrder')->name('new-order-accept');
Route::get('/admin/payment', 'Admin\TransactionController@payment')->name('payment-list');
Route::get('/admin/payment/confirm/{id}', 'Admin\TransactionController@confirmPayment')->name('payment-confirm');
Route::get('/admin/delivery', 'Admin\TransactionController@deliveryRequest')->name('delivery-list');
Route::post('/admin/delivery/confirm', 'Admin\TransactionController@confirmDelivery')->name('delivery-confirm');
Route::get('/track/{id}', 'Admin\TransactionController@track')->name('track');

// Slider Banner
Route::prefix('/admin/banner/slider')->group(function(){
    Route::get('/', 'Admin\BannerController@index')->name('slider-banner-list');
    Route::post('/', 'Admin\BannerController@store');
    Route::get('/create', 'Admin\BannerController@create')->name('slider-banner-create');
    Route::get('/edit/{id}', 'Admin\BannerController@edit')->name('slider-banner-edit');
    Route::post('/{id}', 'Admin\BannerController@update');
    Route::get('/delete/{id}', 'Admin\BannerController@delete');
});

// Side Banner
Route::prefix('/admin/banner/side')->group(function(){
    Route::get('/', 'Admin\BannerController@sideBannerIndex')->name('side-banner-list');
    Route::get('/edit/{id}', 'Admin\BannerController@sideBannerEdit')->name('side-banner-edit');
    Route::post('/{id}', 'Admin\BannerController@sideBannerUpdate');
});

// Category
Route::prefix('admin/category')->group(function(){
    Route::get('/', 'Admin\CategoryController@index')->name('category-list');
    Route::post('/', 'Admin\CategoryController@store');
    Route::get('/create', 'Admin\CategoryController@create')->name('category-create');
    Route::get('/edit/{id}', 'Admin\CategoryController@edit');
    Route::post('/{id}', 'Admin\CategoryController@update');
});

// Paymentmethods
Route::prefix('admin/paymentmethods')->group(function(){
    Route::get('/', 'Admin\PaymentMethodController@index')->name('payment-method-show');
    Route::post('/', 'Admin\PaymentMethodController@store');
    Route::get('/create', 'Admin\PaymentMethodController@create')->name('payment-method-create');
    Route::get('/edit/{id}', 'Admin\PaymentMethodController@edit');
    Route::post('/{id}', 'Admin\PaymentMethodController@update');
    Route::get('/delete/{id}', 'Admin\PaymentMethodController@destroy');
});

// Courier
Route::prefix('admin/courier')->group(function(){
    Route::get('/', 'Admin\CourierController@index')->name('courier-list');
    Route::post('/', 'Admin\CourierController@store');
    Route::get('/create', 'Admin\CourierController@create')->name('courier-create');
    Route::get('/edit/{id}', 'Admin\CourierController@edit');
    Route::post('/{id}', 'Admin\CourierController@update');
    Route::get('/delete/{id}', 'Admin\CourierController@destroy');
});

// Delivery Type
Route::prefix('admin/delivery-type')->group(function(){
    Route::get('/', 'Admin\DeliveryTypeController@index')->name('delivery-type-list');
    Route::post('/', 'Admin\DeliveryTypeController@store');
    Route::get('/create', 'Admin\DeliveryTypeController@create')->name('delivery-type-create');
    Route::get('/edit/{id}', 'Admin\DeliveryTypeController@edit');
    Route::post('/{id}', 'Admin\DeliveryTypeController@update');
    Route::get('/delete/{id}', 'Admin\DeliveryTypeController@destroy');
});

// Status
Route::prefix('admin/status')->group(function(){
    Route::get('/', 'Admin\StatusController@index')->name('status-list');
    Route::post('/', 'Admin\StatusController@store');
    Route::get('/create', 'Admin\StatusController@create')->name('status-create');
    Route::get('/edit/{id}', 'Admin\StatusController@edit');
    Route::post('/{id}', 'Admin\StatusController@update');
    Route::get('/delete/{id}', 'Admin\StatusController@destroy');
});

// Admin Options
Route::prefix('admin/option')->group(function(){
    Route::get('/address/create', 'Admin\OptionAddressController@create')->name('option-address-create');
    Route::post('/address/store', 'Admin\OptionAddressController@store');
    Route::get('/address/edit', 'Admin\OptionAddressController@edit')->name('option-address-edit');
    Route::post('/address/save', 'Admin\OptionAddressController@update');
    Route::get('/', 'Admin\OptionController@index')->name('store-option');
});

// Rajaongkir
Route::get('admin/rajaongkir/city/{provinceId}', 'Admin\OptionAddressController@getCity');
Route::get('admin/rajaongkir/subdistrict/{cityId}', 'Admin\OptionAddressController@getSubdistrict');

// Report
Route::prefix('admin/report')->group(function(){
    Route::get('/form', 'Admin\ReportController@index')->name('report-form');
    Route::post('/', 'Admin\ReportController@request');
    Route::get('/show', 'Admin\ReportController@show')->name('report-preview');
});

// Admin
Route::prefix('admin/user')->group(function(){
    Route::get('/list', 'Admin\AdminController@index')->name('admin-list');
    Route::get('/show/{id}', 'Admin\AdminController@show')->name('admin-show');
    Route::get('/edit/{id}', 'Admin\AdminController@edit')->name('admin-edit');
    Route::post('/save/{id}', 'Admin\AdminController@update');
    Route::get('/password/{id}', 'Admin\AdminController@passwordEdit')->name('admin-password-edit');
    Route::post('/password/save/{id}', 'Admin\AdminController@passwordUpdate');
});

// End Backend Routing


Route::get('/home', 'HomeController@index')->name('home');
