<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
    return view('welcome', ['color' => "blue", "sectionName" => "Welcome"]);
});

Route::get('/sftptest', function () {
    return view('testSftp');
});

Route::get('/releves-des-decisions', [ 'color' => 'horizon-blue', App\Http\Controllers\DecisionsRecordController::class, 'index' ]);

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/questions', [AdminController::class, 'questions'])->name('admin.questions');
Route::get('/admin/add', function () {
    return view('admin.questions.form');
})->name('admin.questions.add');
