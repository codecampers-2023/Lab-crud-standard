<?php

namespace App\Http\Controllers\projets;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\projets\ProjetRepository;

class projetController extends Controller
{
    //
      /**
     * Display a listing of the resource.
     */

     protected $projectRepository;
    
     public function __construct(ProjetRepository $projectRepository){
        $this->projectRepository = $projectRepository;
    }
    
    public function index(Request $request){
        $Projects = $this->projectRepository->index();

        if ($request->ajax()) {
            $searchQuery = $request->get('searchValue');
            $searchQuery = str_replace(' ', '%', $searchQuery);
            $Projects = $this->projectRepository->searchProjects($searchQuery);
          
            return view('Projets.projectSearch', compact('Projects'));
        }

        return view('Projets.index' , compact('Projects'));
    }
   
    public function show($project)
    {
        $project = $this->projectRepository->find($project);

        return view('Projets.show', compact('project'));
    }

}
