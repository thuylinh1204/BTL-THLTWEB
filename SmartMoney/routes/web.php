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
Route::group(['prefix'=>'auth'],function(){
    Route::get('login','App\Http\Controllers\userController@getdangnhap');

    Route::post('login','App\Http\Controllers\userController@postdangnhap');
    
    Route::get('signup','App\Http\Controllers\userController@getdangky');
    
    Route::post('signup','App\Http\Controllers\userController@postdangky');
    
    Route::get('forgot-password','App\Http\Controllers\userController@getForgotPassword');
    
    Route::post('forgot-password','App\Http\Controllers\userController@postForgotPassword');
});

Route::group(['prefix'=>'wallet'],function(){
    Route::get('transactions', function () {
        return view('wallet.transactions');
    });

    Route::get('overview', function () {
        return view('wallet.overview');
    });

    Route::get('budgets', function () {
        return view('wallet.budgetsDetail');
    });

    Route::group(['prefix'=>'settings'],function(){
        Route::get('general', function () {
            return view('wallet.settings.general');
        });

        Route::get('categories', function () {
            return view('wallet.settings.categories');
        });
    });
});

Route::get('dashboard','App\Http\Controllers\dashboardController@getDashboard');

Route::get('budgets', function () {
    return view('budgetsDetail');
});

Route::group(['prefix'=>'settings'],function(){
    Route::get('account','App\Http\Controllers\settingsController@getAccount');
    
    Route::post('account/{id}','App\Http\Controllers\settingsController@postAccount');

    Route::get('account/delete/{id}','App\Http\Controllers\settingsController@deleteAccount');
    
    Route::get('support', function () {
        return view('settings.support');
    });
    
    Route::get('terms', function () {
        return view('settings.terms');
    });

    Route::get('all-categories', function () {
        return view('settings.all-categories');
    });
});

