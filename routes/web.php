<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DbController;

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

Route::get('/',[PageController::class,'index'])->name('index');
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::get('/index2',[PageController::class,'index2'])->name('index2');
Route::post('/showlogin',[LoginController::class,'showlogin'])->name('showlogin');
Route::get('/adminhome',[PageController::class,'adminhome'])->name('adminhome');
Route::get('/staff_reg',[PageController::class,'staff_reg'])->name('staff_reg');
Route::post('/register',[PageController::class,'register'])->name('register');
Route::get('/doctor_reg',[PageController::class,'doctor_reg'])->name('doctor_reg');
Route::post('/doc_reg',[PageController::class,'doc_reg'])->name('doc_reg');
Route::get('/view',[PageController::class,'view'])->name('view');
Route::get('/edit/{id}',[DbController::class,'edit'])->name('edit');
Route::get('/delete/{id}',[DbController::class,'delete'])->name('delete');
Route::post('/update/{id}',[DbController::class,'update'])->name('update');
Route::get('/staffhome',[PageController::class,'staffhome'])->name('staffhome');
Route::get('/stafflogin',[LoginController::class,'stafflogin'])->name('stafflogin');
Route::post('/log',[LoginController::class,'log'])->name('log');
Route::get('/staffview',[PageController::class,'staffview'])->name('staffview');
Route::get('/staffedit/{id}',[DbController::class,'staffedit'])->name('staffedit');
Route::get('/staffdelete/{id}',[DbController::class,'staffdelete'])->name('staffdelete');
Route::post('/staffupdate/{id}',[DbController::class,'staffupdate'])->name('staffupdate');
