<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPerjalananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_perjalanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pegawai');
            $table->foreignId('id_jabatan');
            $table->foreignId('id_instansi');
            $table->foreignId('id_anggaran');
            $table->foreignId('id_spt');
            $table->foreignId('id_bendahara');
            $table->foreignId('id_tujuan');
            $table->string('no_spt', 100);
            $table->string('tanggal_spt', 100);
            $table->text('keperluan');
            $table->string('tanggal_berangkat', 100);
            $table->string('tanggal_kembali', 100);
            $table->string('kendaraan', 100);
            $table->string('lama_perjalanan', 100);
            $table->text('hadir_dlm_pertemuan');
            $table->text('petunjuk');
            $table->text('masalah');
            $table->text('saran');
            $table->text('lain_lain');
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
        Schema::dropIfExists('data_perjalanan');
    }
}
