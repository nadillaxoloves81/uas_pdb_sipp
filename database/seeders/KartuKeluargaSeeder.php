<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KartuKeluarga;

class KartuKeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KartuKeluarga::factory()->count(20)->create();
    }
}
