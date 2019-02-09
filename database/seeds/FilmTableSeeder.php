<?php

use Illuminate\Database\Seeder;

class FilmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('films')->insert([
            'name' => str_random(10),
            'description' => str_random(10),
            'realeseDate' => str_random(10),
            'rating' => str_random(10),
            'ticketPrice' => str_random(10),
            'country' => str_random(10),
            'genre' => str_random(10),
            'image' => str_random(10),
            'description' => str_random(),            
        ]);
          DB::table('films')->insert([
            'name' => str_random(10),
            'description' => str_random(10),
            'realeseDate' => str_random(10),
            'rating' => str_random(10),
            'ticketPrice' => str_random(10),
            'country' => str_random(10),
            'genre' => str_random(10),
            'image' => str_random(10),
            'description' => str_random(),            
        ]);
          DB::table('films')->insert([
            'name' => str_random(10),
            'description' => str_random(10),
            'realeseDate' => str_random(10),
            'rating' => str_random(10),
            'ticketPrice' => str_random(10),
            'country' => str_random(10),
            'genre' => str_random(10),
            'image' => str_random(10),
            'description' => str_random(),            
        ]);
    }
}
