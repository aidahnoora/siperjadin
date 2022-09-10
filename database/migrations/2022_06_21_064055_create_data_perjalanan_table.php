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
            $table->foreignId('pegawai_id');
            $table->foreignId('jabatan_id');
            $table->foreignId('instansi_id');
            $table->foreignId('anggaran_id');
            $table->foreignId('spt_id');
            $table->foreignId('bendahara_id');
            $table->foreignId('tujuan_id');
            $table->string('no_spt', 100);
            $table->string('tanggal_spt', 100);
            $table->text('keperluan');
            $table->string('tanggal_berangkat', 100);
            $table->string('tanggal_kembali', 100);
            $table->string('kendaraan', 100);
            $table->string('lama_perjalanan', 100);
            $table->text('hadir');
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
