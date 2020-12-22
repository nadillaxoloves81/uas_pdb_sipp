<?php

namespace Database\Factories;

use App\Models\Pekerjaan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PekerjaanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pekerjaan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $pekerjaan = ["Aktor", "Apoteker", "Bidan", "Buruh", "Dokter", "Dokter Hewan", "Dosen", "Fotografer", "Guru", "Jaksa", "Jurnalis", "Ilustrator", "Karyawan", "Kasir", "Koki", "Manajer", "Montir", "Masinis", "Model", "Nelayan", "Novelis", "Notaris", "Opeator", "Pedagang", "PNS", "Altlet", "Penyanyi", "Polisi", "Peternak", "Pilot", "Psikiater", "Presiden", "Resepsionis", "Satpam", "TNI", "Petani", "Wartawan", "Wiraswasta", "Ibu Rumah Tangga", "Pelajar/Mahasiswa"];

        return [
            'nama' => $this->faker->unique()->randomElement($pekerjaan),
        ];
    }
}
