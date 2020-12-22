<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendudukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kartu_keluarga_id')->constrained('kartu_keluarga')->onDelete('cascade');
            $table->string('nama', 100);
            $table->string('nik', 16);
            $table->string('tempat_lahir', 100);
            $table->date('tanggal_lahir');
            $table->string('agama', 50);
            $table->string('jenis_kelamin', 50);
            $table->foreignId('level_pendidikan_id')->constrained('level_pendidikan')->onDelete('cascade');
            $table->foreignId('pekerjaan_id')->constrained('pekerjaan')->onDelete('cascade');
            $table->string('status_pernikahan', 50);
            $table->string('status_keluarga', 50);
            $table->foreignId('kewarganegaraan_id')->constrained('kewarganegaraan')->onDelete('cascade');
            $table->string('ayah', 100);
            $table->string('ibu', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penduduk');
    }
}
