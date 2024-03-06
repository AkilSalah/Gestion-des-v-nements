<?php

namespace Database\Factories;

use App\Models\Categorie;
use App\Models\Event;
use App\Models\Organisateur;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'date' => $this->faker->date(),
            'lieu' => $this->faker->address,
            'nbPlaces' => $this->faker->numberBetween(10, 100),
            'image' => $this->faker->imageUrl(),
            'status' => $this->faker->boolean(),
            'acceptation' => $this->faker->randomElement(['Automatique', 'Manuelle']),
            'categoryId' => Categorie::factory()->create()->id,
            'organisateurId' => Organisateur::factory()->create()->id,
        ];
    }
}
