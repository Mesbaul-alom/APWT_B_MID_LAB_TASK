<?php

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


Route::get('/', function () {
    return view('marketplace');
});
Route::get('/login', 'LoginController@index');

Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index');
Route::get('/register','LoginController@register');
Route::post('/register', 'RegistrationController@index');

    Route::get('/customer/home', function () {
        return view('Customer')->with('title', 'Sign In');
    });

    //Seler Route
    Route::get('/system/sales','SaleController@index');
    Route::get('/system/sales/physical_store','SaleController@PhysicalStore');
    Route::get('/system/sales/physical_store/sell_product','SaleController@SellProduct');
    Route::post('/system/sales/physical_store/sell_product','SaleController@createSellProduct');
    Route::get('/system/sales/physical_store/sales_log','SaleController@sellLog');

});

Route::get('/logout','SigninController@logout');


