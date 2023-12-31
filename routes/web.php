<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home',[TodoController::class,'index'])->name('todo.index');
Route::get('/todo/create',[TodoController::class,'create'])->name('todo.create');
Route::post('/todo',[TodoController::class,'store'])->name('todo.store');
Route::get('/todo/{todo}/edit',[TodoController::class,'edit'])->name('todo.edit');
Route::put('/todo/{todo}/update',[TodoController::class,'update'])->name('todo.update');
Route::delete('/todo/{todo}/destroy',[TodoController::class,'destroy'])->name('todo.destroy');






