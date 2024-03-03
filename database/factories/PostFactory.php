<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'slug' => $this->faker->slug(3),
            'content' => $this->faker->paragraphs(3, true),
            'thumbnail' => $this->faker->imageUrl(),
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'published_at' => $this->faker->dateTime(),
            'featured' => $this->faker->boolean()
        ];
    }
}
