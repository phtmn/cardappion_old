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

Route::get('/','Site\SiteController@home')->name('site');
Route::get('/promocao/code/{id}', 'Site\SiteController@promocao');

Auth::routes();


Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'auth'],function(){

    Route::get('/','DashboardController@index')->name('dashboard.index');
    Route::resource('promotions','PromotionController');
    Route::get('qrcode/{id}', 'PromotionController@qrCode')->name('promotion.qrCode');
});
