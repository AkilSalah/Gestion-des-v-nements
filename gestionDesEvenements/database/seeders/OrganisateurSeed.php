<?php

namespace Database\Seeders;

use App\Models\Organisateur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganisateurSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Organisateur::factory()->count(10)->create();

    }
}
