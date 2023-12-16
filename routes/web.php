<?php
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowedbookController;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;



Route::get('/', [SiteController::class, 'home'])->name('home');


Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users/create', [UserController::class, 'store']);
Route::get('/users/{user}', [UserController::class, 'edit']);
Route::post('/users/{user}', [UserController::class, 'update']);
Route::delete('/users/delete/{user}', [UserController::class, 'delete']);


Route::get('/books', [BookController::class, 'index'])->name('books');
Route::get('/books/create', [BookController::class, 'create']);
Route::post('/books/create', [BookController::class, 'store']);
Route::get('/books/{book}', [BookController::class, 'edit']);
Route::post('/books/{book}', [BookController::class, 'update']);
Route::delete('/books/delete/{book}', [BookController::class, 'delete']);


Route::get('/borrowedbooks', [BorrowedbookController::class, 'index'])->name('borrowedbooks');
Route::get('/borrowedbooks/create', [BorrowedbookController::class, 'create']);
Route::post('/borrowedbooks/create', [BorrowedbookController::class, 'store']);

Route::get('/borrowedbooks/{borrowedbook}', [BorrowedbookController::class, 'edit']);
Route::post('/borrowedbooks/{borrowedbook}', [BorrowedbookController::class, 'update']);
Route::delete('/borrowedbooks/delete/{borrowedbook}', [BorrowedbookController::class, 'delete']);


// Route::get('/courses', [CoursesController::class, 'index'])->name('courses');
