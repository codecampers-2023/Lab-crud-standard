<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GestionProjets\ProjetController;

Route::get('/',[ProjetController::class,'index'])->name('home');

Route::resource('projects', ProjetController::class);
