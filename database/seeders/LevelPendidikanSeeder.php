<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LevelPendidikan;

class LevelPendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LevelPendidikan::create([
            'nama' => 'Tidak Sekolah',
        ]);

        LevelPendidikan::create([
            'nama' => 'SD',
        ]);

        LevelPendidikan::create([
            'nama' => 'SMP/SLTP',
        ]);

        LevelPendidikan::create([
            'nama' => 'SMA/SLTA',
        ]);

        LevelPendidikan::create([
            'nama' => 'Perguruan Tinggi',
        ]);
    }
}
