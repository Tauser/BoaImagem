<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Customer;
use App\Models\Project;
use App\Models\Service;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->text(),
            'slug' => $this->faker->slug(),
            'content' => $this->faker->paragraphs(3, true),
            'thumbnail' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'images' => $this->faker->text(),
            'customer_id' => Customer::factory(),
            'service_id' => Service::factory(),
        ];
    }
}
