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

Route::get('/congrat/{code}','ShopCongratController@congratpage');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin','ShopCongratController@admincontrol');
Route::post('/settingtagnum','ShopCongratController@activetagrun');
Route::post('/addingtagnum','ShopCongratController@newtagrun');
Route::get('/admin/tagview','ShopCongratController@tagview');