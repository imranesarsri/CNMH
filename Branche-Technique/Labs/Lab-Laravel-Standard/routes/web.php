<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProjectController;



Route::get('/', function () {
    return view('Home');
})->name('index');

Route::resource('project', ProjectController::class);

Route::get('{task}/task', [TaskController::class, 'index'])->name('task');
Route::resource('task', TaskController::class);