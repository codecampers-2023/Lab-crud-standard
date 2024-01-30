<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TasksController;
use App\Models\Task;

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



Route::get('/', function(){
    return view('home');
})->name('home');




Route::get('/projects', function(){
    return view('projects.index');
})->name('projects.index');

Route::get('/tasks', function(){
    return view('tasks.index');
})->name('tasks.index');

Route::get('/show', function(){
    return view('projects.show');
})->name('projects.show');

Route::get('/create', function(){
    return view('tasks.create');
})->name('tasks.create');
