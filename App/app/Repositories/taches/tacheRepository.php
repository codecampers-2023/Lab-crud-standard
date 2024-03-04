<?php 
namespace App\Repositories\taches ;
use App\Models\taches\Tache;
use App\Repositories\AppBaseRepository;


class TacheRepository extends AppBaseRepository
{
    protected $model;

    public function __construct(Tache $task){
        $this->model = $task;
    }

    protected $fileldTask = [
        'nom',
        'description',
        'projetId',
    ];
    public function getFieldData():array {
        return $this->fileldTask;
    }
    public function model():string {
        return Tache::class;
    }
 

   public function  getTaskbyprojetId($projetId){
    return $this->model->where('projetId', $projetId)->paginate(4);
     
   }

   public function searchTasks($searchTask)
    {
        $get_data =  $this->model->where(function ($query) use ($searchTask) {
            $query->where('nom', 'like', '%' . $searchTask . '%')
                ->orWhere('description', 'like', '%' . $searchTask . '%');
        });
      
        return $get_data->paginate(4);

    
    }
 
}