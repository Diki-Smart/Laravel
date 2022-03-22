<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\CollaborateurController;
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
    return view('greeting');
});

Route::get('/welcome', function () {
    return view('welcome');
});



Route::get('/user/{id}', [UserController::class, 'show']);
Route::get('users/', [UserController::class, 'index']);

Route::resource('post', PostController::class);
Route::resource('entreprise', EntrepriseController::class);
Route::resource('collaborateur', CollaborateurController::class);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

