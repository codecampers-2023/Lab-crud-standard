<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\projets\ProjetController;

Route::get('/',[ProjetController::class,'index'])->name('home');

Route::resource('projects', ProjetController::class);
