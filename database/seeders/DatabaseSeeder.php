<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /**@var  \App\Models\User $adminUser */
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Post::factory(5)->create();
        // $adminUser = User::factory()->create([
        //     "email"=>"adel@gmail.com",
        //     "name"=>"adel alradaie",
        //     "password"=>bcrypt("admin")
        // ]);
        // $adminRole = Role::create(['name'=>'admin']);
        // $adminUser->assignRole($adminRole);


    }
}
