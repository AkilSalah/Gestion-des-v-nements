<?php

namespace Database\Factories;

use App\Models\Organisateur;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organisateur>
 */
class OrganisateurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Organisateur::class;

    public function definition(): array
    {
        $userId = User::where('role', 'Organisateur')->inRandomOrder()->first()->id;

        return [
            'idUser' => $userId,
        ];
    }
}
