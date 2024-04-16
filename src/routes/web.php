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

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/questions', [AdminController::class, 'questions'])->name('admin.questions');
Route::get('/admin/add', function () {
    return view('admin.questions.form');
})->name('admin.questions.add');

Route::prefix('reports')->group(function () {
    Route::get('/', [App\Http\Controllers\ReportController::class, 'reports'])->name('reports.index');
    Route::get('/create', [App\Http\Controllers\ReportController::class, 'create'])->name('reports.create');
    Route::get('/{report}', [App\Http\Controllers\ReportController::class, 'show'])->name('reports.show');
    Route::get('/{report}/edit', [App\Http\Controllers\ReportController::class, 'edit'])->name('reports.edit');
    Route::get('/{report}/delete', [App\Http\Controllers\ReportController::class, 'delete'])->name('reports.delete');

    Route::post('/', [App\Http\Controllers\ReportController::class, 'store'])->name('reports.store');
    Route::put('/{report}', [App\Http\Controllers\ReportController::class, 'update'])->name('reports.update');
});
