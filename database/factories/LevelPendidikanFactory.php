<?php

namespace Database\Factories;

use App\Models\LevelPendidikan;
use Illuminate\Database\Eloquent\Factories\Factory;

class LevelPendidikanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LevelPendidikan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $daftar_level_pendidikan = ["Tidak Sekolah", "SD", "SMP/SLTP", "SMA/SLTA", "Pendidikan Tinggi"];

        return [
            'nama' => $this->faker->unique()->randomElement($daftar_level_pendidikan),
        ];
    }
}
