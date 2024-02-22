<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/add-project', function () {

    $project = new \App\Repository\ProjectRepository();
    $project->create([
        'name' => 'Project 1',
        'description' => 'Description 1',
        'date-debut' => '2022-02-22 12:02:00',
        'date-fin' => '2022-02-22 12:02:00'
    ]);

    return 'Project created';
});
