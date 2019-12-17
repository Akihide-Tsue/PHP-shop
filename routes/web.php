<?php
// ルート
Route::get('/', 'ItemController@index');
// ユーザー登録
Auth::routes();
// アイテムを詳細ページに表示
Route::get('/item/{item}', 'ItemController@show');
// カートのアイテムを送る
Route::post('/cartitem', 'CartItemController@store');
// カートのアイテムを見る
Route::get('/cartitem', 'CartItemController@index');
// カートの編集
Route::put('/cartitem/{cartItem}', 'CartItemController@update');
Route::delete('/cartitem/{cartItem}', 'CartItemController@destroy');
// 購入画面
Route::get('/buy', 'BuyController@index');
Route::post('/buy', 'BuyController@store');