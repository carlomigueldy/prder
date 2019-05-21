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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'PurchaseOrdersController@index');
Route::get('/items', 'ItemsController@index');
Route::get('/suppliers', 'SuppliersController@index');

Route::resource('items', 'ItemsController');
Route::resource('suppliers', 'SuppliersController');
Route::resource('purchaseorders', 'PurchaseOrdersController');
Route::resource('orderdetails', 'PurchaseOrderDetailsController');