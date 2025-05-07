<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', [LoginController::class, 'create'])->middleware('guest');
Route::post('/login', [LoginController::class, 'store'])->middleware('guest');
Route::delete('/logout', [LoginController::class, 'destroy'])->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/password', [ProfileController::class, 'updatepassword'])->name('profile.password.update');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/show', function () {
        return view('profile.show');
    })->name('profile.show');
});


Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/todos', [TodosController::class, 'index'])->middleware('auth');
Route::get('/todos/create', [TodosController::class, 'create'])->middleware('auth');

Route::post('/todos', [TodosController::class, 'store'])->middleware('auth');
Route::get('/todos/{todo}', [TodosController::class, 'show'])->middleware('auth');
Route::get('/todos/{todo}/edit', [TodosController::class, 'edit'])->middleware('auth')->name('todos.edit');
Route::put('/todos/{todo}', [TodosController::class, 'update'])->middleware('auth')->name('todos.update');
Route::delete('/todos/{todo}', [TodosController::class, 'destroy'])->middleware('auth')->name('todos.destroy');
