<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\Auth;

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
    return view('dashboard');})->middleware(['auth']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//insert user
Route::view('/insertUsers', 'v1.crud.insertUsers' )->name('insertUsers')->middleware(['auth']);
Route::post('/insertUsers', [DataController::class, 'store'])->middleware(['auth']);

//read user

Route::get('/tableUsers', [DataController::class, 'index'])->name('tableUsers')->middleware(['auth']);

Route::get('/updateUsers/{id}', [DataController::class, 'updateRead'])->name('updateUsers')->middleware(['auth']);
Route::post('/updateUsers/{id}', [DataController::class, 'update'])->middleware(['auth']);

Route::get('/deleteUsers/{id}', [DataController::class, 'delete'])->name('deleteUsers')->middleware(['auth']);

Route::get('/logout', [Auth\AuthenticatedSessionController::class, 'destroy']);