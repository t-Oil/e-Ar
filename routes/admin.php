<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::group(
    [
        'prefix' => 'admin',
        'namespace' => 'App\Http\Controllers\Admin',
        'middleware' => ['admin'],
    ],
    function () {

        Route::get('/', [
            'uses' => 'DashboardController@index'
        ])->name('admin.dashboard.index');


    }
);
