<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/clients/register', 'ClientsController@create')->name('addClient');
Route::post('/clients/register', 'ClientsController@store');
Route::get('/clients', 'ClientsController@index')->name('clients');
Route::get('/clients/{client:name}', 'ClientsController@show');


Route::get('/products', 'ProductsController@index')->name('products');
Route::get('/products/register', 'ProductsController@create')->name('addProduct');
Route::post('/products/register', 'ProductsController@store');
Route::get('/products/{product:id}', 'ProductsController@show')->name('product');


Route::get('/orders/register', 'OrdersController@create')->name('addOrder');
Route::post('/orders/register', 'OrdersController@store');
Route::get('/orders', 'OrdersController@index')->name('orders');
Route::get('/orders/{order:id}', 'OrdersController@show');

