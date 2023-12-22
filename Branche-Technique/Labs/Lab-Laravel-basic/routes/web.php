<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|-------------------------------------------------------------------------- |
| Web Routes                                                                |
|-------------------------------------------------------------------------- |
|                                                                           |
| Here is where you can register web routes for your application. These     |
| routes are loaded by the RouteServiceProvider and all of them will        |
| be assigned to the "web" middleware group. Make something great!          |
|-------------------------------------------------------------------------- |
*/

// Create
Route::get('/', [TaskController::class, 'index'])->name('index');
// Reade
Route::get('create', [TaskController::class, 'create'])->name('create');
Route::post('store', [TaskController::class, 'store'])->name('store');
// Update
Route::get('{task}/edit', [TaskController::class, 'edit'])->name('edit');
Route::put('{task}/edit', [TaskController::class, 'update'])->name('update');
// Delete
Route::delete('{task}/destroy', [TaskController::class, 'destroy'])->name('destroy');
// Search
Route::get('search', [TaskController::class, 'searchTask'])->name("search");

// Route::match(['get', 'post'], 'ajax_search', [TaskController::class, 'ajax_search'])->name('ajax_search');