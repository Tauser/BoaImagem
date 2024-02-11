<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Customer;
use App\Models\CustomerCategory;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Post::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        CustomerCategory::factory(10)->create();
        Customer::factory(10)->create();

        $adminUser = User::factory()->create([
            'email' => 'tauser@gmail.com',
            'name' => 'Admin',
            'password' => bcrypt('admin123')
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
