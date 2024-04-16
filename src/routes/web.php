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

Route::get('/sftptest', function () {
    return view('testSftp');
});

Route::get('/releve-des-decisions', [ 'color' => 'horizon-blue', App\Http\Controllers\DecisionsRecordController::class, 'index' ]);
