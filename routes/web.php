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
    Route::resource('menus','MenuController');
    Route::resource('products','ProductsController');

    Route::get('/config/createEdit','ConfigController@createEdit')->name('config.createEdit');
    Route::post('/config/createEdit','ConfigController@store')->name('config.store');

    Route::get('/menu-itens/{id}','MenuController@menuItens')->name('menu.menuItens');
    Route::get('/menu-item/menu/{menu}/delete/{id}','MenuController@deleteItem')->name('menu.deleteItem');

    Route::get('qrcode/{id}', 'PromotionController@qrCode')->name('promotion.qrCode');
});
