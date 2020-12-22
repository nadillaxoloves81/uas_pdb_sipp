<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nagari;

class NagariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nagari::factory()->count(15)->create();
    }
}
