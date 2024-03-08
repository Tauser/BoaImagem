<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Departament;
use App\Models\Team;

class TeamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Team::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'thumbnail' => 'https://randomuser.me/api/portraits/' . fake()->randomElement(['women', 'men']) . '/' . rand(1, 100) . '.jpg',
            'social1' => $this->faker->url(),
            'social2' => $this->faker->url(),
            'social3' => $this->faker->url(),
            'departament_id' => Departament::factory(),
        ];
    }
}
