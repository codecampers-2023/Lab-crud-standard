<?php

use Illuminate\Support\Facades\Route;


Route::namespace('Taches')->group(function () {
    // Include routes defined in the 'taches' namespace
    require __DIR__.'/taches/tache.php';
});
