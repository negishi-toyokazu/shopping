<?php
Route::get('/', function () {
    return redirect('/shop');
});
//ユーザー画面 shop
Route::group(['prefix' => 'shop'], function () {
//top
Route::get('/', 'ShopController@index')->name('top');
//商品一覧
Route::get('/show', 'ShopController@show')->name('list');
//野菜と果物で表示を分類
Route::get('/show/yasai', 'ShopController@yasai')->name('yasai');
Route::get('/show/fruits', 'ShopController@fruits')->name('fruits');
//カートに商品を追加
Route::post('/show', 'ShopController@add')->middleware('auth')->name('add.cart');
//お問い合わせフォーム
Route::get('/form', 'FormController@index')->name('form');
//お問い合わせ送信
Route::post('/form', 'FormController@store')->name('form.submit');
//お問い合わせ完了画面
Route::get('/form/conp', 'FormController@formConp')->name('form.conp');
//農園情報
Route::get('/info', 'ShopController@info')->name('info');
//カート
Route::get('/cart', 'ShopController@cart')->middleware('auth')->name('cart');
//orderstableにカートの中身を追加
Route::post('/cart/{id}', 'ShopController@order')->middleware('auth')->name('order');

//カートの商品一つを削除
Route::get('/cart/{id}', 'ShopController@cartDelete')->middleware('auth')->name('cart.delete');
//注文確認
Route::get('/order/kakunin', 'ShopController@kakunin')->middleware('auth')->name('kakunin');
//決済
Route::post('/order/charge', 'ChargeController@charge')->middleware('auth')->name('charge');
//決済完了画面
Route::get('/order/conp', 'ChargeController@orderConp')->name('order.conp');

//配送について
Route::get('/delivery', 'ShopController@delivery')->name('shop.delivery');
//支払いについて
Route::get('/payment', 'ShopController@payment')->name('shop.payment');
//返品について
Route::get('/returns', 'ShopController@returns')->name('shop.returns');

//会員登録
Route::get('/register', 'ShopController@register')->name('shop.register');
Route::post('/register', 'Auth\RegisterController@create')->name('register');
Route::get('/register/conp', 'ShopController@registerConp')->name('register.conp');
//ログイン
Route::get('/login', 'ShopController@login')->name('shop.login');
});

//admin
Route::group(['prefix' => 'admin'], function () {
//スタッフトップ画面
Route::get('', 'Admin\ShopController@top');
//excelダウンロード
Route::get('/users/export', 'ExportController@userExport')->name('user.export');
Route::get('/orders/export', 'ExportController@orderExport')->name('order.export');

//管理画面
//商品
Route::get('/product', 'Admin\ShopController@addProduct')->name('add.product');
Route::post('/product', 'Admin\ShopController@create')->name('create.product');
Route::get('/product/conp', 'Admin\ShopController@conpProduct')->name('conp.product');

//お知らせ追加画面
Route::get('/notice', 'Admin\ShopController@notice')->name('notice');
Route::post('/notice', 'Admin\ShopController@addNotice')->name('add.notice');
});

Auth::routes();
