<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(100)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'type' => 'admin',
            'password' => Hash::make('admin123'),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Author',
            'email' => 'author@author.com',
            'type' => 'author',
            'password' => Hash::make('admin123'),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'User',
            'email' => 'user@user.com',
            'type' => 'user',
            'password' => Hash::make('admin123'),
        ]);

        \App\Models\Withdraw::factory(300)->create();

        \App\Models\Blog::factory(300)->create();

        \App\Models\Course::factory(300)->create();

        \App\Models\ARelation::factory(100)->create();

        \App\Models\RRelation::factory(100)->create();
    }
}
