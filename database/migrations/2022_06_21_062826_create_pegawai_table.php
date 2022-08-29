<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pegawai', 500);
            $table->string('nip', 100)->nullable();
            $table->string('uh', 100)->nullable();
            $table->string('um', 100)->nullable();
            $table->string('ut', 100)->nullable();
            $table->string('tingkat_biaya', 100)->nullable();
            $table->foreignId('id_jabatan');
            $table->foreignId('id_pangkat')->nullable();
            $table->foreignId('id_instansi');
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
        Schema::dropIfExists('pegawai');
    }
}
