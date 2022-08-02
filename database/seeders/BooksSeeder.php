<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as faker;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->truncate();

        $faker = faker::create();

        $books = [];

        for ($i = 0; $i < 100; $i++) {
            $books[] =
                [
                    'title' => $faker->word(),
                    'description' => $faker->sentence(),
                    'author_id' => $faker->numberBetween(1, 10),
                    'genre_id' => $faker->numberBetween(1, 8),
                    'school_lecture' => $faker->boolean() ? 'true' : 'false',
                    'isnew' => $faker->boolean() ? 'true' : 'false',
                    'language' => $faker->randomElement(['polski', 'polski', 'angielski', 'polski', 'polski', 'niemiecki', 'polski', 'polski']),
                    'score' => $faker->randomFloat(2, 6, 657),
                    'publisher' => $faker->company(),
                    'year_of_publish' => $faker->year(),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];
        }


        DB::table('books')->insert($books);
    }
}
