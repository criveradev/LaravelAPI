<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        #Creacion de datos falsos
        User::factory(9)->create();

        User::factory()->create([
             'name' => 'Claudio',
             'email' => 'admin@app.com',
         ]);

         Post::factory(120)->create();
    }
}
