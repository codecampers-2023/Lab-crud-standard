<?php

namespace App\Http\Controllers\taches;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\http\Requests\taches\TacheRequest ;
use App\Repositories\taches\TacheRepository;
use App\Repositories\Projets\ProjetRepository;

class TacheController extends Controller
   {

      protected $TacheRepository;
      protected $ProjetRepository;
      public function __construct(TacheRepository $TacheRepository, ProjetRepository $ProjetRepository ){
          $this->TacheRepository = $TacheRepository;
          $this->ProjetRepository = $ProjetRepository;
      }
      /**
       * Display a listing of the resource.
       */
      public function index(Request $request)
      {
  
          if ($request->ajax()) {
              $searchQuery = $request->get('searchValue');
              $searchQuery = str_replace(' ', '%', $searchQuery);
  
              $Tasks = $this->TacheRepository->searchTasks($searchQuery);
              if (!$Tasks -> count()) {
                  return 'false' ; 
              }
              return view('taches.search', compact('Tasks'))->render();
          } 
          $projects = $this->ProjetRepository->index();
      
         
          $projetId= $request ->projetId ;
  
          if($projetId) {
              $project = $this->ProjetRepository->find($projetId);
              $Tasks = $this->TacheRepository->getTaskbyprojetId($projetId);
              return view("Taches.index",Compact('Tasks','projects', 'project'));
              // dd($tasks);
          }
          $Tasks = $this->TacheRepository->index();
          $task = $Tasks->first();
          $project = $this->ProjetRepository->find($task->projetId);
          return view("Taches.index",Compact('Tasks', 'projects', 'project'));
  
      }
  
      /**
       * Show the form for creating a new resource.
       */
      public function create()
      {
          $projects = $this->ProjetRepository->index(); 
          return view('taches.create',Compact('projects'));
      }
  
      /**
       * Store a newly created resource in storage.
       */
      public function store(TacheRequest $request)
      {
          $validatedData = $request->validated();
      
          $this->TacheRepository->create($validatedData);
      
          return redirect()->route('projects.tasks', ['projetId' => $request->projetId])->with('success', "Task successfully created");
      }
  
  
      /**
       * Display the specified resource.
       */
      public function show($task)
      {
          $task = $this->TacheRepository->find($task);
          $project = $this->ProjetRepository->find($task->projetId);
  
          return view('taches.show', compact('task', 'project'));
      }
  
      /**
       * Show the form for editing the specified resource.
       */
      public function edit(string $id)
      {
  
          $projects = $this->ProjetRepository->index(); 
          $task = $this->TacheRepository->find($id);
        return view('Taches.edit',compact('task','projects'));
  
      }
  
      /**
       * Update the specified resource in storage.
       */
      public function update(UpdateTaskRequest $request, string $id)
      {
          $validatedata = $request->validated();
          $this->TacheRepository->update($validatedata,$id);
          return redirect()->route('projects.tasks',['projetId'=> $request->projetId])->with('success',"tasks update succefuly");
  
      }
  
      /**
       * Remove the specified resource from storage.
       */
      public function destroy(string $id)
      {
          $this->TacheRepository->delete($id);
          return redirect()->back()->with('success', "tasks destroye successfully");
      }
}