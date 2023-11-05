<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('post', [PostController::class, 'index'])->name('post');
Route::get('post/create', [PostController::class, 'create']);
Route::get('post/{id}', [PostController::class, 'show']);
Route::post('post/store', [PostController::class, 'store']);
Route::get('post/edit/{id}', [PostController::class, 'edit']);
Route::put('post/update', [PostController::class, 'update']);
Route::delete('post/delete/{id}', [PostController::class,'destroy']);