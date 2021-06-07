<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentcontroller;

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
Route::get('student',[studentcontroller::class,'create']);
Route::get('state',[studentcontroller::class,'index']);
Route::get('status',[studentcontroller::class,'show']);

Route::post('/addstudent','App\Http\Controllers\studentcontroller@store')->name('addstudent');

Route::post('/addstate','App\Http\Controllers\studentcontroller@save')->name('addstate');

