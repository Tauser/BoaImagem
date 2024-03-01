<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Customer;
use App\Models\Service;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'cus_name' => $this->faker->regexify('[A-Za-z0-9]{150}'),
            'slug' => $this->faker->slug(),
            'thumbnail' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'since' => $this->faker->dateTime(),
            'content' => $this->faker->paragraphs(3, true),
            'results' => $this->faker->text(),
            'url' => $this->faker->url(),
            'service_id' => Service::factory(),
        ];
    }
}
