<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

// Topページ
Route::get('/', function() {
    //return view('welcome');
    return redirect('/tasks');
});

// タスク
Route::resource('tasks', TaskController::class, ['except' => ['create', 'edit']]);

// Route::resource('tasks', 'App\Http\Controllers\TaskController', ['except' => ['edit']]);

// Route::get('/tasks', 'TaskController@index');
// Route::post('/tasks', 'TaskController@store');
// Route::delete('/tasks/{task}', 'TaskController@destroy');

// Route::get('/tasks', 'App\Http\Controllers\TaskController@index');
// Route::post('/tasks', 'App\Http\Controllers\TaskController@store');
// Route::delete('/tasks/{task}', 'App\Http\Controllers\TaskController@destroy');

// 参考（httpsを強制する場合は以下）
// \URL::forceScheme('https');

