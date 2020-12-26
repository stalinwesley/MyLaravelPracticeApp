<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/test',function(){
    return "this is mypractice app";
});

Route::get('/invoke_route/{id?}',PostController::class);

Route::get('/user/show/{id}',[UserController::class,'show'])->middleware('selvam');


Route::get('product/new',[ProductController::class,'new']);

Route::get('/tasks/index',[TaskController::class,'show'])->name('task.index');
Route::get('/tasks/create',[TaskController::class,'create'])->name('task.create');
Route::post('/tasks/store',[TaskController::class,'store'])->name('task.store');
Route::get('/tasks/edit/{task}',[TaskController::class,'edit'])->name('task.edit');
Route::put('/tasks/update/{task}',[TaskController::class,'update'])->name('task.update');
Route::delete('/tasks/delete/{task}',[TaskController::class,'delete'])->name('task.delete');