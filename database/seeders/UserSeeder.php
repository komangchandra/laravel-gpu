<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['Admin', 'admin@gmail.com', 'Empire88556677!', true],
            ['afandi', 'afandi@gmail.com', 'gpu2025', false],
            ['agus', 'agus@gmail.com', 'gpu2025', false],
            ['herlambang', 'herlambang@gmail.com', 'gpu2025', false],
            ['rusdi', 'rusdi@gmail.com', 'gpu2025', false],
            ['apek', 'apek@gmail.com', 'gpu2025', false],
            ['dapit', 'dapit@gmail.com', 'gpu2025', false],
            ['suhidin', 'suhidin@gmail.com', 'gpu2025', false],
            ['sabar', 'sabar@gmail.com', 'gpu2025', false],
            ['tarman', 'tarman@gmail.com', 'gpu2025', false],
            ['Purchasing GPU', 'purchasing@gmail.com', 'gpu2025', false],
        ];

        foreach ($users as $user) {
            User::create([
                'name' => $user[0],
                'email' => $user[1],
                'password' => bcrypt($user[2]),
                'is_admin' => $user[3],
            ]);
        }
    }
}
