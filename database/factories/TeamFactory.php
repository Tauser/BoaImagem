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
            'team_name' => $this->faker->regexify('[A-Za-z0-9]{150}'),
            'thumbnail' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'social1' => $this->faker->regexify('[A-Za-z0-9]{150}'),
            'social2' => $this->faker->regexify('[A-Za-z0-9]{150}'),
            'social3' => $this->faker->regexify('[A-Za-z0-9]{150}'),
            'departament_id' => Departament::factory(),
        ];
    }
}
