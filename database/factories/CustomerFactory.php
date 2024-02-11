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
            'category_id' => CustomerCategory::factory(),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
