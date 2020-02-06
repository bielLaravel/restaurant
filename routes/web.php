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
//Save and validate the book request
Route::get('form', function () {
    return view('child');
});
Route::get('menu', function () {
    return view('menus');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/bookSave','BookingControll@saveBook');
Route::get('/crudBook','BookingControll@returnBook');
Route::get('/deleteBook/{id}','BookingControll@deleteBook');
Route::get('/updateBook/{id}','BookingControll@updateBook');


