<?php
namespace routes\projets;

use App\Http\Controllers\projets\ProjetController;

use Illuminate\Support\Facades\Route;

Route::get('/',[ProjetController::class,'index'])->name('home');

Route::resource('projects', ProjetController::class);
