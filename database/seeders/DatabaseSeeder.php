<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Customer;
use App\Models\CustomerCategory;
use App\Models\Project;
use App\Models\Team;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Service;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void{

        Post::factory(10)->create();
        Service::factory(4)->create();
        Customer::factory(10)->create();
        Project::factory(10)->create();
        Team::factory(10)->create();


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
