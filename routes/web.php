<?php

use App\Http\Controllers\UserController;
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
    return view('pages.home');
});

Route::get('/classes', function () {
    return view('pages.detail');
});

Route::get('/class-details', function () {
    return view('pages.class-detail');
});

Route::get('/chapter', function () {
    return view('pages.chapter');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/dashboard', function () {
    return view('pages.admin.dashboard');
});


Route::prefix('/users')->group(function () {
    Route::get('/all', [UserController::class, 'index'])->name('user.index');
    Route::post('/create', [UserController::class, 'store'])->name('user.store');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('/delete/{id}', [UserController::class, 'destroy'])->name('user.delete');
});

Route::prefix('/categories')->group(function () {
    Route::get('/all', [CategoryController::class, 'index'])->name('category.index');
    Route::post('/create', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
});

