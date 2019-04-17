<?php
Route::get('/', function () {
    return view('index');
});

Route::get('/shop', 'ShopController@index')->name('top');
Route::get('/shop/show', 'ShopController@show')->name('list');
Route::get('/shop/form', 'ShopController@form')->name('form');
Route::get('/shop/info', 'ShopController@info')->name('info');

//管理画面
Route::get('/admin/product', 'Admin\ShopController@addProduct')->name('add.product');
