<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectController extends Controller
{
    public function index(){
        $projectrepository = new \App\Repository\ProjectRepository();
        $totalprojects = $projectrepository->count();
        return view('index', compact('totalprojects'));
    }

    public function create(Request $request){
        $add_project = new \App\Repository\ProjectRepository();
        $add_project->create($request->all());
        return view('index'); 
    }
}
