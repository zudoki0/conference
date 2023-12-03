<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\ConferenceFormController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [ConferenceController::class, 'get'])->name('home');

Route::get('/about', [InfoController::class, 'about'])->name('info.about');
Route::post('/auth/save', [AuthController::class, 'save'])->name('auth.save');
Route::post('/auth/check', [AuthController::class, 'check'])->name('auth.check');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('/conferences/view', [ConferenceFormController::class, 'view'])->name('conferences.view');

Route::group(['middleware'=>['AuthCheck']], function() {
    Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');
    Route::get('/auth/register', [AuthController::class, 'register'])->name('auth.register');
    Route::post('/conferences/add', [ConferenceController::class, 'add'])->name('conferences.add');
    Route::delete('/conferences/delete/{id}', [ConferenceController::class, 'delete'])->name('conferences.delete');
    Route::put('/conferences/update', [ConferenceController::class, 'update'])->name('conferences.update');
    Route::get('/conferences/create', [ConferenceFormController::class, 'create'])->name('conferences.create');
    Route::get('/conferences/edit', [ConferenceFormController::class, 'edit'])->name('conferences.edit');
});
