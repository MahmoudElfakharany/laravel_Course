<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postsController;
use App\Http\Controllers\desController;
use App\Http\Controllers\usersController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/viewPage',[postsController::class , "viewPosts"])->name("viewPage");

Route::get('viewPage/{id}', [postsController::class , "viewdes"])->name('despage');

Route::get('create', [postsController::class , "create"])->name('create')->middleware('auth');

Route::get('update/{id}', [postsController::class , "update"])->name('update')->middleware('auth');

Route::put('edit/{id}', [postsController::class , "edit"])->name('edit')->middleware('auth');

Route::post('store', [postsController::class , "store"])->name('store')->middleware('auth');

Route::delete('/viewPage/delete/{id}', [postsController::class , "destroy"])->name('destroy')->middleware('auth');


Route::get('/viewusers',[usersController::class , "viewusers"])->name("viewusers");

Route::get('viewusers/{id}', [usersController::class , "viewusersDetails"])->name('viewusersDetails');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
