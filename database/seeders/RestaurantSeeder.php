<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            'id'=>'1',
            'name' => 'Mcdonalds',
            'description' => 'Fast Food Restaurant'
        ]);
          DB::table('restaurants')->insert([
            'id'=>'2',
            'name' => 'KFC',
            'description' => 'Fried Chicken Restaurant'
        ]);
            DB::table('restaurants')->insert([
            'id'=>'3',
            'name' => 'Papa Johns',
            'description' => 'Pizza Restaurant'
        ]);
    }
}
