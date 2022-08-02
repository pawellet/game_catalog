<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->truncate();

        $genres = [


            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name' => 'sci-fi'
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name' => 'novel'
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name' => 'biography'
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name' => 'science'
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name' => 'historic'
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name' => 'travel'
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name' => 'criminal'
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name' => 'self-improvement'
            ]


        ];

        DB::table('genres')->insert($genres);
    }
}
