<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoItemController;

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

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', [TodoItemController::class, 'index'])->name('dashboard');
    Route::get('/add', [TodoItemController::class, 'add'])->name('add_item');
    Route::put('/store', [TodoItemController::class, 'store'])->name('store_item');
    Route::get('/edit', [TodoItemController::class, 'edit'])->name('edit_item');
    Route::get('/update', [TodoItemController::class, 'update'])->name('update_item');
});




require __DIR__.'/auth.php';
