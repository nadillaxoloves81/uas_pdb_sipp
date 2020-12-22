<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $faker = \Faker\Factory::create('id_ID');
        
        $this->call(KewarganegaraanSeeder::class);
        $this->call(NagariSeeder::class);
        $this->call(LevelPendidikanSeeder::class);
        $this->call(PekerjaanSeeder::class);
        $this->call(JorongSeeder::class);
        $this->call(KartuKeluargaSeeder::class);
        $this->call(PendudukSeeder::class);
    }
}
