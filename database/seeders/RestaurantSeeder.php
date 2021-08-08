<?php

namespace database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            'id' => '1',
            'name' => 'Mcdonalds',
            'description' => 'Fast Food Restaurant'
        ]);
        DB::table('restaurants')->insert([
            'id' => '2',
            'name' => 'KFC',
            'description' => 'Fried Chicken Restaurant'
        ]);
        DB::table('restaurants')->insert([
            'id' => '3',
            'name' => 'Papa Johns',
            'description' => 'Pizza Restaurant'
        ]);
    }
}
