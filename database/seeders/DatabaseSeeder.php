<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\BooksSeeder;
use Database\Seeders\GenresSeeder;
use Database\Seeders\AuthorsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([BooksSeeder::class, GenresSeeder::class, AuthorsSeeder::class]);
    }
}
