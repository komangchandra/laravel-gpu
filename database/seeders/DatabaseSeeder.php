<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('admin123'),
        //     'is_admin' => true,
        // ]);

        // User::factory()->create([
        //     'name' => 'afandi',
        //     'email' => 'fm@gmail.com',
        //     'password' => bcrypt('admin123'),
        //     'is_admin' => false,
        // ]);

        $this->call(UserSeeder::class);
        $this->call(UnitSeeder::class);
    }
}
