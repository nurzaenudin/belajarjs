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

Route::resource('items', 'ItemController');
Route::resource('purchasedetails', 'PurchasedetailController');
Route::resource('purchases', 'PurchasesController');


Route::get('/purchasedetailsview', function () {
    return view('purchasedetailsview');
});

Route::get('/purchasesview', function () {
    return view('purchasesview');
});
