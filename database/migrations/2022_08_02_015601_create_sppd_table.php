<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSppdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sppd', function (Blueprint $table) {
            $table->id();
            $table->string('no_spt', 500);
            $table->date('tgl_spt');
            $table->foreignId('id_tujuan');
            $table->text('keperluan');
            $table->date('tgl_berangkat');
            $table->date('tgl_kembali');
            $table->string('kendaraan');
            $table->string('lama_perjalanan');
            $table->foreignId('id_pegawai');
            $table->text('hadir')->nullable();
            $table->text('petunjuk')->nullable();
            $table->text('temuan')->nullable();
            $table->text('saran')->nullable();
            $table->text('lain_lain')->nullable();
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
        Schema::dropIfExists('sppd');
    }
}
