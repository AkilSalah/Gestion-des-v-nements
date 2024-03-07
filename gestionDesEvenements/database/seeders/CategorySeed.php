<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categorie;


class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categorie::factory()->count(10)->create();
    }
}
