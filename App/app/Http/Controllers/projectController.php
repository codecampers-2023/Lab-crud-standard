<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectController extends Controller
{
    public function index()
    {
        $projectrepository = new \App\Repository\ProjectRepository();
        $totalprojects = $projectrepository->count();
        return view('index', compact('totalprojects'));
    }

    public function create(Request $request)
    {
        $projectrepository = new \App\Repository\ProjectRepository();
        $projectrepository->create($request->all());
        $totalprojects = $projectrepository->count();
        return view('index', compact('totalprojects'));
    }
}
