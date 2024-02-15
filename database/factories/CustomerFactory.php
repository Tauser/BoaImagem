<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Support\Str;
use App\Models\CustomerCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name' => $this->faker->name(),
            'thumbnail' => $this->faker->imageUrl(640, 480),
            'content' => $this->faker->text(),
            'results' => $this->faker->text(),
            'slug' => $this->faker->slug(),
            'url' => $this->faker->url(),
            'category_id' => CustomerCategory::factory(),
            'since' => $this->faker->dateTime(),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
