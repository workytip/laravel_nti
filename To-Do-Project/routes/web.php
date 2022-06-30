<?php

use App\Http\Controllers\AuthTaskController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\dateware;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route:: get('index',[TaskController::class,'index']);
Route:: get('create',[TaskController::class,'create']);
Route:: post('store',[TaskController::class,'store']);
Route:: delete('delete/{id}',[TaskController::class,'delete'])->middleware(dateware::class);


Route:: get('login',[AuthTaskController::class,'login']); // login form
Route:: post('Dologin',[AuthTaskController::class,'Dologin']);// compare logic users

Route:: get('/',[AuthTaskController::class,'signup']);// sign up form
Route:: post('Dosignup',[AuthTaskController::class,'Dosignup']);// store users


Route :: get('logout',[AuthTaskController :: class , 'logout']);




