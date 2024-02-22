<?php

use Illuminate\Support\Facades\Route;
use App\Models\Project;


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

    $projectrepository = new \App\Repository\ProjectRepository();
    $projectrepository->create([
        'name' => 'Project 1',
        'description' => 'Description 1',
        'date-debut' => '2022-02-22 12:02:00',
        'date-fin' => '2022-02-22 12:02:00'
    ]);

    $tottalprojects = $projectrepository->count();
    return 'the totall project is ' . $tottalprojects;

});