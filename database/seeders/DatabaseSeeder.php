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

        $users = \App\Models\User::factory(5)->create();
        $categories = \App\Models\Category::factory(10)->create();
        $posts = \App\Models\Post::factory(30)
            ->recycle($users)
            ->recycle($categories)
            ->create();
        $services = \App\Models\Service::factory(5)->create();
        $customers = \App\Models\Customer::factory(30)
            ->recycle($services)
            ->create();
//        $projects = \App\Models\Project::factory(30)
//            ->recycle($services)
//            ->recycle($customers)
//            ->create();
//        $departaments = \App\Models\Departament::factory(5)->create();



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
