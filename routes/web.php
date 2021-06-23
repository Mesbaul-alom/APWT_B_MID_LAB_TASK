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
    return view('marketplace');
});
Route::get('/login', 'LoginController@index');

Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index');
Route::get('/register','LoginController@register');
Route::post('/register', 'RegistrationController@index');


Route::group(['middleware'=>['sess']] , function(){
    
    Route::get('/sellerHome', 'HomeController@index')->middleware('sess');
        Route::get('/profile', 'HomeController@profile')->name('user.profile');;
        Route::get('/protfolio', 'HomeController@protfolio');
        Route::post('/protfolio', 'HomeController@store');
        Route::get('/protfolio/details/{id}', 'HomeController@p_details');
        Route::get('/project', 'HomeController@project');
        Route::get('/myproject', 'HomeController@myproject');
        Route::get('/project', 'HomeController@project');
        Route::get('/project', 'HomeController@project');
        Route::get('/contest', 'HomeController@contest');
        Route::get('/dashboard', 'HomeController@dashboard');
        });

Route::resource('/admin', 'AdminController');
        Route::get('/Admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
        Route::get('/Admin/profile', 'AdminController@profile')->name('admin.profile');
        Route::get('/create/manager', 'AdminController@create')->name('admin.create');
        Route::get('/project/list', 'AdminController@projectlist')->name('admin.projectlist');
        Route::get('/contest/list', 'AdminController@contestlist')->name('admin.contestlist');
        Route::get('/Admin/payment', 'AdminController@payment')->name('admin.payment');
        Route::get('/Admin/sellerlist', 'AdminController@sellerlist')->name('admin.sellerlist');
        Route::get('/Admin/buyerlist', 'AdminController@buyerlist')->name('admin.buyerlist');

        Route::resource('/manager', 'ManagerController');
        Route::get('/Manager/dashboard', 'ManagerController@dashboard')->name('admin.dashboard');
        Route::get('/Manager/profile', 'ManagerController@profile')->name('admin.profile');
        Route::get('/Manager/project/list', 'ManagerController@projectlist')->name('admin.projectlist');
        Route::get('/Manager/contest/list', 'ManagerController@contestlist')->name('admin.contestlist');
        Route::get('/Manager/payment', 'ManagerController@payment')->name('admin.payment');
        Route::get('/Manager/sellerlist', 'ManagerController@sellerlist')->name('admin.sellerlist');
        Route::get('/Manager/buyerlist', 'ManagerController@buyerlist')->name('admin.buyerlist');



Route::resource('/buyer', 'BuyerController');
        Route::get('/Buyer/dashboard', 'BuyerController@dashboard')->name('buyer.dashboard');
        Route::get('/Buyer/profile', 'BuyerController@profile')->name('buyer.profile');
        Route::get('/Buyer/bidList', 'BuyerController@bidList')->name('buyer.bidList');
        Route::get('/Buyer/contestList', 'BuyerController@contestList')->name('buyer.contestList');
        Route::get('/Buyer/postProject', 'BuyerController@postProject')->name('buyer.postProject');
        Route::get('/Buyer/postContest', 'BuyerController@postContest')->name('buyer.postContest');
   /* Route::get('/xyz/list', 'UserController@index')->name('user.index');
    Route::get('/user/details/{id}', 'UserController@details')->name('user.details');

    Route::group(['middleware'=>['type']], function(){
        Route::get('/user/create', 'UserController@create');
        Route::post('/user/create', 'UserController@insert');
        Route::get('/user/edit/{id}', 'UserController@edit');
        Route::post('/user/edit/{id}', 'UserController@update');
        Route::get('/user/delete/{id}', 'UserController@delete');
        Route::post('/user/delete/{id}', 'UserController@destroy');
    });
});

Route::get('/login',[LoginController::class,'index']);
Route::get('/logout',[LogoutController::class,'index']);
Route::post('/login',[LoginController::class,'verify']);
Route::get('/register',[LoginController::class,'register']);


Route::group(['middleware'=>['sess']] , function(){
    
    Route::get('/home', [HomeController::class,'index'])->middleware('sess');
    Route::get('/profile', [HomeController::class,'profile'])->name('user.profile');;
    Route::get('/protfolio', [HomeController::class,'protfolio']);
    Route::get('/project', [HomeController::class,'project']);
    Route::get('/myproject', [HomeController::class,'myproject']);
    Route::get('/project', [HomeController::class,'project']);
    Route::get('/project', [HomeController::class,'project']);
    Route::get('/contest', [HomeController::class,'contest']);
    Route::get('/dashboard', [HomeController::class,'dashboard']);



     


    });