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
    return view('auth/login');
});




Route::group(['middleware' => 'auth',], function(){
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('dashboard',[App\Http\Controllers\NumberController::class,'dashboard'])->name('dashboard');
Route::get('addnumber',[App\Http\Controllers\NumberController::class,'addnumber'])->name('add.number');
Route::post('addnumbertolist',[App\Http\Controllers\NumberController::class,'addnumberpost'])->name('post.add.number');
Route::get('managenumbers',[App\Http\Controllers\NumberController::class,'managenumbers'])->name('managenumbers');
Route::get('edit/{id}/number',[App\Http\Controllers\NumberController::class,'edit'])->name('edit.number');
Route::post('update/{id}/number',[App\Http\Controllers\NumberController::class,'update'])->name('post.edit.number');
Route::get('delete/{id}/number',[App\Http\Controllers\NumberController::class,'delete'])->name('delete.number');
Route::get('api/report',[App\Http\Controllers\NumberController::class,'apireport'])->name('viewapireport');
});
require __DIR__.'/auth.php';
