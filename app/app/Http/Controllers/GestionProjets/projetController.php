<?php

namespace App\Http\Controllers\GestionProjets;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\GestionProjets\ProjetRepository;

class ProjetController extends Controller
{
    protected $projectRepository;
    public function __construct(ProjetRepository $projetRepository)
    {
        $this->projectRepository = $projetRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $projectData = $this->projectRepository->paginate();
        if ($request->ajax()) {
            $searchValue = $request->get('searchValue');
            if($searchValue !== ''){
                $searchQuery = str_replace(' ', '%', $searchValue);
            $projectData = $this->projectRepository->searchData($searchQuery);
            return view('GestionProjets.projet.index', compact('projectData'))->render();
            }

        }
        return view('GestionProjets.projet.index', compact('projectData'));
    }
}
