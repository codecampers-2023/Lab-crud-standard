<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Symfony\Component\Uid\NilUuid;

use Database\Seeders\GestionProjets\{
    TachesSeeder,
};


class GestionTaches extends Seeder
{

    public function run(): void
    {
        $this->call(GestionTaches::Classes());
    }

    public static function Classes(): array
    {
        return  [
            TachesSeeder::class,
        ];
    }
}
