<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\AuthController;
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

Route::get('/dashboard', function () {
    return view('pages.admin.dashboard');
});

Route::get('/detail', function () {
    return view('pages.admin.classes.detail');
});

Route::get('/chapter-create', function () {
    return view('pages.admin.chapters.create');
});

Route::get('/chapter-index', function () {
    return view('pages.admin.chapters.index');
});

Route::get('/chapter-video-create', function () {
    return view('pages.admin.chapters.create-video');
});

Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/loginProccess', [AuthController::class, 'loginProccess'])->name('loginProccess');
    Route::post('/registerProccess', [AuthController::class, 'registerProccess'])->name('registerProccess');
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

Route::prefix('/classes')->group(function () {
    Route::get('/all', [ClassController::class, 'index'])->name('class.index');
    Route::post('/create', [ClassController::class, 'store'])->name('class.store');
    Route::get('/create', [ClassController::class, 'create'])->name('class.create');
    Route::get('/detail/{id}', [ClassController::class, 'show'])->name('class.detail');
    Route::get('/edit/{id}', [ClassController::class, 'edit'])->name('class.edit');
    Route::put('/update/{id}', [ClassController::class, 'update'])->name('class.update');
    Route::get('/delete/{id}', [ClassController::class, 'destroy'])->name('class.delete');
});
