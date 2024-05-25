<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MealTimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meal_times')->insert([
            ['name' => 'Sarapan'],
            ['name' => 'Makan Siang'],
            ['name' => 'Makan Malam'],
        ]);
    }
}
