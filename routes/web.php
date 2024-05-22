<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/testEmail', [App\Http\Controllers\TestSendEmailController::class, 'sendEmailTest'])->name('testEmail');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');


Route::group([
    'middleware' => 'auth',
    'prefix' => 'user',
], function () {
    Route::get('create', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');
    Route::get('list', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
    Route::post('search', [App\Http\Controllers\UserController::class, 'searchUser'])->name('user.search');
    Route::get('{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
    Route::post('store', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
    Route::put('{user}/update', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');

});


Route::get('/listar-obra-social', function () {
    return view('listar-obra-social');
})->name('listar-obra-social');

Route::get('/editar-obra-social', function () {
    return view('editar-obra-social');
})->name('editar-obra-social');

Route::get('/user/crear-obra-social', function () {
    return view('crear-obra-social');
})->name('crear-obra-social');