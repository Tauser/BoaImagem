<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Member;

class MemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Member::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'role' => $this->faker->text(),
            'thumbnail' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'social1' => $this->faker->regexify('[A-Za-z0-9]{150}'),
            'social2' => $this->faker->regexify('[A-Za-z0-9]{150}'),
            'social3' => $this->faker->regexify('[A-Za-z0-9]{150}'),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
