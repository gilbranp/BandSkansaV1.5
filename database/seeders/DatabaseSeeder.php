<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = [
            ['name' => 'root' , 'email' => 'root@gmail.com' , 'username' => 'root' , 'password' => bcrypt('11111')],
        ];

        User::insert($admin);
    }
}
