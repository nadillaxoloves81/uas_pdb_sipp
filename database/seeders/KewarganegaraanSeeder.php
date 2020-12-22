<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kewarganegaraan;  

class KewarganegaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kewarganegaraan::factory()->count(15)->create();
    }
}
