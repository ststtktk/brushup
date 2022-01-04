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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',function(){return view('tasks/home'); });
Route::get('/tasks/login',function(){return view('tasks/login'); });
Route::get('/tasks/access',function(){return view('tasks/access'); });
Route::get('/career',[App\Http\Controllers\TaskController::class, 'timeview'])->name('timeview');
Route::get('/careeredit',[App\Http\Controllers\TaskController::class, 'timeview'])->name('careeredit');
Route::get('/brushup',function(){return view('tasks/brushup'); });
//Route::get('/tasks/career',function(){return view('tasks/career'); });
Route::post('useradd',[App\Http\Controllers\TaskController::class, 'useradd'])->name('useradd');
Route::post('/taskadd',[App\Http\Controllers\TaskController::class,'taskadd'])->name('taskadd');
Route::post('/show',[App\Http\Controllers\TaskController::class,'show'])->name('show');
Route::post('/edit',[App\Http\Controllers\TaskController::class,'edit'])->name('edit');
Route::post('{task}/update',[App\Http\Controllers\TaskController::class,'update'])->name('update');
Route::get('/team',[App\Http\Controllers\TaskController::class,'team'])->name('team');
Route::post('/menber',[App\Http\Controllers\TaskController::class,'menber'])->name('menber');
Route::post('{team}/upload',[App\Http\Controllers\TaskController::class,'upload'])->name('upload');
