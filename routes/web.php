<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);



Route::get('/', 'HomeController@index')->name('home');


Route::resource('buildings', 'BuildingController')->only('show','UserPage');
Route::resource('blocks', 'BlockController')->only('show');
Route::resource('etajs', 'EtajController')->only('show');;
Route::resource('flats', 'FlatController')->only('show');
Route::resource('clients','ClientController')->only('create','store');;

Route::get('/buildings', 'BuildingController@UserPage')->name('buildingspage.index');
Route::get('/buildings/{id}', 'BuildingController@show')->name('buildingspage.show');
Route::get('/buildings/blocks/{id}', 'BlockController@show')->name('blockspage.show');
Route::get('/buildings/blocks/flour/{id}', 'EtajController@show')->name('flourspage.show');
Route::get('/buildings/blocks/flour/flat/{id}', 'FlatController@show')->name('flatsspage.show');


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'Admin\AdminController@index')->name('admin.index');
    Route::resource('buildings', 'BuildingController');
    Route::resource('blocks', 'BlockController');
    Route::resource('etajs', 'EtajController');
    Route::resource('flats', 'FlatController');
    Route::resource('clients','ClientController');
    Route::resource('sold_flats', 'SoldFlatController');
});


Route::get('/user/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('force_to_logout');
