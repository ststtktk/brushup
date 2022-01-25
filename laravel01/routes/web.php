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

Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/',function(){return view('tasks/home'); });
Route::get('/login',function(){return view('tasks/login'); })->name('login');
Route::get('/tasks/access',function(){return view('tasks/access'); });
Route::get('/career',[App\Http\Controllers\TaskController::class, 'timeview'])->name('timeview');
Route::get('/careeredit',[App\Http\Controllers\TaskController::class, 'timeview'])->name('careeredit');
Route::get('/brushup',function(){return view('tasks/brushup'); });
Route::get('/manual',function(){return view('tasks/manual'); });
Route::post('useradd',[App\Http\Controllers\TaskController::class, 'useradd'])->name('useradd');
Route::post('/taskadd',[App\Http\Controllers\TaskController::class,'taskadd'])->name('taskadd');
Route::post('/show',[App\Http\Controllers\TaskController::class,'show'])->name('show');
Route::post('/menbercreate',[App\Http\Controllers\TaskController::class,'menbercreate'])->name('menbercreate');
Route::post('/edit',[App\Http\Controllers\TaskController::class,'edit'])->name('edit');
Route::post('/update',[App\Http\Controllers\TaskController::class,'update'])->name('update');
Route::get('/team',[App\Http\Controllers\TaskController::class,'team'])->name('team');
Route::post('/menberadd',[App\Http\Controllers\TaskController::class,'menberadd'])->name('menberadd');
Route::post('/upload/{team}',[App\Http\Controllers\TaskController::class,'upload'])->name('upload');
Route::post('/menberview',[App\Http\Controllers\TaskController::class,'menberview'])->name('menberview');
Route::post('/delete',[App\Http\Controllers\TaskController::class,'destroy'])->name('tasks.destroy');