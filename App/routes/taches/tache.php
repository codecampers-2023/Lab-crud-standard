<?php
namespace routes\taches;

use App\Http\Controllers\taches\TacheController;

use Illuminate\Support\Facades\Route;

Route::get('projects/tasks/{projetId}',[TacheController::class,'index'])->name('projects.tasks');

Route::resource('tasks', TacheController::class);
