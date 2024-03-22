<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Symfony\Component\Uid\NilUuid;

use Database\Seeders\projets\{
    ProjetsSeeder,
};


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $classes = [];
        $classes = array_merge(
            GestionProjets::Classes(),
            GestionTaches::Classes()

        );
        $this->call($classes);

    }

}
