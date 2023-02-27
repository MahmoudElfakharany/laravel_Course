<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postsController;
use App\Http\Controllers\desController;

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

Route::get('create', [postsController::class , "create"])->name('create');

Route::get('update/{id}', [postsController::class , "update"])->name('update');

Route::put('edit/{id}', [postsController::class , "edit"])->name('edit');

Route::post('store', [postsController::class , "store"])->name('store');

Route::delete('/viePage/delete/{id}', [postsController::class , "destroy"])->name('destroy');