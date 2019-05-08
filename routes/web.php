<?php
Route::get('/', function () {
    return redirect('/shop');
});
//ユーザー画面
//top
Route::get('/shop', 'ShopController@index')->name('top');
//商品一覧
Route::get('/shop/show', 'ShopController@show')->name('list');
//野菜と果物で表示を分類
Route::get('/shop/show/yasai', 'ShopController@yasai')->name('yasai');
Route::get('/shop/show/fruits', 'ShopController@fruits')->name('fruits');
//カートに商品を追加
Route::post('/shop/show', 'ShopController@add')->middleware('auth')->name('add.cart');
//お問い合わせフォーム
Route::get('/shop/form', 'FormController@index')->name('form');
//お問い合わせ送信
Route::post('/shop/form', 'FormController@store')->name('form.submit');
//お問い合わせ完了画面
Route::get('/shop/form/conp', 'FormController@formConp')->name('form.conp');
//農園情報
Route::get('/shop/info', 'ShopController@info')->name('info');
//カート
Route::get('/shop/cart', 'ShopController@cart')->middleware('auth')->name('cart');
//orderstableにカートの中身を追加
Route::post('/shop/cart/{id}', 'ShopController@order')->middleware('auth')->name('order');

//カートの商品一つを削除
Route::get('/shop/cart/{id}', 'ShopController@cartDelete')->middleware('auth')->name('cart.delete');
//注文確認
Route::get('/shop/order/kakunin', 'ShopController@kakunin')->middleware('auth')->name('kakunin');
//決済
Route::post('shop/order/charge', 'ChargeController@charge')->middleware('auth')->name('charge');
//決済完了画面
Route::get('/shop/order/conp', 'ChargeController@orderConp')->name('order.conp');

//配送について
Route::get('/shop/delivery', 'ShopController@delivery')->name('shop.delivery');
//支払いについて
Route::get('/shop/payment', 'ShopController@payment')->name('shop.payment');
//返品について
Route::get('/shop/returns', 'ShopController@returns')->name('shop.returns');

//会員登録
Route::get('/shop/register', 'ShopController@register')->name('shop.register');
Route::post('/shop/register', 'Auth\RegisterController@create')->name('register');
Route::get('/shop/register/conp', 'ShopController@registerConp')->name('register.conp');
//ログイン
Route::get('/shop/login', 'ShopController@login')->name('shop.login');

//スタッフトップ画面
Route::get('admin', 'Admin\ShopController@top');
//excelダウンロード
Route::get('admin/users/export', 'ExportController@userExport')->name('user.export');
Route::get('admin/orders/export', 'ExportController@orderExport')->name('order.export');

//管理画面
//商品
Route::get('/admin/product', 'Admin\ShopController@addProduct')->name('add.product');
Route::post('/admin/product', 'Admin\ShopController@create')->name('create.product');
Route::get('/admin/product/conp', 'Admin\ShopController@conpProduct')->name('conp.product');

Auth::routes();
