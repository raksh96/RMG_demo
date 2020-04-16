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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/role-register', 'Admin\DashboardController@registered');
    Route::get('/role-edit/{id}', 'Admin\DashboardController@registeredit');
    Route::put('/role-register-update/{id}', 'Admin\DashboardController@registerupdate');
    Route::get('/general-store', 'Admin\DashboardController@generalstore');
    Route::get('/store', 'Admin\DashboardController@store');
    Route::get('/yarn-store', 'Admin\DashboardController@yarnstore');
    
    
    Route::get('/knitting-section', 'Admin\DashboardController@knittingsection');
    Route::get('/knitting-quality', 'Admin\DashboardController@knittingquality');
    
    Route::get('/linking', 'Admin\DashboardController@linking');
    Route::get('/mending', 'Admin\DashboardController@mending');


    Route::get('/operators', 'Admin\OperatorsController@operators');
    Route::get('/save-operators', 'Admin\OperatorsController@saveoperators');
    Route::get('join-table', 'JoinTableController@index
    ');



    Route::get('/knitting', 'Admin\DashboardController@knitting');

    Route::get('/save-sections', 'Admin\DashboardController@savesections');


    Route::get('/knitting-inspection', 'Admin\DashboardController@knittinginspection');
    Route::get('/test', 'JoinTableController@index');
    Route::get('/save-machines', 'Admin\DashboardController@savemachines');
    
    Route::get('/section/{id}', 'Admin\DashboardController@edit');
    Route::get('/section-update/{id}', 'Admin\DashboardController@update');
    Route::delete('section-delete/{id}', 'Admin\DashboardController@delete');
    

});





