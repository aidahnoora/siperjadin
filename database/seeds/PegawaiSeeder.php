<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawai')->insert([
            [
                'nama_pegawai' => 'Azzah',
                'nip' => '11111',
                'uh' => '0',
                'um' => '0',
                'ut' => '0',
                'tingkat_biaya' => '0',
                'jabatan_id' => '1',
                'pangkat_id' => '2',
                'instansi_id' => '1'
            ],
        ]);
    }
}
