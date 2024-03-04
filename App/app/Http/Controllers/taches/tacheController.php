<?php

namespace App\Http\Controllers\taches;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\http\Requests\taches\TacheRequest ;
use App\Repositories\taches\TacheRepository;
use App\Repositories\Projets\ProjetRepository;

class TacheController extends Controller
   {

    
    protected $TasksRepository;
    protected $ProjectsRepository;
    public function __construct(TacheRepository $TasksRepository, ProjetRepository $ProjectsRepository ){
        $this->TasksRepository = $TasksRepository;
        $this->ProjectsRepository = $ProjectsRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $searchQuery = $request->get('searchValue');
            $searchQuery = str_replace(' ', '%', $searchQuery);

            $Tasks = $this->TasksRepository->searchTasks($searchQuery);
            if (!$Tasks -> count()) {
                return 'false' ; 
            }
            return view('taches.search', compact('Tasks'))->render();
        } 
        $projects = $this->ProjectsRepository->index();
    
       
        $projetId= $request ->projetId ;

        if($projetId) {
            $project = $this->ProjectsRepository->find($projetId);
            $Tasks = $this->TasksRepository->getTaskbyprojetId($projetId);
            return view("Taches.index",Compact('Tasks','projects', 'project'));
            // dd($tasks);
        }
        $Tasks = $this->TasksRepository->index();
        $task = $Tasks->first();
        $project = $this->ProjectsRepository->find($task->projetId);
        return view("Taches.index",Compact('Tasks', 'projects', 'project'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projects = $this->ProjectsRepository->index(); 
        return view('taches.create',Compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TacheRequest $request)
    {
        $validatedData = $request->validated();
    
        $this->TasksRepository->create($validatedData);
    
        return redirect()->route('projects.tasks', ['projetId' => $request->projetId])->with('success', "La tâche a été ajoutée avec succès.");
    }


    /**
     * Display the specified resource.
     */
    public function show($task)
    {
        $task = $this->TasksRepository->find($task);
        $project = $this->ProjectsRepository->find($task->projetId);

        return view('taches.show', compact('task', 'project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $projects = $this->ProjectsRepository->index(); 
        $task = $this->TasksRepository->find($id);
      return view('Taches.edit',compact('task','projects'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TacheRequest $request, string $id)
    {
        $validatedata = $request->validated();
        $this->TasksRepository->update($validatedata,$id);
        return redirect()->route('projects.tasks',['projetId'=> $request->projetId])->with('success',"La tâche a été modifiée avec succès");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->TasksRepository->delete($id);
        return redirect()->back()->with('success', "La tâche a été supprimé avec succès");
    }
}