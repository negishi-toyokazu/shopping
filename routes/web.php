<?php
Route::get('/', function () {
    return redirect('/shop');
});
//ユーザー画面
//top
Route::get('/shop', 'ShopController@index')->name('top');
//商品一覧
Route::get('/shop/show', 'ShopController@show')->name('list');
Route::post('/shop/show', 'ShopController@add')->name('add.cart');
//お問い合わせフォーム
Route::get('/shop/form', 'ShopController@form')->name('form');
//農園情報
Route::get('/shop/info', 'ShopController@info')->name('info');
//カート
Route::get('/shop/cart', 'ShopController@cart')->middleware('auth')->name('cart');
//注文確認
Route::get('/shop/order/kakunin', 'ShopController@kakunin')->middleware('auth')->name('kakunin');



//会員登録
Route::get('/shop/register', 'ShopController@register')->name('shop.register');
Route::post('/shop/register', 'Auth\RegisterController@create')->name('register');
Route::get('/shop/register/conp', 'ShopController@registerConp')->name('register.conp');
//ログイン
Route::get('/shop/login', 'ShopController@login')->name('shop.login');




//管理画面
//商品
Route::get('/admin/product', 'Admin\ShopController@addProduct')->name('add.product');
Route::post('/admin/product', 'Admin\ShopController@create')->name('create.product');
Route::get('/admin/product/conp', 'Admin\ShopController@conpProduct')->name('conp.product');

Auth::routes();
