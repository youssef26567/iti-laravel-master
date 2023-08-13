<?php

use App\Http\Controllers\BookController;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('books', [BookController::class, 'index'])->name('books.index');
// Route::get('books/create', [BookController::class, 'create'])->name('books.create');
// Route::post('books', [BookController::class, 'store'])->name('books.store');
// Route::get('books/{book}',[BookController::class,'show'])->name('books.show');
// Route::delete('books/{book}',[BookController::class,'destroy'])->name('books.destroy');
// Route::get('books/edit/{book}',[BookController::class,'edit'])->name('books.edit');
// Route::put('books/{book}',[BookController::class,'update'])->name('books.update');
 
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('welcome');
});

// create route /profile
Route::middleware(['auth', 'check-age'])->group(function () {
    Route::resource('books', BookController::class, ['except' => ['update', 'edit']]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');