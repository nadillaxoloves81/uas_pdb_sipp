<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jorong;

class JorongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        Jorong::factory()->count(30)->create();
    }
}
