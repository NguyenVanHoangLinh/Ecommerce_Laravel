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
//-------------HOME------------
Route::get('/','HomeController@index')->name('home');
Route::get('/aboutus','HomeController@aboutus')->name('about-us');
Route::get('/product/{id}',['as' => 'front.product.show', 'uses' => 'HomeController@product']);
Route::get('/category/{id}',['as'=>'front.category.show','uses'=>'HomeController@category']);
//-------------SHOPPING CART------------
Route::resource('/cart','CartController');
Route::get('/cart','CartController@index')->name('cart.index');
Route::get('/cart/add-item/{id}', 'CartController@addItem')->name('cart.addItem');
Route::get('/cart/edit-item/{id}','CartController@update')->name('cart.edit');
Route::get('/cart/remove/{id}','CartController@destroy')->name('cart.remove');
//-------------CHECK OUT------------
Route::any('/checkout','HomeController@checkout')->name('checkout');
Route::any('/storecheckout', ['as' => 'front.orders.store', 'uses' => 'frontend\OrderController@store']);
//-------------LOG IN------------
Auth::routes();
Route::group(['middleware' => 'guest'], function() {
        Route::get('/dangky',[
            'uses'=>'UserController@getSignup',
            'as'=>'signup',
        ]);
        Route::get('/dangnhap',[
            'uses'=>'UserController@getSignin',
            'as'=>'signin',
        ]);
    });
    Route::group(['middleware' => 'auth'], function() {
        Route::get('/thoat',[
            'uses'=>'UserController@getLogout',
            'as'=>'logout',
        ]);
});
//-------------BACKEND------------
Route::get('/quantri','backend\BackloginController@getBackendlogin')->name('backend-login');
Route::post('/quantri','backend\BackloginController@postBackendlogin')->name('check-backend-login');

Route::group(['middleware'=>'admin'],function(){
    Route::get('/backlogout','backend\BackloginController@getLogout')->name('back-logout');
    Route::get('/dashboard','BackendController@index')->name('backend');
    Route::group(['prefix' => 'categories'], function () {
        Route::get('/index', ['as' => 'back.categories.index', 'uses' => 'backend\CategoriesController@index']);
        Route::any('/store', ['as' => 'back.categories.store', 'uses' => 'backend\CategoriesController@store']);
        Route::any('/create', ['as' => 'back.categories.create', 'uses' => 'backend\CategoriesController@create']);
        Route::any('/edit/{id}', ['as' => 'back.categories.edit', 'uses' => 'backend\CategoriesController@edit']);
        Route::any('/update/{id}', ['as' => 'back.categories.update', 'uses' => 'backend\CategoriesController@update']);
        Route::any('/destroy/{id}', ['as' => 'back.categories.destroy', 'uses' => 'backend\CategoriesController@destroy']);
    });
    Route::group(['prefix' => 'products','middleware' => 'editor'], function () {
        Route::get('/index', ['as' => 'back.products.index', 'uses' => 'backend\ProductsController@index']);
        Route::any('/store', ['as' => 'back.products.store', 'uses' => 'backend\ProductsController@store']);
        Route::any('/create', ['as' => 'back.products.create', 'uses' => 'backend\ProductsController@create']);
        Route::any('/edit/{id}', ['as' => 'back.products.edit', 'uses' => 'backend\ProductsController@edit']);
        Route::any('/update/{id}', ['as' => 'back.products.update', 'uses' => 'backend\ProductsController@update']);
        Route::any('/imgview/{id}', ['as' => 'back.products.imgview', 'uses' => 'backend\ProductsController@imgview']);
        Route::any('/updateimg/{id}', ['as' => 'back.products.updateimg', 'uses' => 'backend\ProductsController@updateImg']);
        Route::any('/destroy/{id}', ['as' => 'back.products.destroy', 'uses' => 'backend\ProductsController@destroy']);
    });
    Route::group(['prefix' => 'users','middleware' => 'ad'], function () {
        Route::get('/index', ['as' => 'back.users.index', 'uses' => 'backend\UsersController@index']);
        Route::any('/store', ['as' => 'back.users.store', 'uses' => 'backend\UsersController@store']);
        Route::any('/create', ['as' => 'back.users.create', 'uses' => 'backend\UsersController@create']);
        Route::any('/edit/{id}', ['as' => 'back.users.edit', 'uses' => 'backend\UsersController@edit']);
        Route::any('/update/{id}', ['as' => 'back.users.update', 'uses' => 'backend\UsersController@update']);
        Route::any('/destroy/{id}', ['as' => 'back.users.destroy', 'uses' => 'backend\UsersController@destroy']);
    });
    Route::group(['prefix' => 'orders','middleware' => 'ad'], function () {
        Route::get('/index', ['as' => 'back.orders.index', 'uses' => 'backend\BackorderController@index']);
        Route::any('/destroy/{id}', ['as' => 'back.orders.destroy', 'uses' => 'backend\BackorderController@destroy']);
    });
});
