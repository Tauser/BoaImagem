<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Departament;

class DepartamentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Departament::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'dep_name' => $this->faker->regexify('[A-Za-z0-9]{150}'),
        ];
    }
}
