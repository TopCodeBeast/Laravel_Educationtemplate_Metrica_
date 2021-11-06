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

Auth::routes();
Route::get('/logout', 'MetricaController@logout');

// Render perticular view file by foldername and filename and all passed in only one controller at a time
Route::get('{folder}/{file}', 'MetricaController@indexWithOneFolder');

// Render when Route Have 2 folder
Route::get('{folder1}/{folder2}/{file}', 'MetricaController@indexWithTwoFolder');

// when render first time project redirect
Route::get('/home', function () {
    return redirect('/analytics/analytics-index');
});

// when render first time project redirect
Route::get('/', function () {
    return redirect('login');
});


