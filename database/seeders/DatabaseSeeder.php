<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Socio;
use App\Models\Editora;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(30)->create();
        Socio::factory(30)->create();
         Editora::factory(30)->create();
    }
}
