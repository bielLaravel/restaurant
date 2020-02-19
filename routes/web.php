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


//Save and validate the book request
Route::get('form', 'publicWeb@returnCategories');

Route::get('menus', 'menuEditor@returnDishTypes');

Auth::routes(); 

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/crudBook','BookControll@returnBook')->middleware('auth');;
Route::get('getDishes/{id}','PublicWeb@getDishes');

Route::get('makeReservation','PublicWeb@makeReservation');


Route::resource('books', 'BookControll');
Route::resource('dishes','dishesControl');

Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);

Route::get('/logout', 'Auth\LoginController@logout');