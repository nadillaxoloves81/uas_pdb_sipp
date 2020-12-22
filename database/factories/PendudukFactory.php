<?php

namespace Database\Factories;

use App\Models\Penduduk;
use App\Models\KartuKeluarga;
use App\Models\LevelPendidikan;
use App\Models\Pekerjaan;
use App\Models\Kewarganegaraan;

use Illuminate\Database\Eloquent\Factories\Factory;

class PendudukFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Penduduk::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $agama = ["Islam", "Protestan", "Katolik", "Hindu", "Buddha", "Konghucu"];
        $jenis_kelamin = ["Laki-Laki", "Perempuan"]; 
        $status_pernikahan = ["Kawin", "Belum Kawin", "Jomblo"];
        $status_keluarga = ["Kepala Keluarga", "Istri", "Anak"];

        return [
            'kartu_keluarga_id' => $this->faker->numberBetween(1, KartuKeluarga::count()),
            'nama' => $this->faker->firstName." ".$this->faker->lastName,
            'nik' => $this->faker->nik(),
            'tempat_lahir' => $this->faker->city,
            'tanggal_lahir' => $this->faker->dateTimeBetween('-80 years', '-17 years'),
            'agama' => $this->faker->randomElement($agama),
            'jenis_kelamin' => $this->faker->randomElement($jenis_kelamin),
            'level_pendidikan_id' => $this->faker->numberBetween(1, LevelPendidikan::count()),
            'pekerjaan_id' => $this->faker->numberBetween(1, Pekerjaan::count()),
            'status_pernikahan' => $this->faker->randomElement($status_pernikahan),
            'status_keluarga' => $this->faker->randomElement($status_keluarga),
            'kewarganegaraan_id' => $this->faker->numberBetween(1, Kewarganegaraan::count()),
            'ayah' => $this->faker->firstNameMale." ".$this->faker->lastNameMale,
            'ibu' => $this->faker->firstNameFemale." ".$this->faker->lastNameFemale,
        ];
    }
}
