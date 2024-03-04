<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\taches\tacheController;

Route::get('projects/tasks/{projetId}',[TacheController::class,'index'])->name('projects.tasks');

Route::resource('tasks', TacheController::class);