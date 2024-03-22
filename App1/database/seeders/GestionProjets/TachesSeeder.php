<?php

namespace Database\Seeders\GestionProjets;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\GestionProjets\Task;

class TachesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tachesData =[

            [
                'nom' => 'choisir le thème',
                'description' => 'choisir le thème pour créer un portfolio',
                'date_debut' => '2024-03-20',
                'date_de_fin' => '2024-03-29',
                'project_id' => '1'

            ],
            [
                'nom' => 'Choix des Technologies',
                'description' => 'Évaluation et sélection des technologies les plus adaptées pour développer l\'application Arbre des Compétences.',
                'date_debut' => '2024-03-20',
                'date_de_fin' => '2024-03-29',
                'project_id' => '1'
            ],
            [
                'nom' => 'Design wireframes for CNMH Application',
                'description' => 'Create wireframes detailing the layout and functionalities of the CNMH application.',
                'date_debut' => '2024-03-20',
                'date_de_fin' => '2024-03-29',
                'project_id' => '1'            
            ],
            [
                'nom' => 'Develop basic database structure',
                'description' => 'Design and implement the basic database structure for the CNMH application.',
                'date_debut' => '2024-03-20',
                'date_de_fin' => '2024-03-29',
                'project_id' => '1'            
            ],
            [
                'nom' => 'Build user authentication system',
                'description' => 'Implement user authentication and authorization functionalities for the CNMH application.',
                'date_debut' => '2024-03-20',
                'date_de_fin' => '2024-03-29',
                'project_id' => '1'            
            ],

        ];
         foreach ($tachesData as $tacheData) {
            Task::create($tacheData);
        }
    }
}