<?php

namespace App\Repositories\projets;

use App\Models\projets\Projet;
use App\Repositories\AppBaseRepository;
use Illuminate\Database\Eloquent\Model;

class ProjetRepository extends AppBaseRepository {
     
    public function __construct(Projet $project){
        $this->model = $project;
    }

    protected $fileldProject = [
        'nom' ,
        'description' 
    ];
    public function getFieldData():array {
        return $this->fileldProject;
    }
    public function model():string {
        return Projet::class;
    }
  

    public function searchProjects($searchValue, $perPage = 4)
    {
      return $this->model
      ->where('nom', 'LIKE', '%' . $searchValue . '%')
      ->orWhere('description', 'LIKE', '%' . $searchValue . '%')
      ->paginate($perPage);
    }
}