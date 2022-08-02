<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as faker;

class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->truncate();

        $faker = faker::create();

        $authors = [

            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'first_name' => 'Henryk',
                'last_name' => 'Sienkiewicz',
                'nationality' => 'polska',
                'info' => $faker->sentence(10)
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'first_name' => 'Olga',
                'last_name' => 'Tokarczuk',
                'nationality' => 'polska',
                'info' => $faker->sentence(10)
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'first_name' => 'Bolesław',
                'last_name' => 'Prus',
                'nationality' => 'polska',
                'info' => $faker->sentence(10)
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'first_name' => 'Remigiusz',
                'last_name' => 'Mróz',
                'nationality' => 'polska',
                'info' => $faker->sentence(10)
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'first_name' => 'Dan',
                'last_name' => 'Brown',
                'nationality' => 'amerykańska',
                'info' => $faker->sentence(10)
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'first_name' => 'Agatha',
                'last_name' => 'Christie',
                'nationality' => 'brytyjska',
                'info' => $faker->sentence(10)
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'first_name' => 'Johan Wolfgang',
                'last_name' => 'Goethe',
                'nationality' => 'niemiecka',
                'info' => $faker->sentence(10)
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'first_name' => 'Katarzyna',
                'last_name' => 'Bonda',
                'nationality' => 'polska',
                'info' => $faker->sentence(10)
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'first_name' => 'Wojciech',
                'last_name' => 'Cejrowski',
                'nationality' => 'polska',
                'info' => $faker->sentence(10)
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'first_name' => 'Władysław',
                'last_name' => 'Reymont',
                'nationality' => 'polska',
                'info' => $faker->sentence(10)
            ]
        ];

        DB::table('authors')->insert($authors);
    }
}
