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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// Route::post('logout',[ App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');


Route::group(['prefix'=>'admin','middleware'=>'auth'],function (){
    
    Route::get('/normal_users', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/users', [App\Http\Controllers\UserController::class, 'index']);
    
    Route::get('/managers',  [App\Http\Controllers\ManagerController::class, 'index']);
    Route::get('/supervisors',  [App\Http\Controllers\SupervisorController::class, 'index']);
    Route::get('/staffs', [App\Http\Controllers\StaffController::class, 'index']);

    Route::get('/roles',  [App\Http\Controllers\RoleController::class, 'index']);

    Route::get('/users/{id}/edit', [App\Http\Controllers\UserController::class, 'edit']);
    Route::post('/users/{id}/update', [App\Http\Controllers\UserController::class, 'update']);
    
});



